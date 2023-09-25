@extends('layouts.admin')
@section('content')
    <banner-component :banners='@json($banners)'>
    </banner-component>
@endsection
