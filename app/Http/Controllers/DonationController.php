<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:list-donations-platform', ['only' => ['index']]);
        $this->middleware('permission:list-donations-consultant', ['only' => ['indexForConsultant']]);
    }

    public function index(){
        return view('donations.index', [
            'donations' => Donation::paginate(10)
        ]);
    }
}
