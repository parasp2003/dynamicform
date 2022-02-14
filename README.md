# dynamicform
Dynamic form create by admin for getting users feedback


git clone https://github.com/parasp2003/dynamicform.git
cd dynamicform
composer install
cp .env.example .env
php artisan migrate
php artisan key:generate 
php artisan serve
