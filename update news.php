<?php
include ("connec.php");

$id=$_GET['id'];

$result = mysql_query(" select * from news where id ='$id' ");

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
<form id="form1" name="form1" method="post" action="update_ac_news.php">

<table width="530" height="150" border="0" bordercolor="#000" style="margin-left:144px; margin-top:30px;">
 <tr>
    <td width="150"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">رقم الخبر</font></td>
    <td style="background-color:#060"><input name="id" type="text" value=" '); echo $rows['0']; echo('"
	style=" border:none;margin-left:6px; margin-top:2px; width:450px; height:20px;"/></td>
  </tr> 

 <tr>
    <td width="150"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">الخبر</font></td>
    <td style="background-color:#060"><input name="news_desc" type="text" value=" '); echo $rows['1']; echo('"
	style=" border:none;margin-left:6px; margin-top:2px; width:450px; height:20px;"/></td>
  </tr>
  <tr>
    <td width="150" style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">حالة الظهور</font></td>
    <td style="background-color:#060"><select name="news_app" id="news_app" 
	style=" border:none;margin-left:6px; margin-top:2px; width:307px; height:20px;">
	 <option>');echo $rows[2];  echo('</option>');
	 if ( $rows[2] == "لا يظهر")
	 {
	 echo('
    <option>يظهر</option>');
	}
	else
	{
	echo('
    <option>لا يظهر</option>
	');
	}
	echo('
  </select></td>
  </tr>
  <tr>
    <td width="150" style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">ترتيب الخبر</font></td>
    <td style="background-color:#060"><input name="news_order" type="text" value=" '); echo $rows['3']; echo('"
	style=" border:none;margin-left:6px; margin-top:2px; width:307px; height:20px;"/></td>
  </tr>
<tr>
  <td style="background-color:#060"><input type="submit" name="button" id="button" value="Submit" /></td>
  </tr>

</table>
</form>

<div id="submit2"></div>
</div>
<div id="fotter"></div>
</body>
</html>
');
?>