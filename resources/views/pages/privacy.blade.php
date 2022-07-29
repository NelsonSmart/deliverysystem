@extends('inc.layout')
@section('content')

<!-- ========================
       page title 
    =========================== -->
    <section id="page-title" class="page-title bg-overlay bg-parallax">
        <div class="bg-img"><img src="assets/images/page-titles/5.jpg" alt="background"></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Features</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Privacy</li>
                </ol>
              </nav>
              <h1 class="pagetitle__heading"> Privacy Policy</h1>
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.page-title -->
  
      <!-- ======================
         FAQ
      ========================= -->
      <section id="faq" class="faq">
        <div class="container">
          <div>
            
                    <p>
                        Please read this Privacy Policy carefully as it will help you make informed decisions about
                        sharing
                        your personal information with us.
                    </p>

                    <h3>Introduction:</h3>
                    <p>
                        {{env('APP_NAME')}} is thoroughly committed to protecting the privacy of our site visitors and customers. We
                        fully appreciate and respect the importance of privacy on the Internet. We respect each
                        visitor's and customer’s right to personal privacy. To this end, we collect and use information
                        throughout our website only as disclosed in this Privacy Policy.
                    </p>


                    <h3>What this Privacy Policy Covers</h3>
                    <ul>
                        <li>How we collect information from you</li>
                        <li>How we protect customers’ information</li>
                        <li>How we use the information, and share all personal information which you provide when you
                            use our websites</li>
                        <li>General information in lien with extant laws and regulations.</li>
                    </ul>

                    <p>This policy does not apply to the practices of third party agents, or people of which we do not
                        exercise direct control, employment or management.</p>

                    <p> <b>1. Consent:</b> </p>
                    <p>
                        By using this site, <b>you have consented to our Privacy Policy</b> and
                        that you have the legal capacity to give consent. Otherwise, you may discontinue and log out at
                        this
                        stage.
                    </p>


                    <p> <b>2. Collection of Personally Identifiable Information</b> </p>
                    <p>
                        We collect personally identifiable information (including but not limited to email address,
                        name,
                        phone number, physical address, location, photo, banking details (when you make purchases),
                        online
                        identifiers, etc.) from you <b>when you set up a free account with {{env('APP_NAME')}}/b&gt; While you can
                        browse some sections of our site without being a registered member, certain activities (such as
                        placing an order) do require registration. We do use your contact information to send you offers
                        based on your previous orders and your interests. The information and personal data are as
                        freely
                        provided by you to us using any technology at the material time e.g. JWT, web tokens etc.
                    </b></p><b>

                    <p><b>3. Use of Demographic and Profile Data</b></p>
                    <p>
                        We use personal information to provide the services you request. To the extent we use your
                        personal
                        information to market to you, we will provide you the ability to opt-out of such uses. We use
                        your
                        personal information to resolve disputes; troubleshoot problems; help promote a safe service;
                        collect fees owed; measure consumer interest in our products and services, inform you about
                        online
                        and offline offers, products, services, and updates; customize your experience; detect and
                        protect
                        us against error, fraud and other criminal activity; enforce our terms and conditions; and as
                        otherwise described to you at the time of collection. In our efforts to continually improve our
                        product and service offerings, we collect and analyse demographic and profile data about our
                        users'
                        activity on our website. We identify and use your IP address to help diagnose problems with our
                        server, and to administer our website. Your IP address is also used to help identify you and to
                        gather broad demographic information. We will occasionally ask you to complete optional online
                        surveys. These surveys may ask you for contact information and demographic information (like
                        location, local government area, age, or income level). We use this data to tailor your
                        experience
                        at our site, providing you with content that we think you might be interested in--and to display
                        content according to your preferences.
                    </p>

                    <p><b>4. Cookies</b></p>
                    <p>
                        We use cookies to collect information. A "cookie" is a small piece of information stored by a
                        Web
                        server on a Web browser so it can be later read back from that browser. Cookies are useful for
                        enabling the browser to remember information specific to a given user. {{env('APP_NAME')}} places both
                        permanent and temporary cookies in your computer's hard drive. {{env('APP_NAME')}}'s cookies do not
                        contain
                        any of your personally identifiable information or private data.
                        We use technology in the collecting the information in order to make our Sites and other content
                        or
                        services which we make available to you more interesting and useful to you. For instance, when
                        you
                        come to one of our Sites via your computer or other media device, we may combine your visitor
                        session information or other information collected through cookies, web beacons and other
                        technical
                        methods with personally identifiable information in order to understand and improve your online
                        experiences and to determine what products, promotions and services you prefer or are likely to
                        be
                        of interest to you.
                    </p>

                    <p><b>5. Governing Principles of Data Processing</b></p>
                    <ol type="a">
                        <li>Your personal data on {{env('APP_NAME')}} shall be collected and processed in accordance with
                            legitimate and lawful purpose consented to by you herein, provided that a further processing
                            may be done only for archiving, scientific research, historical research or statistical
                            purposes for public interest in line with extant regulations and laws.</li>
                        <li>Personal data shall be adequate, accurate and without prejudice to the dignity of human
                            person:</li>
                        <li>Personal data shall be stored only for the period within which it is reasonably needed, and
                            shall be secured against all foreseeable hazards and breaches such as theft, cyberattack,
                            viral attack, dissemination, manipulations of any kind, damage by rain, fire or exposure to
                            other natural elements.</li>
                        <li>Our data collection shall depict that we owe a duty of care to you.</li>
                        <li>We shall be accountable in line with extant laws and regulations.</li>
                    </ol>

                    <p><b>6. Sharing of personal information</b></p>
                    <p>
                        We may share personal information with our other corporate entities and affiliates to: help
                        detect
                        and prevent identity theft, fraud and other potentially illegal acts; correlate related or
                        multiple
                        accounts to prevent abuse of our services; and to facilitate joint or co - branded services that
                        you
                        request where such services are provided by more than one corporate entity. Those entities and
                        affiliates may not market to you as a result of such sharing unless you explicitly opt -in.
                        We may disclose personal information if required to do so by law or in the good faith belief
                        that
                        such disclosure is reasonably necessary to respond to subpoenas, court orders, or other legal
                        process. We may disclose personal information to law enforcement offices, third party rights
                        owners,
                        third-party vendors, contractors and suppliers who perform services for us or on our behalf and
                        require access to such information to do that service, or others in the good faith belief that
                        such
                        disclosure is reasonably necessary to: enforce our Terms or Privacy Policy; respond to claims
                        that
                        an advertisement, posting or other content violates the rights of a third party; or protect the
                        rights, property or personal safety of our users or the general public.
                        {{env('APP_NAME')}} and its affiliates will share some or all of your personal information with another
                        business entity should we (or our assets) plan to merge with, or be acquired by that business
                        entity. Should such a transaction occur, that other business entity (or the new combined entity)
                        will be required to follow this privacy policy with respect to your personal information.
                    </p>

                    <p><b>7. Personal Date Retention Period</b></p>
                    <p>
                        {{env('APP_NAME')}} will only keep your personal information for as long as it is necessary for the
                        purposes
                        set out in this Privacy Policy, unless a longer retention period is required or permitted by law
                        (such as tax, accounting or other legal requirements.) Upon request for account closure, your
                        account will be closed but this closure will not involve deletion of historical records of the
                        account for the reasons already stated. However, except as may be required by law or law
                        enforcement
                        agents and/or regulators, further processing of the personal information related to the account
                        will
                        cease from time of closure.
                    </p>

                    <p><b>8. Your Privacy Rights</b></p>
                    <p>
                        In certain circumstances as provided under the Nigeria Data Protection Regulation or any other
                        applicable law, you may object to the processing of your personal information. To make such a
                        request, please use the contact details provided below. We will consider and act upon any
                        request in
                        accordance with applicable data protection laws.
                    </p>

                    <p><b>9. Links to Other Sites</b></p>
                    <p>
                        Our site links to other websites that may collect personally identifiable information about you.
                        {{env('APP_NAME')}} is not responsible for the privacy practices or the content of those linked websites.
                    </p>

                    <p><b>10. Security Precautions</b></p>
                    <p>
                        Our site has stringent security measures in place to protect the loss, misuse, and alteration of
                        the
                        information under our control. Whenever you change or access your account information, we offer
                        the
                        use of a secure server. Once your information is in our possession we adhere to strict security
                        guidelines, protecting it against unauthorized access. However, please bear in mind that we
                        cannot
                        guarantee that the internet in itself is 100% secure and so we cannot take responsibility for
                        the
                        illegal acts of hackers as long as we have taken the necessary precautions. Although we will do
                        our
                        best to protect your personal information, transmission of personal information to and from our
                        services is at your own risk. You should only access our site or services through and within a
                        secure environment. Most importantly, you are responsible for keeping your User ID and password
                        secure and you should not disclose them to anyone.
                    </p>

                    <p><b>11. Choice/Opt-Out</b></p>
                    <p>
                        {{env('APP_NAME')}} provides all users with the opportunity to opt-out of receiving non-essential
                        (promotional, marketing-related) communications from us on behalf of our partners, and from us
                        in
                        general, after setting up an account. 
                    </p>

                    

                    <p><b>12. Remedies, Questions and Contact</b></p>
                    <p>
                        If observe or have good grounds that your privacy rights have been infringed or likely to be
                        infringed by the use of our Site please lodge your complaints or questions regarding our policy
                        to
                        the following address: <b>{{env('MAIL_FROM_ADDRESS')}}</b>. Our Data Protection Officer shall attend to them.
                        Generally, you may contact us on any issue by mail to <b>{{env('MAIL_FROM_ADDRESS')}}</b>.
                    </p>

                    <p><b>13. Notification of Changes</b></p>
                    <p>
                        <a href="{{env('APP_URL')}}" class="">{{env('APP_NAME')}}</a> reserves the right to make changes and/or updates
                        to this Privacy Policy from time to
                        time, without prior notice, and the latest version on this policy will be posted on our
                        websites.
                        You are advised to view this Privacy Policy periodically for any changes. Changes to this
                        Privacy
                        Policy are effective when they are posted on our webpages.
                    </p>
                </b>
          </div>
        </div><!-- /.container -->
      </section><!-- /.FAQ -->
  
    
@endsection