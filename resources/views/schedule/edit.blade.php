@extends('layout')

@section('title')
Edit Schedule
@endsection

@section('content')


<div class="box">

    <h1 class="title">Modifica Promemoria</h1>
       
        <form method="POST" action="/schedule/{{ $schedule->id }}" >
        
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        
        <div class="field">

            <label for="type" class="label">Tipologia di raccolta</label>
            <div class="select {{ $errors->has('type') ? 'is-danger' : '' }}">
                
                <select name="type">
                    <option value="">Seleziona una tipologia di rifiuto</option>
                    <option value="Carta" {{ !strcmp($schedule->type,"Carta") ? 'selected' : '' }}>Carta</option>    
                    <option value="Plastica" {{ !strcmp($schedule->type,"Plastica") ? 'selected' : '' }}>Plastica</option>    
                    <option value="Vetro" {{ !strcmp($schedule->type,"Vetro") ? 'selected' : '' }}>Vetro</option>    
                    <option value="Alluminio" {{ !strcmp($schedule->type,"Alluminio") ? 'selected' : '' }}>Alluminio</option>    
                    <option value="Indifferenziata" {{ !strcmp($schedule->type,"Indifferenziata") ? 'selected' : '' }}>Indifferenziata</option>    
                </select>
            </div>
        </div>

        <div class="field">
            <label for="type" class="label">Seleziona un orario per l'inizio del ritiro</label>
            <div class="control">
                <input type="date" class="input mb-2" name="date_start" min="2000-01-01" max="2999-12-31"
                value="{{ $schedule->date_start }}"/>
                
                <input type="time" class="input" name="time_start" step="1800"
                value="{{ $schedule->time_start }}"/>
                
            </div>    
        </div>
        
        <div class="field">
            <label for="type" class="label">Seleziona un orario per la fine del ritiro</label>
            <div class="control">
                <input type="date" class="input mb-2" name="date_end" min="2000-01-01" max="2999-12-31"
                value="{{ $schedule->date_end }}">
                
                <input type="time" class="input" name="time_end" step="1800"
                value="{{ $schedule->time_end }}"/>
                
            </div>    
        </div>
        
        <div class="field">
            <div class="control">
                <button type="submit" class="button">Salva</button>
            </div>
        </div>
    </form>

    @if ($errors->any())
        <div class="notification is-danger mt-5">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach

        </ul>
        </div>
        @endif
    </div>

    @endsection