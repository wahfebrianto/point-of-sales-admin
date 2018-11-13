<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePacketRequest;
use App\Http\Requests\UpdatePacketRequest;
use App\Repositories\PacketRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PacketController extends Controller
{
    /** @var  PacketRepository */
    private $packetRepository;

    public function __construct(PacketRepository $packetRepo)
    {
        $this->packetRepository = $packetRepo;
    }

    /**
     * Display a listing of the Packet.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->packetRepository->pushCriteria(new RequestCriteria($request));
        $packets = $this->packetRepository->all();

        return view('packets.index')
            ->with('packets', $packets);
    }

    /**
     * Show the form for creating a new Packet.
     *
     * @return Response
     */
    public function create()
    {
        return view('packets.create');
    }

    /**
     * Store a newly created Packet in storage.
     *
     * @param CreatePacketRequest $request
     *
     * @return Response
     */
    public function store(CreatePacketRequest $request)
    {
        $input = $request->all();

        $packet = $this->packetRepository->create($input);

        Flash::success('Packet saved successfully.');

        return redirect(route('packets.index'));
    }

    /**
     * Display the specified Packet.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $packet = $this->packetRepository->findWithoutFail($id);

        if (empty($packet)) {
            Flash::error('Packet not found');

            return redirect(route('packets.index'));
        }

        return view('packets.show')->with('packet', $packet);
    }

    /**
     * Show the form for editing the specified Packet.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $packet = $this->packetRepository->findWithoutFail($id);

        if (empty($packet)) {
            Flash::error('Packet not found');

            return redirect(route('packets.index'));
        }

        return view('packets.edit')->with('packet', $packet);
    }

    /**
     * Update the specified Packet in storage.
     *
     * @param  int              $id
     * @param UpdatePacketRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePacketRequest $request)
    {
        $packet = $this->packetRepository->findWithoutFail($id);

        if (empty($packet)) {
            Flash::error('Packet not found');

            return redirect(route('packets.index'));
        }

        $packet = $this->packetRepository->update($request->all(), $id);

        Flash::success('Packet updated successfully.');

        return redirect(route('packets.index'));
    }

    /**
     * Remove the specified Packet from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $packet = $this->packetRepository->findWithoutFail($id);

        if (empty($packet)) {
            Flash::error('Packet not found');

            return redirect(route('packets.index'));
        }

        $this->packetRepository->delete($id);

        Flash::success('Packet deleted successfully.');

        return redirect(route('packets.index'));
    }
}
