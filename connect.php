<?php
session_start();
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/22
 * Time: 上午 10:36
 */

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>


</head>
<body>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
include("mysql_connect.inc.php");
$id = $_POST['id'];
$pw =sha1($_POST['pw']);
//搜尋資料庫資料
$sql = "SELECT * FROM UserData where id = '$id'";
$result = mysqli_query($link,$sql);
$row = @mysqli_fetch_row($result);
//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if($id != null && $pw != null && $row[0] == $id && $row[2] == $pw)
{
    //將帳號寫入session，方便驗證使用者身份
    $_SESSION['id'] = $id;
    echo '登入成功!';
    echo '<meta http-equiv=REFRESH CONTENT=1;url=index.html>';
}
else
{
    echo '登入失敗!';
    echo '<meta http-equiv=REFRESH CONTENT=1;url=login.html>';
}
?>
</body>
</html>