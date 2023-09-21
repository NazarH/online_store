@extends('layouts.admin')
@section('content')
    <product-update-component
        :attributes='@json($attributes)'
        :product='@json($product)'
        csrf='{{ csrf_token() }}' >
    </product-update-component>

@endsection
