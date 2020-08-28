<!DOCTYPE html>
@extends('layout')
@section('content')

        <h1>Creer une equipe</h1>
        <form method="POST" action="/equipe/creer">
            @csrf
            <label>Nom de l'equipe</label>
            <input id="name" name="name" type="text" />
            
            <label for="race-select">Choissez une race:</label>
            <select name="race" id="race-select">
                @foreach($races as $race)
                    <option value="{{$race->id}}">{{$race->name}}</option>
                @endforeach
            </select>
            <input type="submit"/>
        </form>
              
@endsection
