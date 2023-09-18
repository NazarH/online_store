<<<<<<< HEAD
@extends('layouts.admin')
@section('content')

        <x-admin.admin-table-reviews :reviews="$reviews"></x-admin.admin-table-reviews>

@endsection
=======
<x-admin.admin-nav>
    <x-slot:title>
        OnlineStore - відгуки
        </x-slot>
        <x-admin.admin-table-reviews :reviews="$reviews"></x-admin.admin-table-reviews>
</x-admin.admin-nav>
>>>>>>> bbcfcfb7764e40f704a2e8732ee6ce3046a23d2b
