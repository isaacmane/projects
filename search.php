<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h2>YOUTUBE SEARCH</h2>

<form action="/">
	Search:<br>
	<input type="text" name="p" value="" id="p">
	<br><br>
	<input type='button' value='Search' id="post-lgn" />
</form>

<div id="result"></div>
</body>
<script>
    $("#post-lgn").click(function(){      
    	var p = $("#p").val(); 
        $.post("results.php", { p:p } ,function(data){
            $("#result").html(data);
        });
    });
</script>
</html>