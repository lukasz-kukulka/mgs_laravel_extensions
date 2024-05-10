<?php

use Illuminate\Support\Facades\Route;

// Route::post('test/test', [ MGSCPE\Controllers\ChangePasswordController::class, 'test'] )
//     ->name('test')
//     ->middleware( ['auth', 'verified'] );

Route::get( '/change/password', [ MGSCPE\Controllers\ChangePasswordController::class, 'changePassword'])
    ->name( 'change_password' )
    ->middleware( ['auth', 'verified'] );

Route::post('/confirm/change/password', [ MGSCPE\Controllers\ChangePasswordController::class, 'updatePassword'])
    ->name( 'update_password' )
    ->middleware( ['auth', 'verified'] );
