<?php

    namespace QrCodePlus;


    use QrCodePlus\Exception\InvalidException;

    class Factory
    {
        //设置的个数 5*5 =25   这里 是限制 二维码 分割的 个数  这里有的 传过来的颜色 对应 才能 显示
        private static $config = [
            0  => 'ImageStyle',
            1  => 'MultipleColor',
            4  => 'MultipleColor',
            9  => 'MultipleColor',
            16 => 'MultipleColor',
            25 => 'MultipleColor',
            36 => 'MultipleColor',
            49 => 'MultipleColor',
            64 => 'MultipleColor',
            81 => 'MultipleColor',
            100 => 'MultipleColor',
        ];
        // 100 个够用了 不用 循环再次 弄到 1000

        /**
         * get class
         * @param $type
         * @return mixed
         * @throws InvalidException
         */
        public static function getInstance($img_str, $param)
        {
            $type = null;
            if (is_resource($param))
            {
                $type = 0;
            }
            elseif (is_array($param))
            {
                $type = count($param);
            }
            else
            {
                throw new InvalidException('param invalid');
            }


            // is exists option
            if (!key_exists($type, self::$config))
            {
                throw new InvalidException('This type does not exist');
            }

            // Instantiation of class
            $class = self::$config[$type];
            // namespace
            $class = 'QrCodePlus\\Factory\\' . $class;

            return new $class($img_str, $param);
        }
    }