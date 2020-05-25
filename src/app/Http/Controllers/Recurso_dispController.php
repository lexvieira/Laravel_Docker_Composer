<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Recurso_disp;
use \App\Empresa;
use \App\Insumo;
use \App\Insumo_material;

class Recurso_dispController extends Controller
{

    public function index()
    {
        return view('recurso.index');
    }

    public function create(Empresa $empresa)
    {
        $recurso_disp = new Recurso_disp();

        $insumos = new Insumo();

        $materials = Insumo_material::all();
        //Kind of Console, #dye and dump
        //dd($materials);

        return view('recurso.create', compact(['empresa','recurso_disp','insumos','materials']));
    }

    public function store(Empresa $empresa)
    {
        //14:00 v2
        //dd(request()->all());

        //$data = $this->validateData();

        //dd($data);

        $recurso = $empresa->Recurso_disp()->create($this->validateData());
        //$recurso->insumo()->createMany($data['insumos']);

        // $recurso = Empresa()->id

        //Save through Relationships
        //$empresa = auth()->user()->$empresa()->create($data);

        //return redirect()->back();

        //See Create Many 20:00 (v2)

        //return redirect('/empresas/' . $empresa->id . '/recursos/' . $recurso->id );
        return redirect('/empresas/' . $empresa->id);
    }

    public function show(Recurso_disp $recurso)
    {
        //$recursos = Recurso_disp::where('active', 1)->get();

        return view('recurso.show', compact(['recurso']));
    }

    public function edit(Recurso_disp $recurso)
    {
        return view('recurso.edit');
    }

    public function update(Recurso_disp $recurso)
    {
        //return redirect('/empresas/' $empresa->id . '/recurso/' . $recurso->id );
    }

    public function destroy(Recurso_disp $recurso)
    {
        //$recurso->delete();

        //return redirect('/empresas/' $empresa->id . '/recurso/' . $recurso->id );

    }

    protected function validateData()
    {
        return request()->validate([
            'nome_recurso' => 'required',
            'capacidade_recurso' => 'required',
            'capacidade_producao' => 'required',
            'observacao' => '',
            'recurso_disponivel' => '',
        ]);
    }

}
