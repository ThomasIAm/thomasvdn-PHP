<!--sse-->
<!-- find root -->
<?php $root = $_SERVER["DOCUMENT_ROOT"] ?>
<!doctype html>
<html>
	<head>
		<!-- include head information -->
		<?php
		$desc = "Contact";
		$keyw = "Thomas, van, den, Nieuwenhoff, tvdn, thomasvdn, contact";
		$title = "TvdN - Contact";
		include($root."/pages/head.php");
		?>
		
		<link rel="stylesheet" type="text/css" href="/css/contact.css">
	</head>

	<body>
		<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
			<!-- BEGIN header -->
			<?php
			$currentPage = "contact";
			include($root."/pages/header.php");
			?>
			<!-- END header -->
			
			<!-- BEGIN content -->
			<main>
				<div class="page-content">
					<!-- content goes here -->
					<div class="mdl-grid">						
						<div class="mdl-cell mdl-cell--4-col">
							<div class="mdl-card mdl-shadow--2dp">
								<div class="mdl-card__title mdl-card--expand github_big">
									<h2 class="mdl-card__title-text">GitHub</h2>
								</div>
								<div class="mdl-card__actions mdl-card--border">
									<a href="https://github.com/thomasikdus" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
										GO
									</a>
								</div>
							</div>
						</div>
						
						<div class="mdl-cell mdl-cell--4-col">
							<div class="mdl-card mdl-shadow--2dp">
								<div class="mdl-card__title mdl-card--expand insta_big">
									<h2 class="mdl-card__title-text">Instagram</h2>
								</div>
								<div class="mdl-card__actions mdl-card--border">
									<a href="https://www.instagram.com/thomasikdus/" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
										GO
									</a>
								</div>
							</div>
						</div>
						
						<div class="mdl-cell mdl-cell--4-col">
							<div class="mdl-card mdl-shadow--2dp">
								<div class="mdl-card__title mdl-card--expand li_big">
									<h2 class="mdl-card__title-text">LinkedIn</h2>
								</div>
								<div class="mdl-card__actions mdl-card--border">
									<a href="https://www.linkedin.com/in/thomasvandennieuwenhoff/" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
										GO
									</a>
								</div>
							</div>
						</div>
						
						<div class="mdl-cell mdl-cell--4-col">
							<div class="mdl-card mdl-shadow--2dp">
								<div class="mdl-card__title mdl-card--expand skype_big">
									<h2 class="mdl-card__title-text">Skype</h2>
								</div>
								<div class="mdl-card__actions mdl-card--border">
									<a href="skype:thomasikdus" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
										GO
									</a>
								</div>
							</div>
						</div>
						
						<div class="mdl-cell mdl-cell--4-col">
							<div class="mdl-card mdl-shadow--2dp">
								<div class="mdl-card__title mdl-card--expand steam_big">
									<h2 class="mdl-card__title-text">Steam</h2>
								</div>
								<div class="mdl-card__actions mdl-card--border">
									<a href="https://steamcommunity.com/id/thomasiam/" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
										GO
									</a>
								</div>
							</div>
						</div>
						
						<div class="mdl-cell mdl-cell--4-col">
							<div class="mdl-card mdl-shadow--2dp">
								<div class="mdl-card__title mdl-card--expand twitter_big">
									<h2 class="mdl-card__title-text">Twitter</h2>
								</div>
								<div class="mdl-card__actions mdl-card--border">
									<a href="https://twitter.com/thomasikdus/" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
										GO
									</a>
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
