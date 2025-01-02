<?php

// app/Models/ItemCategory.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori_item extends Model
{
    use HasFactory;

    protected $table = 'kategori_item';

    protected $fillable = [
       'name', 'type', 'category', 'size', 'color', 
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

    public function gudang()
    {
        return $this->hasMany(gudang::class,    'barang_id');
    }
    

    // Relasi dengan tabel 'items'
    // public function items()
    // {
    //     return $this->hasMany(stock::class);
    // }
}
