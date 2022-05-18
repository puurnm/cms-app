<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatewriterRequest;
use App\Http\Requests\UpdatewriterRequest;
use App\Repositories\writerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class writerController extends AppBaseController
{
    /** @var  writerRepository */
    private $writerRepository;

    public function __construct(writerRepository $writerRepo)
    {
        $this->writerRepository = $writerRepo;
    }

    /**
     * Display a listing of the writer.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $writers = $this->writerRepository->all();

        return view('writers.index')
            ->with('writers', $writers);
    }

    /**
     * Show the form for creating a new writer.
     *
     * @return Response
     */
    public function create()
    {
        return view('writers.create');
    }

    /**
     * Store a newly created writer in storage.
     *
     * @param CreatewriterRequest $request
     *
     * @return Response
     */
    public function store(CreatewriterRequest $request)
    {
        $input = $request->all();

        $writer = $this->writerRepository->create($input);

        Flash::success('Writer saved successfully.');

        return redirect(route('writers.index'));
    }

    /**
     * Display the specified writer.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $writer = $this->writerRepository->find($id);

        if (empty($writer)) {
            Flash::error('Writer not found');

            return redirect(route('writers.index'));
        }

        return view('writers.show')->with('writer', $writer);
    }

    /**
     * Show the form for editing the specified writer.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $writer = $this->writerRepository->find($id);

        if (empty($writer)) {
            Flash::error('Writer not found');

            return redirect(route('writers.index'));
        }

        return view('writers.edit')->with('writer', $writer);
    }

    /**
     * Update the specified writer in storage.
     *
     * @param int $id
     * @param UpdatewriterRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatewriterRequest $request)
    {
        $writer = $this->writerRepository->find($id);

        if (empty($writer)) {
            Flash::error('Writer not found');

            return redirect(route('writers.index'));
        }

        $writer = $this->writerRepository->update($request->all(), $id);

        Flash::success('Writer updated successfully.');

        return redirect(route('writers.index'));
    }

    /**
     * Remove the specified writer from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $writer = $this->writerRepository->find($id);

        if (empty($writer)) {
            Flash::error('Writer not found');

            return redirect(route('writers.index'));
        }

        $this->writerRepository->delete($id);

        Flash::success('Writer deleted successfully.');

        return redirect(route('writers.index'));
    }
}
