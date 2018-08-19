<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>SLIDER</title>
		<link rel="stylesheet" type="text/css" href="slick-master/slick/slick.css"/>
		<link rel="stylesheet" type="text/css" href="slick-master/slick/slick-theme.css"/>
		<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		
		<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript" src="slick-master/slick/slick.min.js"></script>
	</head>
	<body style="background-color:gray;">
		<script type="text/javascript">
			$(document).ready(function(){
				
				$('.test-slider').slick({
					infinite: true,
					dots: true,
					slidesToShow: 5,
					slidesToScroll: 1,
					arrows:true,
					adaptiveHeight: true
				});
				
				
			});
		</script>
		<div class="test-slider" style="width:70%;height:50%;margin-top:20%;margin-left:15%;">
			<div class="image-shell" style="padding:5%;width:10%;height:10%;">
				<img class="image" src="images/1.jpg" width="200" height="150" style="width:90%;height:90%;">
			</div>
			<div class="image-shell" style="padding:5%;width:10%;height:10%;">
				<img class="image" src="images/2.jpg" width="200" height="150" style="width:90%;height:90%;">
			</div>
			<div class="image-shell" style="padding:5%;width:10%;height:10%;">
				<img class="image" src="images/3.jpg" width="200" height="150" style="width:90%;height:90%;">
			</div>
			<div class="image-shell" style="padding:5%;width:10%;height:10%;">
				<img class="image" src="images/4.png" width="200" height="150" style="width:90%;height:90%;">
			</div>
			<div class="image-shell" style="padding:5%;width:10%;height:10%;">
				<img class="image" src="images/5.png" width="200" height="150" style="width:90%;height:90%;">
			</div>
			<div class="image-shell" style="padding:5%;width:10%;height:10%;">
				<img class="image" src="images/6.png" width="200" height="150" style="width:90%;height:90%;">
			</div>
			<div class="image-shell" style="padding:5%;width:10%;height:10%;">
				<img class="image" src="images/7.png" width="200" height="150" style="width:90%;height:90%;">
			</div>
			<div class="image-shell" style="padding:5%;width:10%;height:10%;">
				<img class="image" src="images/8.jpg" width="200" height="150" style="width:90%;height:90%;">
			</div>
			<div class="image-shell" style="padding:5%;width:10%;height:10%;">
				<img class="image" src="images/9.png" width="200" height="150" style="width:90%;height:90%;">
			</div>
			<div class="image-shell" style="margin-left:5%;width:10%;height:10%;">
				<img class="image" src="images/10.png" width="200" height="150" style="width:90%;height:90%;">
			</div>
			<div class="image-shell" style="margin-left:5%;width:10%;height:10%;">
				<img class="image" src="images/11.png" width="200" height="150" style="width:90%;height:90%;">
			</div>
			<div class="image-shell" style="margin-left:5%;width:10%;height:10%;">
				<img class="image" src="images/12.png" width="200" height="150" style="width:90%;height:90%;">
			</div>
			<div class="image-shell" style="margin-left:5%;width:10%;height:10%;">
				<img class="image" src="images/13.png" width="200" height="150" style="width:90%;height:90%;">
			</div>
			
			<!--
			<img class="image" src="images/1.jpg" width="300" height="250">
			<img class="image" src="images/2.jpg" width="300" height="250">
			<img class="image" src="images/3.jpg" width="300" height="250">
			<img class="image" src="images/4.png" width="300" height="250">
			<img class="image" src="images/5.png" width="300" height="250">
			<img class="image" src="images/6.png" width="300" height="250">
			<img class="image" src="images/7.png" width="300" height="250">
			<img class="image" src="images/8.jpg" width="300" height="250">
			<img class="image" src="images/9.png" width="300" height="250">
			<img class="image" src="images/10.png" width="300" height="250">
			<img class="image" src="images/11.png" width="300" height="250">
			<img class="image" src="images/12.png" width="300" height="250">
			<img class="image" src="images/13.png" width="300" height="250">
			-->
		</div>
	</body>
</html>