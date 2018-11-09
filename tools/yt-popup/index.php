<!--sse-->
<!-- find root -->
<?php $root = $_SERVER["DOCUMENT_ROOT"] ?>
<!doctype html>
<html>
	<head>
		<!-- include head information -->
		<?php
		$desc = "YouTube Pop-Up";
		$keyw = "Thomas, van, den, Nieuwenhoff, tvdn, thomasvdn, youtube, popup, pop-up";
		$title = "TvdN - YouTube Pop-Up";
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
					<script type="text/javascript">
						function popup() {
							if (! window.focus)return true;
							var ytUrl = document.getElementById('urlInput').value;
							var ytUrl = ytUrl.replace('watch', 'watch_popup');
							window.open(ytUrl, 'YouTube Pop-Up', 'width=400,height=200');
							return false;
						}
					</script>
					
					<div class="mdl-card mdl-shadow--4dp">
						<div class="mdl-card__title">
							<h2 class="mdl-card__title-text">YouTube Pop-Up</h2>
						</div>
						<div class="mdl-card__supporting-text">
							Plak de volledige YouTube link in het veld hier beneden.
							<div class="mdl-textfield mdl-js-textfield">
								<input class="mdl-textfield__input" type="url" id="urlInput">
								<label class="mdl-textfield__label" for="urlInput">https://www.youtube.com/watch?v=zu7WJD8vpAQ</label>
							</div>
						</div>
						<div class="mdl-card__actions">
							<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" type="submit" name="submit" onclick="popup();">
								<!--<input >-->
								Submit
							</button>
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