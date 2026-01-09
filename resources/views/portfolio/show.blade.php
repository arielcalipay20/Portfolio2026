@extends('layouts.app')

@section('title', $project['title'] . ' - Portfolio')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">{{ $project['title'] }}</li>
                    </ol>
                </nav>

                <h1 class="mb-4">{{ $project['title'] }}</h1>

                <img src="{{ asset('images/' . $project['image']) }}" class="img-fluid rounded mb-4"
                    alt="{{ $project['title'] }}"
                    onerror="this.src='https://via.placeholder.com/800x400/667eea/ffffff?text={{ urlencode($project['title']) }}'">

                <div class="mb-4">
                    @foreach ($project['technologies'] as $tech)
                        <span class="tech-badge {{ strtolower(str_replace([' ', '.'], '', $tech)) }}">
                            {{ $tech }}
                        </span>
                    @endforeach
                </div>

                <p class="lead">{{ $project['description'] }}</p>

                <h3 class="h4 mt-5 mb-3">Key Features</h3>
                <ul class="feature-list">
                    @foreach ($project['features'] as $feature)
                        <li>{{ $feature }}</li>
                    @endforeach
                </ul>

                <div class="mt-4">
                    <a href="{{ route('home') }}" class="btn btn-outline-primary">Back to Portfolio</a>
                </div>
            </div>
        </div>
    </div>
@endsection
