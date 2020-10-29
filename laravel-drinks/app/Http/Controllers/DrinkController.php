<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drink;
use Illuminate\Support\Facades\Validator;

class DrinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drinks = Drink::all();
        return view('index', compact('drinks'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $drink = Drink::find($id);

      return view('edit', compact('drink'));
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
      $data = $request->all();

    //   $validatedData = Validator::make($request->all(), [
    //     'name' => 'required|unique:drinks|max:20',
    //     'gradation' => 'required|numeric',
    //     'tipology' => 'required|string|max:20',
    //     'glass' => 'required|string|max:20',
    //     'ingredients' => 'required|string',
    //     'price' => 'required|numeric',
    //     'origin' => 'required|string|max:20',
    //     'year' => 'required|numeric|max:4',
    //     'difficulty' => 'required|numeric|max:2',
    //
    // ]);


    // if ($validatedData->fails()) {
    //        return redirect()
    //                     ->route('drink.edit', $id)
    //                    ->withErrors($validatedData)
    //                    ->withInput();
    //    }

    $drink = Drink::findOrFail($id);

    $drink->fill($data);

    $drink->save();
    dd($drink);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
