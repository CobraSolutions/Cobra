<?php

namespace App\Repositories;
use App\User;
use App\Machine;
use App\Service;

class ServiceRepository
{
    public function getServiceByMachineId($machineId)
    {
        return Machine::where('id',$id)->services()->get();
    }

    public function addService($machineId, $serviceEntry)
    {
        $machine = Machine::where('id', $machineId);
        $service = Service::create($serviceEntry);
        $service->machine()->save($machine);
        return $service;
    }

    public function addServiceToHistory()
    {

    }
}
