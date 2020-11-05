<?php

include "Course.php";
include "Student.php";


// 创建课程
$js = new Course(22,'JavaScript');
$java = new Course(33,'Java');
$net = new Course(66,'.NET');
$ruby = new Course(99,'Ruby');

// 创建学生
$hbox = new Student(19302103,'Hbox');
$tom = new Student(19302105,'Tom');
$andy = new Student(19302103,'Andy');

// 给学生添加课程
$hbox->addCourse([$js,$net,$ruby,$net]);
$tom->addCourse([$js,$net,$ruby,$net]);
$andy->addCourse([$js,$net]);

echo $hbox->getInfo(true);
echo $tom->getInfo() . '<hr>';
echo $andy->getInfo();