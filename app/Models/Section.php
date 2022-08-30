<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;
use Spatie\Permission\Models\Role;
use App\Models\User;

class Section extends Model
{
    use HasFactory, HasTags;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'settings',
        'owner_id',
    ];

    public function instruments(){
        return $this->belongsToMany(Role::class, 'instruments_sections', 'sections_id', 'instruments_id');
    }

    public function users(){
        return $this->belongsToMany(User::class, 'users_sections', 'sections_id', 'user_id');
    }

    public function owner(){
        return $this->belongsTo(User::class);
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->status;
    }

    /**
     * @return bool
     */
    public function isPinned()
    {
        return $this->is_pinned;
    }
}
