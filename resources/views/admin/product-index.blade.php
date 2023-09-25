@extends('layouts.admin')
@section('content')
    <product-component :products='@json($products)'></product-component>
@endsection
