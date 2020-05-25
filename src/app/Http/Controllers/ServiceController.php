<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $services = \App\Service::all();
        $materials = \App\Insumo_material::all();
        //Kind of Console, #dye and dump
        //dd($materials);

        return view('service.index', ['services' => $services, 'materials' => $materials]);
        // $variable1 = "Hello from Routes from the Hello Controller Home.Blade. <br>From Services";
        // return view('home', ['someData1' => $variable1]);


        //CSRF Protection - Stop anyone to submit a form that IS NOT  from the actual application
        //CSRF is a protection for cross server @csrf

        //Keep the application orgnized
    }

    public function store()
    {
        //dd(request('name')); //Analise return
        //Controller Store Default Construction

        /* First Implementation - Not Simplified way
        $data = request()->validate([
            'name' => 'required|min:5|max:10'
        ]);
        $service = new \App\Service();
        $service->name = request('name');
        $service->save();
        */

        /* Second Implementation - More Simple
        $data = request()->validate([
            'name' => 'required|min:5|max:10'
        ]);
        #dd($data)
        \App\Service::create($data);
        */

        //Third Implementation
        \App\Service::create(request()->validate([
            'name' => 'required|min:5|max:10'
        ]));

        //Error with Mass Assignment Protection
        //(Not allowed to use the method create without informe the fields)

        //Error with:
        //Add [name] to fillable property to allow mass assignment on [App\Service].


        return redirect()->back();




    }

}
