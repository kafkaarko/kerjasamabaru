<?php

// app/Models/ItemCategory.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori_item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    // Relasi dengan tabel 'items'
    public function items()
    {
        return $this->hasMany(stock::class);
    }
}
