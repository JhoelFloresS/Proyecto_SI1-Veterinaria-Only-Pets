<?php

namespace App\Providers;

use App\View\Components\MascotasInput;
use App\View\Components\Forms\MascotasUpdate;
use App\View\Components\InputDatos;
use App\View\Components\SolicitudesInput;
use App\View\Components\SolicitudesUpdate;
use App\View\Components\UpdateDatos;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        Blade::component('mascotas-input', MascotasInput::class);
        Blade::component('mascotas-update', MascotasUpdate::class);
        Blade::component('input-datos', InputDatos::class);
        Blade::component('update-datos', UpdateDatos::class);
        Blade::component('solicitudes-input', SolicitudesInput::class);
        Blade::component('solicitudes-update', SolicitudesUpdate::class);
    }
}
