<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<form action="contact.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
Website: <input type="text" name="website"><br>
Message: <input type="text" name="message"><br>
<input type="submit" value="Send with POST method" >
</form>
<?php
echo @$_POST['name'];
echo"</br>";
echo @$_POST['email'];
echo"</br>";
echo @$_POST['website'];
echo"</br>";
echo @$_POST['message'];
echo"</br>";
echo"</br>";

$data =array($_POST['name']=>'name',$_POST['email']=>'email', $_POST['website']=>'website',$_POST['message']=>'message');
foreach ($data as $_POST['']=> $value) {
    echo $value . ':'.$_POST['']."<br>";}
?>
</br>
</br>
</br>
<form action="contact.php" method="get">
Name: <input type="text" name="name_1"><br>
E-mail: <input type="text" name="email_1"><br>
Website: <input type="text" name="website_1"><br>
Message: <input type="text" name="message_1"><br>
<input type="submit" value="Send with GET method">
</form>

<?php
echo @$_GET['name_1'];
echo"</br>";
echo @$_GET['email_1'];
echo"</br>";
echo @$_GET['website_1'];
echo"</br>";
echo @$_GET['message_1'];
echo"</br>";
?>



</body>
</html>
