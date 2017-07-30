<?php

namespace App\Repositories;
use App\Machine;
use App\UserMachine;
use App\User;

class MachineRepository
{

    public function getAllGlobal()
    {
        return Machine::all();
    }

    public function getAllLocal()
    {
        return UserMachine::where('user_id', Auth::user()->id)->get();
    }

    public function getById($machineId)
    {
        return Machine::where('id', $machineId);
    }

    public function addToGlobal($machineEntry)
    {
        return Machine::create($machineEntry);
    }

    public function addToLocal($machineId, $userId)
    {
        return UserMachine::create(['machine_id' => $machineId, 'user_id' => $userId]);
    }

    public function editGlobal($machineId, $newMachineEntry)
    {
        $machine = Machine::where('id', $id);
        Machine::updateOrCreate($machine);
    }

    public function deleteGlobal($machineId)
    {
        Machine::where('id', $machineId)->delete();
    }

    public function deleteLocal($machineId)
    {
        UserMachine::where('id', $machineId)->delete();
    }
}
