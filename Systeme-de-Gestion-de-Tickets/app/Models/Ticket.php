<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'status', 'categorie_id', 'user_id'];

    public function category(){
        return $this->belongsTo(Category::class, 'categorie_id');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}