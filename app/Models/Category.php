<?php
/*TODO:: By Eng. Moomen Sameer Aldahdouh 0599124279, moomenaldahdouh@gmail.com*/
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasTranslations;

    public $translatable = ['name', 'description','meta_title','meta_description'];
    protected $table = "categories";
    protected $guarded = [];
    public $timestamps = false;

    public function product()
    {
        return $this->hasMany(ProductCategories::class, 'category_fk_id', 'id');
    }
}
