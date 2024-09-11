@extends('master.main')
@section('content')
    @component('components.addresses.address-list', ['addresses' => $addresses])
    @endcomponent
@endsection
