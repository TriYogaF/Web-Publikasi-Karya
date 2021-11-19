<?php

namespace App\Models;

use App\Models\Artwork;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ArtworkCategory extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function artworkCategory()
    {
        return $this->hasMany(Artwork::class);
    }
}
