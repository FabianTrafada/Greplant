<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'scientific_name', 'description', 'image', 'island_id'];

    /**
     * Relasi ke model Island (Many-to-One).
     */
    public function island()
    {
        return $this->belongsTo(Island::class);
    }
}