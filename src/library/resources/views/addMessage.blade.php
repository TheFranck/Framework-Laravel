@extends('layout.baseLayout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                  <h2>Votre Message virtuelle</h2>
                  <p>Ajouter un message personnel</p>

                  {{ Form::open(['url' => '/add/message']) }} <!-- Trouver sur laravel Collective-->
                  {{ Form::label('name', 'le nom d\'un auteur') }}
                  {{ Form::textarea('message')}}
                  {{ Form::submit('Envoyer ce message')}}
                  {{ Form::close() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

alexandre.p@donga.fr
Alexandre Perrachon
+33(0)7 50 91 69 44
988 route de Bourg
01140 Saint Didier sur Chalaronne
