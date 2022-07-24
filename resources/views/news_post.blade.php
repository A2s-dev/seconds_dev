@extends('layouts.app')

@section('content')
    <div class="np-content centering">
        <form method="GET" action="{{ route('news.store') }}" role="form">
            <h2>News</h2>

            <textarea rows="10" id="title" placeholder="Please enter a something..." name="title" maxlength="50" required></textarea>

            <button class="np-content_btn" id="submit" type="submit" value="SEND">
                <i class="fas fa-paper-plane fa-2x"></i>SEND
            </button>
        </form>
    </div>
    <button class="np-back" type="button" onClick="history.back()">
        <i class="fas fa-reply"></i>
    </button>
@endsection
