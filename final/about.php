<?php
	if (empty($_COOKIE["id"]))
    {
      setcookie("id", "guest");	
    }
    else
    {
        $id = $_COOKIE["id"];
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
    <link rel="stylesheet" href="./css/about.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@1,700&display=swap" rel="stylesheet">
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
                <img src="./images/logo.png" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">首頁</a>
                    </li>
                    <li class="nav-item active">
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
                    </li>
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
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-0 col-md-2"></div>
                <div class="col-12 col-md-8">
                    <img  id="holopic" src="images/hololivebkg.jpg">
                </div>
                <div class="col-0 col-md-2"></div>
            </div>
            <div class="row">
                <div class="col-0 col-md-2"></div>
                <div class="col-12 col-md-8">
                    <p id="aboutus">ABOUT US</p>
                </div>
                <div class="col-0 col-md-2"></div>
            </div>
            <div class="row c">
                <div class="col-0 col-md-2"></div>
                <div class="col-12 col-md-8">
                    
                    <img id="holologo" src="images/hololivelogo.png">
                    
                </div>
                <div class="col-0 col-md-2"></div>
            </div>
            <div class="row">
                <div class="col-0 col-md-2"></div>
                <div class="col-12 col-md-8">
                    <p id="introduction">hololive production（日語：ホロライブプロダクション Hororaibu Purodakushon）是日本科技公司COVER株式會社旗下的經紀公司品牌，以經營虛擬YouTuber為其主要業務，除了在日本外，也在其他地區擁有並經營VTuber。hololive production起初稱為hololive，名稱取自於同公司於2017年12月21日發行的同名行動應用程式，後來於2019年12月2日將hololive與其餘的兩個品牌holostars和INNK Music合併，並統一使用現名。</p>
                </div>
                <div class="col-0 col-md-2"></div>
            </div>
            <div class="row">
                <div class="col-0 col-md-2"></div>
                <div class="col-12 col-md-8">
                    <p id="aboutus">CEO</p>
                </div>
                <div class="col-0 col-md-2"></div>
            </div>
            <div class="row c">
                <div class="col-0 col-md-2"></div>
                <div class="col-12 col-md-8">
                    <img id="yagoo" class="c" src="images/yagoo.jpg">
                </div>
                <div class="col-0 col-md-2"></div>
            </div>
            <div class="row">
                <div class="col-0 col-md-2"></div>
                <div class="col-12 col-md-8">
                    <p id="introduction">谷鄉元昭（谷郷（たにごう）元昭（もとあき），Tanigou Motoaki）是日本COVER株式會社的董事長兼總經理（代表取締役社長）、VTuber組織Hololive Production的管理者。</p>
                </div>
                <div class="col-0 col-md-2"></div>
            </div>
            <div class="row">
                <div class="col-0 col-md-2"></div>
                <div class="col-12 col-md-8">
                    <p id="aboutus">ACTIVITY</p>
                </div>
                <div class="col-0 col-md-2"></div>
            </div>
            <div class="row c">
                <div class="col-0 col-md-2"></div>
                <div class="col-12 col-md-4">
                    <iframe class="iframeview" src="https://www.youtube.com/embed/Kn066hDKjx4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-12 col-md-4">
                    <iframe class="iframeview" src="https://www.youtube.com/embed/A9HY4DsRTCg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-0 col-md-2"></div>
            </div>
            <div class="row c">
                <div class="col-0 col-md-2"></div>
                <div class="col-12 col-md-4">
                    <iframe class="iframeview" src="https://www.youtube.com/embed/pFgUluV_00s" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-12 col-md-4">
                    <iframe class="iframeview" src="https://www.youtube.com/embed/qTwHCC4stu8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-0 col-md-2"></div>
            </div>
        </div>
    </section>
    <!-- 關於岡南/end -->
    <!-- 頁腳/start -->
    <footer class="bg-pekoradark">
        <div class="container pt-3 pb-3">
            <div class="row">
                <!-- 選單連結/start -->
                <div class="col-12 col-md-6 mb-3">
                    <ul class="footer-menu">
                        <li><a href="index.php">首頁</a></li>
                        <li><a href="about.php">HOLOLIVE</a></li>
                        <li><a href="shop.php">HOLO商城</a></li>
                        <li><a href="job.php">成員簡介</a></li>
                        <li><a href="https://schedule.hololive.tv/">直播時間</a></li>
                        <li><a href="login.html">登入</a></li>
                        <li><a href="cart.php">購物車</a></li>
                        <li><a href="checkout.php">結帳</a></li>
                    </ul>
                </div>
                <!-- 選單連結/end -->
                <!-- 訂閱/start -->
                <div class="col-12 col-md-6 mb-3">
                    <h6 class="text-white">留下 E-mail，訂閱hololive，可搶先獲得最新的資訊喔！</h6>
                    <form action="addemail.php" method="post" name="myForm">
                        <input name="email" type="email" class="form-control mt-2 mb-2" placeholder="請輸入e-mail">
                        <button type="submit" class="btn btn-primary float-right send-btn">傳送</button>
                    </form>
                </div>
                <!-- 訂閱/end -->
                <!-- 版權所有/start -->
                <div class="col-12 mt-3">
                    <p class="text-white text-center">© Copyright 2021 hololive </p>
                </div>
                <!-- 版權所有/end -->
            </div>
        </div>
    </footer>
    <!-- 頁腳/end -->
</body>
</html>