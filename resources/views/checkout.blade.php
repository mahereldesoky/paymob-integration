@extends('layouts.app')

@section('content')

<div class="container py-5 text-center">
<form action="{{ route('checkout') }}" method="POST">
    @csrf
    @method('POST')
        <button class="btn btn-lg text-light bg-dark text-center"
            type="submit" >Confirm Online Order
        </button>
</form>
</div>

@endsection