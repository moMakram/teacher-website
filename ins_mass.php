<?php
include ("connec.php");
session_start();
$uu =$_SESSION['user_i'];

   $result = mysql_query("INSERT INTO `teach`.`inquiry` (`user_name` ,`mass`  ,`app`)
 values('$uu' , '$_POST[mass]' , 'لا يظهر') ");


if ($result)
{
echo('<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<script type="text/javascript">
alert ("تم التسجيل بنجاح");
window.location ="inquiry.php";
</script>
</body>
</html>
');



}
else
{
echo ("error");
}

?>