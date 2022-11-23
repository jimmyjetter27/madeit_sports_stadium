@extends('customer.authenticated.layouts.app')
@section('main')
    <div class="sports text-center"><h2 class="font-extrabold">Available Sports</h2></div>
    <div class="flex justify-between">
    @include('customer.authenticated.layouts.sports')
    </div>
@endsection
