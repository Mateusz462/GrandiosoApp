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
        'time_to',
    ];

    protected $fillable = [
        'time_from',
        'time_to',
        'place',
        'status',
        'user_id',
        'reason',
        'shifttype',
        'rehearsaltype',
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
