@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Modification du contact <b>{{$user = [auth()->user()]}}</b></h3>
                <form action="{{ action('ContactController@index')}}" method="post">
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
