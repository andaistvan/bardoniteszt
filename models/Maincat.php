<?php namespace Arteriaweb\Bardoniteszt\Models;

use Model;

/**
 * maincat Model
 */
class Maincat extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'arteriaweb_bardoniteszt_maincats';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
