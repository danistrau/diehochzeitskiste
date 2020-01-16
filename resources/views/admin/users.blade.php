@extends('layouts.master') @section('container')

<div class="main">
    <div class="main-text">
        <h1>Alle regestrierten User</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>User Name</th>
                    <th>E-Mail Adresse</th>
                    <th>Gesamtbudget</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->total_budget }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
