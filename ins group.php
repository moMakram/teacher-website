<?php
include ("connec.php");
   $result = mysql_query("INSERT INTO INSERT INTO `teach`.`group_st` (`group_n` ,`group_s` ,`group_e` )
 values('$_POST[group_n]' , '$_POST[group_s]' , '$_POST[group_e]') ");


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
window.location ="add group.php";
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