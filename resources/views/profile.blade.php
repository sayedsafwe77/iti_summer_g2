@extends('layouts.main')
@section('content')
    <h1>welcome {{ Auth::user()->name }}</h1>
@endsection
