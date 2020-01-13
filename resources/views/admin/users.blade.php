@extends('layouts.master') @section('container')
<div class="container">
        <div class="row">
            <h1>Alle User im Überblick</h1>
            <ul>
                @foreach ($users as $user)
                <li>{{ $user->name }}</li>
                <li>{{ $user->email }}</li>
                <li>{{ $user->total_budget }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection