<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatebillingRequest;
use App\Http\Requests\UpdatebillingRequest;
use App\Repositories\billingRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class billingController extends AppBaseController
{
    /** @var  billingRepository */
    private $billingRepository;

    public function __construct(billingRepository $billingRepo)
    {
        $this->billingRepository = $billingRepo;
    }

    /**
     * Display a listing of the billing.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $billings = $this->billingRepository->all();

        return view('billings.index')
            ->with('billings', $billings);
    }

    /**
     * Show the form for creating a new billing.
     *
     * @return Response
     */
    public function create()
    {
        return view('billings.create');
    }

    /**
     * Store a newly created billing in storage.
     *
     * @param CreatebillingRequest $request
     *
     * @return Response
     */
    public function store(CreatebillingRequest $request)
    {
        $input = $request->all();

        $billing = $this->billingRepository->create($input);

        Flash::success('Factura generada.');

        return redirect(route('billings.index'));
    }

    /**
     * Display the specified billing.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $billing = $this->billingRepository->find($id);

        if (empty($billing)) {
            Flash::error('Factura no encontrada');

            return redirect(route('billings.index'));
        }

        return view('billings.show')->with('billing', $billing);
    }

    /**
     * Show the form for editing the specified billing.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $billing = $this->billingRepository->find($id);

        if (empty($billing)) {
            Flash::error('Factura no encontrada');

            return redirect(route('billings.index'));
        }

        return view('billings.edit')->with('billing', $billing);
    }

    /**
     * Update the specified billing in storage.
     *
     * @param int $id
     * @param UpdatebillingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatebillingRequest $request)
    {
        $billing = $this->billingRepository->find($id);

        if (empty($billing)) {
            Flash::error('Factura no encontrada');

            return redirect(route('billings.index'));
        }

        $billing = $this->billingRepository->update($request->all(), $id);

        Flash::success('Factura modificada exitosamente.');

        return redirect(route('billings.index'));
    }

    /**
     * Remove the specified billing from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $billing = $this->billingRepository->find($id);

        if (empty($billing)) {
            Flash::error('Factura no encontrada');

            return redirect(route('billings.index'));
        }

        $this->billingRepository->delete($id);

        Flash::success('Factura eliminada exitosamente.');

        return redirect(route('billings.index'));
    }
}
