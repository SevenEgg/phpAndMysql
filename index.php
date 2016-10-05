<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP与Mysql数据库</title>
</head>
<body>
<!-- mysql_connect  建立数据库连接 -->



<?php 
	$host = 'localhost';
	$user = 'root';
	$pass = '';

	$conn = mysql_connect($host,$user,$pass);

	// 判断是否连接成功
	if($conn){
		echo '连接成功';
	}else{
		echo "连接失败";
	}

	// 选择数据库
	$db = mysql_select_db('mysql');
	if ($db) {
		echo '<br>'.PHP_EOL;
		echo '选择数据库成功';
	}

	// 设置编码
	mysql_query("set names 'utf8'");
	
	// 执行插入操作语句
	// $query = mysql_query('insert into user(User) values("yali1990")');
	// if($query){
	// 	echo '<br>'.PHP_EOL;
	// 	echo '插入成功';
	// }else{
	// 	// 弹出错误信息
	// 	echo '<br>'.PHP_EOL;
	// 	echo mysql_error();
	// }
	// 输出自增ID
	// mysql_insert_id();


	// 查询语句
	$res = mysql_query('select * from user limit 1');
	// 获取资源句柄
	$row = mysql_fetch_array($res);
	// 生成json数据
	echo json_encode($row);

	// 关闭数据库连接
	$conn_close = mysql_close($conn);
	if($conn_close){
		echo '<br>'.PHP_EOL;
		echo '成功关闭数据库';
	}

 ?>


</body>
</html>