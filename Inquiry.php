<?php
session_start();
include ("connec.php");
$user = $_SESSION['user_i'];
//$reslut=mysql_query("select * from inquiry where app = 'يظهر'  and  user_name = $_SESSION['user_i'] ");
$reslut=mysql_query("select * from inquiry where app='يظهر' and  user_name='$user' ");
if ($_SESSION['user_in']=='pass')

{



echo('
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Inquiry</title>
<link href="Css/Style.css" rel="stylesheet" type="text/css" media="all" />
<link href="data:image/x-icon;base64,AAABAAEAEBAAAAAAAABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP7+/gD7+/sD/Pz8A/v7+wP7+/sD/Pz8Avz8/AL8/PwC/Pz8Av7+/gD///8A/Pz8Avv7+wP9/f0C////AP///wD5+fkF7OzsEu3t7RLq6uoU5eXlGe7u7hDt7e0R7+/vD+vr6xPz8/ML+fn5Bezs7BLq6uoV+fn5Bf///wD+/v4A+Pj4B7OTT6/e3t4huZ1lmaqEM8vf398fuZlYptva2CaddR7g1c7BPe7u7hCyklOrtZBEuvv7+wT///8A/v7+APn5+QXKtIJ81tbWKbaSQb22kkK81dPPMLmYSrTTybNLp3QA/8/Kvz/Rzsk1sogq1OXk4R3///8A////AP7+/gD5+fkFy7R8gsC3o1uzjjfHuptOsLqXQL69mUO71cuzS6aBJti9nEyyuJEyzNC7iXX9/f0B////AP///wD+/v4A+fn5BdO9hHu9lSzT0LFhneHd1CvKrF+fwpoxzdzb2SW5iAT6u4wO8cOjT6/p6ekV+fn5Bv7+/gH///8A////APr6+gTPrlWqxpQH99vSuUX5+fkFxJMI9smgLdHb0rZIxJEA/9a9eIbKpDrExrN/f+np6Bb7+/sD////AP///wD9/f0B1a9Du82eF+f7+/sD/f39AsqybJLRpyvT6unmGMehMM7i2sI8/Pz8AtWwR7jexHSL/Pz8Av///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A//8AAP//AAD//wAA//8AAP//AADpWQAA+VsAAOhHAADyRwAA5kcAAOZZAAD//wAA//8AAP//AAD//wAA//8AAA==" rel="icon" type="image/x-icon" />

</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<style type="text/css">
#cssmenu ul,
#cssmenu li,
#cssmenu span,
#cssmenu a {
  margin: 0;
  padding: 0;
  position: relative;
}
#cssmenu {
  height: 49px;
  width:990px;
  margin-left:0px;
  margin-top:170px;
  background: #141414;
  background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAxCAIAAACUDVRzAAAAA3NCSVQICAjb4U/gAAAALElEQVQImWMwMrJi+v//PxMDw3+m//8ZoPR/qBgDEhuXGLoeYswhXg8R5gAAdVpfoJ3dB5oAAAAASUVORK5CYII=) 100% 100%; 
  background: -moz-linear-gradient(top, #32323a 0%, #141414 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #32323a), color-stop(100%, #141414));
  background: -webkit-linear-gradient(top, #32323a 0%, #141414 100%);
  background: -o-linear-gradient(top, #32323a 0%, #141414 100%);
  background: -ms-linear-gradient(top, #32323a 0%, #141414 100%);
  background: linear-gradient(to bottom, #32323a 0%, #141414 100%);
  border-bottom: 2px solid #0fa1e0;
}
#cssmenu:after,
#cssmenu ul:after {
  content: "";
  display: block;
  clear: both;
}
#cssmenu a {
  background: #141414;
  background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAxCAIAAACUDVRzAAAAA3NCSVQICAjb4U/gAAAALElEQVQImWMwMrJi+v//PxMDw3+m//8ZoPR/qBgDEhuXGLoeYswhXg8R5gAAdVpfoJ3dB5oAAAAASUVORK5CYII=) 100% 100%; 
  background: -moz-linear-gradient(top, #32323a 0%, #141414 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #32323a), color-stop(100%, #141414));
  background: -webkit-linear-gradient(top, #32323a 0%, #141414 100%);
  background: -o-linear-gradient(top, #32323a 0%, #141414 100%);
  background: -ms-linear-gradient(top, #32323a 0%, #141414 100%);
  background: linear-gradient(to bottom, #32323a 0%, #141414 100%);
  color: #ffffff;
  display: inline-block;
  font-family: Helvetica, Arial, Verdana, sans-serif;
  font-size: 12px;
  line-height: 49px;
  padding: 0 20px;
  text-decoration: none;
}
#cssmenu ul {
  list-style: none;
}
#cssmenu > ul {
  float: left;
}
#cssmenu > ul > li {
  float: left;
}
#cssmenu > ul > li:hover:after {
  content: "";
  display: block;
  width: 0;
  height: 0;
  position: absolute;
  left: 50%;
  bottom: 0;
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  border-bottom: 10px solid #0fa1e0;
  margin-left: -10px;
}
#cssmenu > ul > li:first-child > a {
  border-radius: 5px 0 0 0;
  -moz-border-radius: 5px 0 0 0;
  -webkit-border-radius: 5px 0 0 0;
}
#cssmenu > ul > li:last-child > a {
  border-radius: 0 5px 0 0;
  -moz-border-radius: 0 5px 0 0;
  -webkit-border-radius: 0 5px 0 0;
}
#cssmenu > ul > li.active a {
  box-shadow: inset 0 0 3px #000000;
  -moz-box-shadow: inset 0 0 3px #000000;
  -webkit-box-shadow: inset 0 0 3px #000000;
  background: #070707;
  background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAxCAIAAACUDVRzAAAAA3NCSVQICAjb4U/gAAAALklEQVQImWNQU9Nh+v//PxMDw3+m//8ZkNj/mRgYIHxy5f//Z0BSi18e2TwS5QG4MGB54HL+mAAAAABJRU5ErkJggg==) 100% 100%; 
  background: -moz-linear-gradient(top, #26262c 0%, #070707 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #26262c), color-stop(100%, #070707));
  background: -webkit-linear-gradient(top, #26262c 0%, #070707 100%);
  background: -o-linear-gradient(top, #26262c 0%, #070707 100%);
  background: -ms-linear-gradient(top, #26262c 0%, #070707 100%);
  background: linear-gradient(to bottom, #26262c 0%, #070707 100%);
}
#cssmenu > ul > li:hover > a {
  background: #070707;
  background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAxCAIAAACUDVRzAAAAA3NCSVQICAjb4U/gAAAALklEQVQImWNQU9Nh+v//PxMDw3+m//8ZkNj/mRgYIHxy5f//Z0BSi18e2TwS5QG4MGB54HL+mAAAAABJRU5ErkJggg==) 100% 100%; 
  background: -moz-linear-gradient(top, #26262c 0%, #070707 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #26262c), color-stop(100%, #070707));
  background: -webkit-linear-gradient(top, #26262c 0%, #070707 100%);
  background: -o-linear-gradient(top, #26262c 0%, #070707 100%);
  background: -ms-linear-gradient(top, #26262c 0%, #070707 100%);
  background: linear-gradient(to bottom, #26262c 0%, #070707 100%);
  box-shadow: inset 0 0 3px #000000;
  -moz-box-shadow: inset 0 0 3px #000000;
  -webkit-box-shadow: inset 0 0 3px #000000;
}
#cssmenu .has-sub {
  z-index: 1;
}
#cssmenu .has-sub:hover > ul {
  display: block;
}
#cssmenu .has-sub ul {
  display: none;
  position: absolute;
  width: 200px;
  top: 100%;
  left: 0;
}
#cssmenu .has-sub ul li {
  *margin-bottom: -1px;
}
#cssmenu .has-sub ul li a {
  background: #0fa1e0;
  border-bottom: 1px dotted #6fc7ec;
  filter: none;
  font-size: 11px;
  display: block;
  line-height: 120%;
  padding: 10px;
}
#cssmenu .has-sub ul li:hover a {
  background: #0c7fb0;
}
#cssmenu .has-sub .has-sub:hover > ul {
  display: block;
}
#cssmenu .has-sub .has-sub ul {
  display: none;
  position: absolute;
  left: 100%;
  top: 0;
}
#cssmenu .has-sub .has-sub ul li a {
  background: #0c7fb0;
  border-bottom: 1px dotted #6db2d0;
}
#cssmenu .has-sub .has-sub ul li a:hover {
  background: #095c80;
}</style>

