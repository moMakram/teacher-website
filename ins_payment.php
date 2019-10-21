<?php
include ("connec.php");
 $results = mysql_query(" select * from student where s_name =  '$_POST[select_name]' ");
 $rowss = mysql_fetch_array($results);

 $result = mysql_query("INSERT INTO `teach`.`payment` (`is_s` ,`name` ,`mn` ,`pay_c`)
 values('$rowss[id]','$_POST[select_name]' , '$_POST[select_m]' ,  '$_POST[select_p]' ) ");


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
window.location ="add payment.php";
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