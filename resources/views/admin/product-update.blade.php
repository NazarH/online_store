@extends('layouts.admin')
@section('content')
    <product-update-component
        :attributes='@json($attributes)'
        :product='@json($product)'
        >
    </product-update-component>

@endsection
