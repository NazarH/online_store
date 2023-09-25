@extends('layouts.admin')
@section('content')
    <product-create-component :categories='@json($categories)'></product-create-component>
@endsection
