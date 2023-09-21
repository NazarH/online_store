@extends('layouts.admin')
@section('content')
    <product-component :products='@json($products)' csrf='{{ csrf_token() }}'></product-component>
@endsection
