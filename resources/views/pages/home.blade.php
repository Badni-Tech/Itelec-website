@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="home">
        <div class="home-text">
            <h1>Master In-Demand Digital & Technical Skills</h1>
            <p>Since 2022, we provide 100% practical, international standard training led by expert instructors for fresh graduates and professionals.</p>
        </div>
        <div class="home-content">
            <x-hero.home-button href="{{ url('/trainings') }}">Explore our trainings</x-hero.home-button>
            <span><i class="bi bi-check-lg" style="color: green;"></i></i>International Certified Programs</span>
        </div>
    </div>
    @include('components.technologies.technologies')
    @include('components.different.makes-us-different')
    @include('components.popular.popular')
    @include('components.students.students')
    @include('components.graduates.graduates')
    @foreach ($courses as $course)

    <a href="{{ route('training', $course) }}">
        <h2>{{ $course->title }}</h2>
    </a>

@endforeach
@endsection