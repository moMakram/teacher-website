<?php

include ("connec.php");
 $result = mysql_query(" select * from payment");
 $result_s = mysql_query(" select s_name from student");
echo('


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>حذف أو تعديل حالة الدفع</title>
<link href="Css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div id="remove_payment_word"></div>
<div id="header"></div>');
include ("menu.php");
echo('
<div id="body2">
<table width="560" height="150" border="0" bordercolor="#000" style="margin-left:100px; margin-top:30px;">
  <tr>
    <td width="60" height="35"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">الكود</font></td>
     <td width="800" height="35"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">إسم الطالب</font></td>
    <td width="500" height="35"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">الشهر</font></td>
    <td width="500" height="35"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">حالة الدفع</font></td>
	<td width="200" height="35"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">Update</font></td>
    <td width="200" height="35"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">Delete</font></td>
  </tr>');
     while ( $rows = mysql_fetch_array($result) )
  {
  echo('
  <tr>
      <td width="60" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font>'); echo($rows[0]);echo(' </td>
     
    <td style="background-color:#090">');
	echo $rows[2];
	echo('
     
   </td>
    <td width="200" height="35"  style="background:#090" align="center">');
	echo $rows[3];
	echo('
      
    </td>
    <td width="400" height="35"  style="background:#090" align="center">');
	
      echo $rows[4];
	echo('
	  
    </td>
     <td width="150" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font>');echo (' <a href="update payment.php?id= '); echo $rows['id']; echo('">  update </a> </td>
    <td width="150" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font>');echo('<a href= "delete_payment.php?id='); echo $rows['id']; echo('"> del </a></td>
  </tr>');
  }
  echo('
  
</table>

<div id="submit2"></div>
</div>
<div id="fotter"></div>
</body>
</html>');
?>
