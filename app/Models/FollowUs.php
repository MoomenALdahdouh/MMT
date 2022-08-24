<?php
/*TODO:: By Eng. Moomen Sameer Aldahdouh 0599124279, moomenaldahdouh@gmail.com*/
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class FollowUs extends Model
{
    use HasTranslations;

    public $translatable = ['location'];
    protected $table = "follow_us";
    protected $guarded = [];
    public $timestamps = false;
}
