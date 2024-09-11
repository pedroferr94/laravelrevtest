@extends('master.main')
@section('content')
    @component('components.people.person-form-create', ['addresses' => $addresses]))
    @endcomponent
@endsection
