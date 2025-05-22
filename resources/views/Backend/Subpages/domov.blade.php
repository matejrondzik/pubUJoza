@extends('backend.Layouts.layout')
@section('title', 'Domo')


<!-- takže toto je návod ako pridať texty na web:

1. Pôjdeš na adresu http://127.0.0.1:8000/admin/database, kde vytovríš text
    (vytvoril som jeden, máš ho pod tabuľkou, je to id 40, tvoj text bude mať iné ID)

2. Zoberieš ID a vytvoriš link na to (poznámka na riadku 33)

3. Následne pôjdeš na resources/views/Frontend/components/header kde je dalšia poznámka na riadku 15

-->
@section('body')
    <div class="container">
        <div class="row header-row mb-2">
            <div class="col-6 px-0">
                <h1 class="header-text text-uppercase">Domov</h1>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger" id="alert">
                    <p class="p-0 m-0">{{ $errors->first() }}</p>
                </div>
            @endif
        </div>
    </div>

    <div class="container" >
        <div class="row content mb-2 py-3">
            <label for="">Sekcia 1</label>
            <div class="col-4">
{{--        Nizšie je input, skopíruješ vložiš tam ID daného textu do atributu id="ID", ako to je urobene o riadok nižsie--}}
{{--        Prosim stránku rozdel na sekcie a teda aj texty rozdel podla nich, vyššie je label kde je Sekcia 1, tak to prepiš na HEADER a vllož tam všetky texty ktoré su v headeri, nasledne vytvor dalsiu sekciu atd...        --}}
                <x-links.link name="Text" type="text" id="40"></x-links.link>
            </div>
        </div>
    </div>

@endsection

