<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfirmAccessController extends Controller
{
    public function redirect( Request $request ) {
        dd( 'ConfirmAccessController redirect()', $request );
        // return view('accounts.confirmed_account')
        //         ->with( 'accountType', $accountType )
        //         ->with( 'isEdit', true )
        //         ->with( 'company', $company );
    }
}
