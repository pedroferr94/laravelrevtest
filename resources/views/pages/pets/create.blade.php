@extends('master.main')
@section('content')
    @component('components.pets.pet-form-create',['people' => $people])
    @endcomponent
@endsection
