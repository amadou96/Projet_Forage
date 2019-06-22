<?php

namespace App\Http\Controllers;

use App\Abonnement;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
class AbonnementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('abonnements.index');
    }
    public function list(Request $request)
    {
        $abonnements=Abonnement::with('client.user','compteur')->get();
        return Datatables::of($abonnements)->make(true);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $client=\App\Client::find($request->input('client'))->load('user');
        $compteur_id=$request->input('compteur');
        $compteur=\App\Compteur::find($compteur_id);
        $abonnement=$compteur->abonnement;
        return view('abonnements.create',compact(['abonnement','compteur']));    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate(
            $request, [
                //'client' => 'required|exists:clients,id',
                'details' => 'required|string|max:50',
                'compteur' => 'required|exists:compteurs,id',
            ]
        );
        $client=\App\Client::find($request->input('client'))->load('user');
        $compteur=\App\Compteur::find($request->input('compteur'));
        $count=$client->abonnements()->count();
        if($count>2){
            $message="Le systeme n'autorise pas plus de 2 abonnements pour le meme client";
            return redirect()->route('abonnements.index')->with(['message'=>$message]);

        }
        $abonnement=Abonnement::create([
            "clients_id"=>$request->input('client'),
            "compteurs_id"=>$request->input('compteur'),
            "details"=>$request->input('details'),
            ]);
        
        
            //$request->session()->flash('messagev','Effectué'); 
            $message="Enregistrement abonnement pour ".$client->user->name." ".$client->user->firstname." Effectué".PHP_EOL.
            "Nombre d'abonnements: ".$count;
    
            return redirect()->route('abonnements.index')->with(['message'=>$message]);
        return view('abonnements.index');
    }
    public function selectclient()
    {
        return view('abonnements.selectclient');
    }
    public function selectcompteur(Request $request)
    {
        $client=\App\Client::find($request->input('client'));
        return view('abonnements.selectcompteur',compact('client'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Abonnement  $abonnement
     * @return \Illuminate\Http\Response
     */
    public function show(Abonnement $abonnement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Abonnement  $abonnement
     * @return \Illuminate\Http\Response
     */
    public function edit(Abonnement $abonnement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Abonnement  $abonnement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Abonnement $abonnement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Abonnement  $abonnement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Abonnement $abonnement)
    {
        //

    }
}
