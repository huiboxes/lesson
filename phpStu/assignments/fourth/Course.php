<?php

declare(strict_types = 1);

class Course
{
    private $id; // 课程代码 默认为离群值 -1
    private $name; // 课程名称
    private $type; // 课程类型 0为理论 1为实践
    private $value; // 课程学分

    public function __construct(int $id,string $name,int $type = 1,int $value = 100)
    {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->value = $value;
    }

    function __destruct(){}

    public function getInfo()
    {
//        echo <<<EOF
//        正在学习：
//        课程代码：{$this->id} &emsp;
//        课程名称：{$this->name} &emsp;
//        课程类型：{$this->type} &emsp;
//        课程学分：{$this->value} &emsp;
//        EOF;
        return [
            '课程代码'=>$this->id,
            '课程名称'=>$this->name,
            '课程类型'=>$this->type,
            '课程学分'=>$this->value
        ];
    }
}