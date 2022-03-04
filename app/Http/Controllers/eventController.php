<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\event as ModelsEvent;
    /* sample  crud  with laravel 8 */
class eventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event=ModelsEvent::all();
        return response()->json(['Events' => $event], '200');}


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
    {    /* post  methode  with  validate  */
        $request->validate([

            'nomeE'=>'required|max:255',
            'lieuxE'=>'required|max:255',
            'program'=>'required|max:255',
            'dateDebut'=>'required|max:255',
            'dateFin'=>'required|max:255',
            'heur'=>'required|max:255',

        ]);

        $event = new ModelsEvent();

        $event->nomeE = $request->nomeE;
        $event->lieuxE = $request->lieuxE;
        $event->program = $request->program;
        $event->dateDebut = $request->dateDebut;
        $event->dateFin = $request->dateFin;
        $event->heur = $request->heur;
        $event->save();
        return response()->json(['msg' => 'saveSucc'], '200');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event=ModelsEvent::find($id);
        if($event)
       { return response()->json(['Events' => $event], '200');}
       else
       {
        return response()->json(['Events' => 'no event found'], '404');
       }
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
        $event=ModelsEvent::find($id);
  if ($event)
        {$event->nomeE = $request->nomeE;
        $event->lieuxE = $request->lieuxE;
        $event->program = $request->program;
        $event->dateDebut = $request->dateDebut;
        $event->dateFin = $request->dateFin;
        $event->heur = $request->heur;
        $event->update();
        return response()->json(['msg' => 'Update Succ'], '200');}
    else
    {   return response()->json(['Events' => 'no event found'], '404');}
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event=ModelsEvent::find($id);
        if($event)
        {
            $event->delete();
            return response()->json(['msg' => 'deleted  Succ'], '200');
        }
        else
        {
            return response()->json(['Events' => 'no event found'], '404');

        }
    }
}
