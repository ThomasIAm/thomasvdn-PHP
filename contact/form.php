<!--sse-->
<!-- find root -->
<?php $root = $_SERVER["DOCUMENT_ROOT"] ?>
<!doctype html>
<html>
	<head>
		<!-- include head information -->
		<!-- TODO: fill the following three values -->
		<?php
		$desc = "Contact Formulier";
		$keyw = "Thomas, van, den, Nieuwenhoff, tvdn, thomasvdn, contact, formulier, form";
		$title = "TvdN - Contact Formulier";
		include($root."/pages/head.php");
		?>
	</head>

	<body>
		<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
			<!-- BEGIN header -->
			<!-- TODO: fill the following value -->
			<?php
			$currentPage = "";
			include($root."/pages/header.php");
			?>
			<!-- END header -->
			
			<!-- BEGIN content -->
			<main>
				<div class="page-content">
					<!-- content goes here -->
					<div class="mdl-grid">
						<div class="mdl-cell mdl-cell--12-col">
							<div class="mdl-card mdl-shadow--2dp">
								<div class="mdl-card__title">
									<h2 class="mdl-card__title-text">Contact Formulier</h2>
								</div>
								
								<div class="mdl-card__supporting-text">
									
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
