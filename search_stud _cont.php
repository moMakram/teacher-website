<?php
include ("connec.php");
session_start();
 

  $reslut_le=mysql_query("select * from st_leavle where id_s = '$_SESSION[user]' ");
  $reslut_pay=mysql_query("select * from payment where is_s = '$_SESSION[user]' ");
echo('

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>بحث عن طالب واحد فقط</title>
<link href="Css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div id="search_student_word"></div>
<div id="header"></div>
<div id="menu">
<a href="control.html"><div id="nav1"></div></a>
</div>
<div id="body5">

');
echo('
<div style="overflow:auto; height:300px; width:717px;margin-left:24px;border:#009 groove 2px; margin-top:250px; position:absolute;">
<table width="700" height="100" border="0" bordercolor="#000">
 <tr>
    <td width="60" height="35"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">الكود</font></td>
    <td width="1000" height="35"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">الاسم</font></td>
    <td width="150" height="35"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">تاريخ الحصة</font></td>
	<td width="150" height="35"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">حالة الغياب</font></td>
    <td width="150" height="35"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">درجة التسميع</font></td>
    <td width="150" height="35"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">درجة الإمتحان</font></td>
    <td width="150" height="35"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">التقدير</font></td>
    <td width="150" height="35"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">Update</font></td>
    <td width="150" height="35"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">Delete</font></td>

  </tr>');
     while ( $rows_le = mysql_fetch_array($reslut_le) )
  {
  echo('
  <tr>
    <td width="60" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font>'); echo($rows_le[0]);echo(' </td>
    <td width="1000" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font>'); echo( $rows_le[2]);echo('</td>
	   <td width="150" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font>'); echo( $rows_le[3]);echo('</td>
    <td width="150" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font>'); echo( $rows_le[4]);echo('</td>
    <td width="150" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font>'); echo( $rows_le[5]);echo('</td>
    <td width="150" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font>'); echo( $rows_le[6]);echo('</td>
    <td width="150" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font>'); echo( $rows_le[7]);echo('</td>
    <td width="70" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font>');echo (' <a href="update st_level_search.php?id= '); echo $rows_le['id']; echo('">  update </a></td>
	   <td width="70" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font>');echo('<a href= "delete_leavel_search.php?id='); echo $rows_le['id']; echo('"> del </a></td>
 </tr>');
  }
echo('

</table>
</div>
<div style="position:absolute; width:577px; height:370px;margin-left:100px; overflow:auto; border:#009 2px groove; margin-top:588px;">
<table width="560" height="100" border="0" bordercolor="#000">
  <tr>
  <td width="500" height="35"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive" size="-1">الرقم</font></td>
    <td width="500" height="35"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive" size="-1">الشهر</font></td>
    <td width="500" height="35"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive" size="-1">حالة الدفع</font></td>
    <td width="200" height="35"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive" size="-1">Delete</font></td>
    <td width="200" height="35"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive" size="-1">Update</font></td>

  </tr>');
     while ( $rows_pay = mysql_fetch_array($reslut_pay) )
  {
  echo('
  <tr>
  <td width="150" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font>'); echo( $rows_pay[0]);echo('</td>
    <td width="150" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font>'); echo( $rows_pay[3]);echo('</td>
    <td width="150" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font>'); echo( $rows_pay[4]);echo('</td>

    <td width="70" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font>');echo (' <a href="update payment_search.php?id= '); echo $rows_pay['id']; echo('">  update </a></td>
	   <td width="70" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font>');echo('<a href= "delete_payment_search.php?id='); echo $rows_pay['id']; echo('"> del </a></td>
 
  </tr>');
  }
  echo('
 

</table>
</div>
</div>
<div id="fotter4"></div>
</body>
</html>
');


?>