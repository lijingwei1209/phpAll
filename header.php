<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="baidu-site-verification" content="F2IvmbHPiv" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <meta name="Description" content="腾宇生物，河南腾宇生物科技有限公司">
    <meta name="keywords" content="腾宇生物，河南腾宇生物科技有限公司,实验科学仪器、各种实验耗材、分子生物学试剂、细胞学试剂、免疫学试剂、蛋白质组学试剂、生化试剂">
    <link href="/tengyu/public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/tengyu/public/css/reset.css" rel="stylesheet">
    <link href="/tengyu/public/css/tengyu.css" rel="stylesheet">
    <script type="text/javascript" src="/tengyu/public/js/jquery-2.2.2.min.js"></script>
    <script type="text/javascript" src="/tengyu/public/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="/tengyu/public/images/tengyu.ico" type="image/x-icon" />
    <title>河南腾宇生物科技有限公司</title>
</head>
<script type="text/javascript">
    var browser={
        versions:function(){
            var u = navigator.userAgent, app = navigator.appVersion;
            return {         //移动终端浏览器版本信息
                trident: u.indexOf('Trident') > -1, //IE内核
                presto: u.indexOf('Presto') > -1, //opera内核
                webKit: u.indexOf('AppleWebKit') > -1, //苹果、谷歌内核
                gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1, //火狐内核
                mobile: !!u.match(/AppleWebKit.*Mobile.*/), //是否为移动终端
                ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/), //ios终端
                android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1, //android终端或uc浏览器
                iPhone: u.indexOf('iPhone') > -1 , //是否为iPhone或者QQHD浏览器
                iPad: u.indexOf('iPad') > -1, //是否iPad
                webApp: u.indexOf('Safari') == -1 //是否web应该程序，没有头部与底部
            };
        }(),
        language:(navigator.browserLanguage || navigator.language).toLowerCase()
    };

    $(document).ready(function(){
        if(browser.versions.mobile){
            $(".container").css("width","95%");
            $(".logoImg").css({"width":30,"height":35,"margin-top":-5});
            $(".logoFont").css({"margin-top":-13});
            $(".lanrenzhijia_service").hide();
        }
    })

</script>


<body>

<nav class="navbar navbar-default navbar-fixed-top ">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#my-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">
                <img  src="/tengyu/public/images/logo.jpg"  class="logoImg">
                <div class="logoFont">河南腾宇生物科技</div>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="my-navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php">首页</a></li>
                <li><a href="product.php">公司产品</a></li>
                <li><a href="about.php">公司介绍</a></li>
                <li><a href="contact.php">联系我们</a></li>
            </ul>
        </div>
    </div>
</nav>