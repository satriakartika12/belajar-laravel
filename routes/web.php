<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\kelascontroller;
use App\Http\Controllers\studentcontroller;
use App\Http\Controllers\teachercontroller;
use App\Http\Controllers\ekstrakulikulercontroller;

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


Route::get('/', function () {
    return view('home',[
        'nama'=>'nama stujdenm',
    'phone'=>'098908909',
    'buah'=>['tasik','anggur','pisang','pepaya','semangka']
]);

});


Route::get('/students', [studentcontroller::class, 'index']);
Route::get('/student/{id}', [studentcontroller::class, 'show']);

Route::get('/kelasroom', [kelascontroller::class, 'index']);
Route::get('/kelas-detail/{id}', [kelascontroller::class, 'show']);

Route::get('/ekstrakulikuler', [ekstrakulikulercontroller::class, 'index']);

Route::get('/teacher', [teachercontroller::class, 'index']);


//route::view('/students','students',[
  //  'nama'=>'nama stujdenm',
//'phone'=>'098908909',
  //  'alamat'=>'tasik'
//]);
