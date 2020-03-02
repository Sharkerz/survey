@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formulaire : {{ $formulaire->name }} <button onclick="window.location.href='{{ route('formulaires.index') }}'" type="button" class="btn btn-primary">Retour</button></div>

                <div class="card-body">
                    {{ $formulaire->id }}
                    {{ $formulaire->name }}
                    {{ $formulaire->user->name }}
                    {{ $formulaire->open_on }}
                    {{ $formulaire->close_on }}

                    <a href="{{ route('formulaires.edit', ['formulaire' => $formulaire->id]) }}">Modifier</a>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
