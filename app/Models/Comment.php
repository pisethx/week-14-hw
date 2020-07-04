<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Comment
 * @package App\Models
 * @version July 4, 2020, 5:56 am UTC
 *
 */
class Comment extends Model
{
    use SoftDeletes;

    public $table = 'comments';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'post_id',
        'content',
        'creator_id',
        'approved'
    ];

    public $with = ['user', 'post'];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer'
    ];
    public function user()
    {
        return $this->belongsTo("App\User", "creator_id");
    }
    public function post()
    {
        return $this->belongsTo(Post::class, "post_id");
    }
    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [];
}
