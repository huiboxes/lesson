<?php
declare(strict_types = 1);


class Student
{
    private $id; // 学号 默认为离群值 -1
    private $name; // 姓名
    private $task; // 所学课程

    public function __construct(int $id = -1,string $name)
    {
        $this->id = $id;
        $this->name = $name;
        $this->task = [];
    }

    function __destruct(){}

    // 默认返回课程名称，传true返回课程详细信息
    public function getInfo(bool $more = false)
    {
        if (count($this->task)<3)
            die('该学生未完成选课');
        echo <<<EOF
        学号：{$this->id} &emsp;
        姓名：{$this->name} &emsp;
        EOF;
        $this->getTask($more?2:1);
    }

    // 2 表示返回详细信息 1表示返回课程名称
    public function getTask($amount = 1)
    {
        echo '正在学习：';
        if ($amount == 1)
        {
            foreach ($this->task as $value){
                $courseName = $value->getInfo()['课程名称'];
                echo $courseName . '、';
            }
        }else {
            foreach ($this->task as $value){
                foreach ($value->getInfo() as $key => $value){
                    echo <<<EOF
                        <br>{$key}：{$value} &emsp;
                    EOF;
                }
                echo '<hr>';
            }
        }
    }

    public function addCourse($arr)
    {
        $this->task = array_merge($this->task,$arr);
        if (count($this->task)<3)
            echo '<script>alert("每个学生至少学习3门课程")</script>';
    }
}