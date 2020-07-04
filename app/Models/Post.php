<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Post
 * @package App\Models
 * @version July 4, 2020, 4:37 am UTC
 *
 */
class Post extends Model
{
    use SoftDeletes;

    public $table = 'posts';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title', 'content', 'creator_id', 'approved'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'creator_id', "id");
    }

    public function comments()
    {
        return $this->hasMany(Comment::class)->latest();
    }

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [];
}
