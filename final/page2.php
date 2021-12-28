<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOLO商城</title>
    <link rel="shortcut icon" type="image/png" href="./images/logo.png" />
    <!-- CSS文件載入 -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/color.css">
    <link rel="stylesheet" href="./css/product.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <!-- js文件載入 -->
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
            <div class="collapse navbar-collapse" id="navbarNav">
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
                    <a href="login.html" class="btn btn-outline-info text-info my-2 my-sm-0">登入</a>
                    <a href="cart.php" class="btn btn-outline-info text-info my-2 my-sm-0">購物車</a>
                    <a href="checkout.php" class="btn btn-outline-info text-info my-2 my-sm-0">結帳</a>
                </div>
            </div>
        </nav>
    </header>
    <!-- header/end -->
    <!-- 產品商城/start -->
    <section class="page-content">
        <div class="container pt-5 pb-5">
            <div class="row">
                <!-- 商品區/start -->
                <div class="col-12 col-md-9">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <img src="./images/holobg.png" alt="Shop Banner" class="img-fluid">
                        </div>
                        <!-- 排序/start -->
                        <div class="col-12 mt-3 mb-3">
                            <p class="d-inline-block">顯示 27 筆結果中的 10-18 筆</p>
                            <form action="" class="d-inline-block float-right">
                                <select id="ProductSelect" class="form-control">
                                    <option>依上架時間</option>
                                    <option>依熱銷度</option>
                                    <option>依價格排序:低至高</option>
                                    <option>依價格排序:高至低</option>
                                </select>
                            </form>
                        </div>
                        <!-- 排序/end -->
                        <!-- 商品/start -->
                        <div class="col-12 col-sm-6 col-md-4 mb-3">
                            <div class="card">
                                <img class="card-img-top" src="./images/product/eva_10.png" alt="eva10">
                                <div class="card-body">
                                    <h4 class="card-title">Hololive 角卷綿芽週年套組 </h4>
                                    <p class="card-text">附特典</p>
                                    <h5 class="card-text text-danger">NT$&nbsp;3470</h5>
                                    <a href="z10.html" class="btn btn-outline-secondary btn-block">查看商品</a>
                                    <form method="post" name="myForm" action="add_to_car.php">                                        
                                        <input type="hidden" name="quantity" value="1">
                                        <input type="hidden" name="name" value="watame birthday set">
                                        <input type="hidden" name="price" value="3470">
                                        <input type="hidden" name="num" value="z9">
                                        <input class="btn btn-outline-primary btn-block mt-2" type='submit' value='加入購物車'>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 mb-3">
                            <div class="card">
                                <img class="card-img-top" src="./images/product/eva_11.png" alt="eva11">
                                <div class="card-body">
                                    <h4 class="card-title">Hololive EN Watson Amelia 生日紀念套組</h4>
                                    <p class="card-text" >附特典</p>
                                    <h5 class="card-text text-danger">NT$&nbsp;2999</h5>
                                    <a href="z11.html" class="btn btn-outline-secondary btn-block">查看商品</a>
                                    <form method="post" name="myForm" action="add_to_car.php">                                        
                                        <input type="hidden" name="quantity" value="1">
                                        <input type="hidden" name="name" value="ame birthday set">
                                        <input type="hidden" name="price" value="4490">
                                        <input type="hidden" name="num" value="z9">
                                        <input class="btn btn-outline-primary btn-block mt-2" type='submit' value='加入購物車'>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 mb-3">
                            <div class="card">
                                <img class="card-img-top" src="./images/product/eva_12.png" alt="eva12">
                                <div class="card-body">
                                    <h4 class="card-title">Hololive 獅白牡丹 3D化記念商品</h4>
                                    <p class="card-text">2款分售</p>
                                    <h5 class="card-text text-danger">NT$&nbsp;1420</h5>
                                    <a href="z12.html" class="btn btn-outline-secondary btn-block">查看商品</a>
                                    <form method="post" name="myForm" action="add_to_car.php">                                        
                                        <input type="hidden" name="quantity" value="1">
                                        <input type="hidden" name="name" value="botan 3d commondity">
                                        <input type="hidden" name="price" value="4490">
                                        <input type="hidden" name="num" value="z9">
                                        <input class="btn btn-outline-primary btn-block mt-2" type='submit' value='加入購物車'>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 mb-3">
                            <div class="card">
                                <img class="card-img-top" src="./images/product/eva_13.png" alt="eva13">
                                <div class="card-body">
                                    <h4 class="card-title">Hololive「赤井心 HAACHAMA」T恤黑</h4>
                                    <p class="card-text">可選尺寸</p>
                                    <h5 class="card-text text-danger">NT$&nbsp;1280</h5>
                                    <a href="z13.html" class="btn btn-outline-secondary btn-block">查看商品</a>
                                    <form method="post" name="myForm" action="add_to_car.php">                                        
                                        <input type="hidden" name="quantity" value="1">
                                        <input type="hidden" name="name" value="rusia birthday set">
                                        <input type="hidden" name="price" value="4490">
                                        <input type="hidden" name="num" value="z9">
                                        <input class="btn btn-outline-primary btn-block mt-2" type='submit' value='加入購物車'>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 mb-3">
                            <div class="card">
                                <img class="card-img-top" src="./images/product/eva_14.png" alt="eva14">
                                <div class="card-body">
                                    <h4 class="card-title">Hololive「赤井心 HAACHAMA」T恤白</h4>
                                    <p class="card-text">可選尺寸</p>
                                    <h5 class="card-text text-danger">NT$&nbsp;1280</h5>
                                    <a href="z14.html" class="btn btn-outline-secondary btn-block">查看商品</a>
                                    <form method="post" name="myForm" action="add_to_car.php">                                        
                                        <input type="hidden" name="quantity" value="1">
                                        <input type="hidden" name="name" value="rusia birthday set">
                                        <input type="hidden" name="price" value="4490">
                                        <input type="hidden" name="num" value="z9">
                                        <input class="btn btn-outline-primary btn-block mt-2" type='submit' value='加入購物車'>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 mb-3">
                            <div class="card">
                                <img class="card-img-top" src="./images/product/eva_15.png" alt="eva15">
                                <div class="card-body">
                                    <h4 class="card-title">Hololive 赤井心 2020 誕生日紀念組 </h4>
                                    <p class="card-text">附特典</p>
                                    <h5 class="card-text text-danger">NT$&nbsp;3700</h5>
                                    <a href="z15.html" class="btn btn-outline-secondary btn-block">查看商品</a>
                                    <form method="post" name="myForm" action="add_to_car.php">                                        
                                        <input type="hidden" name="quantity" value="1">
                                        <input type="hidden" name="name" value="rusia birthday set">
                                        <input type="hidden" name="price" value="4490">
                                        <input type="hidden" name="num" value="z9">
                                        <input class="btn btn-outline-primary btn-block mt-2" type='submit' value='加入購物車'>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 mb-3">
                            <div class="card">
                                <img class="card-img-top" src="./images/product/eva_16.png" alt="eva16">
                                <div class="card-body">
                                    <h4 class="card-title">Hololive Gawr Gura Bath Towels</h4>
                                    <p class="card-text">70*140CM</p>
                                    <h5 class="card-text text-danger">NT$&nbsp;860</h5>
                                    <a href="z16.html" class="btn btn-outline-secondary btn-block">查看商品</a>
                                    <form method="post" name="myForm" action="add_to_car.php">                                        
                                        <input type="hidden" name="quantity" value="1">
                                        <input type="hidden" name="name" value="rusia birthday set">
                                        <input type="hidden" name="price" value="4490">
                                        <input type="hidden" name="num" value="z9">
                                        <input class="btn btn-outline-primary btn-block mt-2" type='submit' value='加入購物車'>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 mb-3">
                            <div class="card">
                                <img class="card-img-top" src="./images/product/eva_17.png" alt="eva17">
                                <div class="card-body">
                                    <h4 class="card-title">Hololive Gawr Gura 手機殼 </h4>
                                    <p class="card-text">限iphone</p>
                                    <h5 class="card-text text-danger">NT$&nbsp;1200</h5>
                                    <a href="z17.html" class="btn btn-outline-secondary btn-block">查看商品</a>
                                    <form method="post" name="myForm" action="add_to_car.php">                                        
                                        <input type="hidden" name="quantity" value="1">
                                        <input type="hidden" name="name" value="rusia birthday set">
                                        <input type="hidden" name="price" value="4490">
                                        <input type="hidden" name="num" value="z9">
                                        <input class="btn btn-outline-primary btn-block mt-2" type='submit' value='加入購物車'>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 mb-3">
                            <div class="card">
                                <img class="card-img-top" src="./images/product/eva_18.png" alt="eva18">
                                <div class="card-body">
                                    <h4 class="card-title">Hololive 天音かなた 週年紀念套組</h4>
                                    <p class="card-text">附特典</p>
                                    <h5 class="card-text text-danger">NT$&nbsp;5250</h5>
                                    <a href="z18.html" class="btn btn-outline-secondary btn-block">查看商品</a>
                                    <form method="post" name="myForm" action="add_to_car.php">                                        
                                        <input type="hidden" name="quantity" value="1">
                                        <input type="hidden" name="name" value="rusia birthday set">
                                        <input type="hidden" name="price" value="4490">
                                        <input type="hidden" name="num" value="z9">
                                        <input class="btn btn-outline-primary btn-block mt-2" type='submit' value='加入購物車'>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        <!-- 商品/end -->
                        <!-- 分頁/start -->
                        <div class="col-12 mt-3 mb-5">
                            <nav aria-label="Page navigation product">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="shop.php">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="page3.html">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- 分頁/end -->
                    </div>
                </div>
                <!-- 商品區/end -->
                <!-- 側邊欄/start -->
                <div class="col-12 col-md-3">
                    <div class="row">
                        <!-- 搜尋/start -->
                        <div class="col-12 mb-5">
                            <form action="">
                                <input type="test" class="form-control" id="PorductSearch" placeholder="搜尋...">
                            </form>
                        </div>
                        <!-- 搜尋/end -->
                        <!-- 購物清單/start -->
                        <div class="col-12 mb-5">
                            <h4 class="title-color">購物車</h4>
                            <div class="d-block sidebar-product-list">
                                <a class="text-white remove" data-toggle="tooltip" data-placement="top" title="是否確定要移除">X</a>
                                <a href="z1.html" class="d-inline-block">
                                    <img src="./images/product/eva_1.png" alt="eva1" class="productpic">
                                    <h6 class="d-inline-block">Hololive兔田佩克拉 生日套組</h6>
                                </a>
                                <p class="d-block text-secondary pl-4">
                                    <span class="text-warning">1</span>&nbsp;X&nbsp;NT$500
                                </p>
                            </div>
                            <div class="d-block sidebar-product-list">
                                <a class="text-white remove" data-toggle="tooltip" data-placement="top" title="是否確定要移除">X</a>
                                <a href="z9.html" class="d-inline-block">
                                    <img src="./images/product/eva_9.png" alt="eva9" class="productpic">
                                    <h6 class="d-inline-block">潤羽るしあ 生日紀念套組</h6>
                                </a>
                                <p class="d-block text-secondary pl-4">
                                    <span class="text-warning">1</span>&nbsp;X&nbsp;NT$500
                                </p>
                            </div>
                            <div class="d-block mt-3 mb-3">
                                <h5 class="text-center">小計：NT$&nbsp;1,000</h5>
                            </div>
                            <div class="d-block">
                                <a href="cart.php" class="btn btn-primary btn-block text-white" role="button">查看購物車</a>
                            </div>
                            <div class="d-block mt-1 mb-3">
                                <a href="checkout.php" class="btn btn-secondary btn-block text-white" role="button">結帳</a>
                            </div>
                        </div>
                        <!-- 購物清單/end -->
                        <!-- 產品分類/start -->
                        <div class="col-12 mb-5">
                            <h4 class="title-color">產品分類</h4>
                            <ul class="sidebar-product-category">
                                <li>
                                    <a href="tagset.html">套組</a>
                                </li>
                                <li>
                                    <a href="taggarment.html">衣服</a>
                                </li>
                                <li>
                                    <a href="tagbrochore.html">畫冊</a>
                                </li>
                                <li>
                                    <a href="tagothers.html">其他</a>
                                </li>
                            </ul>
                        </div>
                        <!-- 產品分類/end -->
                    </div>
                </div>
                <!-- 側邊欄/end -->
            </div>
        </div>
    </section>
    <!-- 產品商城/end -->
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
                    <p class="text-white text-center">© Copyright 2021 hololive</p>
                </div>
                <!-- 版權所有/end -->
            </div>
        </div>
    </footer>
    <!-- 頁腳/end -->
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip({trigger: "click"});
        })
    </script>
</body>
</html>