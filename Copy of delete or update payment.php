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
<div id="header"></div>
<div id="menu">
<a href="control.html"><div id="nav1"></div></a>
<a href="delete or update student.html"><div id="nav2"></div></a>
<a href="Add students.html"><div id="nav13"></div></a>
<a href="Add pictures.html"><div id="nav17"></div></a>
<a href="delete or update pictures.html"><div id="nav18"></div></a>
<a href="add news.html"><div id="nav19"></div></a>
<a href="delete or update news.html"><div id="nav20"></div></a>
<a href="add level student.html"><div id="nav21"></div></a>
<a href="delete or update level student.html"><div id="nav22"></div></a>
<a href="add payment.html"><div id="nav23"></div></a>

</div>
<div id="body2">
<table width="560" height="150" border="0" bordercolor="#000" style="margin-left:100px; margin-top:30px;">
  <tr>
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
     
    <td style="background-color:#060">
      <label for="select"></label>
      <select name="select_name" style="width:300px;" id="select_name">
	  
	  ');
	echo(' <option>');echo('اختر اسم الطالب');echo('</option>');
	      while ( $rows_s = mysql_fetch_array($result_s) )
  {
  echo('
        <option>');echo($rows_s[0]);echo('</option>
		');
		}
		echo('
        
      </select>
   </td>
    <td width="200" height="35"  style="background:#090" align="center">
      <label for="select"></label>
      <select name="select" style="width:120px; height:23px;" id="select">
        <option>يناير</option>
        <option>فبراير</option>
        <option>مارس</option>
        <option>إبريل</option>
        <option>مايو</option>
        <option>ينيو</option>
        <option>يوليو</option>
        <option>أغسطس</option>
        <option>سبتمبر</option>
        <option>أكتوبر</option>
        <option>نوفمبر</option>
        <option>ديسمبر</option>
      </select>
    </td>
    <td width="400" height="35"  style="background:#090" align="center">
      <label for="select"></label>
      <select name="select" style="width:120px; height:23px;" id="select">
        <option>دفع</option>
        <option>لم يدفع</option>
      </select>
    </td>
     <td width="150" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font>');echo (' <a href="update_st.php?id= '); echo $rows['id']; echo('">  update </a> </td>
    <td width="150" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font>');echo('<a href= "delete_st.php?id='); echo $rows['id']; echo('"> del </a></td>
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
