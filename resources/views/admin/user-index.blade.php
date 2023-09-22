@extends('layouts.admin')
@section('content')

    <user-component :users='@json($users)' csrf='{{ csrf_token() }}' :auth='@json($auth)'></user-component>

@endsection
