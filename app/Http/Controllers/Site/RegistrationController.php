<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Jobs\RegistrationJob;
use App\Models\Registration;
use Illuminate\Http\Request;
use PDF;


class RegistrationController extends Controller
{

    public function create(){


        $response['registrations'] = Registration::count();

        if($response['registrations'] < 300){

            $response['STATUS'] = 'EM ABERTO';

        }else{
            $response['STATUS'] = 'LOTADO';
        }
        return view('site.registration.index', $response);
    }

    public function store(Request $request){

        $request->validate([
            'idCard' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'function' => 'required|string|max:255',
            'tel' => 'required',
            'email' => 'required|email'
        ]);



        //senha de homologação e de acompanhamento
        $key = 'FGI' . "-" . rand() . "-" . date('y');

        $data = Registration::create([
            'idCard' => $request->idCard,
            'name' => $request->name,
            'company' => $request->company,
            'function' => $request->function,
            'tel' => $request->tel,
            'email' => $request->email,
            'code' =>  $key
        ]);



      $registration = Registration::find($data->id);

       RegistrationJob::dispatch($registration)->delay(now()->addSeconds('2'));
        return redirect()->back()->with('create', $key);

    }

    /**
     * Display a invoice with certified QrScan
     *
     * @return \Illuminate\Http\Response
     */
    public function invoice($code)
    {

        $response['registration'] = Registration::where('code',$code)->first();

        $pdf = PDF::loadView('pdf/invoice/participant/index', $response);

        return $pdf->stream('Pagamento por Transferência -' . $code. '.pdf');

    }

}
