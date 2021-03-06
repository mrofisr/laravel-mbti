<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function calculate(Request $request)
    {
        $array = array_count_values($request->all());
        // dd($request->all());
        $P = $array['P'] / 15 * 100;
        $I = $array['I'] / 15 * 100;
        $J = $array['J'] / 15 * 100;
        $T = $array['T'] / 15 * 100;
        $E = $array['E'] / 15 * 100;
        $N = $array['N'] / 15 * 100;
        $S = $array['S'] / 15 * 100;
        $F = $array['F'] / 15 * 100;
        $satu = $I > $E ? "I" : "E";
        $dua = $S > $N ? "S" : "N";
        $tiga = $T > $F ? "T" : "F";
        $empat = $J > $P ? "J" : "P";
        $hasil = $satu . $dua . $tiga . $empat;
        $nama = $request->nama;
        $reports = new Report();
        $reports->nama = $nama;
        $reports->P = $P;
        $reports->I = $I;
        $reports->J = $J;
        $reports->T = $T;
        $reports->E = $E;
        $reports->N = $N;
        $reports->S = $S;
        $reports->F = $F;
        $reports->result = $hasil;
        if ($reports->save()) {
            return view('mbti.'.$hasil.'', [
                'nama' => $nama,
                'hasil' => $hasil,
                'P' => $P,
                'I' => $I,
                'J' => $J,
                'T' => $T,
                'E' => $E,
                'N' => $N,
                'S' => $S,
                'F' => $F
            ]);
        }
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
        //
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