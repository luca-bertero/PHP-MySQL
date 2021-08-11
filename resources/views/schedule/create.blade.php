@extends('layout')

@section('title')
Crea un nuovo promemoria
@endsection

@section('content')


<div class="box">


    
    <h1 class="title">Crea un nuovo promemoria</h1>
    
        
        <form method="POST" action="/schedule" class="box">
        
        {{ csrf_field() }}
        
        <div class="field">
            
            <label for="type" class="label">Tipologia di raccolta</label>
            <div class="select {{ $errors->has('type') ? 'is-danger' : '' }}">
                
                <select name="type">
                    <option value="">Seleziona una tipologia di rifiuto</option>
                    <option value="Carta">Carta</option>    
                    <option value="Plastica">Plastica</option>    
                    <option value="Vetro">Vetro</option>    
                    <option value="Alluminio">Alluminio</option>    
                    <option value="Indifferenziata">Indifferenziata</option>    
                </select>
            </div>
        </div>
        
        
        <div class="field">
            <label for="type" class="label">Seleziona un orario per l'inizio del ritiro</label>
            <div class="control">
                <input type="date" class="input mb-2 {{ $errors->has('date_start') ? 'is-danger' : '' }}" 
                name="date_start" min="2000-01-01" max="2999-12-31" value="{{old('date_start')}}" required/>
                
                <input type="time" class="input {{ $errors->has('time_start') ? 'is-danger' : '' }}" 
                name="time_start" step="1800" value="{{old('time_start')}}" required/>
                
            </div>    
        </div>
        
        <div class="field">
            <label for="type" class="label">Seleziona un orario per la fine del ritiro</label>
            <div class="control">
                <input type="date" class="input mb-2 {{ $errors->has('date_end') ? 'is-danger' : '' }}" 
                name="date_end" min="2000-01-01" max="2999-12-31" value="{{old('date_end')}}" required/>
                
                <input type="time" class="input {{ $errors->has('time_end') ? 'is-danger' : '' }}" 
                name="time_end" step="1800" value="{{old('time_end')}}" required/>
                
            </div>    
        </div>
        
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-success">Salva</button>
            </div>
        </div>
        
        
        @if ($errors->any())
        <div class="notification is-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
                
            </ul>
        </div>
        @endif
    </form>

</div>

@endsection