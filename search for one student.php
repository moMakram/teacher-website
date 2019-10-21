<?php
include ("connec.php");
session_start();


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
<input name="search_s" id = "search_s" type="text"  style="border-radius:6px; width:143px; height:24px; margin-left:8px; border:none; margin-top:8px;" />
<input type="submit" name="button" id="button"    value="بحث"  style=" border-radius:4px;border:none;margin-left:-70px; position:absolute; margin-top:48px;" />
</form>


</div>');

echo('

</div>
</div>
<div id="fotter4"></div>
</body>
</html>
');
?>