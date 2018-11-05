<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class artobject extends Model
{
    //
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'art_object';
    protected $primaryKey = 'object_id';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function artist()
    {
        // TODO: add relation over here.
        return $this->belongto('App\Models\artist','name');
    }

}
