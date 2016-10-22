<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /**
     * Sizes of an image for galleries and images in posts.
     */
    const SIZE_ORIGINAL = 'original';
    const SIZE_THUMBNAIL = 'thumbnail';

    /**
     * Sizes of a featured image of a post.
     */
    const SIZE_FEATURED = 'featured';
    const SIZE_FEATURED_THUMBNAIL = 'featured_thumbnail';

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'images';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'post_id',
        'gallery_id',
        'title',
        'image',
        'size',
        'order',
    ];

    /**
     * Get the user that has uploaded the image.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the post that owns the image.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post()
    {
        return $this->belongsTo('App\Post');
    }

    /**
     * Get the gallery that owns the image.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function gallery()
    {
        return $this->belongsTo('App\Gallery');
    }


}
