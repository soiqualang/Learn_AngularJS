<?php
if(isset($_GET['id'])){
	$id=$_GET['id'];
	echo 'GET: '.$id;
}elseif(isset($_POST['id'])){
	$id=$_POST['id'];
	echo 'POST: '.$id;
}elseif(isset($_PUT['id'])){
	$id=$_PUT['id'];
	echo 'PUT: '.$id;
}else{
	echo 'Lỗi chưa nhận id';
}
?>