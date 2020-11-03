<?php


class Triangle
{
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function __destruct()
    {
        echo '<br>' . '销毁了一个三角形';
    }

    public function getArea()
    {
        $s = ($this->a + $this->b + $this->c)/2;
        $area = sqrt($s*($s-$this->a)*($s-$this->b)*($s-$this->c));
        return $area;
    }

    public function getPerimeter()
    {
        return $this->a + $this->b + $this->c;
    }
}

