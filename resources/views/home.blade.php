@extends('layouts.app')

@section('page_title')
Home
@endsection

@section('main_content')

    {{-- Banner  --}}
    @include('components.banner')

    {{-- Comics List  --}}
    @include('components.comics-list')

    {{-- Pre Footer  --}}
    @include('components.pre-footer') 


@endsection

