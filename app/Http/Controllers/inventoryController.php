<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateinventoryRequest;
use App\Http\Requests\UpdateinventoryRequest;
use App\Repositories\inventoryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class inventoryController extends AppBaseController
{
    /** @var  inventoryRepository */
    private $inventoryRepository;

    public function __construct(inventoryRepository $inventoryRepo)
    {
        $this->inventoryRepository = $inventoryRepo;
    }

    /**
     * Display a listing of the inventory.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $inventories = $this->inventoryRepository->all();

        return view('inventories.index')
            ->with('inventories', $inventories);
    }

    /**
     * Show the form for creating a new inventory.
     *
     * @return Response
     */
    public function create()
    {
        return view('inventories.create');
    }

    /**
     * Store a newly created inventory in storage.
     *
     * @param CreateinventoryRequest $request
     *
     * @return Response
     */
    public function store(CreateinventoryRequest $request)
    {        
        $input = $request->all();

        $inventory = $this->inventoryRepository->create($input);

        Flash::success('Inventario agregado exitosamente.');

        return redirect(route('inventories.index'));
    }

    /**
     * Display the specified inventory.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $inventory = $this->inventoryRepository->find($id);

        if (empty($inventory)) {
            Flash::error('Inventario no encontrado');

            return redirect(route('inventories.index'));
        }

        return view('inventories.show')->with('inventory', $inventory);
    }

    /**
     * Show the form for editing the specified inventory.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $inventory = $this->inventoryRepository->find($id);

        if (empty($inventory)) {
            Flash::error('Inventario no encontrado');

            return redirect(route('inventories.index'));
        }

        return view('inventories.edit')->with('inventory', $inventory);
    }

    /**
     * Update the specified inventory in storage.
     *
     * @param int $id
     * @param UpdateinventoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateinventoryRequest $request)
    {
        $inventory = $this->inventoryRepository->find($id);

        if (empty($inventory)) {
            Flash::error('Inventario no encontrado');

            return redirect(route('inventories.index'));
        }

        $inventory = $this->inventoryRepository->update($request->all(), $id);

        Flash::success('Inventario actualizado exitosamente.');

        return redirect(route('inventories.index'));
    }

    /**
     * Remove the specified inventory from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $inventory = $this->inventoryRepository->find($id);

        if (empty($inventory)) {
            Flash::error('Inventario no encontrado');

            return redirect(route('inventories.index'));
        }

        $this->inventoryRepository->delete($id);

        Flash::success('Inventario eliminado exitosamente.');

        return redirect(route('inventories.index'));
    }
}
