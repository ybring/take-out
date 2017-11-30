<?php
namespace Home\Controller;
use QrCodePlus\Exception\InvalidException;
use QrCodePlus\QrCodePlus;
use Think\Controller;


class HomeController extends Controller {
    public function index(){
        //容错 4 等级
//       = 'low';= 'medium';'quartile';'high';
        Vendor('vendor.autoload');
        $qrcodeplus = new QrCodePlus();
        $qrcodeplus->setText('http://ybring.github.io');
        $qrcodeplus->setSize(400)->setLabel('沙漏外卖')->setMargin(10)->setEncoding('UTF-8')
            ->setErrorCorrectionLevel(medium)->setLogoPath('./public/upload/2014912.jpg')
            ->setLogoWidth(100);
        try
        {
            // 设置颜色， 四种或者九种或者十六种

            $param =[
                '#EE3D11',
                '#0000AA',
                '#008B00','#EE0000',
            ];
           // dump(array_unique($param));exit();
            // If you want to generate, the picture is the background
            // $param = imagecreatefrompng('your.png');

            // build function`s parameter 2 sets transparency
            $qrcodeplus->build($param);

            

        }
        catch (InvalidException $e)
        {
            var_dump($e->getMessage());

            exit();
        }

        }
}