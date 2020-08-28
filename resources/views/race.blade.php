<!DOCTYPE html>
@extends('layout')
@section('content')
        <h1>Liste des races</h1>
        @foreach ($races as $race)
            <li> {{ $race->name}}</li>
      
        @endforeach
@endsection