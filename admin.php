<?php 
	session_start();
	if (!isset($_SESSION["login"]) || $_SESSION["login"] != "on") {
		header("location: login.php");
	}

	$pageTitle="Админка";
	include("./templates/_head.php");

?>

	<!-- white-plate -->
	<div class="white-plate">
		<div class="container-fluid">
			<!-- header -->
			<div class="header">
				<div class="row">
					<div class="col-md-10">
						<div class="site-logo">
							Админ панель
						</div>
					</div>
					<div class="col-md-2">
						<div class="admin-link">
							<!-- <i class="fas fa-unlock-alt"></i> -->
							<a href="../index.html">
								<img width="38" src="../img/icons/logout.svg" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
			<!-- // header -->
			<div class="line-between"></div>
			<!-- content block -->
			<div class="row">
				<div class="col-12">
					<div class="title-1">Добавить товар</div>

					<form method="POST" action="add-new.php" enctype="multipart/form-data">
						<div class="form-group">
							<input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Название">
						</div>
						<div class="form-group">
							<select name="category" class="form-control">
								<option value="Телефоны">Телефоны</option>
								<option value="Планшеты">Планшеты</option>
								<option value="Ноутбуки">Ноутбуки</option>
								<option value="Компьютеры">Компьютеры</option>
							</select>
						</div>
						<div class="form-group">
							<input name="price" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Цена">
						</div>

						<div class="form-check form-check-inline">
							<input name="sale" value="1" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
							<label class="form-check-label" for="inlineCheckbox1">распродажа</label>
						</div>
						<div class="form-check form-check-inline">
							<input name="new" value="1" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
							<label class="form-check-label" for="inlineCheckbox2">новинка</label>
						</div>

						<div class="form-group pt-3">
							<label for="exampleFormControlFile1">Фото:</label>
							<input name="image" type="file" class="form-control-file" id="exampleFormControlFile1">
						</div>

						<div class="form-group">
							<div class="form-group">
								<label for="exampleFormControlTextarea1">Описание:</label>
								<textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
							</div>
							<button type="submit" class="btn btn-primary">Добавить</button>
						</div>
					</form>

				</div>

			</div>
			<!-- content block -->
		</div>
	</div>
	<!-- // white-plate -->

<?php include("./templates/_footer.php"); ?>
