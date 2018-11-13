<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePromoRequest;
use App\Http\Requests\UpdatePromoRequest;
use App\Repositories\PromoRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PromoController extends Controller
{
    /** @var  PromoRepository */
    private $promoRepository;

    public function __construct(PromoRepository $promoRepo)
    {
        $this->promoRepository = $promoRepo;
    }

    /**
     * Display a listing of the Promo.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->promoRepository->pushCriteria(new RequestCriteria($request));
        $promos = $this->promoRepository->all();

        return view('promos.index')
            ->with('promos', $promos);
    }

    /**
     * Show the form for creating a new Promo.
     *
     * @return Response
     */
    public function create()
    {
        return view('promos.create');
    }

    /**
     * Store a newly created Promo in storage.
     *
     * @param CreatePromoRequest $request
     *
     * @return Response
     */
    public function store(CreatePromoRequest $request)
    {
        $input = $request->all();

        $promo = $this->promoRepository->create($input);

        Flash::success('Promo saved successfully.');

        return redirect(route('promos.index'));
    }

    /**
     * Display the specified Promo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $promo = $this->promoRepository->findWithoutFail($id);

        if (empty($promo)) {
            Flash::error('Promo not found');

            return redirect(route('promos.index'));
        }

        return view('promos.show')->with('promo', $promo);
    }

    /**
     * Show the form for editing the specified Promo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $promo = $this->promoRepository->findWithoutFail($id);

        if (empty($promo)) {
            Flash::error('Promo not found');

            return redirect(route('promos.index'));
        }

        return view('promos.edit')->with('promo', $promo);
    }

    /**
     * Update the specified Promo in storage.
     *
     * @param  int              $id
     * @param UpdatePromoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePromoRequest $request)
    {
        $promo = $this->promoRepository->findWithoutFail($id);

        if (empty($promo)) {
            Flash::error('Promo not found');

            return redirect(route('promos.index'));
        }

        $promo = $this->promoRepository->update($request->all(), $id);

        Flash::success('Promo updated successfully.');

        return redirect(route('promos.index'));
    }

    /**
     * Remove the specified Promo from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $promo = $this->promoRepository->findWithoutFail($id);

        if (empty($promo)) {
            Flash::error('Promo not found');

            return redirect(route('promos.index'));
        }

        $this->promoRepository->delete($id);

        Flash::success('Promo deleted successfully.');

        return redirect(route('promos.index'));
    }
}
