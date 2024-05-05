<?php

namespace MGS\ConfirmAccessExtension\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConfirmAccessController extends Controller
{
    public function redirect( Request $request ) {
        if ( $request->input( 'response' ) == 'yes' ) {
            return redirect( $request->input( 'yes_route' ) );
        } else if( $request->input( 'response' ) == 'no' ) {
            return redirect( $request->input( 'no_route' ) );
        } else {
            dd( 'ERROR in ConfirmAccessController::redirect' );
        }
}
