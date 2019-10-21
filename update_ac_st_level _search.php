<?php

include ("connec.php");

$result_ss = mysql_query(" select id from student  where s_name ='$_POST[select_name]' ");
$row_ss = mysql_fetch_array($result_ss);


$result = mysql_query(" update st_leavle set id_s =$row_ss[id] , s_name ='$_POST[select_name]' , s_date ='$_POST[h_date]' ,  s_hodor = '$_POST[selectt]' , t_gread = '$_POST[t_gread]' , ex_gread = '$_POST[ex_gread]' , h_gread = '$_POST[selectth]'
  
  where id='$_POST[id]' " );


if($result)
{

echo('<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<script type="text/javascript">
alert ("تم التعديل بنجاح");
window.location ="search_stud _cont.php";
</script>
</body>
</html>
');
}

else
{

echo("error");
}

?>




