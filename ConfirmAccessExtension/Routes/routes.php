<?php

use Illuminate\Support\Facades\Route;

Route::post('confirm/access', [ MGSCAE\Controllers\ConfirmAccessController::class, 'redirect'] )
    ->name('mgs_access_question')
    ->middleware( ['auth', 'verified'] );