<?php
    include_once('vendor/autoload.php');
    use Overtrue\Pinyin\Pinyin;

    $pinyin = Pinyin::sentence('你好，世界');

    // var_dump($pinyin);

    
    echo Pinyin::permalink('多音字的返回值为关联数组的集合，默认返回去重后的所有读音：', '.'); 
    echo "<hr/>";
    echo Pinyin::sentence('多音字的返回值为关联数组的集合，默认返回去重后的所有读音：'); 
    echo "<hr/>";
    echo Pinyin::permalink('杨驰', '.'); 
    echo "<hr/>";
    echo Pinyin::permalink('带着希望去旅行', '-'); // dai.zhe.xi.wang.qu.lyu.xing

?>