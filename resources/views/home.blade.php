@extends('layouts.admin')

@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">Blank Page</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">{{ __('Dashboard') }}</h5>
                </div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>

</div>
{{-- <div class="container">
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

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection

@push('scripts')

<script>
    var nameLeng=document.getElementById("namaLengkap").value;
    window.addEventListener("load", (event) => {
        window.notyf.open({
                    type:  "success",
                    message: "Selamat Datang "+nameLeng,
                    duration: 10000,
                    ripple: true,
                    dismissible: true,
                    position: {
                        x: "right",
                        y: "top"
                        }
				});
    });

</script>

@endpush
