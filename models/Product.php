<?php namespace Arteriaweb\Bardoniteszt\Models;

use Model;

/**
 * product Model
 */
class Product extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'arteriaweb_bardoniteszt_products';

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
    public $belongsTo = [
        'maincat' => [Maincat::class],
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
