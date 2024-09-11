@extends('master.main')
@section('content')
    @component('components.pets.pet-list', ['pets' => $pets])
    @endcomponent
@endsection
