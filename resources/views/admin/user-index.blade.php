@extends('layouts.admin')
@section('content')

    <user-component :users='@json($users)' :auth='@json($auth)'></user-component>

@endsection
