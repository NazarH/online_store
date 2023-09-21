@extends('layouts.admin')
@section('content')
    <banner-component :banners='@json($banners)' csrf="{{ csrf_token() }}">
    </banner-component>
@endsection
