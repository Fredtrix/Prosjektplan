<!doctype html>

<html lang="no"> <!-- Norsk er best! -->
	
		<head>
		
			<meta charset="UTF-8"> <!-- Æ, Ø, Å -->
			
			<link rel="stylesheet" type="text/css" href="style.css">
			
			<title> Prosjektplan </title>
		
		</head>
		
	<body>
	
		<header> 
		
			<h1> Prosjektplan for G4 </h1>
			
			<h3> Obligatorisk Gruppeprosjekt i ADTS1200 </h3>
		
		</header>
		
		<section> <!-- start wrapper -->
		
			<article> <!-- #1 -->
			
				<h2> Veiledende Informasjon </h2>
				
				<p> 
				
					Dette er en fremtidsrettet prosjektplan. Her kan den som ønsker lese litt 
					om hva prosjektet vi jobber med dreier seg om og hvordan vi planlegger å jobbe 
					med dette de kommende ukene. Gjennom utviklingen fra ide til produkt er det 
					flere stadier og derfor planlegger vi fremgangen før den starter slik at det blir
					struktur i arbeidet.
				
				</p>

				<p>
				
					Her kan du også lese om noen kriterier og kvalitets krav som vi har ført opp selv.
					Dette er mål vi sikter etter og håper å oppnå med resultatet. 
					
				</p>
				
				<h2> Grunnmur </h2>
				
				<p> 
				
					Vi har valgt å lage en nettside som skal hjelpe folk til et sunnere liv ved å formidle 
					informasjon om trening og kosthold. Konseptet vårt har mange likhetstrekk med en normal 
					blogg i den forstand, men vi ser også for oss en del andre funksjonaliteter. Blant annet 
					ønsker vi å laget vårt eget nettbaserte web-forum hvor folk kan diskutere disse temaene. 
					Da enten ved hjelp av en allerede tilgjengelig "source-code" som vi modifiserer og 
					videreutvikler/tilpasser eller en helt egen konstruksjon. Ulempen med sistnevnt er at det 
					krever en del tid og kunskap som vi ikke nødvendigvis har, men en gang må man begynne? 
					Dette er vi selvfølgelig klar over, og har tatt visse for-hånds betingelser. Noen av disse 
					går ut på funksjonaliteter vi kan fjerne for å gjøre web-forumet enklere hvis vi skal lage 
					det selv. Dette vil da gå på bekostning av brukerne, men vi vil prøve å finne en optimal løsning. 
					
				</p>
				
				<p>
					
					Videre har vi også planlagt å ha en form for netthandel på siden. Der kan leserne og brukerne 
					eventuelt velge å handle ting som er relevant til trening og kosthold om det skulle være aktuelt. 
					Denne funksjonen vil basere seg på PHP og HTML, det vil være en enkel variant for netthandel og 
					ikke noe spesielt avansert. Betalings delen av dette programmet må vi se dypere på hvordan 
					vi skal løse, men akkurat denne delen av prosjekte/web-siden kan ende opp med være en prototype 
					(smoke and mirrors) selv på innleveringen. 

				</p>
				
				<p>
				
					I tillegg ønsker vi lage et program som kan kalkulere BMI slik at folk som har en interesse 
					for å vite hvor de ligger kan finne ut av dette. Tanken er at de da kan se alternative 
					treningprogram og kosthold som er anbefalt.
					
				</p>
				
				<p>
					
					Alt i alt ønsker vi å lage en god og praktisk side som inneholder solid informasjon som folk har
					en interesser for å lese, og fornuftige hjelpemidler de vil ta del i.  
		
				</p>
				
				<h2> Arbeidsmetoden </h2>
				
				<p>
				
					Vi vil bruke prototyping til å utvikle et førstegangs-produkt som kan illustrere hva vi forsøker 
					og oppnå og hvordan det skal brukes. I denne prosessen lages også en plan i form av en liste som 
					inneholder all relevant informasjon om produktet (web-siden) vi planlegger å konstruere. For 
					eksempel hoved-funksjoner, under-funksjoner, mulig utseende og design, infrastruktur og mer. 
					
				</p>
				
				<p>
					
					Konseptet vårt (web-siden) bygger mye på at bruker-kvaliteten og -opplevelsen skal være bra og 
					fungere godt. Derfor er brukertesting av prototypen en vesentlig del av utviklings-fasen. Dette 
					vil føre til at vi kan komme nærmere det brukerorienterte designe vi ønsker, og at brukerne selv kan ta del i 
					utviklingen (til en viss grad). Noe vi mener kommer til å påvirke bruks-kvaliteten på sluttproduktet 
					drastisk, i en positiv retning.
					
				</p>
				
				<p>
					
					Under hele prosjekt kommer vi til å holde regelmessige møter hvor vi jobber og diskuterer sammen. 
					Et godt sammarbeid er nøkkelen til suksess slik vi ser det. Derfor er det viktig for oss å ha
					god sosial kommunikasjon og problemløsing. Effektivitet, produktivitet og en god porsjon humor er viktig
					egenskaper for en gruppe som jobber sammen slik at motivasjonen holdes oppe. 
					
				</p>
				
				<h2> Teknologi </h2>
				
				<p>
				
					Etter en noe rask evaluering av hva vi mente var nødvendig og hva vi mente hadde morsomt å inkludere.
					Kom vi frem til en liste over hvilken språk det er aktuelt å ta i bruk. Under kan du se listen, men
					husk at den på ingen som helst måte er skrevet i stein. Med unntak av de mest grunnleggende. 
					
				</p>
				
				<div id="tekliste">
					
					<h2> Grunnleggende: </h2>
					
					<ul>
					
						<li> HTML (Hypertext Markup Language) </li>
						<li> CSS (Cascading Stylesheet) </li>
						<li> PHP (PHP: Hypertext Preprocessor) - Ja, PHP står faktisk for PHP. </li>
						<li> JS (JavaScript) </li>
					
					</ul>
					
					<h2> Alternative: </h2>
					
					<ul>
					
						<li> jQuery (JavaScript Query) </li>
						<li> Ajax (Asynchronous JavaScript and XML) </li>
						<li> MySQL (Structured Query Language) </li>
						<li> phpMyAdmin (Database verktøy) </li>
						
					</ul>
					
				</div> <!-- end tekliste -->
				
				<h2> Funksjonalitet </h2>
				
				<p>
				
					I forbindelse med denne planleggingen gikk vi gjennom hva vi ville at web-siden skulle kunne tilby, og
					hva vi selv var interessert i å utvikle. I listen som kommer kan du se hoved-funksjoner og 
					tilleggs-funksjoner. Hoved-funksjonene er de vi kommer til å jobbe mest med og sørge for at virkelig 
					kommer i land. Vi kommer selvfølgelig også til å jobbe hardt med en eventuell tilleggs-funksjon, men
					de blir ikke prioritert ovenfor de førstnevnte. Det er heller ikke sikkert at alle kommer til å se dagens
					lys når prosjektet har nådd sin ende.
				
				</p>
				
				<div id="funkliste">
				
						<h2> Hoved-funksjoner: </h2>
					
					<ul>
					
						<li> Artikulert formidling av informasjon om trening og kosthold. Leserne skal ha muligheten til å
							 finne artikkler, lese anmeldelser, se på treningsprogram og lignende. </li>
							 
						<li> Nettbutikk (Fungerende 'frontend'). </li>
						
						<li> Nettbasert diskusjons-forum laget med PHP (for trenings interesserte). Her kan det skje
							 forandring i planen i forhold til hva som er realistisk å fullføre.</li>
						
						<li> Bruker registrering med profil. </li>
						
						<li> BMI kalkulator. </li>
					
					</ul>
					
					<h2> Tilleggsfunksjoner: </h2>
					
					<ul>
					
						<li> Diverse Facebook plug-ins (Kommentar, Share, Like, etc). </li>
						
						<li> Muligheten til å finne nærmeste trenings studio (ved hjelp av google-maps). </li>
						
						<li> Egenproduserte videoklipp av øvelser og teknikker. </li>
						
						<li> Sende epost med spørsmål ved hjelp av et skjema. </li>
						
						<li> Laste ned og opp dokumenter relatert til web-sidens tema og innhold. </li>
						
						<li> Mulighet for brukere og lage eget treningsprogram. </li>
						
						<li> Mulighet for brukere og fylle inn informasjon som gir tilbake data. For eksempel en timeplan
							 de kan skrive inn når de har trent og få ut en grafisk fremstilling av hvor aktive de har vært.</li>
						
					</ul>
				
				</div> <!-- end funkliste -->
				
				<h2> GitHub </h2>
				
				<p>
				
				Github er et utrolig praktisk og godt tilrettelagt utviklings verktøy gjennom 'cloud'. Vi mener det
				er en stor fordel og kunne ta dette i bruk, og for all del så skal vi det. Muligheten til å laste opp
				og dele forskjellige dokumenter og informasjon med hverandre hjemmefra er en av de mest tiltrekkende
				funksjonene for oss. Dette betyr at vi kan sitte hjemme hver for oss og fremdeles jobbe sammen i sanntid. 
				Ettersom GitHub gir oss muligheten til å hele tiden synkronisere innholdet i prosjekt mappen når vi har gjort
				endringer eller lagt til nye filer. Her kunne vi gått enda dypere og forklart flere goder det gir oss, men kort
				og greit; Det gir rett og slett en så stor fordel at det blir dumt å ikke bruke det (i denne sammenhengen). 
				
				</p>
				
				<h2> Tidsfrister </h2>
				
				<p>
				
				Vi har alle notert oss innad i gruppa sånn ca. når enkelte faser av prosjektet skal starte, og når de bør være
				ferdig slik at vi kan gå videre. Det er såpass tidlig i prosessen at det er vanskelig å si hva som vil kreve
				mer tid enn andre ting, men visse for-hånds kalkuleringer har vi gjort. Til tross for dette har vi ikke ført
				opp en streng og strukturert tidsplan. Vi er klar over at det vil være en fordel om vi gjør dette, og det skal
				vi også gjøre, men som sakt så er det litt tidlig i prosjektet. Tidsbegrensing er viktig slik at vi ikke ender 
				opp med alt for mye jobb den siste uka. Vi vil jo ikke lage noe <a href="http://knowyourmeme.com/memes/horse-armor">'horse armor'</a> akuratt. 
				
				</p>
				
				<h2> Arbeidsfordeling </h2>
				
				<p>
				
				Nå i starten av prosjektet har vi jobbet mye sammen som et lag. Det har vært mange diskusjoner og kopper kaffe 
				om utvikling og utføring. Vi har valgt å gjøre det slik at alle i gruppa har fått hvert sitt hoved-ansvar, men 
				alle kan bidra i alt og ta del i flere felt. Det er tross alt nok jobb å gjøre, og noen ting kan være mer vanskelig
				enn andre. Under kan du se hvem som er ansvarlig for hvilken deler av prosjektet. 
				
				</p>
				
				<div id="arbliste">
				
					<h2> Enkeltes Ansvarsfelt </h2>
					
					<ul>
				
						<li> Atle: Kostholds Skesjonen.</li>
						<li> Fredrik: Forum og Database</li>
						<li> Kasper: Nettbutikk</li>
						<li> Mats: Trenings Seksjonen</li>
					
					</ul>
					
					<h2> Felles </h2>
					
					<ul>
					
						<li> HTML5 koding. </li>
						<li> CSS3 koding. </li>
						<li> PHP programmering. </li>
						<li> JavaScript programmering. </li>
						<li> Layout og design. </li>
						<li> Infrastruktur og 'debug'. </li>
					
					</ul>
				
				</div> <!-- end arbliste -->
			
			</article>
			
			<article> <!-- #2 -->
			
				<?php // kravspec.html
				
					include("kravspec.html"); 
				
				?>
					
				<h2> Utskriftsvenlig Versjon </h2>
				
				<p> 
				
				Vil du laste ned dette dokumentet i PDF eller skrive det ut? Ikke noe problem, trykk på lenken under!
				
				<br>
				<br>
				
				<a href="forplanrev2.pdf" target="top"> Prosjektplan. </a>
				
				</p>
			
			</article>
			
			<footer>
			
				<span> Webprosjekt Gruppe 4: Atle, Fredrik, Kasper og Mats.</span>
			
			</footer>
		
		</section> <!-- end wrapper -->
		
	</body>
		
</html>
		