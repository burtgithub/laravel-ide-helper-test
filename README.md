## 

composer create-project laravel/laravel=7.* demoide --prefer-dist
  579  history 
  580  cd demoide/
  581  composer require --dev barryvdh/laravel-ide-helper
  582  pwd
  583  ./artisan ide-helper:generate
  584  php artisan cache:clear
  585  php artisan ide-helper:generate
