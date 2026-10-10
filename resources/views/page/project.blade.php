@extends('layout.app')

@section('title', 'Project')

@section('content')
<div class="container flex-grow-1">
    <div class="mb-4 text-center">
        <h2 class="fw-bold">Portofolio Project</h2>
        <p class="text-muted">Daftar Project yang dikerjakan oleh mahasiswa</p>
    </div>
    <div class="row g-4">
        @foreach ($projects as $project)
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="{{ asset('images/' . $project->image) }}"
                        alt="{{ $project->title }}"
                        class="card-img-top"
                        style="height: 200px; object-fit: cover; background: #e9ecef;"
                        onerror="this.onerror=null; this.src='data:image/svg+xml;utf8,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22200%22><rect width=%22100%25%22 height=%22100%25%22 fill=%22%23e9ecef%22/><text x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 fill=%22%236c757d%22 font-family=%22sans-serif%22>Gambar tidak ditemukan</text></svg>'">
                    <div class="card-body">
                        <h5 class="card-title mb-4">{{ $project->title }}</h5>
                        <span class="badge bg-success">{{ $project->status }}</span>
                        <p class="card-text">{{ Str::limit($project->description, 50) }}</p>
                    </div>
                    <div class="card-footer bg-white border-0 pb-3">
                        <div class="mb-2">
                            <small>Tech : {{ $project->teknologi }}</small>
                        </div>
                        <a href="{{ route('project.show', $project->id) }}" class="btn btn-primary w-100">Detail Project</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection