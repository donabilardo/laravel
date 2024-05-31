<?php

namespace App\Providers;

use App\View\Composers\MyComposer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::directive('errormessage', function ($param) {
            return "<?php echo " . "<div style='alert alert-danger'>$param</div>" . "?>";
        });
        View::composer('hw3.testmodel', MyComposer::class);
    }


}
