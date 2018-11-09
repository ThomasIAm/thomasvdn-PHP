<!-- find root -->
<?php $root = $_SERVER["DOCUMENT_ROOT"] ?>
<!doctype html>
<!--sse-->
<html>
	<head>
		<!-- include head information -->
		<?php
		$desc = "Homepage";
		$keyw = "Thomas, van, den, Nieuwenhoff, tvdn, thomasvdn, homepage, home";
		$title = "TvdN - Homepage";

		include($root."/pages/head.php");
		?>
		
		<link rel="stylesheet" type="text/css" href="css/home.css">
	</head>

	<body>
		<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
			<!-- BEGIN header -->
			<?php
			$currentPage = "home";
			include($root."/pages/header.php");
			?>
			<!-- END header -->
			
			<!-- BEGIN content -->
			<main>
				<div class="page-content">
					<!-- content goes here -->
					<div class="mdl-grid max-width">
						<!--<div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--4dp">
							<div class="mdl-card__title" id="home">
								<h2 class="mdl-card__title-text">Home</h2>
							</div>
							<div class="mdl-card__media">
								<img src="https://thomasvdn.nl/img/home.jpg" alt="Portrait Photo" class="article-image">
							</div>
							<div class="mdl-card__supporting-text supporting-text">
								<h3 class="mdl-cell mdl-cell--6-col mdl-cell--5-col-tablet mdl-cell--3-col-phone" id="over">Over mij</h3>
								<p class="about">
									Momenteel bezig met het afmaken van 5 havo naast part time werken als magazijnmedewerker bij MediaMarkt Zwolle. Volgend jaar hoop ik HBO-ICT te gaan studeren aan Hogeschool Windesheim Zwolle.
								</p>
							</div>
						</div>-->
						
						<h3 style="text-decoration: blink; color: orange">DEZE WEBSITE WORDT NIET MEER ONDERHOUDEN</h3>
						
						<div class="mdl-cell mdl-cell--12-col mdl-card mdl-shadow--4dp">
							<div class="mdl-card__title">
								<h2 class="mdl-card__title-text">Home</h2>
							</div>
							<div class="mdl-grid small-width">
								<div class="mdl-cell mdl-cell--6-col mdl-card__supporting-text no-padding">
									<p>
										Momenteel bezig met het afmaken van 5 havo naast part time werken als magazijnmedewerker bij MediaMarkt Zwolle. Volgend jaar hoop ik HBO-ICT te gaan studeren aan Hogeschool Windesheim Zwolle.
									</p>
								</div>
								<div class="mdl-cell mdl-cell--6-col">
									<img src="https://thomasvdn.nl/img/home.jpg" alt="Portrait Photo" class="article-image">
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>
			<!-- END content -->
			
			<!-- BEGIN Footer -->
			<?php include($root."/pages/footer.php") ?>
			<!-- END Footer -->
		</div>
	</body>
</html>
<!--/sse-->
