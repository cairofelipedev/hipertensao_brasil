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
        //
        $pacientes = Patient::all();

        foreach ($pacientes as $paciente) {
            // Realize o cálculo do risco vascular com base nas informações do paciente
            $riscoVascular = $this->calcularRiscoVascular($paciente);
            $paciente->risco_vascular = $riscoVascular;

            // Determinar o resultado do risco vascular de acordo com as Diretrizes de 2020
            if ($riscoVascular <= 10) {
                $paciente->resultado_risco = 'Baixo Risco';
            } elseif ($riscoVascular > 10 && $riscoVascular <= 20) {
                $paciente->resultado_risco = 'Médio Risco';
            } else {
                $paciente->resultado_risco = 'Alto Risco';
            }
        }

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
        $paciente->diabetes = $request->diabetes;
        $paciente->colesterol_total = $request->colesterol_total;
        $paciente->hdl = $request->hdl;
        $paciente->pa = $request->pa;
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
    public function show(Patient $patient)
    {
        //
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
    public function destroy(Patient $patient)
    {
        //
    }

    private function calcularRiscoVascular($paciente)
    {
        $risco = 0;

        // Idade
        if ($paciente->idade >= 40 && $paciente->idade <= 75) {
            $risco += 1;
        }

        // Sexo
        if ($paciente->sexo == 'M') {
            $risco += 2;
        }

        // Tabagismo
        if ($paciente->tabagismo == 'sim') {
            $risco += 1;
        }

        // Diabetes
        if ($paciente->diabetes == 'sim') {
            $risco += 1;
        }

        // Colesterol Total
        if ($paciente->colesterol_total >= 240) {
            $risco += 1;
        }

        // HDL
        if ($paciente->hdl < 40) {
            $risco += 1;
        }

        // Pressão Arterial Sistolica
        if ($paciente->pa > 160) {
            $risco += 1;
        }

         // Pressão Arterial Diistolica
        // if ($paciente->pa > 140) {
        //     $risco += 1;
        // }

        // Histórico Familiar
        if ($paciente->historico == 'sim') {
            $risco += 1;
        }


        //Homem  > 55 + 1 
        //Mulher > 65 + 1
        //Tabagismo + 1
        //Diabetes  + 1   
        //Altura e Peso - Obsedidade IMC > 30 + 1
        //LDL + 100 para todos os sexos + 1
        //HDL no homem < 40 + 1  HDL na mulher < 46 + 1
        //Nao HDl > 130 + 1 
        //Trigcedios > 150 + 1
        //Historico Familia em DCV + 1
        //se fir diabetico ja é risco alto
        //meta
        //prescricoes
        //nome -> dosagem -> quantas vezes ao dia 

        //indicacoes e contraedicacoes - futuro
        return $risco;
    }
}
