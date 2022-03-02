<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class EdadController extends Controller
{
    public function go(Request $request)
    {
        $now = Carbon::now()->format('Y-m-d');
        $submitted = $request->isMethod('POST');
        $fecha = Carbon::parse($request->input('fecha'));
        $years = $fecha->diffInYears(Carbon::now());
        $months = $fecha->diffInMonths(Carbon::now()) % 12;
        $days = $fecha->diffInDays(Carbon::now()) % 31;


        return view('edad', [
            'now' => $now,
            'submitted' => $submitted,
            'fecha' => $fecha->format('d-m-Y'),
            'years' => $years,
            'days' => $days,
            'months' => $months,
        ]);
    }
}
