@extends('layouts.layout')

@section('title', 'Главная')

@section('content')

@include('inc.index.main.section')
@include('inc.index.about-us.section')
@include('inc.index.general-info.section')
@include('inc.index.project.section')
@include('inc.index.development.section')
@include('inc.index.research.section')
@include('inc.index.mass-media-about-us.section')
@include('inc.index.support.section')
@endsection