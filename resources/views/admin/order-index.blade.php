<<<<<<< HEAD
@extends('layouts.admin')
@section('content')

        <x-admin.admin-table-orders :orders="$orders"></x-admin.admin-table-orders>

@endsection
=======
<x-admin.admin-nav>
    <x-slot:title>
        OnlineStore - замовлення
        </x-slot>
        <x-admin.admin-table-orders :orders="$orders"></x-admin.admin-table-orders>
</x-admin.admin-nav>
>>>>>>> bbcfcfb7764e40f704a2e8732ee6ce3046a23d2b
