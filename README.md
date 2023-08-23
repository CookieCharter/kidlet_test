<p align="center"><a class="d-block" href="https://kidlet.ro"><img class="img-fluid" src="https://kidlet.ro/dist/images/kidlet-desktop-logo-small.png" srcset="https://kidlet.ro/dist/images/kidlet-desktop-logo-small.png 1x, https://kidlet.ro/dist/images/kidlet-desktop-logo.png 2x" alt="Kidlet.ro"></a></p>

## Projekt beüzemelése
A projekt beüzemeléséhez a következő lépések szükségesek:
    1. A terminálban 'git clone https://github.com/CookieCharter/kidlet_test.git' segítségével lekérjük a projektet.
    2. A 'composer install' futtatása
    3. A 'cp .example.env .env' parancs futtatása, majd a megfelelő adatbázis adatok beállítása a '.env' fájlban
    4. A 'php artisan key:generate' futtatása
    5. A 'php artisan migrate --seed' futtatása
    6. A 'php artisan storage:link' futtatása
    7. A 'php artisan serve' és 'npm run dev' segítségével elindul a projekt 
Sajnos szerver nem állt rendelkezésemre, így annak menetét nem tudom leírni.
