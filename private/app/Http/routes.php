<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middlewareGroups'=> ['web']], function(){
    Route::group(['namespace'=>'User'], function(){ 
		
		Route::get('/login', [
			'uses' => 'User@login',
			'as' => 'user.login'
		]);

		// Route::get('/', [
		// 	'uses' => 'User@login',
		// 	'as' => 'user.login'
		// ]);

		Route::post('/signin', [
			'uses' => 'User@signin',
			'as' => 'user.signin'
		]);

		Route::get('/', [
			'uses' => 'User@signout',
			'as' => 'user.signout'
		]);
	});

	Route::group(['namespace'=>'Dashboard'], function(){ 
		
		Route::get('/home', [
			'uses' => 'Dashboard@home',
			'as' => 'dashboard.home'
		]);

	});

	Route::group(['namespace'=>'Datamaster'], function(){ 
		
		Route::get('/pegawai', [
			'uses' => 'Pegawai@home', //Change This
			'as' => 'datamaster.pegawai'
		]);

		Route::get('/komponen-gaji', [
			'uses' => 'Komponengaji@home', //Change This
			'as' => 'datamaster.komponen_gaji'
		]);

		Route::get('/komponen-potongan', [
			'uses' => 'Komponenpotongan@home', //Change This
			'as' => 'datamaster.komponen_potongan'
		]);

		Route::get('/gaji-induk', [
			'uses' => 'Gajiinduk@home', //Change This
			'as' => 'datamaster.gaji_induk'
		]);

		Route::get('/instansi', [
			'uses' => 'Instansi@home', //Change This
			'as' => 'datamaster.instansi'
		]);

		Route::get('/golongan', [
			'uses' => 'Golongan@home', //Change This
			'as' => 'datamaster.golongan'
		]);

		Route::get('/bank', [
			'uses' => 'Bank@home', //Change This
			'as' => 'datamaster.bank'
		]);

		Route::get('/provinsi', [
			'uses' => 'Provinsi@home', //Change This
			'as' => 'datamaster.provinsi'
		]);

		Route::get('/kabupaten-kota', [
			'uses' => 'Kota@home', //Change This
			'as' => 'datamaster.kota'
		]);

		Route::get('/agama', [
			'uses' => 'Agama@home', //Change This
			'as' => 'datamaster.agama'
		]);

	});

	Route::group(['namespace'=>'Rekapitulasi'], function(){ 
		
		Route::get('/rekap-keseluruhan', [
			'uses' => 'Rekapkeseluruhan@home', //Change This
			'as' => 'rekapitulasi.rekap_keseluruhan'
		]);

		Route::get('/rekap-instansi', [
			'uses' => 'Rekapinstansi@home', //Change This
			'as' => 'rekapitulasi.rekap_instansi'
		]);

	});

	Route::group(['namespace'=>'Biodata'], function(){ 
		
		Route::get('/biodata', [
			'uses' => 'Biodata@home', //Change This
			'as' => 'biodata.biodata'
		]);

	});

	Route::group(['namespace'=>'Slipgaji'], function(){ 
		
		Route::get('/slip-gaji', [
			'uses' => 'Slipgaji@home', //Change This
			'as' => 'slipgaji.slip_gaji'
		]);

	});
	
});