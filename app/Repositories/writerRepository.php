<?php

namespace App\Repositories;

use App\Models\writer;
use App\Repositories\BaseRepository;

/**
 * Class writerRepository
 * @package App\Repositories
 * @version May 18, 2022, 2:16 am UTC
*/

class writerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama',
        'email',
        'hobi',
        'pekerjaan'
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
        return writer::class;
    }
}
