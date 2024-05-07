@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card text-center {{ $id }}">
                        <div class="card-header">{{ $title }}</div>
                        <div class="card-body">
                            <div class="info_announcement">{{ $infoAnnouncement }}</div><br>
                            <div class="link_to_home_page"><a href="{{ route( $redirectionRouteName ) }}">{{ $reditectedText }}</a></div><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<script>
    setTimeout(function() {
        window.location.href = "{{ route( $redirectionRouteName ) }}";
    }, {{ $delayTime }}  );
</script>
@endsection
