<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class artist extends Model
{
    //
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'artist';

    protected $primaryKey = 'name';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function artobject()
    {
        // TODO: add relation over here.
        return $this->hasMany('App\Models\artobject','artist_name','object_id');
    }

}
