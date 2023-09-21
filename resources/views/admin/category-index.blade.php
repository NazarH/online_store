@extends('layouts.admin')
@section('content')

    <category-component :categories='@json($categories)' csrf="{{ csrf_token() }}"></category-component>

@endsection
