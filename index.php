<!--
ЗАДАЧА: Вывести три поста (автор и текст поста) из своей таблицы twitter.
ЧТО НУЖНО СДЕЛАТЬ:
1. Подключится к своей Базе данных.
2. Сделать запрос к таблице twitter.
3. Вывести три поста.

Внизу читай комментарии, где что выводить.

Если закончил, сделай добавление нового твита.

Если сделал, добавление нового твита, создай таблицу 'img', в которой хранятся:
	- аватар автора,
	- картинка поста.
	
Выведи на странице изображения из таблицы 'img'.
-->

<!DOCTYPE html>
<html>
<head>
	<title>Главная</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="bg-light">
	<!-- ШАПКА -->
	<div class="header border-bottom pb-2">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-4 col-xl-5">
					<div class="row">
						<div class="col-4">
							<img src="img/icons8-home-50.png" class="w-25">
							<a href="">Домой</a>
						</div>
						<div class="col-4 px-0">
							<img src="img/icons8-notification-50.png" class="w-25">
							<a href="">Уведомления</a>
						</div>
						<div class="col-4">
							<img src="img/icons8-new-post-50.png" class="w-25">
							<a href="">Сообщения</a>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-4 col-xl-3">
					<img class="w-25" src="img/icons8-twitter-50.png" >
				</div>
				<div class="col-sm-12 col-md-4 col-xl-4">
					<input type="" name="">
					<a href=""><img src="img/avatar.jpg" class="rounded-circle"></a>
					<button type="button" class="btn btn-primary">Твитнуть</button>					
				</div>
			</div>
		</div>
	</div>
	<!-- ДИВ С КОНТЕНТОМ -->						
	<div class="main mt-3">
		<div class="container">
			<div class="row">
				<!-- левая колонка --> <!-- ПРОФИЛЬ-->
				<div class="col-sm-12 col-md-4 col-xl-3">
					<!-- Описание профиля -->
					<div class=" bg-white">
						<!--фон-->
						<a href=""><img src="img/background.jpg" class="img-fluid"></a>
						<!--карточка-->
						<div class="row">
							<div class="col-4">
								<a href=""><img src="img/avatar.jpg" class="rounded-circle"></a>
							</div>
							<div class="col-8">
								<div>
									<a href="">Mary Smith</a>
								</div>
								<div>
									<a href="">@MarySmith</a>
								</div>
							</div>
						</div>
						<!--Статистика-->
						<div class="row pt-1 pb-1 pr-1 pl-1">
							<div class="col-6">
								<a href="">
									<b>Твиты</b><br>276
								</a>
							</div>

							<div class="col-6">
								<a href="">
									<b>Читаемые</b><br> 106
								</a>
							</div>										
						</div>	
					</div>

					<!-- Актуальные темы для вас-->
					<div class="bg-white mt-4 pt-3 pb-3 pl-3 pr-3" >
						<div class="">
							<h6>Актуальные темы для вас</h6>
						</div>

						<div>
							<a href="">#inktober</a>
						</div>
						<div>
							<a href="">#movies</a>
						</div>
						
					</div>
				</div>

				<!-- Средняя колонка: Лента твитов: добавить, твиты -->
				<div class="col-sm-12 col-md-8 col-xl-6" style="">
					<div class="pt-2 bg-white">
						<div class="row">
							<div class="col-2">
								<img src="img/avatar.jpg" class="rounded-circle">
							</div>
							<div class="col-10">
								<form action="insert.php" method="GET">
								<div class="col">
							     	<input type="text" placeholder="Автор" class="form-control" name="author">
							     	<textarea  class="form-control" placeholder="Что нового?" name="text"></textarea>
							     	<button class="btn btn-primary">Твитнуть</button>
							   		</div>
									
									</form>
								<!-- 
									
									ЗДЕСЬ СОЗДАЕШЬ ФОРМУ С ИНПУТАМИ И КНОПКОЙ "Твитнуть"

								-->
								</div>
						</div>
						<!-- новый пост -->
						<div class="row mt-4">
							<div class="col-2">
							</div>
							<div class="col-xl-10">
									<h5><!--

										ЗДЕСЬ ВЫВОДИШЬ ИМЯ АВТОРА НОВОГО ТВИТА

									-->
									<?php 
										echo $_GET["author"];
										
									 ?>
									</h5>
									<p> 

										
											<?php 
										
										echo $_GET["text"];
									 ?>
								</p>
							</div>
						</div>

						<!-- 

							НИЖЕ ТРИ ДИВА ДЛЯ ВЫВОДА ТВИТОВ ИЗ ТАБЛИЦЫ 'twitter'

						 -->
						<div class="row mt-4">
							<!-- account_image -->
							<div class="col-2">
								<img src="img/avatar.jpg" class="rounded-circle">
							</div>
							<div class="col-xl-10">
								<div class="d-flex">
									<h5>
										<?php 
										$connect = mysqli_connect("127.0.0.1", "root", "", "twitter");

										mysqli_query($connect, "INSERT INTO tweets (author, text, img) VALUES ('".$_GET['author']."', 'img/1.jpg', '".$_GET['text']."')");
										
										$query = mysqli_query($connect, "SELECT * FROM tweets");
										$result = $query->fetch_assoc();
				
				
		 									echo $result["author"];
		 									echo $result["text"];
		 									
		 								
										 ?>
									<!-- 
									ЗДЕСЬ: 
										1. ПОДКЛЮЧИСЬ К СВОЕЙ БАЗЕ ДАННЫХ
										2. СДЕЛАЙ ЗАПРОС К ТАБЛИЦЕ

									ЗДЕСЬ ВЫВОДИШЬ ИМЯ АВТОРА ПЕРВОГО ТВИТА ИЗ ТАБЛИЦЫ 'twitter'

									-->


									</h5>
								</div>
								<div>
									<p>
										<?php 
										
										
										
										$query = mysqli_query($connect, "SELECT * FROM tweets");
										$result = $query->fetch_assoc();
				
				
		 									echo $result["text"];
		 								
										 ?>
									<!-- 

									ЗДЕСЬ ВЫВОДИШЬ ТЕКСТ ПЕРВОГО ТВИТА ИЗ ТАБЛИЦЫ 'twitter'

									-->	

									</p>
									<img src="img/1.jpg" alt="" class="w-100">
								</div>
							</div>
						</div>
						<div class="row mt-4">
							<!-- account_image -->
							<div class="col-2">
								<img src="img/4.jpg" class="rounded-circle w-75">
							</div>
							<div class="col-xl-10">
								<div class="d-flex">
									<h5>
										<?php 
										
										
										
										$query = mysqli_query($connect, "SELECT * FROM tweets");
										$result = $query->fetch_assoc();
										$result = $query->fetch_assoc();
				
				
		 									echo $result["author"];
		 									
		 								
										 ?>
									<!-- 

									ЗДЕСЬ ВЫВОДИШЬ ИМЯ АВТОРА ВТОРОГО ТВИТА ИЗ ТАБЛИЦЫ 'twitter'

									-->


									</h5>
								</div>
								<div>
									<p>
										<?php 
										
										
										
										$query = mysqli_query($connect, "SELECT * FROM tweets");
										$result = $query->fetch_assoc();
										$result = $query->fetch_assoc();
				
				
		 									echo $result["text"];
		 								
										 ?>
									<!-- 

									ЗДЕСЬ ВЫВОДИШЬ ТЕКСТ ВТОРОГО ТВИТА ИЗ ТАБЛИЦЫ 'twitter'

									-->	

									</p>
									<img src="img/2.jpg" alt="" class="w-100">
								</div>
							</div>
						</div>
					</div>
					<div class="row mt-4">
							<!-- account_image -->
							<div class="col-2">
								<img src="img/4.jpg" class="rounded-circle w-75" style="">
							</div>
							<div class="col-xl-10">
								<div class="d-flex">
									<h5>
										<?php 
										
										
										
										$query = mysqli_query($connect, "SELECT * FROM tweets");
										$result = $query->fetch_assoc();
										$result = $query->fetch_assoc();
										$result = $query->fetch_assoc();
				
				
		 									echo $result["author"];
		 									
		 								
										 ?>
									<!-- 

									ЗДЕСЬ ВЫВОДИШЬ ИМЯ АВТОРА ТРЕТЬЕГО ТВИТА ИЗ ТАБЛИЦЫ 'twitter'

									-->


									</h5>
								</div>
								<div>
									<p>
										<?php 
										
										
										
										$query = mysqli_query($connect, "SELECT * FROM tweets");
										$result = $query->fetch_assoc();
										$result = $query->fetch_assoc();
										$result = $query->fetch_assoc();
				
				
		 									echo $result["text"];
		 								
										 ?>
									<!-- 

									ЗДЕСЬ ВЫВОДИШЬ ТЕКСТ ТРЕТЬЕГО ТВИТА ИЗ ТАБЛИЦЫ 'twitter'

									-->	

									</p>
									<img src="img/3.jpg" alt="" class="w-100">
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>