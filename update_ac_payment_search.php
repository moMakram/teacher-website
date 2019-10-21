<?php

include ("connec.php");



$result = mysql_query(" update payment set pay_c ='$_POST[select_p]'  where id='$_POST[id]' " );


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
window.location ="search_stud _cont.php";
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




