<?php

include ("connec.php");




$result = mysql_query(" update student set s_name ='$_POST[s_name]' , s_year ='$_POST[s_year]' , user_name ='$_POST[user_name]' , group_n = '$_POST[group_n]', pass ='$_POST[pass]'
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
window.location ="search for one student.php";
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




