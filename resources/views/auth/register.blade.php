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
                    <form method="POST" action="{{ route('register.exe') }}">
                        @csrf
                        <h1>Welcome</h1>
                        <div class="auth-form">
                            <input type=" text" name="name" placeholder="Username" autocomplete="off" maxlength="15" />
                            <input type="text" name="email" placeholder="Email" autocomplete="off" maxlength="255" />
                            <input type="password" name="password" placeholder="Password" autocomplete="off"
                                maxlength="255" />
                        </div>

                        <div>
                            <button type="submit" class="auth-btn centering">
                                Sign up
                            </button>
                            <a href="{{ route('login') }}" class="auth-callout centering">
                                Already have an account?
                            </a>
                        </div>
            </div>
            </form>
            </section>
        </div>
    </div>
@endsection
