<html>
    <head>
        <script src="ajax.php"></script>
        <script type="text/javascript">
            $(function() {
                $("#search_s").keyup(function() {
                    var search_s = $("#search_s").val()
                    $(".search_s").text(search_s);
                });
            });
			
        </script>

    </head>
    <body>
        <input name="search_s" type="text" id="search_s" value="00" size="2" maxlength="2" />
        <div class="search_s"></div>
		
    </body>
</html>

