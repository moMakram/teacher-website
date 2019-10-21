<?php
include ("connec.php");
$result = mysql_query(" select * from student where user_name ='$_POST[search_s]' ");


  $rows = mysql_fetch_array($result);
  if ($rows[0] <> '')
  {
  
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
<div id="search_form">
<form id="form1" name="form1" method="POST" action="search_stud.php">
<input name="search_s" type="text" style="border-radius:6px; width:143px; height:24px; margin-left:8px; border:none; margin-top:8px;" />
<input type="submit" name="button" id="button" value="بحث"  style=" border-radius:4px;border:none;margin-left:-70px; position:absolute; margin-top:48px;" />
</form>
</div>
<table width="650" height="100" border="0" bordercolor="#000" style="margin-left:55px; border:#009 groove 1px; margin-top:120px; position:absolute; width: 651px;">
  <tr height="10">
    <td width="150" height="10"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"  size="-1">الكود</font></td>
    <td width="800" height="10"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"  size="-1">إسم الطالب</font></td>
    <td width="150" height="10"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"  size="-1">المرحلة</font></td>
    <td width="150" height="10"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"  size="-1">username</font></td>
    <td width="150" height="10"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"  size="-1">password</font></td>
  <td width="150" height="10"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"  size="-1">Update</font></td>  
  <td width="150" height="10"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"  size="-1">Delete</font></td>
  
  </tr>
  <tr>
  

  
  <td width="150" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font>');echo $rows[0];echo(' </td>
    <td width="800" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">'); echo $rows[1];echo('</font></td>
    <td width="150" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font>'); echo $rows[2];echo('</td>
    <td width="150" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font>');echo $rows[3];echo('</td>
    <td width="150" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font>');echo $rows[4];echo('</td>
    <td width="150" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font>');echo (' <a href="update_st_search.php?id= '); echo $rows['id']; echo('">  update </a> </td>
    <td width="150" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font>');echo('<a href= "delete_st_search.php?id='); echo $rows['id']; echo('"> del </a></td>
</tr>


</table>
<div style="overflow:auto; height:300px; width:717px;margin-left:24px;border:#009 groove 2px; margin-top:250px; position:absolute;">
<table width="700" height="100" border="0" bordercolor="#000">
  <tr height="35">
    <td width="102" height="35"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"  size="-1">تاريخ الحصة</font></td>
    <td width="147" height="35"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"  size="-1">حالة الغياب</font></td>
    <td width="85" height="35"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive" size="-1">درجة التسميع</font></td>
    <td width="94" height="35"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"  size="-1">درجة الإمتحان</font></td>
    <td width="106" height="35"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"  size="-1">التقدير</font></td>
    <td width="61" height="35"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"  size="-1">Delete</font></td>
    <td width="73" height="35"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"  size="-1">Update</font></td>
  </tr>
  <tr>
    <td width="102" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="147" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
      <label for="select"></label>
      <select name="select" style="width:90px;" id="select">
        <option>حضور</option>
        <option>غياب</option>
      </select>
    </form></font></td>
    <td width="85" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="94" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="106" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
      <label for="select"></label>
      <select name="select" style="width:90px;" id="select">
        <option>Excellent</option>
        <option>Very good</option>
        <option>good</option>
        <option>Bad</option>
      </select>
    </form></font></td>
    <td width="61" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="73" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
  </tr>
  <tr>
    <td width="102" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="147" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
      <label for="select"></label>
      <select name="select" style="width:90px;" id="select">
        <option>حضور</option>
        <option>غياب</option>
      </select>
    </form></font></td>
    <td width="85" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="94" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="106" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
      <label for="select"></label>
      <select name="select" style="width:90px;" id="select">
        <option>Excellent</option>
        <option>Very good</option>
        <option>good</option>
        <option>Bad</option>
      </select>
    </form></font></td>
    <td width="61" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="73" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
  </tr>
  <tr>
    <td width="102" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="147" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
      <label for="select"></label>
      <select name="select" style="width:90px;" id="select">
        <option>حضور</option>
        <option>غياب</option>
      </select>
    </form></font></td>
    <td width="85" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="94" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="106" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
      <label for="select"></label>
      <select name="select" style="width:90px;" id="select">
        <option>Excellent</option>
        <option>Very good</option>
        <option>good</option>
        <option>Bad</option>
      </select>
    </form></font></td>
    <td width="61" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="73" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
  </tr>
  <tr>
    <td width="102" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="147" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
      <label for="select"></label>
      <select name="select" style="width:90px;" id="select">
        <option>حضور</option>
        <option>غياب</option>
      </select>
    </form></font></td>
    <td width="85" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="94" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="106" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
      <label for="select"></label>
      <select name="select" style="width:90px;" id="select">
        <option>Excellent</option>
        <option>Very good</option>
        <option>good</option>
        <option>Bad</option>
      </select>
    </form></font></td>
    <td width="61" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="73" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
  </tr>
  <tr>
    <td width="102" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="147" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
      <label for="select"></label>
      <select name="select" style="width:90px;" id="select">
        <option>حضور</option>
        <option>غياب</option>
      </select>
    </form></font></td>
    <td width="85" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="94" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="106" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
      <label for="select"></label>
      <select name="select" style="width:90px;" id="select">
        <option>Excellent</option>
        <option>Very good</option>
        <option>good</option>
        <option>Bad</option>
      </select>
    </form></font></td>
    <td width="61" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="73" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
  </tr>
  <tr>
    <td width="102" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="147" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
      <label for="select"></label>
      <select name="select" style="width:90px;" id="select">
        <option>حضور</option>
        <option>غياب</option>
      </select>
    </form></font></td>
    <td width="85" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="94" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="106" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
      <label for="select"></label>
      <select name="select" style="width:90px;" id="select">
        <option>Excellent</option>
        <option>Very good</option>
        <option>good</option>
        <option>Bad</option>
      </select>
    </form></font></td>
    <td width="61" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="73" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
  </tr>
  <tr>
    <td width="102" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="147" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
      <label for="select"></label>
      <select name="select" style="width:90px;" id="select">
        <option>حضور</option>
        <option>غياب</option>
      </select>
    </form></font></td>
    <td width="85" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="94" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="106" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
      <label for="select"></label>
      <select name="select" style="width:90px;" id="select">
        <option>Excellent</option>
        <option>Very good</option>
        <option>good</option>
        <option>Bad</option>
      </select>
    </form></font></td>
    <td width="61" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="73" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
  </tr>
  <tr>
    <td width="102" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="147" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
      <label for="select"></label>
      <select name="select" style="width:90px;" id="select">
        <option>حضور</option>
        <option>غياب</option>
      </select>
    </form></font></td>
    <td width="85" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="94" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="106" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
      <label for="select"></label>
      <select name="select" style="width:90px;" id="select">
        <option>Excellent</option>
        <option>Very good</option>
        <option>good</option>
        <option>Bad</option>
      </select>
    </form></font></td>
    <td width="61" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="73" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
  </tr>
  <tr>
    <td width="102" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="147" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
      <label for="select"></label>
      <select name="select" style="width:90px;" id="select">
        <option>حضور</option>
        <option>غياب</option>
      </select>
    </form></font></td>
    <td width="85" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="94" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="106" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
      <label for="select"></label>
      <select name="select" style="width:90px;" id="select">
        <option>Excellent</option>
        <option>Very good</option>
        <option>good</option>
        <option>Bad</option>
      </select>
    </form></font></td>
    <td width="61" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="73" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
  </tr>
  <tr>
    <td width="102" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="147" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
      <label for="select"></label>
      <select name="select" style="width:90px;" id="select">
        <option>حضور</option>
        <option>غياب</option>
      </select>
    </form></font></td>
    <td width="85" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="94" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="106" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
      <label for="select"></label>
      <select name="select" style="width:90px;" id="select">
        <option>Excellent</option>
        <option>Very good</option>
        <option>good</option>
        <option>Bad</option>
      </select>
    </form></font></td>
    <td width="61" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="73" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
  </tr>
  <tr>
    <td width="102" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="147" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
      <label for="select"></label>
      <select name="select" style="width:90px;" id="select">
        <option>حضور</option>
        <option>غياب</option>
      </select>
    </form></font></td>
    <td width="85" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="94" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="106" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
      <label for="select"></label>
      <select name="select" style="width:90px;" id="select">
        <option>Excellent</option>
        <option>Very good</option>
        <option>good</option>
        <option>Bad</option>
      </select>
    </form></font></td>
    <td width="61" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="73" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
  </tr>

</table>
</div>
<div style="position:absolute; width:577px; height:370px;margin-left:100px; overflow:auto; border:#009 2px groove; margin-top:588px;">
<table width="560" height="800" border="0" bordercolor="#000">
  <tr>
    <td width="500" height="35"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive" size="-1">الشهر</font></td>
    <td width="500" height="35"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive" size="-1">حالة الدفع</font></td>
    <td width="200" height="35"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive" size="-1">Delete</font></td>
    <td width="200" height="35"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive" size="-1">Update</font></td>

  </tr>
  <tr>
    <td width="200" height="35"  style="background:#090" align="center"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
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
    </form></td>
    <td width="400" height="35"  style="background:#090" align="center"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
      <label for="select"></label>
      <select name="select" style="width:120px; height:23px;" id="select">
        <option>دفع</option>
        <option>لم يدفع</option>
      </select>
    </form></td>
        <td width="200" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="200" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>

  </tr>
  <tr>
    <td width="200" height="35"  style="background:#090" align="center"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
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
    </form></td>
    <td width="400" height="35"  style="background:#090" align="center"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
      <label for="select"></label>
      <select name="select" style="width:120px; height:23px;" id="select">
        <option>دفع</option>
        <option>لم يدفع</option>
      </select>
    </form></td>
        <td width="200" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="200" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>

  </tr>
    <tr>
    <td width="200" height="35"  style="background:#090" align="center"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
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
    </form></td>
    <td width="400" height="35"  style="background:#090" align="center"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
      <label for="select"></label>
      <select name="select" style="width:120px; height:23px;" id="select">
        <option>دفع</option>
        <option>لم يدفع</option>
      </select>
    </form></td>
        <td width="200" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="200" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>

  </tr>
  <tr>
    <td width="200" height="35"  style="background:#090" align="center"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
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
    </form></td>
    <td width="400" height="35"  style="background:#090" align="center"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
      <label for="select"></label>
      <select name="select" style="width:120px; height:23px;" id="select">
        <option>دفع</option>
        <option>لم يدفع</option>
      </select>
    </form></td>
        <td width="200" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="200" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>

  </tr>
  <tr>
    <td width="200" height="35"  style="background:#090" align="center"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
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
    </form></td>
    <td width="400" height="35"  style="background:#090" align="center"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
      <label for="select"></label>
      <select name="select" style="width:120px; height:23px;" id="select">
        <option>دفع</option>
        <option>لم يدفع</option>
      </select>
    </form></td>
        <td width="200" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="200" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>

  </tr>
  <tr>
    <td width="200" height="35"  style="background:#090" align="center"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
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
    </form></td>
    <td width="400" height="35"  style="background:#090" align="center"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
      <label for="select"></label>
      <select name="select" style="width:120px; height:23px;" id="select">
        <option>دفع</option>
        <option>لم يدفع</option>
      </select>
    </form></td>
        <td width="200" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="200" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>

  </tr>
  <tr>
    <td width="200" height="35"  style="background:#090" align="center"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
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
    </form></td>
    <td width="400" height="35"  style="background:#090" align="center"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
      <label for="select"></label>
      <select name="select" style="width:120px; height:23px;" id="select">
        <option>دفع</option>
        <option>لم يدفع</option>
      </select>
    </form></td>
        <td width="200" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="200" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>

  </tr>
  <tr>
    <td width="200" height="35"  style="background:#090" align="center"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
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
    </form></td>
    <td width="400" height="35"  style="background:#090" align="center"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
      <label for="select"></label>
      <select name="select" style="width:120px; height:23px;" id="select">
        <option>دفع</option>
        <option>لم يدفع</option>
      </select>
    </form></td>
        <td width="200" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="200" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>

  </tr>
  <tr>
    <td width="200" height="35"  style="background:#090" align="center"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
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
    </form></td>
    <td width="400" height="35"  style="background:#090" align="center"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
      <label for="select"></label>
      <select name="select" style="width:120px; height:23px;" id="select">
        <option>دفع</option>
        <option>لم يدفع</option>
      </select>
    </form></td>
        <td width="200" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="200" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>

  </tr>
  <tr>
    <td width="200" height="35"  style="background:#090" align="center"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
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
    </form></td>
    <td width="400" height="35"  style="background:#090" align="center"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
      <label for="select"></label>
      <select name="select" style="width:120px; height:23px;" id="select">
        <option>دفع</option>
        <option>لم يدفع</option>
      </select>
    </form></td>
        <td width="200" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="200" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>

  </tr>
  <tr>
    <td width="200" height="35"  style="background:#090" align="center"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
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
    </form></td>
    <td width="400" height="35"  style="background:#090" align="center"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
      <label for="select"></label>
      <select name="select" style="width:120px; height:23px;" id="select">
        <option>دفع</option>
        <option>لم يدفع</option>
      </select>
    </form></td>
        <td width="200" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="200" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>

  </tr>
  <tr>
    <td width="200" height="35"  style="background:#090" align="center"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
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
    </form></td>
    <td width="400" height="35"  style="background:#090" align="center"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
      <label for="select"></label>
      <select name="select" style="width:120px; height:23px;" id="select">
        <option>دفع</option>
        <option>لم يدفع</option>
      </select>
    </form></td>
        <td width="200" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="200" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>

  </tr>
  <tr>
    <td width="200" height="35"  style="background:#090" align="center"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
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
    </form></td>
    <td width="400" height="35"  style="background:#090" align="center"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
      <label for="select"></label>
      <select name="select" style="width:120px; height:23px;" id="select">
        <option>دفع</option>
        <option>لم يدفع</option>
      </select>
    </form></td>
        <td width="200" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="200" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>

  </tr>
  <tr>
    <td width="200" height="35"  style="background:#090" align="center"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
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
    </form></td>
    <td width="400" height="35"  style="background:#090" align="center"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
      <label for="select"></label>
      <select name="select" style="width:120px; height:23px;" id="select">
        <option>دفع</option>
        <option>لم يدفع</option>
      </select>
    </form></td>
        <td width="200" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="200" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>

  </tr>
  <tr>
    <td width="200" height="35"  style="background:#090" align="center"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
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
    </form></td>
    <td width="400" height="35"  style="background:#090" align="center"><form id="form1" style="margin-left:6px; width:100px;" name="form1" method="post" action="">
      <label for="select"></label>
      <select name="select" style="width:120px; height:23px;" id="select">
        <option>دفع</option>
        <option>لم يدفع</option>
      </select>
    </form></td>
        <td width="200" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>
    <td width="200" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font></td>

  </tr>

</table>
</div>
</div>
<div id="fotter4"></div>
</body>
</html>
');
}
else
{
echo('<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<script type="text/javascript">
alert ("لا يوجد طالب مسجل بهذا الكود");
window.location ="search for one student.php";
</script>
</body>
</html>
');
}
?>