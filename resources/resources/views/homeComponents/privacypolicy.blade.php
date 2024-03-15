
    @include('./partials/mainHeader')

    <div class="section2">
        <div class="sectionHeader">
            <div class="headingValue">
                    <p>Privacy Policy</p>
                </div>
        </div>
        <div class="PrivacySection">
            <div class="dataContent">
                <p>Protecting your private information is our priority. This Statement of Privacy applies to
                    www.FloridaCommunityNetwork.net and governs data collection and usage. For the purposes of this
                    Privacy Policy, unless otherwise noted, all references to FloridaCommunityNetwork.net include
                    www.FloridaCommunityNetwork.net. The FloridaCommunityNetwork.net website is strictly an information
                    site. By using the FloridaCommunityNetwork.net website, you consent to the data practices described
                    in this statement.</p>

                <p>www.FloridaCommunityNetwork.net is an independent information service and is not affiliated with any
                    lending institution, title company, real estate company, property management company, home
                    inspection company or homeowners association. ALL CONTENT HEREIN IS STRICTLY FOR INFORMATIONAL AND
                    PROMOTIONAL PURPOSES ONLY. WE SHALL NOT BE HELD LIABLE FOR ANY MISREPRESENTATION, MISTAKE OR ERROR
                    CONTAINED HEREIN. ALL INFORMATION CONTAINED OR EXCHANGED HEREIN ARE NOT TO BE CONSTRUED AS
                    PROFESSIONAL ADVICE NOR IS ANY COMMUNICATION EXCHANGED HEREIN INTENDED TO ESTABLISH AN
                    ATTORNEY/CLIENT RELATIONSHIP. COMMUNICATIONS AND/OR INFORMATION POSTED ON THIS SITE IS THE OPINION
                    OF THE POSTER AND NOT THE WEBMASTER.</p>
            </div>
            <div class="dataContent">
                <p>Collection of your Personal Information</p>
                <p>FloridaCommunityNetwork.net may collect personally identifiable information, such as your name. We
                    may gather additional personal or non-personal information in the future.</p>

                <p>Information about your computer hardware and software may be automatically collected by
                    FloridaCommunityNetwork.net. This information can include: your IP address, browser type, domain
                    names, access times and referring website addresses. This information is used for the operation of
                    the service, to maintain quality of the service, and to allow HOA's a means to contact you, and to
                    provide general statistics regarding use of the FloridaCommunityNetwork.net website.

                <p>FloridaCommunityNetwork.net encourages you to review the privacy statements of websites you choose
                    to link to from FloridaCommunityNetwork.net so that you can understand how those websites collect,
                    use and share your information.</p>

                <p>FloridaCommunityNetwork.net is not responsible for the privacy statements or other content on
                    websites outside of the FloridaCommunityNetwork.net website.</p>

                <p>FloridaCommunityNetwork.net is not affiliated with any of the homeowners associations or property
                    managers listed on our website. If you wish to contact these entities and send us an email, we will
                    make every attempt to contact the HOA, board members or property managers for you. We do not
                    guarantee that we can contact them. We do publish your information. Please be aware that when you
                    give us your information such as your name, address, phone etc., via our contact form or any other
                    means, your information then becomes public information and a part of
                    Florida-Homeowner-Association-Directory.info</p>
            </div>
            <div class="dataContent">
                <p>Use of your Personal Information</p>
                <p>FloridaCommunityNetwork.net collects and uses your personal information to operate its website(s) and
                    deliver the services you have requested.

                <p>FloridaCommunityNetwork.net may also use your personally identifiable information to inform you of
                    other products or services available from FloridaCommunityNetwork.net and its affiliates.
                    FloridaCommunityNetwork.net may also contact you via surveys to conduct research about your opinion
                    of current services or of potential new services that may be offered.</p>

                <p>FloridaCommunityNetwork.net will disclose your personal information, without notice, if required to
                    do so by law or in the good faith belief that such action is necessary to: (a) conform to the edicts
                    of the law or comply with legal process served on FloridaCommunityNetwork.net or the site; (b)
                    protect and defend the rights or property of FloridaCommunityNetwork.net; and, (c) act under exigent
                    circumstances to protect the personal safety of users of FloridaCommunityNetwork.net, or the public.
                </p>
            </div>
            <div class="dataContent">
                <p>Children Under Thirteen</p>
                <p>FloridaCommunityNetwork.net does not knowingly collect personally identifiable information from
                    children under the age of thirteen. If you are under the age of thirteen, you must ask your parent
                    or guardian for permission to use this website.</p>
            </div>
            <div class="dataContent">
                <p>Opt-Out & Unsubscribe</p>
                <p>We respect your privacy and give you an opportunity to opt-out of receiving announcements of certain
                    information. Users may opt-out of receiving any or all communications from
                    FloridaCommunityNetwork.net by contacting us.</p>
            </div>
            <div class="dataContent">
                <p>Changes to this Statement</p>
                <p>FloridaCommunityNetwork.net will occasionally update this Statement of Privacy to reflect company and
                    customer feedback. FloridaCommunityNetwork.net encourages you to periodically review this Statement
                    to be informed of how FloridaCommunityNetwork.net is protecting your information.</p>
            </div>
            <div class="dataContent">
                <p>Contact Information</p>
                <p>FloridaCommunityNetwork.net welcomes your questions or comments regarding this Statement of Privacy.</p>
                <p>If you believe that FloridaCommunityNetwork.net has not adhered to this Statement, please contact
                    FloridaCommunityNetwork.net at:</p>

                <p>FloridaCommunityNetwork.net, Sarasota, Florida 34233</p>

                <p>Email Address: postmaster@FloridaCommunityNetwork.net</p>

                <p>Effective as of June 1, 2019</p>
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

