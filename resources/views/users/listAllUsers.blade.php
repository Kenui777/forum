@extends('layouts.layoutgpt')

@section('title', 'Listar todos os usuários')

@section('header', 'Listar todos os usuários')

@section('content')
<div class="container">
    <h2>Listar todos os usuarios</h2>
    <table>
        <tr>
            <th>Nome</th>
            <th>Email</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{$user -> name}}</td>
            <td>{{$user -> email}}</td>
        </tr>
        @endforeach
    </table>
</div>

@endsection
