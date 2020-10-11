@extends('template.app')

@section('main')
<div class="container-contacts">
    <div class="contatti">
        <p><strong>Numero di telefono: </strong>054304384</p>
        <p><strong>Fax: </strong> 0547389323</p>
        <p><strong>Email:</strong> info@molisana.it</p>
    </div>
    
    <h4>CONTATTACI</h4>
    <form>
        <div class="email">
            <input type="email" class="form-control" id="emailArea" placeholder="Inserisci il tuo indirizzo email">
        </div>
        <div class="message">
            <textarea class="form-control" id="textArea" rows="10" placeholder="Scrivi qui"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" id="send">Primary</button>
    </form>

</div>
@endsection