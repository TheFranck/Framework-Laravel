@extends('layout.baseLayout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                  <h2>Votre bibliothèque virtuelle</h2>
                  <p>Rajouter un livre via un formulaire</p>

                  {{ Form::open(['url' => '/send/message','files'=>true]) }} <!-- Trouver sur laravel Collective-->

                  {{ Form::label('message', 'Contenu message') }}
                  {{ Form::textarea('message') }}
                  {{ Form::label('destinataire', 'destinataire') }}
                  {{ Form::select('destinataire', $users)}}
                  {{ Form::submit('Ajouter le livre')}}

                  {{ Form::close() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
