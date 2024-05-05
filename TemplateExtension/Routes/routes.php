<?php

use Illuminate\Support\Facades\Route;

Route::post('test/test', [ MGS\TemplateExtension\Controllers\TemplateController::class, 'test'] )
    ->name('test')
    ->middleware( ['auth', 'verified'] );