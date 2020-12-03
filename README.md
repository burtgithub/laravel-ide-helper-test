## My environment
       php:with Zend OPcache v7.3.8
       laravel:Laravel Framework 7.30.0

## My steps

       composer create-project laravel/laravel=7.* demoide --prefer-dist
       579  history 
       580  cd demoide/
       581  composer require --dev barryvdh/laravel-ide-helper
       582  pwd
       583  ./artisan ide-helper:generate
       584  php artisan cache:clear
       585  php artisan ide-helper:generate
       
       
       
       
       add the package to the extra.laravel.dont-discover key in composer.json, e.g.
       "extra": {
         "laravel": {
           "dont-discover": [
             "barryvdh/laravel-ide-helper"
           ]
         }
       }
       
       Add the following class to the providers array in config/app.php:
       Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class,
       
## Create two test files

### 1：laravel-ide-helper-test/app/Http/Models/TestDemo.php
       <?php

       namespace App\Http\Models;

       use Illuminate\Database\Eloquent\Model;

       class TestDemo extends Model
       {
              protected $table = 'tbl_test';
              protected $connection = 'test';
              protected $guarded = [];



       }

### 2 /laravel-ide-helper-test/app/Http/Controllers/TestController.php

       <?php

       namespace App\Http\Controllers;
       use App\Http\Models\TestDemo;

       class ShareController extends Controller
       {
              public function test(){

                  $test   =   new TestDemo();

               $test->firstOrCreate();//in ide is not find

           }

       }
       






