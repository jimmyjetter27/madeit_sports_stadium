@extends('layouts.app')
@section('main')
    <div class="flex row m-5 justify-between space-x-1">
        @include('customer.authenticated.layouts.sports')
    </div>
@endsection
