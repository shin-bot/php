<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ＰＨＰ基礎</title>
</head>
<body>

<?php
$nickname=$_POST['nickname'];
$email=$_POST['email'];
$goiken=$_POST['goiken'];

print $nickname;
print'様<br>';
print'ご意見ありがとうございました。<br>';
print'頂いたご意見『';
print $goiken;
print'』<br>';
print $email;
print'にメールを送りましたのでご確認ください。';
?>

</body>
</html>
