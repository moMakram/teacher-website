<?php
include ("connec.php");
$reslut=mysql_query("select * from inquiry ");

echo('
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>الإستفسارات و الرد عليها</title>
<link href="Css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div id="inquiry_reply_word"></div>
<div id="header"></div>');
include ("menu.php");
echo('<div id="body7">
<div style="overflow:auto; width:758px; margin-top:5px; height:470px; position:absolute; ">
<table width="741">
  <tr style="background-color:#000; height:50px;">
    <td width="10"><font face="Comic Sans MS, cursive" color="#FFFFFF"><p align="center">ID</p></font></td>
	    <td width="10"><font face="Comic Sans MS, cursive" color="#FFFFFF"><p align="center">name</p></font></td>

    <td width="140"><font face="Comic Sans MS, cursive" color="#FFFFFF"><p align="center">Inquiry</p></font></td>
    <td width="140"><font face="Comic Sans MS, cursive" color="#FFFFFF"><p align="center">our Answer</p></font></td>
    <td width="50"><font face="Comic Sans MS, cursive" color="#FFFFFF"><p align="center" style="font-size:14px;">حالة الظهور</p></font></td>
<td width="20"><font face="Comic Sans MS, cursive" color="#FFFFFF"><p align="center" style="font-size:16px;">update</p></font></td>   
   <td width="20"><font face="Comic Sans MS, cursive" color="#FFFFFF"><p align="center" style="font-size:16px;">Delete</p></font></td>
  </tr>');
   while ( $rows = mysql_fetch_array($reslut) )


  {
     $reslut_st=mysql_query("select * from student where user_name = '$rows[1]'");
   $rows_st =  mysql_fetch_array($reslut_st) ;
   
  echo('
  <tr style="background-color:#060;">
    <td width="10"><font face="Comic Sans MS, cursive" color="#FFFFFF"><p align="center">');echo $rows[0];echo('</p></font></td>
	    <td width="10"><font face="Comic Sans MS, cursive" color="#FFFFFF"><p align="center">');echo $rows_st[1];echo('</p></font></td>

    <td width="140"><font face="Comic Sans MS, cursive" color="#FFFFFF"><p align="center">');echo $rows[2];echo('</p></font></td>
<td width="50"><font face="Comic Sans MS, cursive" color="#FFFFFF"><p align="center" style="font-size:14px;">');echo $rows[3];echo('</p></font></td>
    <td width="50"><font face="Comic Sans MS, cursive" color="#FFFFFF"><p align="center" style="font-size:14px;">');echo $rows[4];echo('</p></font></td>
    <td width="70" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font>');echo (' <a href="update_inquiries.php?id= '); echo $rows['id']; echo('">  update </a></td>
	   <td width="70" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font>');echo('<a href= "delete_inquiry.php?id='); echo $rows['id']; echo('"> del </a></td>

  </tr>');
  }
  echo('
 

</table>

</div>
</div>
<div id="fotter"></div>
</body>
</html>
');
?>
