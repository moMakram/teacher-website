<?php
include ("connec.php");
$id=$_GET['id'];
$result = mysql_query("delete from payment where id = ('$id') "); 


if ($result)
{
 echo('<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<script type="text/javascript">
alert ("تم الحذف بنجاح");
window.location ="delete or update payment.php";
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