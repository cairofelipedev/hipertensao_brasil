<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $pacientes = Patient::all();
        return view('patient.index', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $paciente = new Patient;
        $paciente->nome = $request->nome;
        $paciente->idade = $request->idade;
        $paciente->sexo = $request->sexo;
        $paciente->tabagismo = $request->tabagismo;
        $paciente->doenca = $request->doenca;
        $paciente->altura = $request->altura;
        $paciente->peso = $request->peso;
        $paciente->pad = $request->pad;
        $paciente->pas = $request->pas;
        $paciente->historico = $request->historico;

        $paciente->user_id = Auth::id();

        $riscoVascular = $this->calcularRiscoVascular($paciente);
        $paciente->risco_vascular = $riscoVascular;

        $paciente->save();

        return redirect()->route('pacientes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $paciente = Patient::findOrFail($id);
        return view('patient.show', compact('paciente'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $paciente = Patient::findOrFail($id);
        $paciente->delete();

        return redirect()->route('pacientes.index')->with('success', 'Paciente excluído com sucesso!');
    }

    private function calcularRiscoVascular($paciente)
    {
        $risco = 0;

        // homem > 55 anos e mulher > 65
        if ($paciente->sexo == 'M' && $paciente->idade >= 55) {
            $risco += 1;
        }

        if ($paciente->sexo == 'F' && $paciente->idade >= 65) {
            $risco += 1;
        }

        // historico familiar de doença cardiovascular + 
        // homem > 55 anos e mulher > 65

        if ($paciente->sexo == 'M' && $paciente->idade >= 55) {
            if ($paciente->historico == 'sim') {
                $risco += 1;
            }
        }

        if ($paciente->sexo == 'F' && $paciente->idade >= 65) {
            if ($paciente->historico == 'sim') {
                $risco += 1;
            }
        }

        // Tabagismo
        if ($paciente->tabagismo == 'sim') {
            $risco += 1;
        }

        // PAS
        if ($paciente->pas >= 140 && $paciente->pas <= 159) {
            $risco += 1;
        }

        //IMC
        $imc = $paciente->peso / (($paciente->altura / 100) ** 2);
        if ($imc >= 30) {
            $risco += 1; // Fator 4
        }

        // Histórico Familiar
        if ($paciente->historico == 'sim') {
            $risco += 1;
        }

        if (($paciente->pas >= 140 && $paciente->pas <= 159) && ($paciente->pad >= 90 && $paciente->pad <= 99)) {
            $risco += 1;
        }

        if (($paciente->pas >= 160 && $paciente->pas <= 179) && ($paciente->pad >= 100 && $paciente->pad <= 109)) {
            $risco += 2;
        }

        if ($paciente->doenca !== null) {
            $risco += 4;
        }


        //meta
        //prescricoes
        //nome -> dosagem -> quantas vezes ao dia 

        //indicacoes e contraedicacoes - futuro
        return $risco;
    }
}
