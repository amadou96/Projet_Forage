<?php

namespace App\Http\Controllers;

use App\Consommation;
use App\Abonnement;
use Illuminate\Http\Request;
use Yajra\Datatables\DataTables;

class ConsommationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('consommations.index');
    }
    public function list(Abonnement $abonnement = null){
        if($abonnement == null){
          $consommations = Consommation::with(['compteur','compteur.abonnement.client.user','facture','agent'])->get();
          return DataTables::of($consommations)->make(true);
        }else{
           $compteur = $abonnement->compteur;
           $consommations = $compteur->consommations->load(['compteur.abonnement.client.user']);
           return DataTables::of($consommations)->make(true);
        }
     }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Consommation  $consommation
     * @return \Illuminate\Http\Response
     */
    public function show(Consommation $consommation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Consommation  $consommation
     * @return \Illuminate\Http\Response
     */
    public function edit(Consommation $consommation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Consommation  $consommation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consommation $consommation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Consommation  $consommation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consommation $consommation)
    {
        //
    }
}
