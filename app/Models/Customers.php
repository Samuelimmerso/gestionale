<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;

    /* protected $fillable = []; */
    protected $guarded = [];

    protected $attributes = [
        'active' => 0
    ];

    public function getActiveAttribute($attribute){
        return $this->ActiveOptions()[$attribute];
    }

    public function scopeActive($query){
        return $query->where('active',true);

    }

    public function scopeInactive($query){
        return $query->where('active',false);
    }


    public function ActiveOptions(){
        return [
         0=>'Inattivo',
         1=>'Attivo',
        ];
    }


}
