<!doctype html>
<html lang="cs-CZ">

<!-- Main head -->

<head>
    <meta name="description" content="Pekař. V cloudu. Vše, co student potřebuje. Dostupné kdykoliv, odkudkoliv. Pro Gymnázium Dr. Josefa Pekaře">
    <meta name="keywords" content="PEK Cloud, Gymnázium, Pekař, Dr. Josefa Pekaře, Marhan, MarStad, MarStad Corporation, Disk, Email, Kalendář, Weby, Stránky">
    <title>PEK Cloud</title>
    <?php readfile( "php/head.php"); ?>
</head>

<body>
    <!-- Navigation -->
    <header>
        <?php readfile( "php/header.php"); ?>
    </header>

    <!-- Page -->
    <main>
        <div class="background"></div>
        <div class="intro">
            <!-- Tlačítko -->
            <div class="valign-wrapper halign-wrapper logo-wrapper">
                <a class="btn-floating btn-large waves-effect waves white modal-trigger" href="#hlavnimodal">
                    <img src="/images/logo.svg" class="responsive-img" style="width:100%;"></img>
                </a>
            </div>
        </div>
        <!-- Modal Structure -->
        <div id="hlavnimodal" class="modal modal-fixed-footer">
            <div class="modal-content">
                <h2 class="center-align">PEK Cloud [peklaʊd]</h2>
                <p><b>PEK Cloud</b>, -u m. (neživ.) <i>vize Michala Marhana o novém přístupu školy, učitelů a studentů k počítačům a internetu v nové éře digitálního věku. 
                Cílem bylo vytvoření jednotného místa pro sdílení dokumentů mezi studenty a učiteli, možnost týmové spolupráce na malých prezentacích, či velkých projektech,
                vyhynutí USB flash disků, emailových příloh a jednoduchou tvorbu webových stránek pro komunikaci se studenty/veřejností. S takovou jednoduchostí, že PEK Cloud ocení každá generace.</i></p>
                <video class="responsive-video section" controls preload="metadata">
                    <source src="supportfiles/promo.mp4" type="video/mp4">
                </video>
                <div class="divider"></div>
                <h3 class="section">Milníky PEK Cloudu</h3>
                <ul class="browser-default">
                    <li>Velký třesk, neboli start PEK Cloudu, se uskutečnil 6.3.2015 na <a href="http://parlament.pekcloud.cz/archiv-schuzi/7">7. Schůzi</a> Studentského parlamentu GJP</li>
                    <li>Již za <a href="http://parlament.pekcloud.cz/projekty/pek-cloud/prvni-mesic">první měsíc</a> bylo na PEK Cloud nahráno 22 581 MB ve 2 141 souborech!</li>
                </ul>
                <div class="divider"></div>
                <!--<h3 class="section">Slovo ajťáka</h3>
                <p>Do PEK Cloudu jsem vložil stovky hodin práce. Zatímco zprovoznění takového projektu od ne-studenta by stálo v řádu desítkách tisíc korun,
                u mě byla pouhá myšlenka, vytvoření nějaké hodnoty, něčeho nadčasového, co usnadní lidem život i z té nejmenší části, naprosto naplňující. Nadchnul jsem sice zpočátku pouze jednotky lidí
                a spousta studentů/učitelů PEK Cloud nejdříve neocenila. Věděl jsem, že chuť učit se něco nového nemají všichni, dokonce ani učitelé. Ač se to nezdá, nemají kantoři tolik volného času, do práce dávají mnoho energie, úsilí a kdo by chtěl věnovat pár dalších hodin učením něčeho, co vytvořil student, který v té době ještě ani neodmaturoval. </p>
                <p>Pokračoval jsem i přes nezdary, jako když mi na školení "Týden s PEK Cloudem", kde jsem se snažil živě ukázat proč má PEK Cloud smysl, přišli 2 kantoři.
                Neztrácel jsem trpělivost a malými krůčky a spoustou volného času věnovanému mému výtvoru jsem se postupně snažil ukázat každému, že ve výsledku PEK Cloud opravdu není přítěž.</p>
                <p>Ke konci mého působení na škole se z něho stala tak běžná věc, že jsem musel vytvořit i správný fonetický zápis slova PEK Cloud. Chtěl bych ze srdce poděkovat každému profesorovi, který mi dal šanci získat obrovské zkušenosti, které mně nyní nesmírně pomáhají. S odstupem času a nostalgie se na tento projekt divám vždycky s hřejivým pocitem u srdce a doufám, že přirostl k srdci i dalším lidem.
                A veškerá práce v mém životě bude stát za to, pokud budu žít s vědomím, že jsem alespoň jednomu člověku trochu zjednodušil život způsobem, který umím. Počítači.
                </p>
                <p class="right align">Váš ajťák,<br>Michal Marhan<br>Absolvent 2016</p> -->
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-orange btn-flat ">Zavřít easter egg</a>
            </div>
        </div>
         <!-- Novinky 
        <div class="row" style="position: relative;margin-top: -10vh;">
            <div class="col offset-m1 m10 s12 white z-depth-1" style="height: 300px;">Hola mi amigo Tady budou novinky XXX</div>
        </div> -->
    </main>

    <!-- Footer and javascript -->
    <?php readfile( "php/footer.php"); ?>

    <?php readfile( "php/js.php"); ?>
    <?php readfile( "php/analytics.php"); ?>
</body>