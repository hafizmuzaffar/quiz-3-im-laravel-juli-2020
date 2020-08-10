<?php

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
    return redirect('managers');
});

// Route::get('/items/create', 'ItemController@create'); // menampilkan halaman form
// Route::post('/items', 'ItemController@store'); // menyimpan data
// Route::get('/items', 'ItemController@index'); // menampilkan semua
// Route::get('/items/{id}', 'ItemController@show'); // menampilkan detail item dengan id 
// Route::get('/items/{id}/edit', 'ItemController@edit'); // menampilkan form untuk edit item
// Route::put('/items/{id}', 'ItemController@update'); // menyimpan perubahan dari form edit
// Route::delete('/items/{id}', 'ItemController@destroy'); // menghapus data dengan id

#Manager
Route::resource('managers', 'ManagerController');

#Staff
Route::resource('staffs', 'StaffController');

#project
Route::resource('projects', 'ProjectController');

Route::get('owner-project', 'ProjectUserController@index')->name('owner.project.index');

Route::get('manager-add-project/{project_id}','ProjectUserController@tambahManager')->name('manager.add.project');
Route::get('add-manager/{project_id}', 'ProjectUserController@tambahManagerProses')->name('add.manager.proses');

Route::get('staff-add-project/{project_id}','ProjectUserController@tambahStaff')->name('staff.add.project');
Route::get('add-staff/{project_id}', 'ProjectUserController@tambahStaffProses')->name('add.staff.proses');