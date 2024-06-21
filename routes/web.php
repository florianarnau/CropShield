<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Models\WeatherStation;

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\ControllerDashboard;


Route::middleware(['web', 'auth'])->group(function(){

    Route::get('/', [ControllerDashboard::class, 'index'])->name('dashboard');

    Route::get('/parcel/list')->name('parcel.list');
    Route::get('/parcel/node/{id}')->name('parcel.node');
    Route::get('/parcel/add')->name('parcel.add');
    Route::post('/parcel/create')->name('parcel.create');
    Route::delete('/parcel/delete/{id}')->name('parcel.delete');

    Route::get('/weather_station', function (){
        $weath_st = WeatherStation::all();
        return response()->json($weath_st);
    });
    Route::get('/weather_station/list')->name('weather_station.list');
    Route::get('/weather_station/node/{id}')->name('weather_station.node');
    Route::get('/weather_station/add')->name('weather_station.add');
    Route::post('/weather_station/create')->name('weather_station.create');
    Route::delete('/weather_station/delete/{id}')->name('weather_station.delete');

    Route::get('/recorder/list')->name('recorder.list');
    Route::get('/recorder/node/{id}')->name('recorder.node');
    Route::get('/recorder/add')->name('recorder.add');
    Route::post('/recorder/create')->name('recorder.create');
    Route::delete('/recorder/delete/{id}')->name('recorder.delete');

    Route::get('/display_data')->name('data.view');
    Route::get('/display_data/mass_export')->name('data.mass_export');
    Route::post('/display_data/mass_export')->name('data.mass_export.form');

    Route::get('/display_forecast')->name('forecast.view');

    Route::get('/oad_models')->name('oad.models');
    Route::post('/oad_models_analyse')->name('oad.models.analyse');

    Route::get('/display_forecast/subscription')->name('forecast.subscription');
    Route::get('/oad_models/subscription')->name('oad.subscription');
    Route::get('/email_summary/subscription')->name('email_summary.subscription');

    Route::get('/weather_station/configure')->name('weather_station.configure');
    Route::get('/weather_station/graphs/configure')->name('weather_station.graph.configure');
    Route::get('/email_summary/configure')->name('email_summary.configure');

    Route::get('/contact')->name('contact.index');
    Route::post('/contact')->name('contact.send');

    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('authenticate.destroy');
});




Route::get('/authenticate', [LoginController::class, 'index'])->name('authenticate.index');
Route::post('/authenticate', [AuthenticatedSessionController::class, 'store'])->name('authenticate.store');
