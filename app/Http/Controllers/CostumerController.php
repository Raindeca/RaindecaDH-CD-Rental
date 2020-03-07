<?php

namespace App\Http\Controllers;

use App\Models\Cd;
use Illuminate\Http\Request;

class CostumerController extends Controller
{
    
    protected $cd;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Cd $cd)
    {
        $this->cd = $cd;
    }

    //return all CD's collecion.
    public function index() {
        $cds = $this->cd->all();

        return $cds;
    }

    //return a spesific CD
    public function show($CdId) {
        $cd = $this->cd->find($CdId);

        if (empty($cd)) {
            return "No such CD found.";
        }

        return $cd;
    }


    //update info for a spesific CD.
    public function update(Request $request, $CdId, $CdQuantity) {

        // //Validate if the input is correct for each field given.
        // $this->validate($request, [
        //     'quantity' => 'required|integer',
        // ]);
        
        $cd = $this->cd->find($CdId);
        
        //return error if no result.
        if (empty($CdId)) {
            return "No such CD found";
        }

        //find the CD that you seek for an update.

        $cd = $this->cd->update([
            'quantity' => 'quantity' - $CdQuantity
        ]);
        
        
        return $cd;
    }

}