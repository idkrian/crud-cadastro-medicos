<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medico;

class MedicosController extends Controller
{
    public function create(){
        return view('medicos.criar');
    }

    public function store(Request $request){
        Medico::create([
            'nome' => $request->nome,
            'crm' => $request->crm,
            'telefone' => $request->telefone,
            'especialidade' => $request->especialidade,
        ]);

        return 'O médico foi registrado com sucesso!';
    }

    public function show($id){
        $medico = Medico::findOrfail($id);
        return view('medicos.mostrar', ['medico' => $medico]);
    }

    public function edit($id){
        $medico = Medico::findOrfail($id);
        return view('medicos.editar', ['medico' => $medico]);
    }

    public function update(Request $request, $id){
        $medico = Medico::findOrFail($id);

        $medico->update([
            'nome' => $request->nome,
            'crm' => $request->crm,
            'telefone' => $request->telefone,
            'especialidade' => $request->especialidade,
        ]);

        return 'Médico atualizado com sucesso!';
    }

    public function delete($id){
        $medico = Medico::findOrFail($id);
        return view('medicos.delete', ['medico' => $medico]);
        }

    public function destroy($id){
        $medico = Medico::findOrfail($id);
        $medico->delete();

        return 'O registro foi excluido com sucesso!';
    }
}
