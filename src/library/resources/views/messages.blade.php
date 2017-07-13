@extends('layout.baseLayout')

@section('content')
    <section id="liste">
                  <h2>Votre liste des messages virtuelle</h2>
                  <p>Ici se trouve la liste de vos messages</p>
                  @foreach ($messages as $message)
                    <p>{{ $message['message'] }}</p>
                  @endforeach
    </section>
@endsection
