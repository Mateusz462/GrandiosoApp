<div class="list-group list-group-light">
    <a href="{{ route('settings.index') }}" class="list-group-item list-group-item-action px-3 border-0 text-white {{ Route::is('settings.index') ? 'active' : ''  }}" aria-current="{{ Route::is('settings.index') ? 'true' : 'false'  }}">
        <i class="fas fa-cog"></i> Ogólne
    </a>
    <a href="{{ route('settings.modules') }}" class="list-group-item list-group-item-action px-3 border-0 text-white {{ Route::is('settings.modules') ? 'active' : ''  }}" aria-current="{{ Route::is('settings.modules') ? 'true' : 'false'  }}">
        <i class="fas fa-align-justify"></i> Moduły
    </a>
    <a href="{{ route('settings.sections') }}" class="list-group-item list-group-item-action px-3 border-0 text-white {{ Route::is('settings.sections') ? 'active' : ''  }}" aria-current="{{ Route::is('settings.sections') ? 'true' : 'false'  }}">
        <i class="fas fa-users"></i> Sekcje
    </a>
    <a href="{{ route('roles.index') }}" class="list-group-item list-group-item-action px-3 border-0 text-white {{ Route::is('roles.index') ? 'active' : ''  }}" aria-current="{{ Route::is('roles.index') ? 'true' : 'false'  }}">
        <i class="fas fa-theater-masks"></i> Rangi
    </a>
    <a href="#" class="list-group-item list-group-item-action px-3 border-0 text-white" aria-current="{{ Route::is('settings.index') ? 'true' : 'false'  }}">
        <i class="fas fa-fingerprint"></i> Uprawnienia
    </a>
    <a href="{{ route('settings.availability') }}" class="list-group-item list-group-item-action px-3 border-0 text-white {{ Route::is('settings.availability') ? 'active' : ''  }}" aria-current="{{ Route::is('settings.availability') ? 'true' : 'false'  }}">
        <i class="fas fa-shield-alt"></i> Dostępność
    </a>
    <a href="#" class="list-group-item list-group-item-action px-3 border-0 text-white" aria-current="{{ Route::is('settings.index') ? 'true' : 'false'  }}">
        <i class="fas fa-bars"></i> Logi
    </a>
</div>
