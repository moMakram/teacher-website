<?php
include ("connec.php");
 $result = mysql_query(" select * from group_st");
echo('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>إضافة الطالب</title>
<link href="Css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div id="add_students_word"></div>
<div id="header"></div>');
include ("menu.php");
echo('
<div id="body2">
<form id="form1" name="form1" method="post" action="ins_stud.php">
  <table width="480" height="150" border="0" bordercolor="#000" style="margin-left:144px; margin-top:30px;">
    <tr>
      <td width="150"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">إسم الطالب</font></td>
      <td style="background-color:#060"><input name="s_name" type="text" style=" border:none;margin-left:6px; margin-top:2px; width:307px; height:20px;"/></td>
    </tr>
    <tr>
      <td width="150" style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">المرحلة</font></td>
      <td style="background-color:#060"><select name="s_year" id="s_year"  style=" border:none;margin-left:6px; margin-top:2px; width:307px; height:20px;">
        <option>sec_year</option>
        <option>thierd_year</option>
      </select></td>
    </tr>
    <tr>
      <td width="150" style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">Username</font></td>
      <td style="background-color:#060"><input name="user_name" type="text" style=" border:none;margin-left:6px; margin-top:2px; width:307px; height:20px;"/></td>
    </tr>
    <tr>
      <td width="150" style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">Password</font></td>
      <td style="background-color:#060"><input name="pass" type="text" style=" border:none;margin-left:6px; margin-top:2px; width:307px; height:20px;"/></td>
    </tr>
	<tr>
	     <td width="150" style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">المجموعة</font></td>
      <td style="background-color:#060"><select name="group_n" id="group_n"  style=" border:none;margin-left:6px; margin-top:2px; width:307px; height:20px;">
        <option>-----</option>');
		      while ( $rows = mysql_fetch_array($result) )
  {
  echo('
        <option>');echo($rows[1]);echo('</option>
		');
		}
		echo('
      </select></td>
    </tr>
	<tr>
  <td style="background-color:#060"><input type="submit" name="button" id="button" value="Submit" /></td>
  </tr>
  </table>
</form>
</div>

</div>

<div id="fotter"></div>
s
</body>
</html>

');
?>