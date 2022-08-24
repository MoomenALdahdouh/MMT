<?php
/*TODO:: By Eng. Moomen Sameer Aldahdouh 0599124279, moomenaldahdouh@gmail.com*/
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ProductOptions extends Model
{
    //use HasFactory;
    use HasTranslations;

    public $translatable = ['name'];
    protected $table = "products_options";
    protected $guarded = [];
    public $timestamps = false;
}
