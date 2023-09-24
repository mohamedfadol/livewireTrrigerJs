@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @livewire('user-component') 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    document.addEventListener('say-goodbye', function (data) {
        console.log('Received custom event:', data.detail[0]['message']);
        alert(data.detail[0]['message']);
    }); 
</script>
@endsection
