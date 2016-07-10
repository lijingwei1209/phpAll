<?php
include ('header.php');
?>


<section>
    <div class="">
        <div class="carousel slide" id="myCarousel">
            <!-- 轮播（Carousel）指标 -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- 轮播（Carousel）项目 -->
            <div class="carousel-inner">
                <div class="item active"><img alt="" src="/tengyu/public/images/banner1.jpg" />

                </div>

                <div class="item"><img alt="" src="/tengyu/public/images/banner2.jpg" />

                </div>

                <div class="item"><img alt="" src="/tengyu/public/images/banner3.jpg" />

                </div>
            </div>
            <!-- 轮播（Carousel）导航 -->
            <a class="left carousel-control" data-slide="prev" href="#myCarousel"></a>
            <a class="right carousel-control" data-slide="next" href="#myCarousel"></a>
        </div>
    </div>
</section>



<script>
    $('#myCarousel').carousel({
        interval: 3000
    })
</script>

<?php
include ('footer.php');
?>


