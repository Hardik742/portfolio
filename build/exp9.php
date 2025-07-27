 <html>
<head><title>pr 9.1 </title></head>
<body>
<h1 align ="center"> Word and Character counter </h1><br><br>
<form method="POST" action="pr9.1.php"><br>

 Enter String:<input type="text" name="str" ><br>
<input type="Submit" name="sub"><br><br>
<?php
if(isset($_POST["sub"]))
{
$s=$_POST["str"];
echo "String: ".$s."<br>";
$wc=preg_match_all('/(\w+)/u',$s,$a);
echo "Word count:".$wc."<br>";
preg_match_all('/./u',$s,$b)."<br>";
$char=count($b[0])."<br>";
echo "Char. Count:",$char;
}

?>
</form>
</body>
</html>