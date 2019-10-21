<?php
echo('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>إدخال الأخبار</title>
<link href="Css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div id="add_news_word"></div>
<div id="header"></div>');
include ("menu.php");
echo('
<div id="body2">
<form id="form1" name="form1" method="post" action="ins group.php">

<table width="530" height="150" border="0" bordercolor="#000" style="margin-left:144px; margin-top:30px;">
  <tr>
    <td width="150"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">المجموعة</font></td>
    <td style="background-color:#060"><input name="group_n" type="text" style=" border:none;margin-left:6px; margin-top:2px; width:450px; height:20px;"/></td>
  </tr>
  <tr>
    <td width="150" style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">وقت البداية</font></td>
     <td style="background-color:#060"><input name="group_s" type="text" style=" border:none;margin-left:6px; margin-top:2px; width:450px; height:20px;"/></td>
  </tr>
  <tr>
    <td width="150" style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">وقت النهاية</font></td>
     <td style="background-color:#060"><input name="group_e" type="text" style=" border:none;margin-left:6px; margin-top:2px; width:450px; height:20px;"/></td>
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