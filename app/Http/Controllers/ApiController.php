<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function indexAction()
    {
        return view('Main');
    }
    public function CPUAction()
    {
        return view('CPU');
    }
    public function MotherboardAction()
    {
        return view('Motherboard');
    }
    public function VideocardAction()
    {
        return view('Videocard');
    }
    public function DRAMAction()
    {
        return view('DRAM');
    }
    public function PowerSupplyAction()
    {
        return view('PowerSupply');
    }
    public function HarddriveAction()
    {
        return view('Harddrive');
    }
}
