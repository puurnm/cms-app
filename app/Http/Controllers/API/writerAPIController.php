<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatewriterAPIRequest;
use App\Http\Requests\API\UpdatewriterAPIRequest;
use App\Models\writer;
use App\Repositories\writerRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class writerController
 * @package App\Http\Controllers\API
 */

class writerAPIController extends AppBaseController
{
    /** @var  writerRepository */
    private $writerRepository;

    public function __construct(writerRepository $writerRepo)
    {
        $this->writerRepository = $writerRepo;
    }

    /**
     * Display a listing of the writer.
     * GET|HEAD /writers
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $writers = $this->writerRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($writers->toArray(), 'Writers retrieved successfully');
    }

    /**
     * Store a newly created writer in storage.
     * POST /writers
     *
     * @param CreatewriterAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatewriterAPIRequest $request)
    {
        $input = $request->all();

        $writer = $this->writerRepository->create($input);

        return $this->sendResponse($writer->toArray(), 'Writer saved successfully');
    }

    /**
     * Display the specified writer.
     * GET|HEAD /writers/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var writer $writer */
        $writer = $this->writerRepository->find($id);

        if (empty($writer)) {
            return $this->sendError('Writer not found');
        }

        return $this->sendResponse($writer->toArray(), 'Writer retrieved successfully');
    }

    /**
     * Update the specified writer in storage.
     * PUT/PATCH /writers/{id}
     *
     * @param int $id
     * @param UpdatewriterAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatewriterAPIRequest $request)
    {
        $input = $request->all();

        /** @var writer $writer */
        $writer = $this->writerRepository->find($id);

        if (empty($writer)) {
            return $this->sendError('Writer not found');
        }

        $writer = $this->writerRepository->update($input, $id);

        return $this->sendResponse($writer->toArray(), 'writer updated successfully');
    }

    /**
     * Remove the specified writer from storage.
     * DELETE /writers/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var writer $writer */
        $writer = $this->writerRepository->find($id);

        if (empty($writer)) {
            return $this->sendError('Writer not found');
        }

        $writer->delete();

        return $this->sendSuccess('Writer deleted successfully');
    }
}
