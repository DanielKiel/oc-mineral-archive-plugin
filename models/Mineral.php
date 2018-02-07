<?php namespace Dionyseos\MineralArchive\Models;

use Model;

/**
 * Mineral Model
 */
class Mineral extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'dionyseos_mineralarchive_minerals';

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
    public $attachOne = [
        'poster' => 'System\Models\File'
    ];
    public $attachMany = [];

    public $rules = [
        'title' => 'required',
        'color' => 'required',
        'description' => 'required',
        'hardness' => 'required',
        'density_from' => 'required',
        'density_to' => 'required',
        'chemical_formula' => 'required',
        'typicality' => 'required',
        'streal_colour' => 'required',
        'opacity' => 'required',
        'lustre' => 'required',
        'ima_state' => 'required',
        'naming' => 'required',
        'synonyms' => 'required'
    ];
}
