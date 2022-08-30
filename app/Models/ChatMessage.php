<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Section;
use Spatie\Permission\Models\Role;
use App\Models\User;

class ChatMessage extends Model
{
    use HasFactory;

    protected $table = 'chat_message_sections';
    protected $dates = [
        'time',
    ];
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'message',
        'hidden',
        'time',
        'status',
        'sections_id',
        'user_id',
    ];

    public function section(){
        return $this->belongsTo(Section::class);
    }

    public function user(){
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
