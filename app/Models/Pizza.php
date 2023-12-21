<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Pizza extends Model
{
    use SoftDeletes;
    use HasFactory;


    protected $fillable = [
        'nom',
        'description',
        'prix',
        'image',
    ];
    function commande(){

        return $this->belongsToMany(Commande::class,'commande_pizza','pizza_id','commande_id')
        ->withPivot('qte');
    }
}
