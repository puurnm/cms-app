<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Mahasiswa
 * @package App\Models
 * @version April 11, 2022, 5:51 am UTC
 *
 * @property string $nama
 * @property string $nim
 * @property string $tempat_lahir
 * @property string $tgl_lahir
 * @property string $alamat
 * @property string $hobi
 */
class Mahasiswa extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'mahasiswas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama',
        'nim',
        'tempat_lahir',
        'tgl_lahir',
        'alamat',
        'hobi'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama' => 'string',
        'nim' => 'string',
        'tempat_lahir' => 'string',
        'tgl_lahir' => 'date',
        'alamat' => 'string',
        'hobi' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama' => 'required',
        'nim' => 'required',
        'tempat_lahir' => 'required',
        'tgl_lahir' => 'required',
        'alamat' => 'required',
        'hobi' => 'required'
    ];

    
}
