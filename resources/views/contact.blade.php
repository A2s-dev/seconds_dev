@extends('layouts.app')

@section('content')
    <section class="contact-wrap">
        <div class="contact-info centering">
            <article>
                <div class="c-info_head">
                    Contact
                </div>
                <div class="text-light">
                    We`re open for any suggestion or just to have a chat.
                </div>
                <div class="c-info_attention">
                    If you are inquiring about a copyrighted work, <br>please describe the work in as much detail as
                    possible.
                </div>
                <a href="{{ route('terms') }}">Term of Service</a>
            </article>
        </div>

        <main class="contact-content centering">
            <form method="POST" action="{{ route('contact.store') }}" role="form">
                @csrf
                <h2>Message</h2>
                <div>
                    <input type="text" id="name" placeholder="NAME" name="name" value="" required>
                </div>
                <div>
                    <input type="email" id="email" placeholder="EMAIL" name="email" value="" required>
                </div>
                <textarea rows="10" id="message" placeholder="MESSAGE" name="message" required></textarea>

                <button class="c-contact_btn" id="submit" type="submit" value="SEND">
                    <i class="fas fa-paper-plane fa-2x"></i>SEND
                </button>
            </form>
        </main>

        @if (session('message'))
            <div class="contact-msg">
                {{ session('message') }}
            </div>
        @endif

        <button class="contact-back" type="button" onClick="history.back()">
            <i class="fas fa-reply"></i>
        </button>
    @endsection
