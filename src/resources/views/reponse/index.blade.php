@guest

@else
    @extends('layouts.app')

@endguest

@section('content')

    <link href="{{ asset('css/repondre.css') }}" rel="stylesheet">

    <div class="container">

        <!-- Div titre du formulaire -->
        <div id="title">
            <h2>{{ $formulaire->name }}</h2>
            <div id="auteur">
                <p class="float-right">
                    <img id="img_auteur" src="/avatar/{{$formulaire->user->avatar}}">
                </p>
                <p class="name_auteur">
                    créé par {{ $formulaire->user->name }}
                </p>
            </div>
        </div>

        <form method="post" action="{{ route('envoyer_reponse') }}">
            @csrf

            <input type="hidden" name="form_id" value="{{ $formulaire->id }}">

            <div id="questions">
            <!-- Questions -->
            @foreach($questions as $question)
                <div class="div_question">
                    <div class="question">
                        <h3> {{ $question->name }} </h3>
                    </div>
                    <div class="proposition">
                        <input type="hidden" class="type_question" value="{{$question->type_question}}">

                        <!-- Reponse si choix multiples -->
                        @if($question->type_question == "Choix multiples")
                            @foreach($choix_question_multiples as $choix_question_multiple)
                                @foreach($choix_question_multiple as $choix_question)
                                    @if($choix_question->questions_id == $question->id)
                                        <div class="form-check multiple_choice">
                                            <input name="{{ $question->id }}" type="radio" class="form-check-input" id="{{$choix_question->id}}" value="{{ $choix_question->name }}">
                                            <label class="form-check-label" for="{{$choix_question->id}}">
                                                {{ $choix_question->name }}
                                            </label>
                                        </div>
                                    @endif
                                @endforeach
                            @endforeach

                        <!-- Reponse si choix multiples -->
                        @elseif($question->type_question == "Texte")
                                    <textarea class="form-control" name="{{ $question->id }}" rows="3" placeholder="Votre réponse..." required></textarea>
                        @endif
                    </div>
                </div>

            @endforeach
            </div>
            <div id="envoyer">
                <button type="submit" class="btn btn-primary btn-lg center-block">Envoyer</button>
            </div>
        </form>

    </div>

<script type="text/javascript" src="{{ URL::asset('js/repondre.js') }}"></script>

@endsection