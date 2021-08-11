@extends('layout')

@section('title')
Selezione promemoria
@endsection

@section('content')
    <div class="box">

        <h1 class="title">Tipologia di raccolta</h1>

        <aside class="menu">
            <p class="menu-label">
                Seleziona il tipo di raccolta per visualizzare i promemoria
             </p>
  

            <ul class="menu-list">
                
                @for($i = 0; $i < count($keys); $i++)
                
                <li>
                    <a href="/schedule/{{$schedule[$keys[$i]][0]->id}}">{{$schedule[$keys[$i]][0]->type}}</a>
                </li>
                
                @endfor
                
            </ul>
        </aside>

        <div class="block pt-2">

            <a href="/schedule/today" class="button mt-2">Visualizza i promemoria per oggi</a>     
            
            <a href="/schedule/week" class="button mt-2">Visualizza i promemoria della settimana</a>
            
            <a href="/schedule/create" class="button mt-2">Crea un nuovo promemoria</a>
            
        </div>

    </div>
    
@endsection