@extends('layouts.app')

@section('title', 'Calipay Portfolio')

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="laravel-badge">Software Developer</div>
                    <h1>Building Web & Mobile Applications</h1>
                    <p class="lead">Software developer with 2 years of professional experience building scalable web and
                        mobile applications using Laravel, Bootstrap and React Native.</p>
                    <div class="skills-list mt-4">
                        <span class="tech-badge laravel">Laravel</span>
                        <span class="tech-badge bootstrap">Bootstrap</span>
                        <span class="tech-badge my-sql">MySQL</span>
                        <span class="tech-badge">PHP</span>
                        <span class="tech-badge javascript">JavaScript</span>
                        <span class="tech-badge">Nativewind</span>
                        <span class="tech-badge react-native">React Native</span>
                        <span class="tech-badge">Typescript</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="py-5 my-5">
        <div class="container">
            <h2 class="section-title">Featured Projects</h2>
            @if ($projects->isEmpty())
                <div class="alert alert-info text-center">
                    No projects available yet. Check back soon!
                </div>
            @else
                <div class="row g-4">
                    @foreach ($projects as $project)
                        <div class="col-md-6 col-lg-4">
                            <div class="card project-card">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $project['title'] }}</h5>
                                    <p class="card-text">{{ $project['description'] }}</p>
                                    <div class="mt-3">
                                        @foreach ($project['technologies'] as $tech)
                                            <span class="tech-badge {{ strtolower(str_replace([' ', '.'], '', $tech)) }}">
                                                {{ $tech }}
                                            </span>
                                        @endforeach
                                    </div>
                                    <div class="mt-3">
                                        <a href="{{ route('project.show', $project->slug) }}"
                                            class="btn btn-sm btn-primary">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <h2 class="section-title">Let's Work Together</h2>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <form id="contactForm" action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                placeholder="Your Name" value="{{ old('name') }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                placeholder="Your Email" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <textarea name="message" class="form-control @error('message') is-invalid @enderror" rows="5"
                                placeholder="Your Message" required>{{ old('message') }}</textarea>
                            @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" id="submitBtn">
                                <span id="btnText">Send Message</span>
                                <span id="btnSpinner" class="spinner-border spinner-border-sm d-none" role="status"></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
