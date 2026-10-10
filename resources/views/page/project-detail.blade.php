@extends('layout.app')

@section('title', $project->title)

@section('content')
<div class="container flex-grow-1">

    {{-- Breadcrumb --}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('project.index') }}">Project</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $project->title }}</li>
        </ol>
    </nav>

    <div class="mb-4">
        <a href="{{ route('project.index') }}" class="btn btn-danger">&larr; Kembali</a>
    </div>

    <div class="row g-4">
        {{-- Kiri: gambar + deskripsi --}}
        <div class="col-md-7">
            <img src="{{ asset('images/' . $project->image) }}"
                alt="{{ $project->title }}"
                class="img-fluid rounded shadow-sm w-100"
                style="min-height: 300px; max-height: 420px; object-fit: cover;">

            <div class="card border-0 shadow-sm mt-4">
                <div class="card-body">
                    <h5 class="fw-bold mb-3">Deskripsi Project</h5>
                    <p class="mb-0">{{ $project->description }}</p>
                </div>
            </div>

            <div class="card border-0 shadow-sm mt-4">
                <div class="card-body">
                    <h5 class="fw-bold mb-3">Fitur Utama</h5>
                    <ul class="mb-0">
                        <li>Fitur 1</li>
                        <li>Fitur 2</li>
                        <li>Fitur 3</li>
                    </ul>
                </div>
            </div>

            <div class="card border-0 shadow-sm mt-4">
                <div class="card-body">
                    <h5 class="fw-bold mb-3">Tahapan Pengerjaan</h5>
                    <ol class="mb-0">
                        <li>Analisis kebutuhan</li>
                        <li>Perancangan desain</li>
                        <li>Pengembangan</li>
                        <li>Pengujian dan perbaikan</li>
                    </ol>
                </div>
            </div>
        </div>

        {{-- Kanan: informasi --}}
        <div class="col-md-5">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <h4 class="fw-bold mb-3">{{ $project->title }}</h4>
                    <span class="badge {{ $project->status == 'Selesai' ? 'bg-success' : 'bg-warning text-dark' }}">
                        {{ $project->status }}
                    </span>

                    <ul class="list-group list-group-flush mt-3">
                        <li class="list-group-item px-0 d-flex justify-content-between">
                            <span class="text-muted">Status</span>
                            <strong>{{ $project->status }}</strong>
                        </li>
                        <li class="list-group-item px-0 d-flex justify-content-between">
                            <span class="text-muted">Dibuat</span>
                            <strong>{{ $project->created_at->format('d M Y') }}</strong>
                        </li>
                        <li class="list-group-item px-0 d-flex justify-content-between">
                            <span class="text-muted">ID Project</span>
                            <strong>#{{ $project->id }}</strong>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="fw-bold mb-3">Teknologi</h5>
                    @foreach (preg_split('/\s*[,&]\s*/', $project->teknologi) as $tech)
                        <span class="badge bg-primary me-1 mb-1">{{ $tech }}</span>
                    @endforeach
                </div>
            </div>

            <div class="d-grid gap-2">
                @if ($prev)
                    <a href="{{ route('project.show', $prev->id) }}" class="btn btn-outline-secondary">&larr; Project Sebelumnya</a>
                @endif
                @if ($next)
                    <a href="{{ route('project.show', $next->id) }}" class="btn btn-outline-secondary">Project Berikutnya &rarr;</a>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection