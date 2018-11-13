<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTopupRequest;
use App\Http\Requests\UpdateTopupRequest;
use App\Repositories\TopupRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TopupController extends Controller
{
    /** @var  TopupRepository */
    private $topupRepository;

    public function __construct(TopupRepository $topupRepo)
    {
        $this->topupRepository = $topupRepo;
    }

    /**
     * Display a listing of the Topup.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->topupRepository->pushCriteria(new RequestCriteria($request));
        $topups = $this->topupRepository->all();

        return view('topups.index')
            ->with('topups', $topups);
    }

    /**
     * Show the form for creating a new Topup.
     *
     * @return Response
     */
    public function create()
    {
        return view('topups.create');
    }

    /**
     * Store a newly created Topup in storage.
     *
     * @param CreateTopupRequest $request
     *
     * @return Response
     */
    public function store(CreateTopupRequest $request)
    {
        $input = $request->all();

        $topup = $this->topupRepository->create($input);

        Flash::success('Topup saved successfully.');

        return redirect(route('topups.index'));
    }

    /**
     * Display the specified Topup.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $topup = $this->topupRepository->findWithoutFail($id);

        if (empty($topup)) {
            Flash::error('Topup not found');

            return redirect(route('topups.index'));
        }

        return view('topups.show')->with('topup', $topup);
    }

    /**
     * Show the form for editing the specified Topup.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $topup = $this->topupRepository->findWithoutFail($id);

        if (empty($topup)) {
            Flash::error('Topup not found');

            return redirect(route('topups.index'));
        }

        return view('topups.edit')->with('topup', $topup);
    }

    /**
     * Update the specified Topup in storage.
     *
     * @param  int              $id
     * @param UpdateTopupRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTopupRequest $request)
    {
        $topup = $this->topupRepository->findWithoutFail($id);

        if (empty($topup)) {
            Flash::error('Topup not found');

            return redirect(route('topups.index'));
        }

        $topup = $this->topupRepository->update($request->all(), $id);

        Flash::success('Topup updated successfully.');

        return redirect(route('topups.index'));
    }

    /**
     * Remove the specified Topup from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $topup = $this->topupRepository->findWithoutFail($id);

        if (empty($topup)) {
            Flash::error('Topup not found');

            return redirect(route('topups.index'));
        }

        $this->topupRepository->delete($id);

        Flash::success('Topup deleted successfully.');

        return redirect(route('topups.index'));
    }
}
