<?php

namespace MGS\ChangePasswordExtension\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function changePassword() {
        return view('change_password');
    }

    public function updatePassword( Request $request ) {
        $request->validate([
            'new_password' => ['required', 'string', 'min:8', 'confirmed']
        ]);

        User::whereId(auth()->user()->id)->update( [
            'password' => Hash::make( $request->new_password )
        ] );
        $translations = include base_path( 'vendor\mgs\change_password\ChangePasswordExtension\Translations\\' . app()->getLocale() . '\cae.php' );

        return view('redirection_info')
            ->with('id', 'changed_password_info')
            ->with('title', $translations['confirm_text_info_password_change'] )
            ->with('infoAnnouncement', $translations['confirm_text_info_password_change'] )
            ->with('redirectionRouteName', 'main' )
            ->with('redirectedText', $translations['user_account_change_password_link_text'] )
            ->with('delayTime', 5000 );
    }
}