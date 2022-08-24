<?php
/*TODO:: By Eng. Moomen Sameer Aldahdouh 0599124279, moomenaldahdouh@gmail.com*/
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class MetaTag extends Model
{
    use HasTranslations;

    public $translatable = ['meta_title','meta_description'];
    protected $table = "meta_tags";
    protected $guarded = [];
    public $timestamps = false;
}
