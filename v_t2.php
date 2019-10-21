<html>
    <head>
        <script src="ajax.php"></script>
        <script type="text/javascript">
            $(function() {
                $("#bulan").keyup(function() {
                    var bulan = $("#bulan").val()
                    $(".bulan").text(bulan);
                });
            });
			document.cookie = 'bulan'= bulan ; 
        </script>

    </head>
    <body>
        <input name="bulan" type="text" id="bulan" value="00" size="2" maxlength="2" />
        <div class="bulan"></div>
		
    </body>
</html>




<script type="text/javascript">  
    document.cookie = 'name'=Khez ;  
</script>  
<?php  
    var_dump($_COOKIE['bulan']);  
?>  