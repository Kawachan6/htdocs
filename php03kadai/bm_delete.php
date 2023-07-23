<?php
//1. POSTデータ取得
$id   = $_GET["id"];

//2. DB接続します
try {
	//Password:MAMP='root',XAMPP=''
	$pdo = new PDO('mysql:dbname=kawachan_gskadai_db;charset=utf8;host=mysql57.kawachan.sakura.ne.jp','kawachan','gskadai_db');
	// $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
  } catch (PDOException $e) {
	exit('DB Connection Error:'.$e->getMessage());
  }

//３．データ登録SQL作成
$sql = "DELETE FROM gs_bm_table WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id',$id, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //実行

//４．データ登録処理後
if($status==false){
    sql_error($stmt);
}else{
    redirect("select.php");
}
?>