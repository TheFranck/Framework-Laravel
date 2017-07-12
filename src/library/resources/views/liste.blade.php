@extends('layout.baseLayout')

@section('content')

                  <h2>Votre bibliothèque virtuelle</h2>
                  <p>Ici se trouve la liste de vos livres</p>
              <section id="liste">
                    @foreach ($books as $book)
                      <p>{{ $book['title'] }} : {{ $book['author'] }} </p>
                      {{ Form::open(['url' => '/delete/book']) }} <!-- Trouver sur laravel Collective-->
                      {{ Form::hidden('id', $book['id']) }}
                      {{ Form::submit('Supprimer')}}
                      {{ Form::close() }}
                      {{ Form::open(['url' => '/update/book']) }} <!-- Trouver sur laravel Collective-->
                      {{ Form::hidden('id', $book['id']) }}
                      {{ Form::submit('Mettre à jour ')}}
                      {{ Form::close() }}
                    @endforeach
              </section>
@endsection
