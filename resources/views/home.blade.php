@extends('layouts.app')
@section('styles')
<style>
    #map{
    width: 1000px;
    height: 1000px;
    }
</style>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @livewire('user-component') 
                    <div id="map"></div>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">

function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        center: { lat: 37.7749, lng: -122.4194 }, // Set the initial map center
        zoom: 4 // Set the initial zoom level
    });
    @foreach ($users as $user)
        var userLatLng = new google.maps.LatLng({{ $user->lat }}, {{ $user->long }});
        var marker = new google.maps.Marker({
            position: userLatLng,
            map: map,
            
            //title: "{{ $user->name }}" // Display user's name as a tooltip
        });
    @endforeach
}
window.initMap = initMap;
</script>
<script type="text/javascript" src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap" ></script>
<!-- <script type="text/javascript">
    document.addEventListener('say-goodbye', function (data) {
        console.log('Received custom event:', data.detail[0]['message']);
        alert(data.detail[0]['message']);
    }); 
</script> -->
@endsection
