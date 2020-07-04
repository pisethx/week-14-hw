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
        'creator_id'
    ];

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
        return $this->belongsTo(User::class, "creator_id", "id");
    }
    public function post()
    {
        return $this->belongsTo(Post::class, "post_id", "id");
    }
    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [];
}
