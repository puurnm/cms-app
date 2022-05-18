<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class writer
 * @package App\Models
 * @version May 18, 2022, 2:16 am UTC
 *
 * @property string $nama
 * @property string $email
 * @property string $hobi
 * @property string $pekerjaan
 */
class writer extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'writers';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama',
        'email',
        'hobi',
        'pekerjaan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama' => 'string',
        'email' => 'string',
        'hobi' => 'string',
        'pekerjaan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama' => 'required',
        'email' => 'required',
        'hobi' => 'required',
        'pekerjaan' => 'required'
    ];

    
}
