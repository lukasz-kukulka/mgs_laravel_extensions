@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card text-center">
                        <div class="card-header">{{ __('base.user_profile_title') }}</div>
                        <div class="card-body">
                            <div class="question_{{ $id }}">{{ $question }}</div>
                            <form method="POST" action="{{ route('mgs_access_question') }}">
                                @csrf
                                <input type="hidden" name="yes_route" value="{{ $yesRoute }}">
                                <input type="hidden" name="no_route" value="{{ $noRoute }}">
                                <div class="row mt-3">
                                    <div class="col">
                                        @php
                                            $translations = include base_path( 'vendor\mgs\confirm_access\ConfirmAccessExtension\Translations\\' . app()->getLocale() . '\cae.php' );
                                        @endphp
                                        <button type="submit" class="btn btn-success btn-block" name="response" value="yes">{{ $translations['yes'] }}</button>
                                    </div>
                                    <div class="col">
                                        <button type="submit" class="btn btn-danger btn-block" name="response" value="no">{{ $translations['no'] }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
