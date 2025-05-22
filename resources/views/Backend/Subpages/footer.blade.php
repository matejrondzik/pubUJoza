@extends('backend.Layouts.layout')
@section('title', 'Pätička')

@section('body')
    <div class="container">
        <div class="row header-row mb-2">
            <div class="col-6 px-0">
                <h1 class="header-text text-uppercase">Pätička</h1>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger" id="alert">
                    <p class="p-0 m-0">{{ $errors->first() }}</p>
                </div>
            @endif
        </div>
    </div>



    <div class="container py-5 " >
        <div class="row content mb-2 py-3">

        </div>
    </div>

@endsection

