<?php

namespace App\Http\Controllers;

use App\Models\NeracaPercobaan;
use Illuminate\Http\Request;
use App\Http\Requests\StoreNeracaPercobaanRequest;
use App\Http\Requests\UpdateNeracaPercobaanRequest;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\NeracaPercobaanImport;


class ProsedurAnalitisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('satker.prosedur-analitis', [
            "title" => "Prosedur Analitis",
            "neraca_percobaans" => NeracaPercobaan::all(),
        ]);
    }

    public function fileImport(Request $request)
    {
        NeracaPercobaan::truncate();
        Excel::import(new NeracaPercobaanImport, $request->file('file')->store('temp'));
        return back();
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
     * @param  \App\Http\Requests\StoreNeracaPercobaanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNeracaPercobaanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NeracaPercobaan  $neracaPercobaan
     * @return \Illuminate\Http\Response
     */
    public function show(NeracaPercobaan $neracaPercobaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NeracaPercobaan  $neracaPercobaan
     * @return \Illuminate\Http\Response
     */
    public function edit(NeracaPercobaan $neracaPercobaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNeracaPercobaanRequest  $request
     * @param  \App\Models\NeracaPercobaan  $neracaPercobaan
     * @return \Illuminate\Http\Response
     */
    // public function update(UpdateNeracaPercobaanRequest $request, NeracaPercobaan $neracaPercobaan)
    // {
    //     //
    // }

    // public function update(Request $request)
    // {
    //     if ($request->ajax()) {
    //         NeracaPercobaan::find($request->pk)->update([
    //             $request->name => $request->value
    //         ]);
    //         return response()->json(['success' => true]);
    //     }
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NeracaPercobaan  $neracaPercobaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(NeracaPercobaan $neracaPercobaan)
    {
        //
    }
}
