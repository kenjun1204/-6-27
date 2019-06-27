<?php
//1. POSTデータ取得
$lastName   = filter_input( INPUT_POST, "lastName" );
$firstName   = filter_input( INPUT_POST, "firstName" );
$email  = filter_input( INPUT_POST, "email" );
$password = filter_input( INPUT_POST, "password" );
$jobChangeDuration    = filter_input( INPUT_POST, "jobChangeDuration" );
$companyCount    = filter_input( INPUT_POST, "companyCount" );
$year    = filter_input( INPUT_POST, "year" );
$month    = filter_input( INPUT_POST, "month" );
$day    = filter_input( INPUT_POST, "day" );
$sex    = filter_input( INPUT_POST, "sex" );
$pref31    = filter_input( INPUT_POST, "pref31" );
$addr31    = filter_input( INPUT_POST, "addr31" );
$addr32    = filter_input( INPUT_POST, "addr32" );
$educationName    = filter_input( INPUT_POST, "educationName" );
$phoneNumber    = filter_input( INPUT_POST, "phoneNumber" );
$jobType    = filter_input( INPUT_POST, "jobType" );
$businessType    = filter_input( INPUT_POST, "businessType" );
$wl    = filter_input( INPUT_POST, "wl" );
$ADHD    = filter_input( INPUT_POST, "ADHD" );
$fullName  = $lastName.$firstName;
$address = $pref31.$addr31.$addr32;
$birthday = $year."-".$month."-".$day;

//2. DB接続します
//include "../../includes/funcs.php";
include "funcs.php";
$pdo = db_con();

//３．データ登録SQL作成
$sql = "INSERT INTO kyujin_table(fullName,email,password,jobChangeDuration,companyCount,birthday,sex,address,educationName,phoneNumber,jobType,businessType,wl,ADHD,registerDate)
VALUES(:fullName,:email,:password,:jobChangeDuration,:companyCount,:birthday,:sex,:address,:educationName,:phoneNumber,:jobType,:businessType,:wl,:ADHD,sysdate())";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':fullName', $fullName, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':email', $email, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':password', $password, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':jobChangeDuration', $jobChangeDuration, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':companyCount', $companyCount, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':birthday', $birthday, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':sex', $sex, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':address', $address, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':educationName', $educationName, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':phoneNumber', $phoneNumber, PDO::PARAM_INT); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':jobType', $jobType, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':businessType', $businessType, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':wl', $wl, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':ADHD', $ADHD, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)


$status = $stmt->execute();

//４．データ登録処理後
if ($status == false) {
    sqlError($stmt);
} else {
    //５．index.phpへリダイレクト
    header("Location: index.php");
    exit;
}
?>