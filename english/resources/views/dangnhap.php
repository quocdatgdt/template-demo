<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	echo $hoten;
?>
<form action="<?php echo Asset('login')?>" method="post">
	<input type="text" name="tendangnhap">
	<input type="password" name="matkhau">
	<input type="submit" name="Dang Nhap">
</form>
</body>
</html>