@extends('customer.authenticated.layouts.app')
@section('main')
    <div class="sports text-center"><h2 class="font-extrabold">Available Sports Activities</h2></div>
    <div class="flex row justify-between space-x-1">
    @include('customer.authenticated.layouts.sports')
    </div>
@endsection
