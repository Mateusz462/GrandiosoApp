<nav class="navbar navbar-expand-lg navbar-dark bg-dark border-top shadow-2-strong  px-2">
    <div class="container-fluid">
        <button class="btn btn-primary btn-rounded me-2 d-none" id="sidebarToggle">Toggle Menu</button>
        @if(Route::is('user.sections.show'))
            <span type="button" class="badge rounded-pill badge-secondary active fs-6" data-mdb-ripple-color="dark">
                Informacje
            </span>
        @else
            <a href="{{ route('user.sections.show', $section->id) }}" type="button" class="btn btn-link btn-rounded text-secondary text-reset" data-mdb-ripple-color="dark">
                Informacje
            </a>
        @endif
        @if(Route::is('user.sections.announcements'))
            <span type="button" class="badge rounded-pill badge-secondary active fs-6" data-mdb-ripple-color="dark">
                Ogłoszenia
            </span>
        @else
            <a href="{{ route('user.sections.announcements', $section->id) }}" type="button" class="btn btn-link btn-rounded text-secondary text-reset" data-mdb-ripple-color="dark">
                Ogłoszenia
            </a>
        @endif
        @if(Route::is('user.sections.hashtags'))
            <span type="button" class="badge rounded-pill badge-secondary active fs-6" data-mdb-ripple-color="dark">
                Tematy
            </span>
        @else
            <a href="{{ route('user.sections.hashtags', $section->id) }}" type="button" class="btn btn-link btn-rounded text-secondary text-reset" data-mdb-ripple-color="dark">
                Tematy
            </a>
        @endif
        @if(Route::is('user.sections.members'))
            <span type="button" class="badge rounded-pill badge-secondary active fs-6" data-mdb-ripple-color="dark">
                Członkowie
            </span>
        @else
            <a href="{{ route('user.sections.members', $section->id) }}" type="button" class="btn btn-link btn-rounded text-secondary text-reset" data-mdb-ripple-color="dark">
                Członkowie
            </a>
        @endif
        @if(Route::is('user.sections.media'))
            <span type="button" class="badge rounded-pill badge-secondary active fs-6" data-mdb-ripple-color="dark">
                Multimedia
            </span>
        @else
            <a href="{{ route('user.sections.media', $section->id) }}" type="button" class="btn btn-link btn-rounded text-secondary text-reset" data-mdb-ripple-color="dark">
                Multimedia
            </a>
        @endif
        @if(Route::is('user.sections.files'))
            <span type="button" class="badge rounded-pill badge-secondary active fs-6" data-mdb-ripple-color="dark">
                Pliki
            </span>
        @else
            <a href="{{ route('user.sections.files', $section->id) }}" type="button" class="btn btn-link btn-rounded text-secondary text-reset" data-mdb-ripple-color="dark">
                Pliki
            </a>
        @endif
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                <li class="nav-item me-2"><button class="btn btn-secondary" id="sidebarToggle"><i class="fas fa-plus me-1"></i>Dodaj post</button></li>
                <li class="nav-item me-3"><button class="btn btn-secondary" id="sidebarToggle"><i class="fas fa-search"></i></button></li>
            </ul>
        </div>
    </div>
</nav>
