<?php

namespace App\Http\Controllers;

use App\View;
use Illuminate\Http\Request;
use App\Repositories\MachineRepository;
use Auth;
use App\User;

class PostController extends Controller
{
    private $machineRepo;

    public function __construct()
    {
        $this->middleware('auth', ['except' => []]);
        $this->machineRepo = new MachineRepository();
    }

    public function allGlobalMachines()
    {
        return $this->machineRepo->getAllGlobal();
    }

    public function allLocalMachines()
    {
        return $this->machineRepo->getAllLocal();
    }

    public function machineDetail($machineId)
    {
        return $this->getById($machineId);
    }

    public function addGlobalMachine(Request $request)
    {
        return $this->machineRepo->addToGlobal($request->all());
    }

    public function addLocalMachine($machineId, Request $request)
    {
        return $this->machineRepo->addToLocal($machineId, $request->all());
    }

    public function deleteGlobalMachine($machineId)
    {
        $this->machineRepo->deleteGlobal($machineId);
    }

    public function deleteLocalMachine($machineId)
    {
        $this->machineRepo->deleteLocal($machineId);
    }

    public function editGlobalMachine($machineId, Request $request)
    {
        $this->machineRepo->editGlobal($machineId, $request->all());
    }

}
