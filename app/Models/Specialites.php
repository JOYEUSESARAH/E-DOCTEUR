<?php

namespace App\Models;
use App\Models\Specialites;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialites extends Model
{
    use HasFactory;
    protected $guarded = [

    ];

}
