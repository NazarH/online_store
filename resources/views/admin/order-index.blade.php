@extends('layouts.admin')
@section('content')

        <x-admin.admin-table-orders :orders="$orders"></x-admin.admin-table-orders>

@endsection
