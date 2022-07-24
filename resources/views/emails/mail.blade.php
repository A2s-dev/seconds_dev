<div>
    From: {{ $contact->name }} <br>
    Address: {{ $contact->email }}<br><br>
    {!! nl2br(e( $contact->message)) !!}
</div>
