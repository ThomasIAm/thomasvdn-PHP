<!-- find root -->
<?php $root = $_SERVER["DOCUMENT_ROOT"] ?>
<!doctype html>
<!--sse-->
<html>
	<head>
		<!-- include head information -->
		<?php
		$desc = "";
		$keyw = "";
		$title = "TvdN - Rapport";
		include($root."/pages/head.php");
		?>
		
		<script src="/js/rapport.js"></script>
        <script src="/js/dialog-polyfill.js"></script>
        <link rel="stylesheet" type="text/css" href="/css/dialog-polyfill.css" />
		<link rel="stylesheet" href="/css/rapport.css">
	</head>

	<body>
		<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
			<!-- BEGIN header -->
			<?php
			$currentPage = "";
			include($root."/pages/header.php");
			?>
			<!-- END header -->
			
			<!-- BEGIN content -->
			<main>
				<div class="page-content">
					<!-- content goes here -->
					<div  class="mdl-grid">
						<div class="mdl-cell mdl-cell--4-col mdl-card mdl-shadow--2dp">
							<div class="mdl-card__title">
								<h2 class="mdl-card__title-text">Ma 5-9-16</h2>
							</div>
							<div class="mdl-card__supporting-text mdl-card--expand">
								Deze pagina gemaakt en layout-regels vastgelegd.
							</div>
						</div>
						<div class="mdl-cell mdl-cell--4-col mdl-card mdl-shadow--2dp">
							<div class="mdl-card__title">
								<h2 class="mdl-card__title-text">Do 8-9-16</h2>
							</div>
							<div class="mdl-card__supporting-text mdl-card--expand">
								Introductie gekregen van Python en begonnen met de Python course op codecademy.com. Vindt het verslag onder de knop 'meer'.
							</div>
                            <div class="mdl-card__actions mdl-card--border">
                            	<button id="show-dialog1" type="button" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Meer</button>
                                <dialog id="dialog1" class="mdl-dialog">
                                	<h4 class="mdl-dialog__title">Uitgebreid verslag</h4>
                                    <div class="mdl-dialog__content">
										<a href="" class="trap"></a>
										<script>$('.trap').remove();</script>
                                    	<h5>Wat vond je van de cursus?</h5>
                                    	<p>
                                        	De cursus maakte me gelijk geïnteresseerd in Python. Het zag er simpel uit maar 
                                            toch ook een uitdaging om iets moois te maken. Ik ben gelijk die dag ook begonnen 
                                            met het beter leren van de taal op 
                                            <a href="https://codecademy.com/">codecademy.com</a>.
                                        </p>
                                        
                                        <h5>Wat is een variabele?</h5>
                                        <p>
                                        	Een variable is een waarde die van alles kan bevatten. Dit is handig als je in je 
                                            programma een waarde wilt gebruiken die kan veranderen. Je kunt namelijk funties 
                                            schrijven die verwijzen naar bv. de variable 'a'. Vervolgens kun je de waarde van
                                            die variabele in andere functies aanpassen, waar de eerste functie op zijn beurt 
											weer mee kan werken.
                                        </p>
                                        
                                        <h5>Beschrijf een van de oefeningen die je hebt gedaan</h5>
                                        <p>
                                        	Er was een opdracht die een introductie gaf in variabelen die ik wel 
											interessant vond. Je moest rekenen met een variabele om andere variabelen te 
											maken.
                                        </p>
										<!-- !!!CHANGE THIS!!! -->
										<a href="https://thomasvdn.nl/img/python_opdracht.jpg"><img id="opdr" src="https://thomasvdn.nl/img/python_opdracht.jpg" alt="Python Opdracht"></a>
										
										<h5>Verschillen en overeenkomsten met andere programmeertalen</h5>
										<h6>Verschillen:</h6>
										<ul>
											<li>Structuur wordt aangebracht door indentatie, of regelinspringing in plaats van bijvoorbeeld accolades uit C-achtige talen.</li>
											<li>Statements (vergelijkbaar met zinnen uit gewone taal) worden simpelweg beëindigd door het eind van de regel.</li>
											<li>Variabelen krijgen geen typedeclaratie.</li>
											<li>Python maakt gebruik van <a href="https://nl.wikipedia.org/wiki/Duck-typing">duck-typing</a>.</li>
										</ul>
										<h6>Overeenkomsten:</h6>
										<ul>
											<li>Er wordt gebruik gemaakt van functies.</li>
											<li>Het is mogelijk om een 'loop' te maken.</li>
											<li>If-statements zijn zeer belangrijk in de taal.</li>
											<li>De taal is niet lastig om te leren.</li>
										</ul>
										<p class="klein">Bron: <a href="https://nl.wikipedia.org/wiki/Python_(programmeertaal)">wikipedia.org</a></p>
                                    </div>
                                    <div class="mdl-dialog__actions">
									    <button type="button" class="mdl-button close">Sluiten</button>
                                    </div>
                                </dialog>
                                <script>
									var dialog1 = document.querySelector('#dialog1');
									var showDialogButton1 = document.querySelector('#show-dialog1');
									if (! dialog1.showModal) {
									  dialogPolyfill.registerDialog(dialog1);
									}
									showDialogButton1.addEventListener('click', function() {
									  dialog1.showModal();
									});
									dialog1.querySelector('.close').addEventListener('click', function() {
									  dialog1.close();
									});
							  	</script>
                            </div>
						</div>
						<div class="mdl-cell mdl-cell--4-col mdl-card mdl-shadow--2dp">
							<div class="mdl-card__title">
								<h2 class="mdl-card__title-text">Ma 12-9-16</h2>
							</div>
							<div class="mdl-card__supporting-text mdl-card--expand">
								HTML opdrachten gemaakt.
							</div>
							<div class="mdl-card__actions  mdl-card--border">
								<a href="test.html" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
									test.html
								</a>
								<a href="https://codecademy.com/" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
									relevante site
								</a>
							</div>
						</div>
						<div class="mdl-cell mdl-cell--4-col mdl-card mdl-shadow--2dp">
							<div class="mdl-card__title">
								<h2 class="mdl-card__title-text">Ma 19-9-16</h2>
							</div>
							<div class="mdl-card__supporting-text mdl-card--expand">
								Blad 'binaire getallen' gelezen en opdrachten gemaakt. Ook de portfolio opdrachten op de site gezet. Vindt de opdrachten 
								onder de knop 'meer'.
							</div>
							<div class="mdl-card__actions  mdl-card--border">
								<button id="show-dialog2" type="button" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Meer</button>
								<dialog id="dialog2" class="mdl-dialog">
									<h4 class="mdl-dialog__title">Verslag opdracht 'e-mail &amp; modems'</h4>
									<div class="mdl-dialog__content">
										<a href="" class="trap"></a>
										<script>$('.trap').remove();</script>
										<h5>E-Mail</h5>
										<p>
											01001011 01110101 01101110 00100000 01101010 01101001 01101010 00100000 01101110 01100101 01110100 00100000 01111010 
											01101111 00100000 01100111 01101111 01100101 01100100 00100000 01100010 01101001 01101110 01100001 01110010 01111001 
											00100000 01100001 01101100 01110011 00100000 01101001 01101011 00111111
										</p>
										<p class="klein">Betekenis: "Kun jij net zo goed binary als ik?"</p>
										
										<h5>Werken moderne modems nog steeds met pieptonen?</h5>
										<p>
											Ja en nee. Moderne modems werken wel met een soort 'pieptoon' alleen dan met zo'n hoge frequentie dat wij de tonen 
											niet kunnen horen. Het zijn ook niet meer meerdere tonen, om enen en nullen aan te geven, maar er is sprake van 
											&eacute;&eacute;n basisfrequentie (draaggolf) die wordt gemoduleerd op vergelijkbare manier als bij radio- en televisieoverdracht.
										</p>
									</div>
									<h4 class="mdl-dialog__title">Antwoorden van de opdracht 'binaire weetjes'</h4>
									<div class="mdl-dialog__content">
										<h5>I. Wat is je vermoeden?</h5>
										<p>Het verdubbeld.</p>
										<h5>II. Probeer een aantal andere rekenvoorbeelden om je vermoeden te bevestigen (of te ontkrachten...)</h5>
										<p>1001 = 9   10010 = 18   100100 = 36   1001000 = 72</p>
										<h5>III. Verklaar wat je hebt ontdekt</h5>
										<p>Het verdubbeld omdat elk cijfer twee keer zo groot wordt.</p>
										<h5>IV. Hoe zit dat bij binaire getallen?</h5>
										<p>Hetzelfde.</p>
										<h5>V. Uit hoeveel symbolen bestaat de tabel? Hoeveel bits zijn er nodig om die symbolen te maken? Zijn dat meer of minder bits 
											dan je zelf in de vorige vraag hebt bedacht? Verklaar het verschil tussen wat je hebt bedacht en hoe het in de praktijk is.
										</h5>
										<p>128. 127*127=16129 bits. Meer. Ik keek naar hoeveel karakters er zijn in ASCII en niet naar hoeveel bits er nodig zijn om 
											die allemaal te maken.
										</p>
									</div>
									<div class="mdl-dialog__actions">
										<button type="button" class="mdl-button close">Sluiten</button>
									</div>
								</dialog>
								<script>
									var dialog2 = document.querySelector('#dialog2');
									var showDialogButton2 = document.querySelector('#show-dialog2');
									if (! dialog2.showModal) {
										dialogPolyfill.registerDialog(dialog2);
									}
									showDialogButton2.addEventListener('click', function() {
										dialog2.showModal();										
									});
									dialog2.querySelector('.close').addEventListener('click', function() {
										dialog2.close();
									});
								</script>
							</div>
						</div>
						<div class="mdl-cell mdl-cell--4-col mdl-card mdl-shadow--2dp">
							<div class="mdl-card__title">
								<h2 class="mdl-card__title-text">Do 22-9-16</h2>
							</div>
							<div class="mdl-card__supporting-text mdl-card--expand">
								Laatste binaire opdrachten gemaakt en mensen geholpen met het afmaken van hun website.
							</div>
						</div>
						<div class="mdl-cell mdl-cell--4-col mdl-card mdl-shadow--2dp">
							<div class="mdl-card__title">
								<h2 class="mdl-card__title-text">Ma 26-9-16</h2>
							</div>
							<div class="mdl-card__supporting-text mdl-card--expand">
								Documentaire 'Tegenlicht Clicks' gekeken en opdrachten gemaakt. Verslag hiervan is te vinden 
								door op 'meer' te klikken.
							</div>
							<div class="mdl-card__actions  mdl-card--border">
								<button id="show-dialog3" type="button" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Meer</button>
								<dialog id="dialog3" class="mdl-dialog">
									<h4 class="mdl-dialog__title">Verslag opdracht 'Tegenlicht Clicks'</h4>
									<div class="mdl-dialog__content">
										<a href="" class="trap"></a>
										<script>$('.trap').remove();</script>
										<h5>Wat is persuasion?</h5>
										<p>
											Iemand verleiden om ergens op te klikken.
										</p>
										
										<h5>Wat is conversion rate?</h5>
										<p>
											De hoeveelheid mensen op de 100 iets kopen op je site.
										</p>
										
										<h5>Welke studies worden genoemd?</h5>
										<p>
											Onderzoek naar digitale technologie in fruitautomaten en onderzoek naar de Facebook's en Twitter's van deze wereld.
										</p>
										
										<h5>Welke twee oplossingen worden genoemd door de oprichter van 'Time well spent'?</h5>
										<ol>
											<li>De interfaces herdesignen zodat je zelf keuzes kan maken.</li>
											<li>Mensen verleiden op een dusdanige manier zodat je ze leid naar de resultaten die overeenkomt met de normen en waarden van hunzelf.</li>
										</ol>
										
										<h5>Zoek op wat het verschil is tussen verleiding en manipulatie</h5>
										<p>
											Bij verleiding wordt een schijnovereenkomst gesloten en bij manipulatie leer je iemand idee&euml;n aan.
										</p>
										
										<h5>Kies &eacute;&eacute;n van de gasten. Schrijf iets over zijn/haar achtergrond. Vat zijn/haar opvattingen/meningen samen.</h5>
										<p>
											Tristan Harris is bij Google gaan werken nadat zijn startup (Time Well Spent) door hun werd gekocht. Hij legt uit hoe verleiding werkt 
											en hoe we het kunnen verbeteren met bovenstaande oplossingen.
										</p>
									</div>
									<div class="mdl-dialog__actions">
										<button type="button" class="mdl-button close">Sluiten</button>
									</div>
								</dialog>
								<script>
									var dialog3 = document.querySelector('#dialog3');
									var showDialogButton3 = document.querySelector('#show-dialog3');
									if (! dialog3.showModal) {
										dialogPolyfill.registerDialog(dialog3);
									}
									showDialogButton3.addEventListener('click', function() {
										dialog3.showModal();										
									});
									dialog3.querySelector('.close').addEventListener('click', function() {
										dialog3.close();
									});
								</script>
							</div>
						</div>
						<div class="mdl-cell mdl-cell--4-col mdl-card mdl-shadow--2dp">
							<div class="mdl-card__title">
								<h2 class="mdl-card__title-text">Do 29-9-16</h2>
							</div>
							<div class="mdl-card__supporting-text mdl-card--expand">
								Introductie gekregen van de Beverwedstrijd en oefenopdrachten gemaakt.
							</div>
						</div>
						<div class="mdl-cell mdl-cell--4-col mdl-card mdl-shadow--2dp">
							<div class="mdl-card__title">
								<h2 class="mdl-card__title-text">Ma 3-10-16</h2>
							</div>
							<div class="mdl-card__supporting-text mdl-card--expand">
								De opdracht 'sorteren in een netwerk' gedaan en begonnen met het maken van een verslag.
							</div>
						</div>
						<div class="mdl-cell mdl-cell--4-col mdl-card mdl-shadow--2dp">
							<div class="mdl-card__title">
								<h2 class="mdl-card__title-text">Do 6-10-16</h2>
							</div>
							<div class="mdl-card__supporting-text mdl-card--expand">
								Verslag 'sorteren in een netwerk' afgemaakt. Vindt het verslag onder de knop 'meer'.
							</div>
							<div class="mdl-card__actions  mdl-card--border">
								<button id="show-dialog4" type="button" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Meer</button>
								<dialog id="dialog4" class="mdl-dialog">
									<h4 class="mdl-dialog__title">Verslag opdracht 'Sorteren in een netwerk'</h4>
									<div class="mdl-dialog__content">
										<a href="" class="trap"></a>
										<script>$('.trap').remove();</script>
										<h5>Verslag (buiten)oefening</h5>
										<p>
											We hebben alle vierkanten op de tegels gezet en zijn gelijk aan de slag gegaan. Iedereen kreeg zijn nummertje 
											en kon aan de slag. Het sorteren ging vlot en correct, iedereen begreep de opdracht en kon het goed uitvoeren. 
											Ik had de vierkanten iets te klein getekend maar het is ons alsnog gewoon gelukt om de opdracht op een leuke en 
											effici&euml;te manier uit te voeren. Ik heb hier geleerd dat communicatie erg belangrijk is in een netwerk. Als 
											we niet goed met elkaar hadden gecommuniceerd was dit compleet fout gegaan.
										</p>
										<!-- !!!CHANGE THIS!!! -->
										<a href="https://goo.gl/photos/gdi3s5s243jq2i9V9"><img src="https://thomasvdn.nl/img/buiten_start.jpg" alt="De (buiten)oefening start"></a>
										<a href="https://thomasvdn.nl/img/buiten_eind.jpg"><img src="https://thomasvdn.nl/img/buiten_eind.jpg" alt="De (buiten)oefening eindresultaat"></a>
										
										<h5>Verslag battle</h5>
										<p>
											
										</p>
										
										<h5>Welke studies worden genoemd?</h5>
										<p>
											Onderzoek naar digitale technologie in fruitautomaten en onderzoek naar de Facebook's en Twitter's van deze wereld.
										</p>
										
										<h5>Welke twee oplossingen worden genoemd door de oprichter van 'Time well spent'?</h5>
										<ol>
											<li>De interfaces herdesignen zodat je zelf keuzes kan maken.</li>
											<li>Mensen verleiden op een dusdanige manier zodat je ze leid naar de resultaten die overeenkomt met de normen en waarden van hunzelf.</li>
										</ol>
										
										<h5>Zoek op wat het verschil is tussen verleiding en manipulatie</h5>
										<p>
											Bij verleiding wordt een schijnovereenkomst gesloten en bij manipulatie leer je iemand idee&euml;n aan.
										</p>
										
										<h5>Kies &eacute;&eacute;n van de gasten. Schrijf iets over zijn/haar achtergrond. Vat zijn/haar opvattingen/meningen samen.</h5>
										<p>
											Tristan Harris is bij Google gaan werken nadat zijn startup (Time Well Spent) door hun werd gekocht. Hij legt uit hoe verleiding werkt 
											en hoe we het kunnen verbeteren met bovenstaande oplossingen.
										</p>
									</div>
									<div class="mdl-dialog__actions">
										<button type="button" class="mdl-button close">Sluiten</button>
									</div>
								</dialog>
								<script>
									var dialog4 = document.querySelector('#dialog4');
									var showDialogButton4 = document.querySelector('#show-dialog4');
									if (! dialog4.showModal) {
										dialogPolyfill.registerDialog(dialog4);
									}
									showDialogButton4.addEventListener('click', function() {
										dialog4.showModal();										
									});
									dialog4.querySelector('.close').addEventListener('click', function() {
										dialog4.close();
									});
								</script>
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
