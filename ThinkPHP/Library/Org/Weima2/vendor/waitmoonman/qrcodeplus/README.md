# WaitMoonMan/QrCodePlus

## 基于 [QR Code](https://github.com/endroid/QrCode) 的一个二维码包


## Feature
 - 基于QR Code, 保留原有方法
 - 可以生成四色， 九色， 十六色， 背景图二维码
 - 后续功能增加中...
 
 ![四色二维码](http://or2pofbfh.bkt.clouddn.com/composer/four.png)
 ![九色二维码](http://or2pofbfh.bkt.clouddn.com/composer/nine.png)
 ![图片二维码](http://or2pofbfh.bkt.clouddn.com/composer/image.png)


## Requirement

1. PHP >= 5.4
2. **[composer](https://getcomposer.org/)**



## Installation

```shell
composer require waitmoonman/qrcodeplus
```

## Usage

基本使用: （九色）

```php
<?php
    
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
    
        $qrcodeplus->build($param);
    
    }
    catch (InvalidException $e)
    {
        var_dump($e->getMessage());
    
        exit();
    }
```





## Documentation

## License

MIT
