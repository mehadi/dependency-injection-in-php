<?php
include 'VehicleInterface.php';
include 'Car.php';
include 'Bike.php';

class Driver
{
    protected $vehicle;

    public function __construct(VehicleInterface $vehicle)
    {
        $this->vehicle = $vehicle;
    }

    public function vehicleName()
    {
        $this->vehicle->getVehicleName();
    }
}

$bike = new Bike();
$car = new Car();

$driver = new Driver($car);

$driver->vehicleName();