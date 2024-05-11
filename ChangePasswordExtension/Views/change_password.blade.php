@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card text-center">
                        <div class="card-header">{{ __('base.user_account_change_password_title') }}</div>
                        <div class="card-body">
                            <form action="{{ route('update_password') }}" method="POST" class="card-body">
                                @csrf
                                @php $translations = include base_path( 'vendor\mgs\change_password\ChangePasswordExtension\Translations\\' . app()->getLocale() . '\cae.php' ); @endphp
                                @if ( session('status') )
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @elseif ( session('error') )
                                    <div class="alert alert-danger" role="alert">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                <div class="mb-3">
                                    <label for="new_password" class="form-label">{{ $translations['new_password']  }}</label>
                                    <input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="new_password"
                                        placeholder="{{ $translations['new_password']  }}">
                                    @error('new_password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="new_password_confirmation" class="form-label">{{ $translations['new_password_confirm'] }}</label>
                                    <input name="new_password_confirmation" type="password" class="form-control" id="new_password_confirmation"
                                        placeholder="{{ $translations['new_password_confirm'] }}">
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-success" type="submit">{{ $translations['submit'] }}</button>
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
