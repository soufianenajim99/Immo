<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bien extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'type',
        'description',
        'adresse',
        'prop_id',
        'picture'
    ];

    public function prop(){
        return $this->belongsTo(prop::class);
    }
    public function client(){
        return $this->belongsTo(client::class);
    }
}