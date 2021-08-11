<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;


class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedule = Schedule::select('type','id')->get()
        ->groupBy('type');

        $keys = $schedule->keys();

        return view('schedule.index',['keys'=> $keys, 'schedule' => $schedule]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('schedule.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Schedule $schedule)
    {
        /*
            Schedule::create([
                'type' => request('type'),
                'date_start' => request('date_start'),
                'time_start' => request('time_start'),
                'date_end' => request('date_end'),
                'time_end' => request('time_end')
            ]) 
        */
        request()->validate([
            'type' => 'required',
            'date_start' => 'required',
            'time_start' => 'required',
            'date_end' => 'required',
            'time_end' => 'required'
        ]);

        $schedule->type = request('type');
        $schedule->date_start = request('date_start');
        $schedule->time_start = request('time_start');
        $schedule->date_end = request('date_end');
        $schedule->time_end = request('time_end');
        $schedule->save();

        return redirect('/schedule');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Schedule $schedule)
    {        
        $schedule = Schedule::where('type','=', $schedule->type)->get();
        
        return view('schedule.show',compact('schedule'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedule $schedule)
    {
        return view('schedule.edit',compact('schedule'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schedule $schedule)
    {

        request()->validate([
            'type' => 'required',
            'date_start' => 'required',
            'time_start' => 'required',
            'date_end' => 'required',
            'time_end' => 'required'
        ]);


        $schedule->type = request('type');
        $schedule->date_start = request('date_start');
        $schedule->time_start = request('time_start');
        $schedule->date_end = request('date_end');
        $schedule->time_end = request('time_end');
        $schedule->save();

        return redirect('/schedule');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule)
    {
        $schedule->delete();

        return redirect('/schedule');
    }

    public function completed(Schedule $schedule)
    {
        $schedule->completed = request('completed');
        $schedule->save();

        return back();
    }

    public function today()
    {
        $schedule = Schedule::where('date_start','=', date('Y-m-d'))
        ->orderBy('time_start', 'asc')
        ->get();
           
        return view('schedule.today',compact('schedule'));

    }

    public function week(){

        $schedule = Schedule::where('date_start','<=', date('Y-m-d', time() + 3600*24*7))
        ->where('date_start','>=', date('Y-m-d'))
        ->orderBy('date_start','asc')
        ->get();

        return view('schedule.week',compact('schedule'));

    }

}
