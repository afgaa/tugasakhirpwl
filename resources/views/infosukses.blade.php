@extends('mainLayout.main')
@section('index','active')
@section('content')
<div class="container">

    @if ($statuslogin == 1)
    <div class="alert alert-success alert-dismissible fade show d-flex justify-content-center" role="alert">
        <div class="col">{{ $message }}</div>
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    @if ($statuslogin == 0)
    <div class="alert alert-danger alert-dismissible fade show d-flex justify-content-center" role="alert">
        <div class="col">{{ $message }}</div>
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="row justify-content-center mt-5 mb-5">

        <h1>isi content</h1>
    </div>
</div>
@endsection