@extends('layouts.portfolio')

@section('title', $portfolio['name'] . ' - Portfolio')

@section('content')


<section class="hero-section py-5 text-center bg-dark text-white">
    <div class="container">
        <img src="{{ asset($portfolio['profile_image']) }}" alt="{{ $portfolio['name'] }}" class="profile-img rounded-circle mb-4" style="width: 150px;">
        <h1 class="display-4">{{ $portfolio['name'] }}</h1>
        <h3 class="mb-3">{{ $portfolio['title'] }}</h3>
        <p class="lead">{{ $portfolio['bio'] }}</p>
    </div>
</section>


<section id="location" class="section py-5">
    <div class="container">
        <h2 class="section-title mb-4">Location</h2>
        <p>{{ $portfolio['location'] }}</p>
        <h2 class="section-title mb-4">Skills</h2>
        <p>{{ $portfolio['Skills'] }}</p>
    </div>
</section>


<section id="projects" class="section bg-light py-5">
    <div class="container">
        <h2 class="section-title mb-4">My Projects</h2>
        @foreach($portfolio['projects'] as $project)
            <div class="card mb-4">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset($project['image']) }}" class="img-fluid rounded-start" alt="{{ $project['name'] }}">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $project['name'] }}</h5>
                            <p class="card-text">{{ $project['description'] }}</p>
                            <p class="card-text"><strong>Technologies:</strong> {{ implode(', ', $project['technologies']) }}</p>
                            <a href="{{ $project['demo_url'] }}" target="_blank" class="btn btn-primary btn-sm">Live Demo</a>
                            <a href="{{ $project['github_url'] }}" target="_blank" class="btn btn-secondary btn-sm">GitHub</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>


<section id="experience" class="section py-5">
    <div class="container">
        <h2 class="section-title mb-4">Experience</h2>
        @foreach ($portfolio['experience'] as $exp)
            <div class="mb-4">
                <h4>{{ $exp['position'] }} <small class="text-muted">at {{ $exp['School'] }}</small></h4>
                <p><strong>Period:</strong> {{ $exp['period'] }}</p>
                <p>{{ $exp['description'] }}</p>
            </div>
        @endforeach
    </div>
</section>


<section id="contact" class="section py-5">
    <div class="container">
        <h2 class="section-title mb-4">Get In Touch</h2>
        <p><strong>Email:</strong> {{ $portfolio['email'] }}</p>
        <p><strong>Contact:</strong> {{ $portfolio['phone'] }}</p>
    </div>
</section>

@endsection
