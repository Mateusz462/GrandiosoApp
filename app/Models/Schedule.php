<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $table = 'schedule';

    protected $dates = [
        'date',
        'time_from',
        'time_to'
    ];

    protected $fillable = [
        'title',
        'date',
        'time_from',
        'time_to',
        'rehearsaltype',
        'shifttype',
        'description',
        'place',
        'program',
        'status',
        'user_id',
        'reason',
    ];

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

    public function today()
    {
        return $this->date;
    }
}
