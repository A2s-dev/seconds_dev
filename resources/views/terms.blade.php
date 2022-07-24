@extends('layouts.app')

@section('content')
    <div class="term-wrap">
        @component('components.header')
        @endcomponent
        <main class="term-container">

            <h1 class="term-title">
                Terms of Service
            </h1><br>
            <p class="mb-4">
                <b>Seconds</b> are an online platform for authors to share, review and promote their writings. Please take a
                few
                minutes to read the following so that you understand the rules of the road before starting to use the
                service.
            </p>
            <div class="term-general">
                <div class="fs-4 fw-bold mb-3">1.General terms</div>
                <ul class="ps-4">
                    <li>
                        By using Seconds, you are agreeing to these Terms of Service and the Privacy Policy. These Terms of
                        Service
                        apply to all users of the Seconds Platform. If you don’t agree with these Terms of Service and the
                        Privacy
                        Policy, then we ask that you please not use the Platform.
                    </li>
                    <br>
                    <li>We may make changes to these Terms of Service and the Privacy Policy from time to time. Once we post
                        such
                        changes, those changes will apply to your use of the Platform going forward, so please check the
                        Platform
                        regularly for any changes.
                    </li>
                </ul>
                <br>
            </div>

            <div class="term-account">
                <div class="fs-4 fw-bold mb-3">2. Account</div>
                <ul class="ps-4">
                    <li>
                        Your Account is personal to you. You are solely responsible for the activity that occurs on your
                        Account, so you should keep your Account password secure. Please notify Seconds immediately of any
                        unauthorized use of your Account. You are not allowed to use any other user's Account.
                    </li>
                    <br>
                    <li>Seconds is under no obligation to provide any individual an Account, and may accept or reject any
                        registration in its sole and complete discretion. In addition, Seconds reserves the right to
                        terminate
                        any Account, and/or to remove any content you post for any reason in Seconds’s sole discretion (for
                        example in cases of violation of the code of conduct).
                    </li>
                </ul>
                <br>
            </div>

            <div class="term-abuse">
                <div class="fs-4 fw-bold mb-3">3. Abuse</div>
                <ul class="ps-4">
                    <li>You must abide by the following rules and regulations when you use the Platform:</li><br>
                    <li>You agree not to use the Website in any manner that interferes with, disrupts or creates an undue
                        burden on the Website, or the networks or services that support the Website.</li><br>
                    <li>You agree not to use the Platform in order to harass, abuse, stalk, or harm another person.</li><br>
                    <li>Don’t spam or use the Platform to engage in any commercial activities, including, without
                        limitation,
                        raising money; advertising or promoting a product, service, website, or company; or engaging in any
                        pyramid or other multi-tiered marketing scheme.</li><br>
                    <li>You will not access or use the Platform to collect any market research for a competing business.
                    </li>
                    <br>
                    <li>You must use the Platform strictly in compliance with all applicable laws and regulations.</li>
                </ul>
                <br><br>
            </div>

            <div class="term-publications">
                <div class="fs-4 fw-bold mb-3">4. Publications</div>
                <ul class="ps-4">
                    <li>
                        By submitting any Publication to us, you represent that (1) the Publication is your original work of
                        authorship and (2) the Publication complies with Seconds’s Content Policy which is described below.
                        You
                        are
                        solely responsible for your own Publications and the consequences of posting them on the Platform.
                    </li><br>
                    <li>You expressly acknowledge and agree that once you submit your Content for posting on the Platform,
                        it
                        will be accessible by others, and that there is no confidentiality or privacy with respect to such
                        Content, including, without limitation, any personally identifying information that you may make
                        available online.
                    </li>
                </ul>
                <br><br>
            </div>
            <div class="term-policy">
                <div class="fs-4 fw-bold mb-3">5. Content Policy</div>
                <div>You will not submit any Publication or User Community Content (collectively, “Content”) to the Platform
                    that:</div><br>
                <ul class="lh-lg ps-4">
                    <li>contains defamatory or libelous material;</li>

                    <li>promotes racism, bigotry, hatred or physical harm of any kind against any group or individual;
                    </li>

                    <li>harasses or advocates harassment of another person;</li>

                    <li>promotes illegal activities or conduct;</li>

                    <li>contains any telephone numbers, street addresses or email addresses of any individual;</li>

                    <li>violates any copyright or right of publicity or privacy; or</li>

                    <li>is contrary to any applicable law.</li>
                </ul>
                <br><br>
            </div>

            <div class="term-contact">
                <div class="fs-4 fw-bold mb-3">6. Contact Us</div>
                <div>Questions or comments regarding Seconds, including any reports of non-functioning links, should be
                    submitted
                    using our e-mail address at</div>
                <a href="{{ route('contact.index') }}">Contact Us</a>
            </div>
        </main>
    </div>
@endsection
