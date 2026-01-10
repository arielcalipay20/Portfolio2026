@extends('layouts.app')

@section('title', $project->title . ' - Portfolio')

@section('content')
    <style>
        .project-detail {
            padding: 60px 0;
        }

        .project-hero-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 12px;
            margin-bottom: 2rem;
        }

        .feature-list {
            list-style: none;
            padding: 0;
        }

        .feature-list li {
            padding: 0.75rem 0;
            border-bottom: 1px solid #e9ecef;
        }

        .feature-list li:before {
            content: "✓";
            color: var(--primary-color);
            font-weight: bold;
            margin-right: 1rem;
        }

        .back-link {
            color: #6c757d;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            margin-bottom: 2rem;
        }

        .back-link:hover {
            color: var(--primary-color);
        }
    </style>

    <div class="project-detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <!-- Back Link -->
                    <a href="{{ route('home') }}" class="back-link">
                        ← Back to Portfolio
                    </a>

                    <!-- Project Title -->
                    <h1 class="mb-4">{{ $project->title }}</h1>

                    <!-- Technologies -->
                    <div class="mb-4">
                        @foreach ($project->technologies as $tech)
                            <span class="tech-badge {{ strtolower(str_replace([' ', '.'], '', $tech)) }}">
                                {{ $tech }}
                            </span>
                        @endforeach
                    </div>

                    <!-- Project Image -->
                    <img src="{{ $project->image ? asset('images/' . $project->image) : 'https://via.placeholder.com/1200x400/667eea/ffffff?text=' . urlencode($project->title) }}"
                        class="project-hero-image" alt="{{ $project->title }}"
                        onerror="this.src='https://via.placeholder.com/1200x400/667eea/ffffff?text={{ urlencode($project->title) }}'">

                    <!-- Project Description -->
                    <div class="row">
                        <div class="col-lg-8">
                            <h2 class="h4 mb-3">About This Project</h2>
                            <p class="lead">{{ $project->description }}</p>
                            @if ($project->long_description)
                                <p>{{ $project->long_description }}</p>
                            @endif

                            @if ($project->features && count($project->features) > 0)
                                <h3 class="h4 mt-5 mb-3">Key Features</h3>
                                <ul class="feature-list">
                                    @foreach ($project->features as $feature)
                                        <li>{{ $feature }}</li>
                                    @endforeach
                                </ul>
                            @endif

                            <!-- Action Buttons -->
                            <div class="mt-5">
                                @if ($project->github_url)
                                    <a href="{{ $project->github_url }}" class="btn btn-primary" target="_blank">
                                        View on GitHub
                                    </a>
                                @endif
                                @if ($project->demo_url)
                                    <a href="{{ $project->demo_url }}" class="btn btn-outline-primary" target="_blank">
                                        Live Demo
                                    </a>
                                @endif
                                <a href="{{ route('home') }}#projects" class="btn btn-outline-secondary">
                                    View More Projects
                                </a>
                            </div>
                        </div>

                        <!-- Sidebar -->
                        <div class="col-lg-4">
                            <div class="card mt-4 mt-lg-0">
                                <div class="card-body">
                                    <h4 class="h5 mb-3">Project Info</h4>
                                    <p><strong>Technologies:</strong></p>
                                    <ul class="list-unstyled">
                                        @foreach ($project->technologies as $tech)
                                            <li class="mb-1">• {{ $tech }}</li>
                                        @endforeach
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
