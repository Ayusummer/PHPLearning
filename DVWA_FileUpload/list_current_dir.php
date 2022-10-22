<?php
// 列出当前目录下的文件
$files = scandir('.');
// 遍历文件
foreach ($files as $file) {
    // 如果文件名不是 . 或者 .. 则输出
    if ($file != '.' && $file != '..') {
        echo "{$file}\n";
    }
}
?>