<?php

use Illuminate\Support\Facades\Route;

Route::post('confirm/access', [ MGS\ConfirmAccessExtension\Controllers\ConfirmAccessController::class, 'redirect'] )
    ->name('mgs_access_question')
    ->middleware( ['auth', 'verified'] );
