<?php
$p = $_POST["p"];
$p = str_replace(" ", "+", $p);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.googleapis.com/youtube/v3/search?part=snippet&q=".$p."&key=AIzaSyChZiMWemLfvXQ9FSObHaOb2E2gu_cVw10");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

$OBJ = curl_exec($ch);
$obj = json_decode($OBJ, true);


$term = str_replace("+", " ", $p);
echo "<br><br><br><h1>RESULTS for: ".$term."</h1><br><br>";
foreach($obj["items"] as $data) 
{
	//$url = "video.php?v='".$data['id']['videoId']."'&d='".$data['snippet']['description']."'&t='".$data['snippet']['title']."'";
	$html = "<div class='results'>
			 	<h2>".$data['snippet']['title']."</h2>
			 	<a href=video.php?v='".$data['id']['videoId']."'&d='".str_replace(" ","+",$data['snippet']['description'])."'&t='".str_replace(" ","+",$data['snippet']['title'])."' target='_blank'>
			 		<img src='".$data['snippet']['thumbnails']['medium']['url']."' height='130px' />
			 	</a>
				<br>
			</div><br><br>";
	echo $html;
}

curl_close($ch);

//echo "<iframe width='560' height='315' src='https://www.youtube.com/embed/S_aNltvQVNY' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
?>