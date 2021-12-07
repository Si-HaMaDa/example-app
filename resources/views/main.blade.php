@extends('layout1')

@section('content')
<section>
    Hello from section {{ $key }}

    <br>
    <a href="{{ url('home') }}">Click!</a>
    <a href="{{ route('home') }}">Click!</a>
    <br>
    <a href="{{ url('user/account') }}">Click!</a>
    <a href="{{ route('account') }}">Click!</a>
    <br>
    <a href="{{ url('user/'.auth()->user()->id) }}">Click!</a>
    <a href="{{ route('profile', auth()->user()->id) }}">Click!</a>
</section>
@endsection

@section('page-title', 'New')


@push('head-links')
<link rel="stylesheet">
@endpush
