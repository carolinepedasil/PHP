<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Predio;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    private $objCliente;
    private $objPredio;
  
    public function __construct(){
        $this->objCliente = new Cliente();
        $this->objPredio = new Predio();
    }

    public function index()
    {
        $cliente = $this->objCliente->all()->sortBy("nome");
        return view('index', compact('cliente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {//quando clicar no adicionar novo cliente, ter os dados para
        //preencher o select
        $predio = $this->objPredio->all();
        return view('create', compact('predio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        //insert
        $cad = $this->objCliente->create([
            'cpf'=>$request->cpf,
            'nome'=>$request->nome,
            'endereco'=>$request->endereco,
            'telefone'=>$request->telefone,
            'id_predio'=>$request->id_predio,
        ]);
        if($cad){
            return redirect('cliente');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show($cpf)
    {
        //listar um cliente especifico
        $cliente = $this->objCliente->find($cpf);
        return view('index', compact('cliente'));
  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($cpf)
    {
           //listar um cliente especifico e colocar em modo de edição
           $cliente = $this->objCliente->find($cpf);
           $predio = $this->objPredio->all();
           return view('create', compact('cliente','predio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cpf)
    {
        $cad = $this->objCliente->where(['cpf'=>$cpf])->update([
            'cpf'=>$request->cpf,
            'nome'=>$request->nome,
            'endereco'=>$request->endereco,
            'telefone'=>$request->telefone,
            'id_predio'=>$request->id_predio,
        ]);
        if($cad){
            return redirect('cliente');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $cliente, $cpf)
    {
      Cliente::where('cpf', $cpf)->delete();
      return redirect()->back()->with('Sucesso!', 'Excluído com sucesso!!');
    
    }
}
