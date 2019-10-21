<?php
echo('
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>إضافة الصور</title>
<link href="Css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div id="add_pictures_word"></div>
<div id="header"></div>');
include ("menu.php");
echo('
<div id="body2">
 <form action="upload_js_pho.php" method="post" enctype="multipart/form-data">
<input type="file" name="file" style="background-color:#090; border-radius:4px; margin-left:250px; margin-top:70px;" />
<div><p align="center">
   <input type="submit" name="submit" value="Upload"  />
</p>
</div>
</form>
<div id="submit2"></div>
</div>

<div id="fotter"></div>
</body>
</html>');
?>