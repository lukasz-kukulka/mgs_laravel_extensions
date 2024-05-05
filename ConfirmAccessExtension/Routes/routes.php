<?php

use Illuminate\Support\Facades\Route;
use vendor\mgs\mgsLaravelExtensions\ConfirmAccessExtension\Controllers\ConfirmAccessController;

Route::post('confirm/access', [ ConfirmAccessController::class, 'redirect'] )
    ->name('mgs_access_question')
    ->middleware( ['auth', 'verified'] );
