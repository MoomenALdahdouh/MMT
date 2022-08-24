<?php
/*TODO:: By Eng. Moomen Sameer Aldahdouh 0599124279, moomenaldahdouh@gmail.com*/
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ProductCategories extends Model
{
    //use HasTranslations;

    //public $translatable = ['meta_title','meta_description'];
    protected $table = "products_categories";
    protected $guarded = [];
    public $timestamps = false;

    public function product()
    {
        return $this->hasOne(Product::class, 'id', 'product_fk_id');
    }

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_fk_id');
    }
}
