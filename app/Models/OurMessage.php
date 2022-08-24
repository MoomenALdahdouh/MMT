<?php
/*TODO:: By Eng. Moomen Sameer Aldahdouh 0599124279, moomenaldahdouh@gmail.com*/
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class OurMessage extends Model
{
    use HasTranslations;

    public $translatable = ['title', 'description', 'home_page_text'];
    protected $table = "our_message";
    protected $guarded = [];
    public $timestamps = false;
}
