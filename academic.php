<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>陳兆南副教授-學術</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* table */
        .tb_main {
            border-collapse: collapse;
            border: 2px solid #76a8ff;
            font: normal 80%/140% verdana, arial, helvetica, sans-serif;
            color: #222222;
            background: #fffff0;
        }
        .tb_main caption {
            padding: 0 .4em .4em;
            font-size: 1em;
            font-weight: bold;
            text-transform: uppercase;
            color: #333;
            background: transparent;
        }
        .tb_main td, th {
            border-left: 1px solid #76a8ff;
            border-bottom: 1px solid #76a8ff;
            padding: .3em;
        }
        .tb_main thead th, tfoot th {
            border: 1px solid #76a8ff;

            font-size: 1em;
            font-weight: bold;
            color: #444;
            background: #dbd9c0;
        }
        .tb_main td a {
            background: transparent;
            color: #222222;
            text-decoration: none;
            border-bottom: 1px dotted #76a8ff;
        }

        .tb_main th a {
            background: transparent;
            color: #72724c;
            text-decoration: none;
            font-weight:bold;
            border-bottom: 1px dotted #76a8ff;
        }
        .tb_main .odd {
            color: #222222;
            background: #e6fff1;
        }
        .tb_main tr:hover {
            color: #333;
            background: #fff;
        }
        .tb_main tr:hover th

    </style>
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
                <li><a href="resume.php">簡歷</a></li>
                <li class="active"><a href="academic.php">學術</a></li>
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
        <div class="col-sm-8">
            <div class="container">
                <h1>學術</h1>
                <ul class="nav nav-pills">
                    <li class="active"><a data-toggle="pill" href="#home">研究計畫</a></li>
                    <li><a data-toggle="pill" href="#menu1">學術合作</a></li>
                    <li><a data-toggle="pill" href="#menu2">展演</a></li>
                </ul>
                <hr>
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <h3>研究計畫</h3>
                        <div class="entry">
                            <table width="70%" border="0" cellpadding="0" cellspacing="0" class="tb_main">
                                <tr class="odd">
                                    <td width="5%">1</td>
                                    <td>，20160821140834，陳兆南(CHAO-NAN CHEN),黃俊杰，國科會，應用全溶液製程及奈米材料超音波噴塗技術於軟性基板進行氧化物半導  體薄膜電體開發之研究，2015.8.1 ~ 2016.10.31</td>
                                </tr>
                                <tr>
                                    <td width="5%">2</td>
                                    <td>，20150410002636，時文中(Wen-Chung Shih),陳兆南(CHAO-NAN CHEN)、洪振偉(Zeng-Wei Hong)、林智揚(CHIH-YANG LIN)，教育部，教育部資通訊軟體創新人才推升推廣計畫-- 智慧終端與人機互動，2014.2.1 ~ 2015.1.31</td>
                                </tr>
                                <tr class="odd">
                                    <td width="5%">3</td>
                                    <td>，20150410002305，陳永欽(YEONG-CHIN CHEN),陳兆南(CHAO-NAN CHEN)，國科會，鐃鈸型壓電換能器設計及其在能量擷取的應用(II/II)，2013.8.1 ~ 2014.7.31</td>
                                </tr>
                                <tr>
                                    <td width="5%">4</td>
                                    <td>，20150410001528，，國科會，準分子雷射結合溶液製程於可撓式軟性基板進行石墨烯材料及新元件開發之研究(2)，2012.8.1 ~ 2013.7.31</td>
                                </tr>
                                <tr class="odd">
                                    <td width="5%">5</td>
                                    <td>，20150410002012，陳永欽(YEONG-CHIN CHEN),陳兆南(CHAO-NAN CHEN)，國科會，鐃鈸型壓電換能器設計及其在能量擷取的應用，2012.8.1 ~ 2013.7.31</td>
                                </tr>
                                <tr>
                                    <td width="5%">6</td>
                                    <td>，20150410003251，陳永欽(YEONG-CHIN CHEN),洪振偉(Zeng-Wei Hong)、陳兆南(CHAO-NAN CHEN)、林智揚(CHIH-YANG LIN)，國科會，教育部資通訊軟體創新人才推升推廣計畫-- 數位匯流計畫，2012.2.1 ~ 2014.1.31</td>
                                </tr>
                                <tr class="odd">
                                    <td width="5%">7</td>
                                    <td>，20120202214739，,陳永欽(Chen Yeong-Chin)，國科會，準分子雷射結合溶液製程於可撓式軟性基板進行石墨烯材料及新元件開發之研究，2011.8.1 ~ 2012.7.31</td>
                                </tr>
                                <tr>
                                    <td width="5%">8</td>
                                    <td>，20110506154637，，國科會，應用準分子雷射技術於改進OCB模式液晶轉態特性之研究，2009.9.1 ~ 2010.7.31</td>
                                </tr>
                            </table>
                            <p>&nbsp;</p>
                        </div>

                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <h3>學術合作教授</h3>
                        <table width="50%" border="0" cellpadding="0" cellspacing="0" class="tb_main">
                            <tr class="odd" align="center">
                                <td colspan="2" >大葉大學電機系黃俊杰 (JNUG-JIE HUANG)</td>
                            </tr>
                            <tr class="odd">
                                <td width="20%" align="center">現職</td>
                                <td> 電機工程學系 副教授 兼 系主任</td>
                            </tr>
                            <tr class="odd">
                                <td width="20%" align="center">學歷</td>
                                <td>中山大學電機工程學系 博士</td>
                            </tr>
                            <tr class="odd">
                                <td width="20%" align="center">研究室分機</td>
                                <td>(04)8511888 # 2227</td>
                            </tr>
                            <tr class="odd">
                                <td width="20%" align="center">實驗室分機</td>
                                <td>(04)8511888 4123 # 24</td>
                            </tr>
                            <tr class="odd">
                                <td width="20%" align="center">研究室</td>
                                <td>工學院(H313)</td>
                            </tr>
                            <tr class="odd">
                                <td width="20%" align="center">E-mail</td>
                                <td>jjhuang@mail.dyu.edu.tw</td>
                            </tr>
                            <tr class="odd">
                                <td colspan="2" align="center">學術背景</td>
                            </tr>
                            <tr class="odd">
                                <td width="20%" align="center">博士</td>
                                <td>中山大學電機工程學系</td>
                            </tr>
                            <tr class="odd">
                                <td width="20%" align="center">碩士</td>
                                <td>中山大學電機工程學系</td>
                            </tr>
                            <tr class="odd">
                                <td width="20%" align="center">學士</td>
                                <td>大葉大學電機工程學系</td>
                            </tr>
                        </table>

                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <h3>展演</h3>
                        <div class="entry">
                            <table width="50%" border="0" cellpadding="0" cellspacing="0" class="tb_main">
                                <tr class="odd">
                                    <td width="5%">1</td>
                                    <td>2016-04-18 ~ 2016-04-18 <br />2016 台中資訊應用創作展 ， 孫佳吟／陳兆南 <br> 台中文化創意產業園區 <br> </td>
                                </tr>
                            </table>
                            <p>&nbsp;</p>
                        </div>

                    </div>
                    <div id="menu3" class="tab-pane fade">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-2 sidenav">
            <div class="well">
                <li><a href="course.php" >本學期開課課程</a></li>
            </div>
            <div class="well">
                <li><a href="semiconductor.php" >半導體教學</a></li>
            </div>
            <div class="well">
                <li><a href="tutorclass.php" >學輔時間課程</a></li>
            </div>
        </div>
    </div>
</div>

<footer class="container-fluid text-center">
    <p><script  src="http://www.dreamhome.com.tw/escounter/counter.asp?name=karta19026&dir=11"></script>  Powered by 劉凱文</p>
</footer>

</body>
</html>