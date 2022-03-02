<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class CumpleController extends Controller
{
    public function go(Request $request)
    {
        $now = Carbon::now();
        $submitted = (bool) $request->isMethod('POST');
        $fecha = Carbon::parse($request->input('cumple'));
        $next = Carbon::parse($fecha->format('Y-m-d'));
        $next = Carbon::parse($next->year(now()->format('Y'))->format('Y-m-d'));
        $age = $fecha->diffInYears($now);

        $birthday_day = $next->format('d-m-Y');
        $birthday_day_of_week = $fecha->dayName;
        if ($next->year === $now->year) {
            $next = $next->addYear(1);
        }

        $daysleft = $next->diffInDays($now);
        return view('cumple', [
            'now' => $now->format('Y-m-d'),
            'submitted' => $submitted,
            'fecha' => $fecha->format('Y-m-d'),
            'age' => $age,
            'birthday_day' => $birthday_day,
            'daysleft' => $daysleft,
            'day_of_week' => $birthday_day_of_week,
        ]);
    }
}
