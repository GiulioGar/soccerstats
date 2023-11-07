<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamsController extends Controller
{

    protected $data= [
        [
            'name' => 'Napoli',
            'points'=>'50'
        ],

        [
            'name' => 'Inter',
            'points'=>'49'
        ],


        [
            'name' => 'Milan',
            'points'=>'40'
        ]

        ];

    public function ita1()
    {
        // return view('ita1')->with('teams', $this->data)->with('title', "Squadre");

        $teams=$this->data;
        $title="Classifica";

        return view('ita1', compact('title','teams'));
    }

    public function ita2()
    {
       return view('ita2');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('welcome');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
