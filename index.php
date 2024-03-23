<!DOCTYPE html>
<html lang="sk">
    <?php include_once "parts/head.php" ?>
    <body>
    <?php include "parts/navigacia.php" ?>
        <!-- carousel/slideshow -->
        <div id="carousel" class="carousel slide my-4 mx-5 h-25">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="2"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/pyrite_uvod.jpg" class="img-fluid d-block w-100" alt="pyrit">
              </div>
              <div class="carousel-item">
                <img src="img/halit_uvod.jpg" class="img-fluid d-block w-100" alt="halit">
              </div>
              <div class="carousel-item">
                <img src="img/ametyst_uvod.jpg" class="img-fluid d-block w-100" alt="ametyst">
              </div>
            </div>
            <button class="carousel-control-prev mx-2" type="button" data-bs-target="#carousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next mx-2" type="button" data-bs-target="#carousel" data-bs-slide="next">
              <span class="carousel-control-next-icon"></span>
            </button>
        </div>
        <!-- carousel/slideshow -->
        <main class="mt-3">
            <!-- Prva sekcia:-->
            <section id="domov">
                <h1 class="mx-2"></h1>
                <div class="mx-4">
                    <p><strong>Geológia </strong>je veda, ktorá sa zaoberá zložením, stavbou, vlastnosťami a vývojom  Zeme.  
                    Geológia sa člení na viacero vedných odborov. Medzi tieto vedné odbory patrí napr. mineralógia a petrológia.</p>
                    <p><strong>Mineralógia</strong> – vedný odbor zaoberajúci sa minerálmi, ich vznikom, zložením, tvarom atď.
                    Minerály (nerasty) sú prírodné anorganické látky rovnorodého zloženia alebo rýdze prvky, ktoré majú prevažne nejednoznačnú vnútornú štruktúru a špecifické chemické zloženie, ktoré je často premenlivé. 
                    Zloženie minerálu sa dá vyjadriť chemickou značkou alebo chemickým vzorcom. 
                    Medzi minerály sa zaraďujú aj niektoré prírodné organické latky, napr. jantár.</p>
                    <p>Minerály, ktoré sa využívajú na výrobu kovov, sa nazývajú rudy, napr. hematit (krveľ).
                    Minerály majú za normálnych podmienok pravidelnú štruktúru, vyskytujú sa v podobe kryštálov.</p>
                    <p><strong>Petrológia</strong> – vedný odbor  zaoberajúci sa vznikom a stavbou hornín.
                    Hornina je rôznorodá anorganická látka zložená z jedného alebo viacerých minerálov.
                    </p>
                    <p><strong>Sedimentárne (usadené)</strong> horniny vznikajú činnosťou vody alebo vetra. Existujú dve skupiny: detritické (úlomkovité), ktoré sú výsledkom usádzania horninových zŕn, a chemogénne/organické, ktoré vznikli usadením chemických zložiek a organických zvyškov vo vode.
                    <p><strong>Vyvreté</strong> horniny sa delia na intruzívne a extruzívne.
                    Intruzívne (hlbinné, žilné) vyvreté horniny vykryštalizovali pod povrchom zeme a sú hrubozrnné.
                    Extruzívne (výlevné) vyvreté horniny predstavujú utuhnutú lávu teda vznikli na povrchu a sú jemnozrnné.</p>
                    <p><strong>Metamorfované (premenené)</strong> horniny vznikajú pri metamorfóze. Metamorfóza je premena horniny vplyvom teploty a tlaku.
                    Vysokometamorfované horniny vznikajú hlboko v zemskej kôre pri vysokej teplote a tlaku. 
                    Nízkometamorfované horniny vznikajú v menších hĺbkach.
                    </p>
                </div>
            </section>
            <!-- Prva sekcia: -->
        </main>
        <div id="cookie-popup" class="fixed-bottom bg-dark text-white text-center p-2">
            &#127850;
            Táto webová stránka používa súbory cookie, aby sme vám zabezpečili čo najlepší zážitok z našej webovej stránky.
            <button type="button" class="btn btn-light btn-sm" onclick="accept()">Rozumiem!</button>
        </div>
        <?php include "parts/footer.php"?>
    </body>
</html>