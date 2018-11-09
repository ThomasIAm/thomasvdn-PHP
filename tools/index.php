<!--sse-->
<!-- find root -->
<?php $root = $_SERVER["DOCUMENT_ROOT"] ?>
<!doctype html>
<html>
	<head>
		<!-- include head information -->
		<?php
		$desc = "Tools";
		$keyw = "Thomas, van, den, Nieuwenhoff, tvdn, thomasvdn, tools";
		$title = "TvdN - Tools";
		include($root."/pages/head.php");
		?>
	</head>

	<body>
		<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
			<!-- BEGIN header -->
			<?php
			$currentPage = "tools";
			include($root."/pages/header.php");
			?>
			<!-- END header -->
			
			<!-- BEGIN content -->
			<main>
				<div class="page-content">
					<!-- content goes here -->
					
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