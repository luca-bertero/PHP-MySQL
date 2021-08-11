@extends('layout')

@section('title')
{{ $schedule[0]->type }}
@endsection

@section('content')

<div class="box">
    <h1 class="title">{{$schedule[0]->type}}</h1>
    
    <ul>

    @foreach($schedule as $schedule)
        <div class="box">
            @php
            date_default_timezone_set('Europe/Rome');
            $date = ["Domenica","Lunedi","Martedi","Mercoledi","Giovedi","Venerdi","Sabato"];
            $dayofweek_start = date('w',strtotime($schedule->date_start));
            $dayofweek_end = date('w', strtotime($schedule->date_end));
            @endphp

            <li>Inizio ritiro:</li>
            <li>Giorno: {{$date[$dayofweek_start]}} {{ date("d-m-Y", strtotime($schedule->date_start)) }} Ora: {{ date("H:i", strtotime($schedule->time_start)) }} </li>
            <li>Fine ritiro:</li>
            <li>Giorno: {{$date[$dayofweek_end]}} {{ date("d-m-Y", strtotime($schedule->date_end)) }} Ora: {{ date("H:i", strtotime($schedule->time_end)) }} </li>
            
            
            <div class="is-flex is-flex-wrap-wrap py-4">

                <form method="POST" action="/schedule/{{ $schedule->id }}" class="pr-4">
                
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                
                    <div class="field">
                        <div class="control">
                            <button type="submit" class="button is-danger">Cancella</button>
                        </div>
                    </div>
                </form>
            
                <a class="button mr-4" href="/schedule/{{ $schedule->id }}/edit">Modifica</a>
                

            <div class="pr-4 pt-2">

                Completato:
            
            </div>

            <form method="POST" action="/schedule/{{ $schedule->id }}/completed" class="pt-3">
            {{ method_field('PATCH') }}
            {{ csrf_field() }}

            <label class=""></label>
                
            <input class="input_box" type="checkbox" name="completed" onChange="this.form.submit()" 
            {{ $schedule->completed ? 'checked' : '' }} value="1"/>

            @if ($schedule->completed)
            <input type="hidden" name="completed" onChange="this.form.submit()" value="0"/>
            @endif

            </form>


            </div>
        
            
        </div>
        @endforeach
        
    </ul>
  
    <a class="button mt-4" href="/schedule">Torna indietro</a>

    <a href="/schedule/create" class="button mt-4">Crea un nuovo promemoria</a>
    


</div>
@endsection