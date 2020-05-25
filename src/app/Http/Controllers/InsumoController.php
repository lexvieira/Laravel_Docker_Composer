<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use \App\Recurso_disp;

use Illuminate\Support\ViewErrorBag;
use Illuminate\Support\MessageBag;

class InsumoController extends Controller
{

    protected $errorBag = 'forminsumo';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empresa = new Empresa();

        return view('insumo.create',compact('empresa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Empresa $empresa, Recurso_disp $recurso)
    {
        //$data = $this->validateData();

        //dd(request()->all());

        //$data['observacao'] = $data['observacao_insumo'];

        //unset($data["observacao_insumo"]);

        //dd($data);

        $empresa->load('Recurso_disp');

        $recurso->load('Insumo');

        $insumo = $recurso->Insumo()->create($this->validateData());

        //dd($insumo);

        return redirect('/empresas/' . $empresa->id);
        // $insumo = $empresa->Recurso_disp()->Insumo()->create($this->validateData());
        // $recurso = $empresa->Recurso_disp()->create($this->validateData());

        //$insumo = $recurso->Insumo()->create($this->validateData());
        //return redirect('/empresas/' . $empresa->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    protected function validateData()
    {
        $validator = \Validator::make(request()->all(), [
            'quantidade' => 'required|integer',
            'unidade_medida' => 'required|integer|min:1',
            'tempo' => 'required|integer',
            'unidade_de_tempo' => 'required|integer|min:1',
            'material_insumo' => 'required|integer|min:1',
            'observacao' => '',
        ]);

        //withErrors($validator, 'login');
        //Analise $validator Fails
        // if ($validator->fails()) {
        //     $validator
        //     ->withErrors($validator, 'forminsumo')
        //     ->withInput();
        // }

        //hook to add additional rules by calling the ->after method
        $validator->after(function ($validator) {

            if (count($validator->errors()) > 0) {
            //     add custom error to the Validator
                $validator->errors()->add('form-insumo-error', 'Por favor, verifique os erros acima!');
            }

        });

        //run validation which will redirect on failure
        return $validator->validate();
    }
}
