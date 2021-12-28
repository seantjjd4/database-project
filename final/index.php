<?php
	if (empty($_COOKIE["id"]))
    {
      setcookie("id", "guest");	
    }
    else
    {
        $id = $_COOKIE["id"];
    }
    $id = $_COOKIE["id"];	
    if (empty($_COOKIE["num_list"]) || empty($_COOKIE["name_list"]) || empty($_COOKIE["price_list"]) || empty($_COOKIE["quantity_list"]))
    {
      setcookie("num_list", "");
      setcookie("name_list", "");
      setcookie("price_list", "");
      setcookie("quantity_list", "");
    }
    else
    {	
        $quantity= $_COOKIE["quantity_list"];
        $num = $_COOKIE["num_list"];
        $name= $_COOKIE["name_list"];
        $price= $_COOKIE["price_list"];	
        if(empty($_COOKIE["num_list"])){
            $namelen=0;
        }
        else{
            $namearray = explode(",",$name);
            $namelen=count($namearray);
        }
       
        $pricearray = explode(",",$price);	
        $sum=0;
        for($i=0;$i<$namelen;$i++)
        {
            $sum=$sum+$pricearray[$i];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOLO商城</title>
    <link rel="shortcut icon" type="image/png" href="./images/logo.png"/>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/color.css">
    <link rel="stylesheet" href="./css/frame.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <!-- header/start -->
    <header class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <a class="navbar-brand" href="index.php">
                <img id="logo1" src="./images/logo.png" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">首頁</a>
                    </li>
                    <li class="nav-item">
                        <input name="search_product" type="text" class="form-control" id="search_product" placeholder="搜尋...">
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="about.php">HOLOLIVE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shop.php">HOLO商城</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="job.php">人物介紹</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://schedule.hololive.tv/">直播時間與連結</a>
                    </li> -->
                </ul>
                
                <div class="ml-auto">
                    <?php
                            if ($_COOKIE["id"]=="guest")
                            {
                              echo"<a href='login.html' class='btn btn-outline-info text-info my-2 my-sm-0'>登入</a>";	
                            }
                            else
                            {
                                echo"$id 你好";
                                echo"<a href='logout.php' class='btn btn-outline-danger text-danger my-2 my-sm-0'>登出</a>";
                            }
                    ?>
                    
                    <a href="cart.php" class="btn btn-outline-info text-info my-2 my-sm-0">購物車</a>
                    <a href="checkout.php" class="btn btn-outline-info text-info my-2 my-sm-0">結帳</a>
                </div>
            </div>
        </nav>
    </header>
    <!-- header/end -->
    <!-- 廣告/start -->
    <section class="container-fluid">
        <div class="row">
            <div id="carouselBanner" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselBanner" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselBanner" data-slide-to="1"></li>
                    <li data-target="#carouselBanner" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <!-- <img class="d-block w-100" src="./images/slider_4.png" alt="First slide"> -->
                        <img class="d-block w-100" src="./images/carousel/1.jpg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block text-dark">
                            <h3></h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <!-- <img class="d-block w-100" src="./images/slider_2.png" alt="Second slide"> -->
                        <img class="d-block w-100" src="./images/carousel/2.jpg" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h3></h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <!-- <img class="d-block w-100" src="./images/slider_3.png" alt="Third slide"> -->
                        <img class="d-block w-100" src="./images/carousel/3.png" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block text-dark">
                            <h3></h3>
                            <p></p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselBanner" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselBanner" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <!-- 廣告/end -->
    <!-- 產品分類/start -->
    <section class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h2>產品分類</h2>
            </div>
            <div class="col-12">
                <div class="card-deck mt-2 product-categories">
                    <a href="tagset.html" class="card">
                        <!-- <img class="card-img-top" src="./images/slider_1.png" alt="套組"> -->
                        <img class="card-img-top" src="./images/product_class/3.jpg" alt="食物">
                        <div class="card-body bg-dark">
                            <h4 class="card-title text-white text-center">食品/點心類</h4>
                        </div>
                    </a>
                    <a href="taggarment.html" class="card">
                        <!-- <img class="card-img-top" src="./images/service_2.png" alt="卡套"> -->
                        <img class="card-img-top" src="./images/product_class/2.jpg" alt="飲料">
                        <div class="card-body bg-dark">
                            <h4 class="card-title text-white text-center">茶葉/飲品類</h4>
                        </div>
                    </a>
                    <a href="tagbrochore.html" class="card">
                        <!-- <img class="card-img-top" src="./images/service_3.png" alt="衣服"> -->
                        <img class="card-img-top" src="./images/product_class/4.jpg" alt="裝飾">
                        <div class="card-body bg-dark">
                            <h4 class="card-title text-white text-center">裝飾/飾品類</h4>
                        </div>
                    </a>
                    <a href="tagothers.html" class="card">
                        <!-- <img class="card-img-top" src="./images/service_4.png" alt="滑鼠墊"> -->
                        <img class="card-img-top" src="./images/product_class/1.jpg" alt="水果">
                        <div class="card-body bg-dark">
                            <h4 class="card-title text-white text-center">水果類</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- 產品分類/end -->
    <!-- 熱門產品/start -->
    <section class="container mt-5">
        <div class="row">
            <div class="col-12 mb-2">
                <h2>熱門產品</h2>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div href="#" class="card mb-3">
                    <!-- <img class="card-img-top" src="./images/product/eva_9.png" alt="LTG-BY-0001"> -->
                    <img class="card-img-top" src="./images/product2/9.jpg" alt="LTG-BY-0001">
                    <div class="card-body">
                        <h4 class="card-title">台中太陽堂 太陽餅</h4>
                        <p class="card-text">台中太陽堂傳統太陽餅 30入</p>
                        <h5 class="card-text text-danger">
                            NT$&nbsp;750
                        </h5>
                        <a href="z9.html" class="btn btn-outline-secondary btn-block">查看商品</a>
                        <form method="post" name="myForm">
                            <input class="btn btn-outline-primary btn-block mt-2" type='submit' value='加入購物車'>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div href="#" class="card mb-3">
                    <img class="card-img-top" src="./images/product2/5.jpg" alt="TG-B-0001">
                    <div class="card-body">
                        <h4 class="card-title">琅茶 Wolf Tea 窗花茶香・倆入禮盒</h4>
                        <p class="card-text">【  阿里山  】野香烏龍 50g 【 坪林 】桂香包種 40g </p>
                        <h5 class="card-text text-danger">NT$&nbsp;1280</h5>
                        <a href="z5.html" class="btn btn-outline-secondary btn-block">查看商品</a>
                        <a href="cart.php" class="btn btn-outline-primary btn-block">加入購物車</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div href="#" class="card mb-3">
                    <img class="card-img-top" src="./images/product2/7.jpg" alt="LTG-B-0001">
                    <div class="card-body">
                        <h4 class="card-title">梨山 水蜜桃禮盒(10粒裝)</h4>
                        <p class="card-text">水蜜桃禮盒(10粒裝)</p>
                        <h5 class="card-text text-danger">NT$850&nbsp;</h5>
                        <a href="z7.html" class="btn btn-outline-secondary btn-block">查看商品</a>
                        <a href="cart.php" class="btn btn-outline-primary btn-block">加入購物車</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div href="#" class="card mb-3">
                    <img class="card-img-top" src="./images/product2/10.jpg" alt="G-B-0001">
                    <div class="card-body">
                        <h4 class="card-title">原住民特色鑰匙圈</h4>
                        <p class="card-text">原住民特色鑰匙圈</p>
                        <h5 class="card-text text-danger">NT$&nbsp;140</h5>
                        <a href="z10.html" class="btn btn-outline-secondary btn-block">查看商品</a>
                        <a href="cart.php" class="btn btn-outline-primary btn-block">加入購物車</a>
                    </div>
                </div>
            </div>
            <!-- <div class="col-12 col-sm-6 col-md-3">
                <div href="#" class="card mb-3">
                    <img class="card-img-top" src="./images/product/eva_15.png" alt="G-B-0002">
                    <div class="card-body">
                        <h4 class="card-title">Hololive 赤井心 2020 誕生日紀念組</h4>
                        <p class="card-text">生日套組 赤井心 </p>
                        <h5 class="card-text text-danger">NT$&nbsp;3700</h5>
                        <a href="z15.html" class="btn btn-outline-secondary btn-block">查看商品</a>
                        <a href="cart.php" class="btn btn-outline-primary btn-block">加入購物車</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div href="#" class="card mb-3">
                    <img class="card-img-top" src="./images/product/eva_18.png" alt="TU-BY-0001">
                    <div class="card-body">
                        <h4 class="card-title">Hololive 天音かなた 週年紀念套組</h4>
                        <p class="card-text">週年紀念套組 天音かなた</p>
                        <h5 class="card-text text-danger">NT$&nbsp;5250</h5>
                        <a href="z18.html" class="btn btn-outline-secondary btn-block">查看商品</a>
                        <a href="cart.php" class="btn btn-outline-primary btn-block">加入購物車</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div href="#" class="card mb-3">
                    <img class="card-img-top" src="./images/product/eva_21.png" alt="MG-GO-0002">
                    <div class="card-body">
                        <h4 class="card-title">Hololive 湊阿庫婭 2020誕生日記念 全套組</h4>
                        <p class="card-text">生日套組 湊阿庫婭</p>
                        <h5 class="card-text text-danger">NT$&nbsp;4500</h5>
                        <a href="z21.html" class="btn btn-outline-secondary btn-block">查看商品</a>
                        <a href="cart.php" class="btn btn-outline-primary btn-block">加入購物車</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div href="#" class="card mb-3">
                    <img class="card-img-top" src="./images/product/eva_24.png" alt="LG-GP-0001">
                    <div class="card-body">
                        <h4 class="card-title">Hololive 角卷綿芽 生日聲音全套</h4>
                        <p class="card-text">生日套組 角卷綿芽</p>
                        <h5 class="card-text text-danger">NT$&nbsp;3560</h5>
                        <a href="z24.html" class="btn btn-outline-secondary btn-block">查看商品</a>
                        <a href="cart.php" class="btn btn-outline-primary btn-block">加入購物車</a>
                    </div>
                </div>
            </div> -->
        </div>
    </section>
    
    <!-- <section class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h2>介紹影片</h2>
            </div>
            <div class="col-12">
                <iframe class="iframe1"src="https://www.youtube.com/embed/mZ0sJQC8qkE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </section> -->

    <!-- <section class="container mt-5">
        <div class="col-12">
            <h2>官方網站</h2>
        </div>
    </section> -->

    <!-- <div class="row mt-5">
        <div class="col-1 col-md-2"></div>
        <div class="col-3">
           <a href="https://twitter.com/hololivetv"> <img class="c f75"src="images/tw2.png"></a>
        </div>
        <div class="col-3">
            <a href="https://www.youtube.com/channel/UCJFZiqLMntJufDCHc6bQixg"> <img class="c f75"src="images/yt2.png"></a>
        </div>
        <div class="col-3">
            <a href="https://www.hololive.tv/"> <img class="c f75"src="images/holologo.png"></a>
        </div>
        <div class="col-2 col-md-1"></div>
    </div> -->
    
    <section class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h2>本商城實體店面位置</h2>
            </div>
        </div>
    </section>

    <section class="container mt-5 mb-5">
        <div class="row">
            <div class="col-12">
                <div class="embed-responsive map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.7434143753303!2d121.53559291474707!3d25.042780283968188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a97d255598df%3A0x47ea748e8f3f53aa!2z5ZyL56uL6Ie65YyX56eR5oqA5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1611500887067!5m2!1szh-TW!2stw"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- google map/end -->
    <!-- 頁腳/start -->
    <footer class="bg-pekoradark">
        <div class="container pt-3 pb-3">
            <div class="row">
                <!-- 選單連結/start -->
                <div class="col-12 col-md-6 mb-3">
                    <ul class="footer-menu">
                        <li><a href="index.php">首頁</a></li>
                        <li><a href="#">客服中心</a></li>
                        <li><a href="#">常見問題</a></li>
                        <li><a href="#">隱私條款聲明</a></li>
                    </ul>
                </div>
                <!-- 選單連結/end -->
                <!-- 訂閱/start -->
                <!-- <div class="col-12 col-md-6 mb-3">
                    <h6 class="text-white">留下 E-mail，訂閱hololive，可搶先獲得最新的資訊喔！</h6>
                    <form action="addemail.php" method="post" name="myForm">
                        <input name="email" type="email" class="form-control mt-2 mb-2" placeholder="請輸入e-mail">
                        <button type="submit" class="btn btn-primary float-right send-btn">傳送</button>
                    </form>
                </div> -->
                <!-- 訂閱/end -->
                <!-- 版權所有/start -->
                <div class="col-12 mt-3">
                    <p class="text-white text-center">© Copyright 2021 NTUT </p>
                </div>
                <!-- 版權所有/end -->
            </div>
        </div>
    </footer>
    <!-- 頁腳/end -->
</body>
</html>