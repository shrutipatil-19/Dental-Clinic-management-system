@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

<!-- About Section -->
<section id="about" class="about section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 align-items-center justify-content-between">

            <div class="col-xl-5" data-aos="fade-up" data-aos-delay="200">
                <span class="about-meta">MORE ABOUT US</span>
                <h2 class="about-title">Voluptas enim suscipit temporibus</h2>
                <p class="about-description" style="font-size: 18px;">Sed ut perspiciatis unde omnis iste natus error
                    sit voluptatem accusantium
                    doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                    architecto beatae vitae dicta sunt explicabo.</p>

                <!-- <div class="row feature-list-wrapper">
                    <div class="col-md-6">
                        <ul class="feature-list">
                            <li><i class="bi bi-check-circle-fill"></i> Lorem ipsum dolor sit amet</li>
                            <li><i class="bi bi-check-circle-fill"></i> Consectetur adipiscing elit</li>
                            <li><i class="bi bi-check-circle-fill"></i> Sed do eiusmod tempor</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="feature-list">
                            <li><i class="bi bi-check-circle-fill"></i> Incididunt ut labore et</li>
                            <li><i class="bi bi-check-circle-fill"></i> Dolore magna aliqua</li>
                            <li><i class="bi bi-check-circle-fill"></i> Ut enim ad minim veniam</li>
                        </ul>
                    </div>
                </div> -->

                <div class="info-wrapper">
                    <div class="row gy-4">
                        <div class="col-lg-5">
                            <div class="profile d-flex align-items-center gap-3">
                                <img src="https://preview.colorlib.com/theme/toothcare/images/doc-4.jpg.webp"
                                    alt="CEO Profile" class="profile-image">
                                <div>
                                    <h4 class="profile-name">Mario Smith</h4>
                                    <p class="profile-position">CEO &amp; Founder</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="contact-info d-flex align-items-center gap-2">
                                <i class="bi bi-telephone-fill"></i>
                                <div>
                                    <p class="contact-label">Call us anytime</p>
                                    <p class="contact-number">+123 456-789</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6" data-aos="fade-up" data-aos-delay="300">
                <div class="image-wrapper">
                    <div class="images position-relative" data-aos="zoom-out" data-aos-delay="400">
                        <img src="https://themewagon.github.io/dentcare/img/about.jpg" alt="Business Meeting"
                            class="img-fluid main-image rounded-4">
                        <img src="https://preview.colorlib.com/theme/toothcare/images/bg_1.jpg.webp"
                            alt="Team Discussion" class="img-fluid small-image rounded-4">
                    </div>
                    <div class="experience-badge floating">
                        <h3>15+ <span>Years</span></h3>
                        <p>Of experience in business service</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>
<!-- /About Section -->


<!-- Faq Section -->
<section class="faq-9 faq section light-background" id="faq">

    <div class="container">
        <div class="row">

            <div class="col-lg-5" data-aos="fade-up">
                <h2 class="faq-title">Have a question? Check out the FAQ</h2>
                <p class="faq-description">Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit
                    amet adipiscing sem neque sed ipsum.</p>
                <div class="faq-arrow d-none d-lg-block" data-aos="fade-up" data-aos-delay="200">
                    <svg class="faq-arrow" width="200" height="211" viewBox="0 0 200 211" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M198.804 194.488C189.279 189.596 179.529 185.52 169.407 182.07L169.384 182.049C169.227 181.994 169.07 181.939 168.912 181.884C166.669 181.139 165.906 184.546 167.669 185.615C174.053 189.473 182.761 191.837 189.146 195.695C156.603 195.912 119.781 196.591 91.266 179.049C62.5221 161.368 48.1094 130.695 56.934 98.891C84.5539 98.7247 112.556 84.0176 129.508 62.667C136.396 53.9724 146.193 35.1448 129.773 30.2717C114.292 25.6624 93.7109 41.8875 83.1971 51.3147C70.1109 63.039 59.63 78.433 54.2039 95.0087C52.1221 94.9842 50.0776 94.8683 48.0703 94.6608C30.1803 92.8027 11.2197 83.6338 5.44902 65.1074C-1.88449 41.5699 14.4994 19.0183 27.9202 1.56641C28.6411 0.625793 27.2862 -0.561638 26.5419 0.358501C13.4588 16.4098 -0.221091 34.5242 0.896608 56.5659C1.8218 74.6941 14.221 87.9401 30.4121 94.2058C37.7076 97.0203 45.3454 98.5003 53.0334 98.8449C47.8679 117.532 49.2961 137.487 60.7729 155.283C87.7615 197.081 139.616 201.147 184.786 201.155L174.332 206.827C172.119 208.033 174.345 211.287 176.537 210.105C182.06 207.125 187.582 204.122 193.084 201.144C193.346 201.147 195.161 199.887 195.423 199.868C197.08 198.548 193.084 201.144 195.528 199.81C196.688 199.192 197.846 198.552 199.006 197.935C200.397 197.167 200.007 195.087 198.804 194.488ZM60.8213 88.0427C67.6894 72.648 78.8538 59.1566 92.1207 49.0388C98.8475 43.9065 106.334 39.2953 114.188 36.1439C117.295 34.8947 120.798 33.6609 124.168 33.635C134.365 33.5511 136.354 42.9911 132.638 51.031C120.47 77.4222 86.8639 93.9837 58.0983 94.9666C58.8971 92.6666 59.783 90.3603 60.8213 88.0427Z"
                            fill="currentColor"></path>
                    </svg>
                </div>
            </div>

            <div class="col-lg-7" data-aos="fade-up" data-aos-delay="300">
                <div class="faq-container">

                    <div class="faq-item faq-active">
                        <h3>What services does the clinic offer?</h3>
                        <div class="faq-content">
                            <p>Our clinic provides preventive, restorative, cosmetic, and specialized dental care, including cleanings, fillings, teeth whitening, orthodontics, and more.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3>Where is the clinic located, and what are your operating hours?</h3>
                        <div class="faq-content">
                            <p>[Insert location and hours of operation, including any weekend or evening availability.]</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3>Do I need to schedule an appointment, or do you accept walk-ins?</h3>
                        <div class="faq-content">
                            <p>Appointments are recommended to ensure availability, but we accommodate walk-ins based on scheduling.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3>How do I book an appointment?</h3>
                        <div class="faq-content">
                            <p>You can book an appointment by calling us at [phone number], visiting our website [website URL], or using our mobile app.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3>What payment options are available?</h3>
                        <div class="faq-content">
                            <p>We accept cash, credit/debit cards, and offer flexible payment plans. [Mention any third-party financing options if applicable.]</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3>Why are dental X-rays necessary?</h3>
                        <div class="faq-content">
                            <p>X-rays help detect issues not visible during a regular exam, such as cavities between teeth, bone loss, or impacted teeth.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                </div>
            </div>

        </div>
    </div>
</section><!-- /Faq Section -->


@endsection
