<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP与Mysql数据库</title>
</head>
<body>
<!-- mysql_connect  建立数据库连接 -->



<?php 
	// phpinfo();
	$host = '127.0.0.1';
	$user = 'root';
	$pass = '';

	$conn = mysqli_connect($host,$user,$pass);

	// 判断是否连接成功
	if($conn){
		echo '连接成功';
	}else{
		echo "连接失败";
	}

	// 选择数据库
	$db = mysqli_select_db($conn,'mysql');
	if ($db) {
		echo '<br>'.PHP_EOL;
		echo '选择数据库成功';
	}

	// 设置编码
	mysqli_query($conn,"set names 'utf8'");
	
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
	$res = mysqli_query($conn,'select * from user limit 1');
	// 获取资源句柄

	// $row = mysqli_fetch_array($res);
	// row循环取值
	// while ($row = mysqli_fetch_row($res)) {
	// 	echo '<br>'.PHP_EOL;
	// 	echo json_encode($row);
	// }

	// $row = mysqli_fetch_assoc($res);
	//返回对象
	// $row = mysqli_fetch_object($res);

	// 取出结果集的数量
	$row = mysqli_num_rows($res);

	//mysqli_result 返回结果集中一个字段的值
	// 生成json数据
	// echo json_encode($row);
	echo '<br>'.PHP_EOL;
	print_r($row);

	// 关闭数据库连接
	$conn_close = mysqli_close($conn);
	if($conn_close){
		echo '<br>'.PHP_EOL;
		echo '成功关闭数据库';
	}

 ?>


</body>
</html>