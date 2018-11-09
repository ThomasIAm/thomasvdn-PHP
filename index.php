<!--sse-->
<!-- find root -->
<?php $root = $_SERVER["DOCUMENT_ROOT"] ?>
<!doctype html>
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
						<div class="mdl-cell mdl-cell--12-col mdl-card mdl-shadow--4dp">
							<div class="mdl-card__title">
								<h2 class="mdl-card__title-text">Home</h2>
							</div>
							<div class="mdl-grid small-width">
								<div class="mdl-cell mdl-cell--6-col mdl-card__supporting-text no-padding">
									<p>
										Ik ben een leergierige student met een passie voor ICT. Ik heb al veel ervaring en ben altijd opzoek naar manieren om mijn kennis te vergroten.
									</p>
								</div>
								<div class="mdl-cell mdl-cell--6-col">
									<img src="img/home.jpg" alt="Portrait Photo" class="article-image">
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
