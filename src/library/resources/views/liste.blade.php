@extends('layout.baseLayout')

@section('content')
    <section id="liste">
                  <h2>Votre bibliothèque virtuelle</h2>
                  <p>Ici se trouve la liste de vos livres</p>
                  <table>
                    <tr>
                      <th>nom du livre</th>
                      <th>Auteur du Livre</th>
                    </tr>
                    @foreach ($books as $book)

                      <tr>
                        <td>{{ $book['title'] }}</td>
                        <td>  @foreach ($book['author'] as $author)
                            {{ $author }}
                          @endforeach </td>
                        <td>{{ Form::open(['url' => '/delete/book']) }} <!-- Trouver sur laravel Collective-->
                            {{ Form::hidden('id', $book['id']) }}
                            {{ Form::submit('Supprimer')}}
                            {{ Form::close() }}
                        </td>
                        <td>
                          {{ Form::open(['url' => '/update/book']) }} <!-- Trouver sur laravel Collective-->
                          {{ Form::hidden('id', $book['id']) }}
                          {{ Form::submit('Mettre à jour ')}}
                          {{ Form::close() }}
                        </td>
                      </tr>
                    @endforeach
                  </table>

    </section>
@endsection
