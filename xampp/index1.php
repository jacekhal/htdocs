<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SZYBKI START Z BRACKETS</title>
        <meta name="description" content="Interaktywny poradnik szybkiego startu dla Brackets.">
        <link rel="stylesheet" href="main.css">
    </head>
    <body>

		<h1>SZYBKI START Z BRACKETS</h1>
		<h2>Oto Twój przewodnik!</h2>

		<!--
			WYKONANO PRZY UŻYCIU <3 I JAVASCRIPTU
		-->

		<p>
			Witaj we wczesnej wersji Brackets, edytorze open-source dla sieci nowej generacji. Jesteśmy
			wielkimi fanami standardów i chcemy budować lepsze narzędzia dla takich języków jak JavaScript,
			HTML i CSS oraz powiązanych z nimi technologii sieciowych. Taki był nasz skromny początek.
		</p>

		<!--
			CZYM JEST BRACKETS?
		-->
		<p>
			<em>Patrzysz na wczesną wersję Brackets.</em>
			Na wiele sposobów Brackets jest inny niż typowy edytor. Jedną z różnic jest to, że edytor ten
			został napisany w języku JavaScript. Tak więc, mimo iż może on nie być jeszcze gotowy do
			codziennego użytku, my używamy go codziennie, by budować Brackets.
		</p>


		<h2>Testujemy kilka nowych rzeczy</h2>

		<!--
			POWIĄZANIE POMIĘDZY HTML, CSS i JAVASCRIPT
		-->
		<h3>Szybka edycja CSS i JavaScript</h3>
		<p>
			Podczas edycji HTMLa użyj skrótu <kbd>Cmd/Ctrl + E</kbd> aby otworzyć szybki wbudowany edytor,
			który wyświetli wszystkie powiązane style CSS. Wykonaj modyfikacje w kodzie CSS, wciśnij <kbd>ESC</kbd>
			i wróć do edycji HTML. Możesz również pozostawić wbudowany edytor otwarty, tak aby stał się częścią
			edytora HTML. Jeśli wciśniesz <kbd>ESC</kbd> poza obszarem szybkiego edytora, jego wszystkie okna
			zostaną zamknięte. Koniec z przełączaniem się pomiędzy dokumentami i byciem wyrwanym z kontekstu.
		</p>

		<samp>
			Chcesz go zobaczyć w akcji? Umieść kursor w tagu <!-- <samp> --> i naciśnij <kbd>Cmd/Ctrl + E</kbd>.
			Szybki edytor CSS pojawi się nad tym tagiem. Po prawej stronie zobaczysz listę wszystkich reguł,
			które są powiązane z tym tagiem. Przełączaj się pomiędzy regułami używając skrótu <kbd>Alt + Góra/Dół</kbd>
			aby znaleźć ten, który chcesz edytować.
		</samp>

		<a href="screenshots/quick-edit.png">
			<img alt="Zrzut ekranu pokazujący szybką edycję CSS" src="screenshots/quick-edit.png" />
		</a>

		<p>
			Możesz użyć tego samego skrótu w kodzie JavaScript, aby zobaczyć kod funkcji, którą przywołujesz,
			poprzez umieszczenie kursora na nazwie funkcji. W ten sam sposób możesz również otworzyć narzędzie
			wybierania koloru. Po prostu umieść kursor na dowolnym kolorze zapisanym w formacie hex, rgb lub hsl.
			Na razie wbudowany szybki edytor nie może być niezagnieżdżony, więc możesz używać go jedynie w "pełnowymiarowym"
			edytorze.
		</p>

		<!--
			BŁYSKAWICZNY PODGLĄD
		-->
		<h3>Zmiany w kodzie CSS widoczne na żywo w przeglądarce</h3>
		<p>
			Zapewne znany Ci jest taniec w stylu "zapisz/przeładuj", który wykonywaliśmy przez ostatnie lata.
			Dokonujesz zmian w edytorze, zapisujesz zmiany, przełączasz się do przeglądarki i odświeżasz stronę,
			by w końcu zobaczyć rezultat Twojej pracy. Z Brackets taki taniec nie jest konieczny.
		</p>
		<p>
			Brackets utworzy <em>połączenie na żywo</em> z Twoją lokalną przeglądarką i będzie jej przekazywał
			wszelkie zmiany w CSS. Być może już dzisiaj korzystasz z podobnego rozwiązania przy użyciu narzędzi
			w przeglądarce, jednak z Brackets nie ma potrzeby wklejania kodu CSS z powrotem do edytora. Twój kod
			działa w przeglądarce, ale żyje w edytorze.
		</p>

		<samp>
			Jeśli posiadasz zainstalowaną przeglądarkę Google Chrome, możesz wypróbować to już teraz. Kliknij
			ikonkę błyskawicy (stąd nazwa: Błyskawiczny Podgląd) w prawym górnym rogu lub naciśnij skrót
			<kbd>Cmd/Ctrl + Alt + P</kbd>. Kiedy Błyskawiczny Podgląd zostanie włączony w dokumencie HTML,
			wszystkie połączone z nim pliki CSS mogą być edytowane w czasie rzeczywistym. Ikona zmieni kolor
			z szarej na złotą gdy Błyskawiczny Podgląd nawiąże połączenie z Twoją przeglądarką.

			Teraz umieść kursor na tagu <!-- <img> --> i wciśnij <kbd>Cmd/Ctrl + E</kbd> aby otworzyć zdefiniowane
			style CSS dla tego tagu. Spróbuj zmienić rozmiar obramowania z 10px do 20px lub zmienić kolor tła
			z "transparent" na "hotpink". Jeśli masz umieszczone okna przeglądarki i Brackets obok siebie
			zobaczysz, że zmiany są natychmiast uwzględniane w przeglądarce. Nieźle, co?
		</samp>

		<p class="note">
			Na dzień dzisiejszy Błyskawiczny Podgląd działa jedynie dla plików CSS. Aktualnie pracujemy nad tym,
			aby dodać obsługę plików HTML i JavaScript. W aktualnej wersji zmiany w plikach HTML lub JavaScript
			są automatycznie uwzględniane w momencie zapisu. Błyskawiczny Podgląd działa jedynie z Google Chrome.
			Pragniemy wprowadzić tą funkcję we wszystkich najważniejszych przeglądarkach i mamy nadzieję na
			współpracę ze strony autorów tych przeglądarek, by stało się to faktem.
		</p>

		<!--
			DAJ ZNAĆ CO O TYM SĄDZISZ
		-->
		<h2>Zaangażuj się</h2>
		<p>
			Brackets jest projektem open-source. Web developerzy z całego świata angażują się, by budować coraz
			to lepszy edytor kodu. Daj nam znać co o nim sądzisz, podziel się swoimi pomysłami lub dodaj coś
			bezpośrednio do projektu.
		</p>
		<ul>
			<li><a href="http://brackets.io">Brackets.io</a></li>
			<li><a href="http://blog.brackets.io">Blog Zespołu Brackets</a></li>
			<li><a href="http://github.com/adobe/brackets">Brackets na GitHub</a></li>
			<li><a href="http://github.com/adobe/brackets/wiki">Brackets Wiki</a></li>
			<li><a href="http://groups.google.com/group/brackets-dev">Developerska Lista Mailingowa Brackets</a></li>
			<li><a href="https://twitter.com/#!/brackets">@Brackets na Twitterze</a></li>
			<li>Czatuj z developerami Brackets na IRCu w kanale #brackets na Freenode.</li>
		</ul>

    </body>
</html>
<!--

    [[[[[[[[[[[[[[[      ]]]]]]]]]]]]]]]
    [::::::::::::::      ::::::::::::::]
    [::::::::::::::      ::::::::::::::]
    [::::::[[[[[[[:      :]]]]]]]::::::]
    [:::::[                      ]:::::]
    [:::::[                      ]:::::]
    [:::::[                      ]:::::]
    [:::::[                      ]:::::]
    [:::::[     CODE THE WEB     ]:::::]
    [:::::[  http://brackets.io  ]:::::]
    [:::::[                      ]:::::]
    [:::::[                      ]:::::]
    [:::::[                      ]:::::]
    [:::::[                      ]:::::]
    [::::::[[[[[[[:      :]]]]]]]::::::]
    [::::::::::::::      ::::::::::::::]
    [::::::::::::::      ::::::::::::::]
    [[[[[[[[[[[[[[[      ]]]]]]]]]]]]]]]

-->
