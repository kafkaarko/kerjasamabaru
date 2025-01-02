<?php

// app/Models/Item.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'type', 'category', 'size', 'color', 'warehouse_id', 'quantity',
    ];

    // Relasi dengan tabel 'warehouse'
    public function warehouse()
    {
        return $this->belongsTo(gudang::class);
    }

    // Relasi dengan tabel 'item_categories'
    public function itemCategory()
    {
        return $this->belongsTo(kategori_item::class, 'category');
    }
}

