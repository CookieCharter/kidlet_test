<p align="center"><a class="d-block" href="https://kidlet.ro"><img class="img-fluid" src="https://kidlet.ro/dist/images/kidlet-desktop-logo-small.png" srcset="https://kidlet.ro/dist/images/kidlet-desktop-logo-small.png 1x, https://kidlet.ro/dist/images/kidlet-desktop-logo.png 2x" alt="Kidlet.ro"></a></p>

## Projekt beüzemelése
<p>A projekt beüzemeléséhez a következő lépések szükségesek:</p>
<ol>
    <li>A terminálban 'git clone https://github.com/CookieCharter/kidlet_test.git' segítségével lekérjük a projektet.</li>
    <li>A 'composer install' futtatása</li>
    <li>A 'cp .example.env .env' parancs futtatása, majd a megfelelő adatbázis adatok beállítása a '.env' fájlban</li>
    <li>A 'php artisan key:generate' futtatása</li>
    <li>A 'php artisan migrate --seed' futtatása</li>
    <li>A 'php artisan storage:link' futtatása</li>
    <li>A 'php artisan serve' és 'npm run dev' segítségével elindul a projekt </li>
</ol>
<p>Sajnos szerver nem állt rendelkezésemre, így annak menetét nem tudom leírni.</p>
