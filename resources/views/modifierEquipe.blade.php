<!DOCTYPE html>
@extends('layout')
@section('content')

        <form method="POST" action="/equipe/modifier">
            @csrf
        <label for="race-select">Selectionner l'équipe</label>
            <select name="equipe" id="equipe-select">
                @foreach($equipes as $equipe)
                    <option value="{{$equipe->id}}">{{$equipe->name}}</option>
                @endforeach
            </select>
            <input type="submit" value="Ok"/>
        </form>
@endsection



