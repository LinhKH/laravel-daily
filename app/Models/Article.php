<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Article extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = ['user_id', 'title', 'article_text'];

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function getCategoriesLinksAttribute()
    {
        $categories = $this->categories()->get()->map(function($category) {
            return '<a href="'.route('articles.index').'?category_id='.$category->id.'">'.$category->name.'</a>';
        })->implode(' | ');

        if ($categories == '') return 'none';

        return $categories;
    }

    public function getTagsLinksAttribute()
    {
        $tags = $this->tags()->get()->map(function($tag) {
            return '<a href="'.route('articles.index').'?tag_id='.$tag->id.'">'.$tag->name.'</a>';
        })->implode(' | ');

        if ($tags == '') return 'none';

        return $tags;
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaConversion('thumb')
            ->width(200)
            ->height(200);

            $this->addMediaConversion('main')
            ->width(600)
            ->height(200);
    }
}
