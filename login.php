<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

<h2>YOUTUBE SEARCH</h2>

<form action="process.php" method="post">
	Username:<br>
	<input type="text" name="user" value="" id="user">
	<br>
	Password:<br>
	<input type="password" name="pwd" value="" id="pwd">
	<br><br>
	<input type='submit' value='Login' id="post-lgn" />
</form>

</body>
<script>
    // $("#post-lgn").click(function(){      
    // 	var username = $("#user").val(); 
    // 	var password = $("#pwd").val();
    //     $.post("process.php", { u:username, p:password } ,function(data){
    //         $("#result").html(data);
    //     });
    // });
</script>
</html>