<div id="Background">
<a href="Photo_gallery.html"><div id="slide1">
</div></a>
<div id="contaner">
<div id="header">
<div id="logo"></div>');
include ("nav.php");
echo('
<div id="body">
<div id="reg_column"></div>
<div id="inquiry_"></div>
<form id="form1" name="form1" method="post" action="ins_mass.php">
<div id="inquiry2_button"> <input type="submit" name="button" id="button" value="Submit" />  </div>
<textarea name="mass" cols="" rows="" wrap="virtual" style=" background:#069; color:#FFF; position:absolute; border:none; width:356px;  max-width:356px; height:100px; max-height:100px; margin-left:300px; margin-top:70px; border-radius:4px 4px 4px 4px;" value=" your inquiries are......"  placeholder=" your inquiries are......" onfocus="this.value=(" ");"></textarea>
</form>
<div style="width:635px; overflow:auto; height:200px; margin-left:200px; margin-top:280px; position:absolute;">
<table width="600" border="0" style="margin-top:0px; margin-left:0px; position:absolute; text-align: center; left: 3px; width: 612px;">
  <tr>
    <td width="296" height="35" background="Images/tr_color.png"><font face="Comic Sans MS, cursive" style="font-size:14px" color="#FFFFFF">Inquiry</font></td>
    <td width="260" height="35" background="Images/tr_color.png"><font color="#FFFFFF" face="Comic Sans MS, cursive">Our answer</font></td>
  </tr>
  ');
            while ( $rows = mysql_fetch_array($reslut) )
  {
  echo('
  <tr>
    <td background="Images/tr_color2.png" height="25" width="300">'); echo $rows[2] ; echo('</td>
    <td background="Images/tr_color4.png" height="25"  width="300">'); echo $rows[3] ; echo('</td>
  </tr>
  ');
  }
  echo('
  
</table>
</div>




  <div id="fotter">
  <div id="oxford_word"></div>

  <div id="fotter_word"></div></div>
</div>
</div>
<div id="triangle"></div>
<div id="facebook"></div>
<div id="triangle1"></div>
<div id="twitter"></div>
<div id="triangle2"></div>
<div id="skype"></div>
<div id="triangle3"></div>
<div id="viber"></div>
<div id="triangle4"></div>
<div id="Youtube"></div>
<a href="About Us.html"><div id="teacher"></div></a>
<a href="Honarary board.html"><div id="board"></div></a>
<a href="Reservation.html"><div id="reservation"></div></a><a href="Contact Us.html"><div id="Inquiry"></div></a>
<div id="opinion">


<div id="vote"></div>
  <p>
    <label>
      <input type="radio" style="margin-left:30px; color:#FFF; margin-top:90px; " name="RadioGroup1" value="radio" id="RadioGroup1_0" /> 
      <font face="bell Gothic std" color="#FFFFFF"> Excellent </font></label>
    
    
    
    
    
  </p>
  <p>
    <label>
      <input type="radio" style="margin-left:30px; color:#FFF; margin-top:-9px; " name="RadioGroup1" value="radio" id="RadioGroup1_" />
      <font face="bell Gothic std" color="#FFFFFF">Good</font>  </label>
  </p>
  
   <p>
    <label>
      <input type="radio" style="margin-left:30px; color:#FFF; margin-top:-5px; " name="RadioGroup1" value="radio" id="RadioGroup1_" />
      <font face="bell Gothic std" color="#FFFFFF">Bad</font>  </label>
  </p>
</div>
</div>
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
alert ("تاكد من الرقم السرى و اسم المستخدم التى قمت بادخالهم");
window.location ="index.php";
</script>
</body>
</html>
');
}
?>