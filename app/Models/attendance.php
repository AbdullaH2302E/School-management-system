<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class attendance extends Model
{
    use HasFactory;
    protected $table = 'attendence';
    protected $fillable = [
       'user_id',
       ' date',
       'status',
       'remarks',
    ]; 
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
