<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Empresa;
use \App\Recurso_disp;
use \App\Insumo_material;

class EmpresaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //Protect against nonauthorized logins to access the Contoller
        $this->middleware('auth');
    }

    public function index()
    {
        $empresas = \App\Empresa::all();
        //Kind of Console, #dye and dump
        //dd($materials);

        //return $empresas;

        return view('empresa.index', ['empresas' => $empresas]);
    }

    public function create()
    {
        $empresa = new Empresa();

        return view('empresa.create', compact('empresa'));
    }

    public function store()
    {

        // $data = $this->validateData());
        // $data['user_id'] = auth()->user()->id;

        $empresa = Empresa::create($this->validateData());

        //Save through Relationships

        //Grab the User Id
        //$data['user_id'] = auth()->user()->id;
        //$empresa = auth()->user()->$empresa()->create($data);


        //return redirect()->back();

        return redirect('/empresas/' . $empresa->id );
    }

    public function show(Empresa $empresa)
    {
        //$empresa = \App\Empresa::find($empresa);

        //$empresa = \App\Empresa::findOrFail($empresaId);

        $empresa->load('Recurso_disp.Insumo');

        //dd($empresa);

        //dd(request());

        $materials = Insumo_material::all();

        //$recursos = \App\Recurso_disp::where('active', 1)->get();

        $readonly = 'readonly';

        return view('empresa.show', compact(['empresa','materials','readonly']));
    }

    public function edit(Empresa $empresa)
    {
        //$empresa = \App\Empresa::find($empresaId);

        //$empresa = \App\Empresa::findOrFail($empresaId);

        return view('empresa.edit', compact('empresa'));
    }

    public function update(Empresa $empresa)
    {
        $empresa->update($this->validateData());

        return redirect('/empresas');
    }

    public function destroy(Empresa $empresa)
    {
        $empresa->delete();
        return redirect('/empresas');
    }

    protected function validateData()
    {
        return request()->validate([
            'email' => 'required|email',
            'nome_empresa' => 'required',
            'responsavel' => 'required',
            'telefone' => 'required',
            'cep' => 'required',
            'endereco' => 'required',
            'numero' => 'required|min:1',
            'bairro' => 'required',
            'endereco_complemento' => '',
            'cidade' => 'required',
            'estado' => 'required'
        ]);
    }
}
