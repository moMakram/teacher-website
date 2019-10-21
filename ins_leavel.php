<?php
include ("connec.php");
 $results = mysql_query(" select * from student where s_name =  '$_POST[select_name]' ");
 $rowss = mysql_fetch_array($results);

 $result = mysql_query("INSERT INTO `teach`.`st_leavle` (`id_s` ,`s_name` ,`s_date` ,`s_hodor` ,`t_gread` ,`ex_gread` ,`h_gread`)
 values('$rowss[id]','$_POST[select_name]' , '$_POST[h_date]' , '$_POST[selectt]' , '$_POST[t_gread]' , '$_POST[ex_gread]' , '$_POST[selectth]') ");


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
window.location ="add level student.php";
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