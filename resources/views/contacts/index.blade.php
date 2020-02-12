@extends('layouts.app');

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- TODO href de la balise <a> pour pointer vers la route de création de contact -->
                <a class="btn btn-primary float-right" href="/contacts/create">Ajouter un contact</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nom du contact</th>
                        <th scope="col">Téléphone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($contacts as $contact)
                    <tr>
                        <td><li>{{$contact->id}}</li></td>
                        <td><li>{{$contact->name}}</li><!-- TODO Afficher le nom du contact --></td>
                        <td><li>{{$contact->tel}}</li><!-- TODO Afficher le tel du contact --></td>
                        <td><li>{{$contact->email}}</li><!-- TODO Afficher l'email du contact --></td>
                        <td>
                    
                            <!-- TODO href de la balise <a> pour pointer vers la route de modification du contact -->
                            <a class="btn btn-primary" href="/edit">Modifier</a>


                            <a class="btn btn-danger"
                               onclick="document.getElementById('delete-form-{{$contact->id}}').submit()">Supprimer</a>
                            <form id="delete-form-{{$contact->id}}" action="{{route('contacts.destroy',[ 'contact'=>$contact])}}" method="post">
                            
                            @csrf
                            @method('delete')
                            </form>
                                
                        </td>
                    </tr>
                    @empty
                    <!-- TODO : Conditions pas de contact -->
                    <tr>
                        <td>Vous n'avez pas encore de contact</td>
                    </tr>
                    @endforelse
                    <!-- TODO : FIN Boucle -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
