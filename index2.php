
<html>
<head>
    <title>图形计算（使用面向对象开发技术）</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
    <center>
        <h1>Area Calculator</h1>
        <a href="index2.php?action=rect">Rect</a>
        <a href="index2.php?action=triangle">Triangle</a>
        <a href="index2.php?action=circle">Circle</a>
        <hr>
    </center>


    <?php  //php代码部分
        error_reporting(E_ALL & ~E_NOTICE);//提示错误的等级
    // __autoload是php中的魔术方法，在用到类的时候自动调用
        function __autoload($className){
            //自动导入这个类
            include strtolower($className).".class.php";
        }
        //输出表单，form类中有魔术方法__toString，因此可以直接输出类的对象引用，就是输出对象返回的字符串
        echo new Form();

        if(isset($_POST["sub"])){
            //输出结果
            echo new Result();//直接输出对象的引用表示
        }

    ?>

</body>
</html>
