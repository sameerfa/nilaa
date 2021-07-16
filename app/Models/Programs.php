<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programs extends Model
{
    use HasFactory;
    protected $table = 'programs';
    protected $fillable = [
        'user_id',
        'file_name',
        'name',
        'status'
    ];

    public function user(){
      return $this->belongsTo(user::class);
    }
}
