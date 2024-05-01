<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfirmAccessController extends Controller
{
    public function redirect( Request $request ) {
        dd( 'ConfirmAccessController redirect()', $request );
    }
}