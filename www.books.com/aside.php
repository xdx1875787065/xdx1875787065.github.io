<?php
//定义二维数组
$arr=array(
    array('PHP开发','web前端进阶','PHP+H5全栈开发','1'),
    array('移动开发','混合式App开发','微信小程序开发','2'),
    array('游戏开发','网页游戏开发基础','H5图形编程','3')
);
?>
<h1>PHP课程信息</h1>
<u1>
    <?php
    foreach($arr as $values){
        foreach ($values as $k => $v){
            echo $k>0?"<li>$v</li>":"<h2>$v</h2>";
        }
    }
    ?>
</u1>