<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable =[
          'name',
           'branch',
           'address',
           'date',
           'file',
           'status',
           'user_id',    
           'notes',
           'contact'
    ];
    public function user(){
     return $this->belongsTo(User::class);
    }
     public function guards (){
     return $this->hasMany(Guard::class);
    }
}
