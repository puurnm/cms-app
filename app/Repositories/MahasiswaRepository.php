<?php

namespace App\Repositories;

use App\Models\Mahasiswa;
use App\Repositories\BaseRepository;

/**
 * Class MahasiswaRepository
 * @package App\Repositories
 * @version April 11, 2022, 5:51 am UTC
*/

class MahasiswaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama',
        'nim',
        'tempat_lahir',
        'tgl_lahir',
        'alamat',
        'hobi'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Mahasiswa::class;
    }
}
