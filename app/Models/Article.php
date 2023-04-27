<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Category;
use Laravel\Scout\Searchable;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'title',
        'author',
        'img',
        'description'
    ];

    public function toSearchableArray()
    {

        return [
            'id' => $this->id,
            'title' => $this->title,
            'category' => $this->category,
            'description' => $this->description,
            'author' => $this->author,
            'user' => $this->user->name,
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public static function revisorArticlesCount()
    {
        return self::where('is_published', null)->count();
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function getTags()
    {
        $alltags = '';

        foreach ($this->tags as $tag) {
            $alltags = $alltags . $tag->name . ', ';
        }

        return $alltags;
    }

    public function getArrayCategories()
    {
        $outputArray = [];

        foreach ($this->categories()->get()->toArray() as $array) {
            array_push($outputArray, $array['name']);
        }

        return $outputArray;
    }
}
