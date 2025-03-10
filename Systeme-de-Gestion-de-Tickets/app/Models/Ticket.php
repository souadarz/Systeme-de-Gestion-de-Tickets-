<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'status'];

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

}