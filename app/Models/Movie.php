<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'release_year',
        'duration',
        'description',
        'photo',
        'studio_id',
        'age_rating_id',
        'watch_url',
    ];
    protected $appends = ['photo_absolute_path'];

    public function getPhotoAbsolutePathAttribute()
    {
        return $this->photo ? storage_path('app' . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . $this->photo) : null;
    }
    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'movie_genres', 'movie_id', 'genre_id');
    }


    public function actors()
    {
        return $this->belongsToMany(Actor::class, 'movie_actors', 'movie_id', 'actor_id');
    }

    public function studio()
    {
        return $this->belongsTo(Studio::class);
    }

    public function AgeRating()
    {
        return $this->belongsTo(AgeRating::class, 'age_rating_id'); // Убедитесь, что поле называется age_rating_id
    }

    public function rating()
    {
        return $this->hasMany(Rating::class, 'movies_id'); // Указываем правильное имя внешнего ключа
    }
    public function favoritedBy()
    {
        return $this->belongsToMany(User::class, 'favorites')->withTimestamps();
    }
}

