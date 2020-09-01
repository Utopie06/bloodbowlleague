<!DOCTYPE html>
@extends('layout')
@section('content')
     <h1>Creer/Ajouter un joueur</h1>
        <form method="POST" action="/joueur/creer">
            @csrf
            <label>Nom du joueur</label>
            <input id="name" name="name" type="text" />
            <input id="equipe" name="equipe" type="hidden" value="{{$equipe}}" />
            <input type="submit"/>
        </form>
@endsection