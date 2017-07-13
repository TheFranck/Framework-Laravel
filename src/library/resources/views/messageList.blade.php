@extends('layout.baseLayout')

@section('content')
    <section id="liste">
                  <h2>Votre liste des messages virtuelle</h2>
                  <p>Ici se trouve la liste de vos messages</p>
                  <table>
                    <tr>
                      <th>nom du livre</th>
                      <th>Auteur du Livre</th>
                    </tr>

                    @foreach ($messages as $message)


                      <tr>
                        <td>
                          @foreach ($message['message'] as $message)
                            {{ $message }}
                          @endforeach
                        </td>
                        <td>{{ Form::open(['url' => '/delete/message']) }} <!-- Trouver sur laravel Collective-->
                            {{ Form::hidden('id', $message['id']) }}
                            {{ Form::submit('Supprimer')}}
                            {{ Form::close() }}
                        </td>

                      </tr>
                    @endforeach
                  </table>

    </section>
@endsection
