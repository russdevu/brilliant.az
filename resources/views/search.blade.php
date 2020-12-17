@extends('layouts.site')

@section('page-title', 'Расширенный поиск')

@section('rubrics')
    @include('includes.rubrics')
@endsection

@section('main-container')
    @include('includes.search.advanced-search')
@endsection
