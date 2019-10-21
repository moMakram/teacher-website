<?php
include ("connec.php");

$id=$_GET['id'];

$result = mysql_query(" select * from payment where id ='$id' ");

$results = mysql_query(" select s_name from student");


$rows=mysql_fetch_array($result);

echo('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>تعديل الاخبار</title>
<link href="Css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div id="add_news_word"></div>
<div id="header"></div>');
include ("menu.php");
echo('
<div id="body2">
<form id="form1" name="form1" method="post" action="update_ac_payment_search.php">
<table width="480" height="150" border="0" bordercolor="#000" style="margin-left:144px; margin-top:30px;">
 
	<tr>
    <td width="150"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">رقم الطالب</font></td>
    <td style="background-color:#060"><input name="id" type="text" value=" '); echo $rows['0']; echo('"
	style=" border:none;margin-left:6px; margin-top:1px; width:307px; height:20px;"/></td>
	</tr>
  
       <tr>
      <td width="150"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">إسم الطالب</font></td>
       <td style="background-color:#060">
      <label for="select"></label>
      <select name="select_name" style="width:300px;" id="select_name">
	  
	  ');
 echo(' <option>');echo($rows[2]);echo('</option>');
	      while ( $rows_s = mysql_fetch_array($results) )
  {
  echo('
        <option>');echo($rows_s[0]);echo('</option>
		');
		}
		echo('
        
      </select>
   </td>
    </tr>
   
 
  <tr>
  <td width="200" height="35"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">الشهر</font></td>
    <td width="200" height="35"  style="background:#090" align="center">
      <label for="select"></label>
      <select name="select_m" style="width:120px; height:23px;" id="select">');
	  echo(' <option>');echo($rows[3]);echo('</option>');
     echo('   <option>يناير</option>
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
    </form></td>
	</tr>
	<tr>
	 <td width="400" height="35"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">حالة الدفع</font></td>
    <td width="400" height="35"  style="background:#090" align="center">
      <label for="select"></label>
      <select name="select_p" style="width:120px; height:23px;" id="select">');
	   echo(' <option>');echo($rows[4]);echo('</option>');
	  echo('
        <option>دفع</option>
        <option>لم يدفع</option>
      </select>
    </td>
  </tr>
   <td style="background-color:#060"><input type="submit" name="button" id="button" value="Submit" /></td>
</table>
</form>
</form>

<div id="submit2"></div>
</div>
<div id="fotter"></div>
</body>
</html>
');
?>