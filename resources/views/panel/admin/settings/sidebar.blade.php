<h2 class="card-title ms-1 mb-2 d-none d-md-inline">
    <strong>Menu</strong>
</h2>
<div class="list-group list-group-light">
    <a href="{{ route('settings.index') }}" class="list-group-item list-group-item-action px-3 border-0 text-white {{ Route::is('settings.index') ? 'active' : ''  }}" aria-current="{{ Route::is('settings.index') ? 'true' : 'false'  }}">
        <i class="fas fa-cog me-2"></i><span class="d-none d-md-inline">Ogólne</span>
    </a>
    <a href="{{ route('settings.modules') }}" class="list-group-item list-group-item-action px-3 border-0 text-white {{ Route::is('settings.modules') ? 'active' : ''  }}" aria-current="{{ Route::is('settings.modules') ? 'true' : 'false'  }}">
        <i class="fas fa-align-justify me-2"></i><span class="d-none d-md-inline">Moduły</span>
    </a>
    <a href="{{ route('settings.sections') }}" class="list-group-item list-group-item-action px-3 border-0 text-white {{ Route::is('settings.sections') ? 'active' : ''  }}" aria-current="{{ Route::is('settings.sections') ? 'true' : 'false'  }}">
        <i class="fas fa-users me-2"></i><span class="d-none d-md-inline">Sekcje</span>
    </a>
    <a href="{{ route('roles.index') }}" class="list-group-item list-group-item-action px-3 border-0 text-white {{ Route::is('roles.index') ? 'active' : ''  }}" aria-current="{{ Route::is('roles.index') ? 'true' : 'false'  }}">
        <i class="fas fa-theater-masks me-2"></i><span class="d-none d-md-inline">Rangi</span>
    </a>
    <a href="#" class="list-group-item list-group-item-action px-3 border-0 text-white" aria-current="{{ Route::is('settings.index') ? 'true' : 'false'  }}">
        <i class="fas fa-fingerprint me-2"></i><span class="d-none d-md-inline">Uprawnienia</span>
    </a>
    <a href="{{ route('settings.availability') }}" class="list-group-item list-group-item-action px-3 border-0 text-white {{ Route::is('settings.availability') ? 'active' : ''  }}" aria-current="{{ Route::is('settings.availability') ? 'true' : 'false'  }}">
        <i class="fas fa-shield-alt me-2"></i><span class="d-none d-md-inline">Dostępność</span>
    </a>
    <a href="#" class="list-group-item list-group-item-action px-3 border-0 text-white" aria-current="{{ Route::is('settings.index') ? 'true' : 'false'  }}">
        <i class="fas fa-bars me-2"></i><span class="d-none d-md-inline">Logi</span>
    </a>
</div>
