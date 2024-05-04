<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfirmAccessController extends Controller
{
    public function redirect( Request $request ) {
        dd( 'ConfirmAccessController redirect()', $request );

        // if( $request->input( '' ) ) {

        // } else if( $request->input( '' ) ) {}
        // return view('accounts.confirmed_account')
        //         ->with( 'accountType', $request->input(  ) )
        //         ->with( 'isEdit', true )
        //         ->with( 'company', $company );
    }
}