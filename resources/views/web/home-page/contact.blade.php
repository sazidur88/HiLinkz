<div class="rn-contact-area rn-section-gap bg_color--5" id="contact">
    <div class="contact-form--1">
        <div class="container">
            <div class="row row--35 align-items-start">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="section-title text-left mb--50 mb_sm--30 mb_md--30">
                        <h2 class="title">Get To Work</h2>
                        <p class="description">We always want to hear from you. Connect with us via phone:
                            <a href="tel:{{ $phone_bd1 }}"> {{ $phone_bd1 }}</a> or email:
                            <a href="mailto:{{ $email_bd1 }}">{{ $email_bd1 }}</a>
                        </p>
                    </div>
                    <div class="form-wrapper">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br />
                        @endif
                        <form action="{{route('contact_us_send_message')}}" method="POST">
                            @csrf

                            <label>
                                <input type="text" name="name" id="item01" placeholder="Your Name *" required />
                            </label>

                            <label>
                                <input type="text" name="email" id="item02" placeholder="Your email *" required>
                            </label>

                            <label>
                                <input type="text" name="subject" id="item03" placeholder="Write a Subject">
                            </label>
                            <label>
                                <input type="text" name="phone" id="item04" placeholder="Your phone no.">
                            </label>
                            <label>
                                <textarea id="item04" name="message" placeholder="Your Message"></textarea>
                            </label>

                            <button class="rn-button-style--2 btn_solid" type="submit" value="submit" name="submit" id="mc-embedded-subscribe">Submit</button>
                        </form>
                    </div>
                </div>

               {{--  <div class="col-lg-6 order-1 order-lg-2">
                    <div class="thumbnail mb_md--40 mb_sm--40">
                        <img src="{{asset('assets/images/about/LetsTalk.jpg')}}" alt="trydo" />
                    </div>
                </div> --}}

                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="rn-address">
                                <div class="inner mb-4">
                                    <img src="{{ asset('assets/img/bd_flag.png') }}" alt="Bangladesh flag Hilinkz Ltd"
                                        loading="lazy" width="80" height="80" sizes="(max-width: 80px) 100vw, 50px" />
                                </div>
                                <div class="inner mb-4">
                                    <h4 class="title theme-color">Bangladesh Address</h4>
                                </div>
                                <div class="inner mb-4">
                                    <p><i class="fas fa-phone"></i> &nbsp;<a
                                            href="tel:{{ $phone_bd1 }}">{{ $phone_bd1 }}</a></p>
                                    <p><i class="fas fa-phone"></i> &nbsp;<a
                                            href="tel:{{ $phone_bd2 }}">{{ $phone_bd2 }}</a></p>
                                </div>
                                <div class="inner mb-4">
                                    <p><i class="fas fa-envelope"></i> &nbsp;<a
                                            href="mailto:{{ $email_bd1 }}">{{ $email_bd1 }}</a></p>
                                    <p><i class="fas fa-envelope"></i> &nbsp;<a
                                            href="mailto:{{ $email_bd2 }}">{{ $email_bd2 }}</a></p>
                                </div>
                                <div class="inner">
                                    <p><i class="fas fa-map-marker-alt"></i>&nbsp;<a href="{{ $map_bd }}"
                                            target="_blank"> {{ $location_bd }}</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="rn-address">
                                <div class="inner mb-4">
                                    <img src="{{ asset('assets/img/aus_flag.png') }}"
                                        alt="Australia flag Hilinkz Ltd" loading="lazy" width="80" height="80"
                                        sizes="(max-width: 80px) 100vw, 50px" />
                                </div>
                                <div class="inner mb-4">
                                    <h4 class="title theme-color">Australia Address</h4>
                                </div>
                                <div class="inner mb-4">
                                    <p><i class="fas fa-phone"></i> &nbsp;<a
                                            href="tel:{{ $phone_aus }}">{{ $phone_aus }}</a></p>
                                    <p class="bg_text_color unselectable">___</p>
                                </div>
                                <div class="inner mb-4">
                                    <p><i class="fas fa-envelope"></i> &nbsp;<a
                                            href="mailto:{{ $email_bd1 }}">{{ $email_bd1 }}</a></p>
                                    <p style="font-size: 16px;"><i class="fas fa-envelope"></i> &nbsp;<a
                                            href="mailto:{{ $email_aus }}">{{ $email_aus }}</a></p>
                                </div>
                                <div class="inner">
                                    <p><i class="fas fa-map-marker-alt"></i>&nbsp;<a href="{{ $map_aus }}"
                                            target="_blank"> {{ $location_aus }}</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- <div class="col-lg-6 order-1 order-lg-2">
                    <div class="footer-left">
                        <div class="inner">
                            <span>Ready To Do This</span>
                            <h2 class="text-white">Get to work</h2>
                            <a class="rn-button-style--2" href="{{route('contact_form')}}">
                                <span>Contact Us</span>
                            </a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>