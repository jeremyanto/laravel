@extends('layouts.app')

@section('content')
    <div class="container">
        @forelse ($users as $user)
            <li>{{$user->name}}</li>
        @empty
            <li> L'utilisateur n'existe pas </li>
        @endforelse  
    </div>
@endsection
