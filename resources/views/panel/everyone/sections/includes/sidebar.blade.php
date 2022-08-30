<img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/184.webp" style="height: 12rem;" class="card-img-top" alt="Fissure in Sandstone"/>
<div class="sidebar-heading border-bottom bg-dark">
    <h4 class="card-title"><strong>{{ $section->name }}</strong></h4>
    <h6 class="text-muted">Orkiestra Grandioso Radom</h6>
    <ul class="list-unstyled text-muted mt-2">
        <li class="mb-1"><i class="fas fa-users me-2"></i>Członków: <a href="" class="text-wrap text-reset lh-sm"><strong>12</strong></a></li>
        <li class="mb-1"><i class="fas fa-user-tie me-2"></i>Opiekun sekcji: <a href="" class="text-wrap text-reset lh-sm"><strong>{{ $section->owner->firstname }} {{ $section->owner->lastname }}</strong></a></li>
        <li class=""><i class="fas fa-clock me-2"></i>Data utworzenia: <a href="" class="text-wrap text-reset lh-sm"><strong>28.08.2021</strong></a></li>
    </ul>
    <div class="d-flex mb-3">
        <img src="https://mdbootstrap.com/img/new/avatars/3.jpg" class="rounded-circle" alt="" style="height: 50; width: 50px; border: 3px solid #303030;"/>
        <?php
            for ($i=4; $i < 13; $i++) {
                echo '<img src="https://mdbootstrap.com/img/new/avatars/'.$i.'.jpg" class="rounded-circle" alt="" style="height: 50; width: 50px; margin-left: -15px;  border: 3px solid #303030;"/>';
            }
        ?>
    </div>
    <button class="btn btn-secondary btn-block"><i class="fas fa-cogs me-1"></i>Zarządzaj</button>
</div>
<div class="list-group list-group-light list-group-flush">
    <a href="{{ route('user.sections.show', $section->id) }}" class="list-group-item list-group-item-action px-3 border-0 text-white border-bottom {{ Route::is('settings.index') ? 'active' : ''  }}" aria-current="{{ Route::is('settings.index') ? 'true' : 'false'  }}">
        <i class="fas fa-home"></i> Ogólne
    </a>
    <a href="{{ route('user.sections.chat', $section->id) }}" class="list-group-item list-group-item-action px-3 border-0 text-white border-bottom" aria-current="{{ Route::is('settings.index') ? 'true' : 'false'  }}">
        <i class="fas fa-comments"></i> Czat
    </a>
</div>
