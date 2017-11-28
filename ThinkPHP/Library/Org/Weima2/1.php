<?php
namespace Org\Weima2

    require 'vendor/autoload.php';
    
    use QrCodePlus\Exception\InvalidException;
    use QrCodePlus\QrCodePlus;
    
    $qrcodeplus = new QrCodePlus();
    $qrcodeplus->setText('http://blog.shiguopeng.cn');
    $qrcodeplus->setSize(500);
    
    
    try
    {
        // 设置颜色， 四种或者九种或者十六种
        $param = [
            '#087',
            '#431',
            '#a2d',
            '#12d',
            '#098',
            '#182',
            '#039',
            '#20d',
            '#520',
        ];
        
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
