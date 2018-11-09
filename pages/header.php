<?php
function navCurrent($navPage) {
	global $currentPage;
	if ($navPage == $currentPage) {
		echo("current");
	}
}
?>

<header class="mdl-layout__header">
	<div class="mdl-layout__header-row">
		<!-- Header title -->
		<span class="mdl-layout-title">TvdN</span>
		<!-- Add spacer, to align navigation to the right -->
		<div class="mdl-layout-spacer"></div>
		<!-- Navigation. Hidden on small screens. -->
		<nav class="mdl-navigation mdl-layout--large-screen-only">
			<a class="mdl-navigation__link <?php navCurrent("home"); ?>" href="/">Home</a>
			<a class="mdl-navigation__link <?php navCurrent("tools"); ?>" href="/tools/">Tools</a>
			<a class="mdl-navigation__link <?php navCurrent("contact"); ?>" href="/contact/">Contact</a>
			<a class="mdl-navigation__link <?php navCurrent("login"); ?>" href="/login/">Login</a>
		</nav>
	</div>
</header>
<!-- This header is hidden away but viewable on all devices -->
<div class="mdl-layout__drawer">
	<span class="mdl-layout-title">TvdN</span>
	<nav class="mdl-navigation">
		<a class="mdl-navigation__link <?php navCurrent("home"); ?>" href="/">Home</a>
		<a class="mdl-navigation__link <?php navCurrent("tools"); ?>" href="/tools/">Tools</a>
		<a class="mdl-navigation__link <?php navCurrent("contact"); ?>" href="/contact/">Contact</a>
		<a class="mdl-navigation__link <?php navCurrent("login"); ?>" href="/login/">Login</a>
	</nav>
</div>