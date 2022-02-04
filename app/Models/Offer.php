<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    public function candidacies()
    {
        return $this->belongsToMany(
            User::class,
            'candidacies',
            'offer_id',
            'user_id');
    }
}
