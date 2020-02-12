@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Créer un contact</h3>
                <form action="{{ action('ContactController@store')}}" method="post">
                @csrf
                    <input type="name" name="name" placeholder="Nom">
                    <input type="tel" name="tel" placeholder="Téléphone" >
                    <input type="email" name="email" placeholder="Email">
                    <input type="submit" value="Confirmer">
                </form>
                    
            </div>
        </div>
    </div>
@endsection
