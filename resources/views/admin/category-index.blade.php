@extends('layouts.admin')
@section('content')

    <category-component :categories='@json($categories)'></category-component>

@endsection
