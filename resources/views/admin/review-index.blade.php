@extends('layouts.admin')
@section('content')

        <x-admin.admin-table-reviews :reviews="$reviews"></x-admin.admin-table-reviews>

@endsection
