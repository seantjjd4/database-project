<?php
  //檢查 cookie 中的 passed 變數是否等於 TRUE 
  $passed = $_COOKIE["passed"];
  $NickName = $_COOKIE["NickName"]; 
  //如果 cookie 中的 passed 變數不等於 TRUE
  //表示尚未登入網站，將使用者導向首頁 index.php
  if ($passed != "TRUE")
  {
    header("location:index.php");
    exit();
  }
	
  //如果 cookie 中的 passed 變數等於 TRUE
  //表示已經登入網站，取得使用者資料	
  else
  {
    require_once("dbtools.inc.php");
		
    $id = $_COOKIE["id"];
    // print($id);
    //建立資料連接
    $link = create_connection();
				
    //執行 SELECT 陳述式取得使用者資料
    $sql = "SELECT * FROM member Where Member_id = '$id'";
    $result = execute_sql($link, "dbs_project", $sql);
		
    $row = mysqli_fetch_assoc($result);  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>台灣名產商城</title>
    <link rel="shortcut icon" type="image/png" href="./images/logo.png"/>
    <!-- CSS文件載入 -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/color.css">
    <link rel="stylesheet" href="./css/frame.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <!-- js文件載入 -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
      function check_data()
      {
        if (document.myForm.password.value.length == 0)
        {
          alert("「使用者密碼」一定要填寫哦...");
          return false;
        }
        if (document.myForm.password.value.length > 10)
        {
          alert("「使用者密碼」不可以超過 10 個字元哦...");
          return false;
        }
        }	
        myForm.submit();					
      }
    </script>	
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
    <!-- 登入與註冊/start -->
    <section class="page-content">
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-0 col-md-3"></div>
                <!-- 註冊/start -->
                <div class="col-12 col-md-6 mb-3">
                    <h2>更改資料</h2>
                    <form action="update.php"  method="post" name="myForm">
                        <div class="form-group">
                            <label for="RegisteredEmail">電子信箱
                                <span class="text-danger">*</span>
                            </label>
                            <input name="email" type="email" class="form-control" id="RegisteredEmail" placeholder="必填，電子信箱" required>
                        </div>
                        <div class="form-group">
                            <label for="RegisteredPassword">密碼
                                <span class="text-danger">*</span>
                            </label>
                            <input name="password" type="password" class="form-control" id="RegisteredPassword" placeholder="必填，密碼" required>
                        </div>
                        <button type="submit" class="btn btn-primary send-btn">修改</button>
                    </form>
                </div>
                <!-- 註冊/end -->
                <div class="col-0 col-md-3"></div>
                
            </div>
        </div>
    </section>
    <!-- 登入與註冊/end -->
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
<?php
    //釋放資源及關閉資料連接
    mysqli_free_result($result);
    mysqli_close($link);
  }
?>