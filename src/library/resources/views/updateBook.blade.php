@extends('layout.baseLayout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                  <h2>Votre bibliothèque virtuelle</h2>
                  <p>Mettre à jour le livre</p>

                  {{ Form::open(['url' => '/update/book/action']) }} <!-- Trouver sur laravel Collective-->

                  {{ Form::label('title', 'le Titre du livre') }}
                  {{ Form::text('title', $title) }}
                  {{ Form::label('author', 'le nom d\'un auteur') }}
                  {{ Form::select('author[]', $authors, null, array('multiple' => 'multiple'))}}
                  {{ Form::hidden('id', $id) }}
                  {{ Form::submit('Mettre à jour')}}

                  {{ Form::close() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
