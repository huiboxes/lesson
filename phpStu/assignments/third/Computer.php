<?php


class Computer{
    private $plate; // 品牌
    private $memorySize; // 内存大小
    private $size;  // 硬盘大小
    private $mhz;   // CPU频率
    private $price; // 出售价格
    private $display; // 显示器


    public function __construct($plate, $memorySize, $size, $mhz, $price, $display)
    {
        $this->plate = $plate;
        $this->memorySize = $memorySize;
        $this->size = $size;
        $this->mhz = $mhz;
        $this->price = $price;
        $this->display = $display;
    }

    public function __destruct ()
    {
        echo '<br/>' . '销毁了' . $this->plate;
    }
    public function infos()
    {
        echo '<br/>' . '品牌：' . $this->plate . '<br/>';
        echo '内存大小(G)：' .$this->memorySize . '<br/>';
        echo '硬盘大小(T)：' .$this->size . '<br/>';
        echo 'CPU主频(Mhz)：' .$this->mhz . '<br/>';
        echo '单价(元)：' .$this->price . '<br/>';
        echo '显示器大小(英寸)：' .$this->display . '<br/>';
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

}

