<?php
include ("connec.php");


    if ($_FILES["file"]["error"] > 0)
    {
        echo "Error Code: " . $_FILES["file"]["error"];
        echo "<br />";
    }
    else
    {
        echo "Uploaded File Name: " . $_FILES["file"]["name"];
        echo "<br />";
        echo "File Type: " . $_FILES["file"]["type"];
        echo "<br />";
        echo "File Size: " . ($_FILES["file"]["size"])." bytes";
        echo "<br />";
        echo "Temp file name: " . $_FILES["file"]["tmp_name"];
        echo "<br />";

        if (file_exists("js_pho/" . $_FILES["file"]["name"]))
        {
            echo "A file with the name " . $_FILES["file"]["name"] . " already exists. ";
        }
        else
        {
            move_uploaded_file($_FILES["file"]["tmp_name"], "js_pho/" . $_FILES["file"]["name"]);
            echo "The file was stored in: " . "js_pho/" . $_FILES["file"]["name"];
        }
    }
	   $imname =  $_FILES["file"]["name"];
	   
  $result = mysql_query("INSERT INTO `teach`.`js_pho` (`descr`)
 values('$imname' )");
 echo "<br />";
if ($result){
echo ("inserted");
echo("<br>");
echo('<a href ="control.php"> goto control  </a>');
}
else
{
echo "error";
}

?>