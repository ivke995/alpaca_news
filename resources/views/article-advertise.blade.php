<!--Section: News of the day-->
<div class="row forHorScroll1 index">
    <div class="col-md-5 mb-4 singleHor ">
        <div class="smallArticle forHorScroll shadow-lg">
            <a target="_blank" href="https://www.linkedin.com/in/nikola-divjak-4665b316b/">
            <img src="https://media-exp1.licdn.com/dms/image/C4E03AQEwq4ogw-nUlw/profile-displayphoto-shrink_400_400/0/1595183985346?e=1670457600&v=beta&t=3hQ8QPOLbxZrEHb3m4NVRUVu4IHXsh_4eiHM2D6Gh9k" class="img-fluid rounded-lg shadow-sm dzona" style="border-radius: 0.5rem; width: 100%" />
             </a>

                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>

        </div>
    </div>

    <div class="col-md-7 mb-4">
        <h5 class="text-start"><strong><span class="badge bg-danger px-2 py-1 shadow-1-strong">Infomedia</span>Software developer</strong></h5>
        <p class="text-muted small text-start">
            {{ Str::limit($article->text, 180) }} <a href="{{ route('show', $article->id) }}" class="btn btn-sm btn-secondary" style="padding: 0.05rem 0.1rem; font-size: 0.75rem;">Više</a>
        </p>
    </div>
</div>
