<!--Section: News of the day-->
<div class="row gx-5">
    <div class="col-md-5 mb-4">
        <div class="bg-image hover-overlay ripple shadow-2-strong">
            <img src="{{ $article->image_url }}" class="img-fluid rounded-lg shadow-sm" style="border-radius: 0.5rem; width: 100%" />

            <a class="btn btn-primary btn-block mt-2 w-100" href="{{ route('show', $article->id) }}">Pročitaj više</a>

            <a href="{{ route('show', $article->id) }}">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
        </div>
    </div>



    <div class="col-md-7 mb-4">
        <h5 class="text-start"><strong><span class="badge bg-danger px-2 py-1 shadow-1-strong">{{ $article->source->name }}</span> {{ $article->title }}</strong></h5>
        <p class="text-muted small text-start">
            {{ Str::limit($article->text, 180) }} <a href="{{ route('show', $article->id) }}" class="btn btn-sm btn-secondary" style="padding: 0.05rem 0.1rem; font-size: 0.75rem;">Više</a>
        </p>
    </div>
</div>
