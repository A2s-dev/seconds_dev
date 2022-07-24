@extends('layouts.app')

@section('content')
    <!-- All -->
    <div class="auth-wrap">
        <div class="auth-container">

            <div class="auth-title">
                <div>
                    {{ config('app.name') }}
                </div>
                <div>
                    A community site to improve the quality of your novel.
                </div>
                @if ($errors->any())
                    <div class="auth-error">
                        <h3>ERROR</h3>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </div>
                @endif
                <a href="{{ route('contact.index') }}" class="auth-contact">
                    <i class="fas fa-exclamation-circle"></i>Contact Us</a>
            </div>

            <div class="auth-content centering">
                <section>
                    <form method="POST" action="{{ url('login') }}">
                        @csrf
                        <h1>Login</h1>
                        <div class="auth-form">
                            <input type="text" name="email" placeholder="Email" value="{{ old('email') }}"
                                autocomplete="off" />
                            <input type="password" name="password" placeholder="Password" autocomplete="off" />
                        </div>

                        <div class="auth-subset">
                            <button type="submit" class="auth-btn centering">Login</button>
                            <a href="{{ route('guest.login') }}" class="auth-btn centering">Guest Login</a>

                            <a href="{{ route('register') }}" class="auth-callout centering">
                                Do you have an account with us?
                            </a>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    @endsection
