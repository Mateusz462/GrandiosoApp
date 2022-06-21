<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Annouments;
use App\Models\Schedule;
use Carbon\CarbonPeriod;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $annouments = Annouments::where('status', 1)->orderByDesc('id')->get();


        $period = CarbonPeriod::create(today(), today()->add(1, 'day'));
        // for($i=today()->toArray(); $i < today()->add(3, 'day')->toArray(); $i++) {
        //     dd($i);
        // }
        // Iterate over the period
        // Convert the period to an array of dates

        $now = now();
        $startDate = $now->clone()->startOfDay();
        $endDate = $now->clone()->addDays(1)->endOfDay();
        //change 10 to whatever you needed
        $datePeriod =  collect(CarbonPeriod::create($startDate, $endDate)->toArray())
                      ->map(function($eachCarbonDate){
                        return $eachCarbonDate;
                      });

        $schedules[0] = Schedule::where('date', today())->get();
        $schedules[1] = Schedule::where('date', today()->add(1, 'day'))->get();
        $schedules[2] = Schedule::where('date', today()->add(2, 'day'))->get();

        // $dates = $period->toArray()->map(function($eachCarbonDate){
        //   return $eachCarbonDate->format('d.m.Y (l)');
        // });
        //dd($schedules);
        return view('home', compact('datePeriod', 'annouments', 'schedules'));
    }
}
