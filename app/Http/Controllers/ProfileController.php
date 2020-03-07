<?php

namespace App\Http\Controllers;

use App\Models\Costumer;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    protected $cd;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->profile = profile;   
    }
    
    //return a spesific CD
    public function show($profileId) 
    {
        $profile = $this->profile->find($profileId);

        if (empty($profileId)) {
            return "This user has not registered yet.";
        }

        return $cd;
    }

    
}
