<?php
	if (empty($_COOKIE["id"]))
    {
        setcookie("id", "guest");
        setcookie("NickName", "guest");
        $id = "guest";
        $NickName = "guest";
    }
    else
    {
        $id = $_COOKIE["id"];
        $NickName = $_COOKIE["NickName"];
    }
    
    include_once("shopcart.inc.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {  
            if (isset($_POST['add_shopping_cart']) && isset($_POST['currentProductID']))
            {
                if($_POST['add_shopping_cart'] == '加入購物車')
                {
                    $productId = $_POST['currentProductID'];
                    add_shopping_cart($productId, 1);
                }
            }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>台灣名產商城</title>
    <link rel="shortcut icon" type="image/png" href="./images/logo.png"/>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/color.css">
    <link rel="stylesheet" href="./css/frame.css">
    <link rel="stylesheet" href="./css/button1.css">

    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <!-- header/start -->
    <header class="container">
    <?php
    if ($id != "guest")
    {
        echo"<a href='main.php'class='btn  text-info my-2 my-sm-0'  >$NickName 您好</a> ";
    };
    ?>
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="index.php">
                <img id="logo1" src="./images/logo.png" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                
            <?php
                    include_once("web_function.php");
                    create_top_left();
                    ?>
                
                <div class="ml-auto">
                   
                <?php include_once("web_function.php");
                    create_title($id,$NickName);
                
                ?>
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
                        <img class="d-block w-100" src="./images/carousel/1.jpg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block text-dark">
                            <h3></h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="./images/carousel/2.jpg" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h3></h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="carousel-item">
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
    <section class="container mt-5">
            <div class="center">
                <div class="card-deck mt-1 product-categories" style="height:100px;">
                    <a href="coupon.php" class="card" style="height:10px;">
                        <div class="card-body bg-success">
                            <h4 class="card-title text-white text-center" >點我領取優惠券</h4>
                        </div>
                    </a>              
                </div>
            </div>
    </section>
    <!-- 產品分類/start -->
    <section class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h2>產品分類</h2>
            </div>
            <div class="col-12">
                <div class="card-deck mt-2 product-categories">
                    <a href="food_dessert.php" class="card">
                        <img class="card-img-top" src="./images/product_class/3.jpg" alt="食物">
                        <div class="card-body bg-dark">
                            <h4 class="card-title text-white text-center">食品/點心類</h4>
                        </div>
                    </a>
                    <a href="tea_drink.php" class="card">
                        
                        <img class="card-img-top" src="./images/product_class/2.jpg" alt="飲料">
                        <div class="card-body bg-dark">
                            <h4 class="card-title text-white text-center">茶葉/飲品類</h4>
                        </div>
                    </a>
                    <a href="acc.php" class="card">
                        <img class="card-img-top" src="./images/product_class/4.jpg" alt="裝飾">
                        <div class="card-body bg-dark">
                            <h4 class="card-title text-white text-center">裝飾/飾品類</h4>
                        </div>
                    </a>
                    <a href="fruit.php" class="card">
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

            <?php
            include_once("function.php");
            $data = createProductBox('1');
            ?>

            <?php
            include_once("function.php");
            $data = createProductBox('2');
            ?>

            <?php
            include_once("function.php");
            $data = createProductBox('3');
            ?>

            <?php
            include_once("function.php");
            $data = createProductBox('4');
            ?>
            
        </div>
    </section>

    <!-- 領取優惠券/start -->

    <section class="container mt-5">
            <div class="center" style ="height:100px">
                <div class="card-deck mt-1 product-categories" style="height:100px;">
                    <a href="shop.php" class="card" style="height:10px;">
                        <div class="card-body bg-primary " >
                            <h4 valign = "center"class="card-title text-white text-wrap text-center">開始買囉</h4>
                        </div>
                    </a>              
                </div>
            </div>
            
    </section>
    <!-- 領取優惠券/end -->
    
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