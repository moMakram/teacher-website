<?php

include ("connec.php");




$result = mysql_query(" update news set news_desc ='$_POST[news_desc]' , news_app ='$_POST[news_app]' , news_order ='$_POST[news_order]'
  where id='$_POST[id]' " );


if($result)
{

echo('<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<script type="text/javascript">
alert ("تم التعديل بنجاح");
window.location ="delete or update news.php";
</script>
</body>
</html>
');
}

else
{

echo("error");
}

?>




