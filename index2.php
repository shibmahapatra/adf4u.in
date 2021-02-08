<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
Name :<input type="text" name="fname"><br>

College Name:<input type="text" name="cname">
<input type="submit">
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=$_REQUEST['fname'];
$c1name=$_REQUEST['cname'];
if(($name && $c1name)==null)
{
    print "there is no name";
}
else{
    print "My name is ".$name;
    print "<br>";
    print "My college is ".$c1name;
}
}
?>
</body>
</html>