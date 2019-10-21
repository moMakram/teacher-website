<?php
include ("connec.php");
 $result = mysql_query(" select s_name from student");

echo('
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>إدخال مستوى الطالب</title>
<link href="Css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div id="add_level_students_word"></div>
<div id="header"></div>');
include ("menu.php");
echo('
<div id="body2">
<form id="form1" name="form1" method="post" action="ins_leavel.php">

<table width="480" height="150" border="0" bordercolor="#000" style="margin-left:144px; margin-top:30px;">


 <tr>
    <td width="150"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">اسم الطالب</font></td>
    <td style="background-color:#060">
      <label for="select"></label>
      <select name="select_name" style="width:300px;" id="select_name">
	  
	  ');
	echo(' <option>');echo('اختر اسم الطالب');echo('</option>');
	      while ( $rows = mysql_fetch_array($result) )
  {
  echo('
        <option>');echo($rows[0]);echo('</option>
		');
		}
		echo('
        
      </select>
   </td>
  <tr>
    <td width="150"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">تاريخ الحصة</font></td>
    <td style="background-color:#060"><input name="h_date" type="text" style=" border:none;margin-left:6px; margin-top:1px; width:307px; height:20px;"/></td>
  </tr>
  <tr>
    <td width="150"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">حالة الغياب</font></td>
    <td style="background-color:#060">
      <label for="select"></label>
      <select name="selectt" style="width:90px;" id="selectt">
        <option>حضور</option>
        <option>غياب</option>
      </select>
   </td>
  </tr>
  <tr>
    <td width="150"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">درجة التسميع</font></td>
    <td style="background-color:#060"><input name="t_gread" type="text" style=" border:none;margin-left:6px; margin-top:1px; width:307px; height:20px;"/></td>
  </tr>
  <tr>
    <td width="150"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">درجة الإمتحان</font></td>
    <td style="background-color:#060"><input name="ex_gread" type="text" style=" border:none;margin-left:6px; margin-top:1px; width:307px; height:20px;"/></td>
  </tr>
  <tr>
    <td width="150"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">التقدير</font></td>
    <td style="background-color:#060">
      <label for="select"></label>
      <select name="selectth" style="width:90px;" id="selectth">
	    <option>---</option>
        <option>Excellent</option>
        <option>Very good</option>
        <option>good</option>
        <option>Bad</option>
      </select>
   </td>
  </tr>
  <tr>
  <td style="background-color:#060"><input type="submit" name="button" id="button" value="Submit" /></td>
  </tr>
</table>
</form>

</div>
<div id="fotter"></div>
</body>
</html>
');
?>