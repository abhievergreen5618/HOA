
    @include('./partials/mainHeader')

    <div class="section2">
        <div class="sectionHeader">
            <div class="headingValue">
                    <p>Contact</p>
                </div>
        </div>
        <div class="Contactsection">
            <div class="dataHeading">
                <p>Get in touch with us via our <strong class="dark">contact form below </strong></p>
            </div>
        </div>
        <div class="formContainer">
            @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <div class="formData">
                <form method="POST" action="{{url('contact-us')}}">
                    @csrf
                    <div class="inputDiv">
                        <p class="inputName">First Name:</p>
                        <input type="text" class="inputdivValue" name="firstname">
                    </div>
                    <div class="inputDiv">
                        <p class="inputName">Last Name:</p>
                        <input type="text" class="inputdivValue" name="lastname">
                    </div>
                    <div class="inputDiv">
                        <p class="inputName">Email:</p>
                        <input type="text" class="emailInput" name="email">
                    </div>
                    <div class="inputDiv">
                        <p class="inputName">Message:</p>
                        <textarea class="messageValue" name="message"></textarea>
                    </div>
                    <div class="captchaDiv">
                        <div class="captchaImage">
                            {!! Captcha::img() !!}
                            <!-- <p>Captcha Image URL: {{ captcha_src() }}</p> -->
                        </div>
                        <p class="captchaText">Please enter the code above in the box below.</p>
                        <div class="captchaValue">
                            <input type="text" class="captchaInput" name="captcha">
                            <p class="refresh" onclick="refreshCaptcha()">Can't read the image? Please click <u
                                    class="clickRefresh">here</u> to refresh</p>
                        </div>
                    </div>
                    <div class="button">
                        <button class="submit-btn" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('./partials/mainFooter')

    <script>
        function refreshCaptcha() {
            var captchaImage = document.querySelector('.captchaImage img');
            captchaImage.src = captchaImage.src.split('?')[0] + '?' + new Date().getTime();
        }
    </script>
