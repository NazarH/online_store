@extends('layouts.admin')
@section('content')
    <product-create-component :categories='@json($categories)' csrf='{{ csrf_token() }}'></product-create-component>
@endsection
