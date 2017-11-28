<?php

    namespace QrCodePlus\Factory;

    use QrCodePlus\Exception\InvalidException;

    class ImageStyle extends Base
    {
        private $dest_img;


        public function __construct($img_str, $hex_arr)
        {
            $this->init($img_str, $hex_arr);
        }

        /**
         * init image attribute
         * @param $img_str
         * @param $type
         * @param $hex_arr
         * @throws InvalidException
         */
        public function init($img_str, $img_handle)
        {
            // create img resource
            $this->img = imagecreatefromstring($img_str);

            if (!$this->img)
            {
                throw new InvalidException('incalid image string');
            }

            // image width
            $this->img_width = imagesx($this->img);
            // image height
            $this->img_height = imagesy($this->img);

            // create a image
            $this->dest_img = imagecreatetruecolor($this->img_width, $this->img_height);

            // copy and resize
            imagecopyresampled($this->dest_img, $img_handle, 0, 0, 0, 0, $this->img_width, $this->img_height, imagesx($img_handle), imagesy($img_handle));

        }

        /**
         * Build a 2D color code
         */
        public function build()
        {
            // loop img px
            for ($y = 0; $y < $this->img_width; ++ $y)
            {
                for ($x = 0; $x < $this->img_height; ++ $x)
                {
                    // is black change color
                    $color_index = imagecolorat($this->img, $x, $y);

                    // get color
                    $dest_index = imagecolorat($this->dest_img, $x, $y);
                    $c = imagecolorsforindex($this->dest_img, $dest_index);
                    $dest_color = imagecolorallocate($this->img, $c['red'], $c['green'], $c['blue']);

                    if ($color_index === 0)
                    {
                        // draw
                        imagesetpixel($this->img, $x , $y, $dest_color);
                    }

                }
            }

            // Call the native output image
            header('Content-Type: image/png');
            imagepng($this->img);
        }
    }