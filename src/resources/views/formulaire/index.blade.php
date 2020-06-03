@extends('layouts.app')

@section('content')

@php
    //Import de class Formulaire
    use App\Formulaire;
@endphp
<link href="{{ asset('css/index_form.css') }}" rel="stylesheet">

<div class="New_Forms">
    <div id="Create_Forms">
        <h2>Créer un  Formulaire</h2>
    </div>
    <button onclick="window.location.href='/formulaires/create'" id="Create_Form" id="btn-create" type="button" class="btn btn-success bouton-creation">Créer un formulaire</button>
</div>
    




<div class="-blanche">
    
    <div class="DashboardCard_Container">
        <h2>Vos Formulaires</h2>
        <div id="Add_Form">
            <div id="Add_Question"><i class="material-icons"  id="btn-task" id="icon_notif">add_circle_outline</i></div>
            <div id="Privacy"><i class="material-icons"  id="btn-task" id="icon_notif">lock</i></div>
            <div id="Add_Banniere"><i class="material-icons"  id="btn-task" id="icon_notif">image</i></div>
            <div id="Add_Dates"><i class="material-icons"  id="btn-task" id="icon_notif">event</i></div>
        </div>
        <div class="roter">
            <div class="md-8">
                <div id="ListFormulaire">
                </div>
            </div>
        </div>
    </div>
   
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>

    var form = new FormData();
    var token = "{{ Auth::user()->api_token }}";
    var settings = {
        "url": "/api/formulaires",
        "method": "GET",
        "timeout": 0,
        "cache": false,
        "headers": {
            "Accept": "application/json",
            "Authorization": "Bearer " + token,
            "Content-Type": "multipart/form-data; boundary=--------------------------859678193489068141715509"
        },
        "processData": false,
        "mimeType": "multipart/form-data",
        "contentType": false,
        "data": form,
        "dataType": "json",
        success: function (data) {
            return data;
        }
    };
    $.ajax(settings)
        .then(data => {
            var monhtml = "";
            data.data.forEach(formulaire => {
                if(formulaire.close_on !=null && formulaire.open_on !=null){
                    monhtml += `<div class="Formulaire">
                <div class="image_Formulaire">
                <img alt="Image_Formulaire" src="/Images/Formulaire/`+formulaire.image+`" class="image">
                </div>
                <div class="info_Formulaire">
                <h2>`+ formulaire.name + `</h2>
                <h6>Ouvre le:`+ formulaire.open_on + `</h6>
                <h6>Ferme le:`+ formulaire.close_on + `</h6>
                </div>
                <form class="id_form">
                    <input id="Form_id" value="`+formulaire.id+`" type="hidden" >
                </form>
                </div>`;
                }
                else{
                    monhtml += `<div class="Formulaire">
                <div class="image_Formulaire">
                <img alt="Image_Formulaire" src="/Images/Formulaire/`+formulaire.image+`" class="image">
                </div>
                <div class="info_Formulaire">
                <h2>`+ formulaire.name + `</h2>
                <h6>Modifier le:`+ formulaire.updated_at + `</h6>
                <h6>Créer le:`+ formulaire.created_at + `</h6>
                </div>
                <form class="id_form">
                    <input id="Form_id" value="`+formulaire.id+`" type="hidden" >
                </form>
                </div>`;
                }
            });
            $("#ListFormulaire").html(monhtml);
        });

</script>

@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('js/Formulaire.js') }}"></script>