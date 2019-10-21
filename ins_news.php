<?php
include ("connec.php");
   $result = mysql_query("INSERT INTO `teach`.`news` (`news_desc` ,`news_app` ,`news_order`)
 values('$_POST[news_desc]' , '$_POST[news_app]' , '$_POST[news_order]') ");


if ($result)
{
echo('<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<script type="text/javascript">
alert ("تم التسجيل بنجاح");
window.location ="add news.php";
</script>
</body>
</html>
');



}
else
{
echo ("error");
}

?>