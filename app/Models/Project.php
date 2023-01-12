<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laravel\Sail\Console\PublishCommand;

use function PHPSTORM_META\type;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'description','dev_lang','framework','team', 'git_link', 'diff_lvl', 'cover_image'];

    public static function generateSlug($name)
    {
        return Str::slug($name, '-');
    }

    public function types():BelongsTo {

        return $this->belongsTo(Type::class);
    }

}
