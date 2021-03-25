<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>

		.c {
			display: grid;
			width: 100%;
			padding: 10px 30px;
			grid-template-columns: repeat(200px,3);
			grid-template-rows: repeat(200px,7);
		}
	.c >div {
		width: 50px;
		height: 50px;
	}
	.c>div>input{
		width:100%;
		height: 100%;
	}
	</style>
</head>
<body>
		<section class="c">
			<div class="but-1">
				<input type="button" value="one">				
			</div>
			<div class="but-2">
				<input type="button" value="two">				
			</div>
			<div class="but-3">
				<input type="button" value="three">
			</div>
			<div class="but-4">				
				<input type="button" value="four">
			</div>
			<div class="but-5">				
				<input type="button" value="five">				
			</div>
			<div class="but-6">
				<input type="button" value="six">
			</div>
			<div class="but-7">				
				<input type="button" value="seven">
			</div>
			<div class="but-8">				
				<input type="button" value="eight">
			</div>
			<div class="but-9">
				
				<input type="button" value="nine">
			</div>
			<div class="but-clear">
				
				<input type="button" value="clear<-">
			</div>
			<input type="text" class="text">
			<input type="button" class="ok">
			<input type="button" class="plus" value="+">
			<input type="button" class="minus" value="-">
			<input type="button" class="sep" value="/">
			<input type="button" class="mult" value="*">
		</section>
	<?php 
		// $a = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, ipsa molestias beatae vitae labore. Dignissimos id optio sit necessitatibus ratione non sapiente consequuntur officiis eos alias, similique commodi vitae, quia hic ducimus qui dolorum amet eveniet magnam. Quis illo officiis repellendus tempore sapiente vero cupiditate quasi porro ducimus placeat accusantium atque maxime totam quaerat voluptatum officia hic aliquid, pariatur, perferendis laborum. Ea illum quidem eius dignissimos recusandae veniam sint nisi porro consequuntur cum quod accusamus in delectus, quae, facilis consectetur, ipsam natus amet numquam dolores? Animi eius, similique vel nam harum, ab laboriosam soluta dicta, officia, expedita perspiciatis qui iste voluptatibus totam magnam beatae. Aliquam, doloribus! Soluta reiciendis, hic quaerat a rem dolore et, natus veritatis cum nulla maiores consequatur ipsa, dolorem dicta architecto velit veniam. Excepturi, consequatur fugiat blanditiis animi illum error doloremque laudantium libero ipsa alias in numquam expedita dolore nihil officiis, dolorum non atque saepe sint! Quibusdam dolore sequi totam voluptates commodi minus dicta. Magnam ut officia vitae culpa vero corrupti velit amet minus recusandae perferendis, tempore commodi assumenda! Modi iusto doloribus esse natus ratione ut voluptatem minus. Qui alias tempora, ullam ad labore debitis autem assumenda vero cumque mollitia, praesentium et perspiciatis rem architecto est accusantium.";
		// $link = "https://www.somewhere.com/here/readnews/12";
		// $r = preg_split("/\s{1}/", substr($a, 0, 180));
		// $r = array_reverse($r);	
		// $a = substr($a, 0, 158)."<a href=\"".$link."\">".$r[1]." ".$r[2]."..."."<a/>";
		// echo $a;

	 ?>
	 <script src="sc.js"></script>
</body>
</html>