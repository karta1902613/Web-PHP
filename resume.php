<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>陳兆南副教授-簡歷</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="index.php">首頁</a></li>
                <li class="active"><a href="resume.php">簡歷</a></li>
                <li><a href="academic.php">學術</a></li>
                <li><a href="book.php">著作</a></li>
                <li><a href="student.php">學生</a></li>
                <li><a href="link.php">常用連結</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php
                if($_SESSION['id'] != null){
                    echo " <li><a href='logout.php'><span class='glyphicon glyphicon-log-in'></span> Logout</a></li> "  ;
                }else{
                    echo " <li><a href='login.html'><span class='glyphicon glyphicon-log-in'></span> Login</a></li> "  ;
                }
                ?>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-2 sidenav">
            <p class= text-centeralign="center"><img src="chencn.jpg" width="100%" alt="陳兆南老師"></p>
            <li>Tel：+886-4-23323456  ext.48019</li>
            <li>Office：8019</li>
            <li>E-mail：<a href="mailto:chencn@asia.edu.tw"> chencn@asia.edu.tw</a></li>
        </div>
        <div class="col-sm-8 text-left">
            <div class="container">
                <h1>簡歷</h1>

                <ul class="nav nav-pills" >
                    <li class="active"><a data-toggle="pill" href="#home">學歷</a></li>
                    <li><a data-toggle="pill" href="#menu1">經歷</a></li>
                    <li><a data-toggle="pill" href="#menu2">專長</a></li>
                </ul>
                <hr>
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <h3>學歷</h3>
                        <li>長庚大學 電子工程 博士</li>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <h3>經歷</h3>
                        <li>亞洲大學_資訊工程學系---助理教授</li>
                        <li>南開科技大學 電子工程學系---助理教授</li>
                        <li>工研院_影像顯示科技中心---研發工程師</li>
                        <li>中華映管股份有限公司---研發工程師</li>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <h3>專長</h3>
                        <li>顯示技術</li>
                        <li>媒體與互動設計</li>
                        <li>數位學習內容</li>
                    </div>
                    <div id="menu3" class="tab-pane fade">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-2 sidenav">
            <div class="well">
                <li><a href="course.html" >本學期開課課程</a></li>
            </div>
            <div class="well">
                <li><a href="semiconductor.html" >半導體教學</a></li>
            </div>
            <div class="well">
                <li><a href="tutorclass.html" >學輔時間課程</a></li>
            </div>
        </div>
    </div>
</div>

<footer class="container-fluid text-center">
    <p><script  src="http://www.dreamhome.com.tw/escounter/counter.asp?name=karta19026&dir=11"></script>  Powered by 劉凱文</p>
</footer>

</body>
</html>