@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
<!-- Hero Section -->
<section id="hero" class="hero section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
                    <div class="company-badge mb-4">
                        <i class="bi bi-gear-fill me-2"></i>
                        Working for your health
                    </div>

                    <h1 class="mb-4">"Bright Smiles, Healthy Lives"<br>
                        <span class="accent-text fs-3"> Your Trusted Dental Care Partner</span>
                    </h1>

                    <!-- <p class="mb-4 mb-md-5">
                        Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.
                        Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. -->
                    <!-- </p> -->

                    <!-- <div class="hero-buttons">
                        <a href="#about" class="btn btn-primary me-0 me-sm-2 mx-1">Get Started</a>
                        <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8"
                            class="btn btn-link mt-2 mt-sm-0 glightbox">
                            <i class="bi bi-play-circle me-1"></i>
                            Play Video
                        </a>
                    </div> -->
                </div>
            </div>
            <!-- https://preview.colorlib.com/theme/toothcare/images/bg_1.jpg.webp -->

            <div class="col-lg-6">
                <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
                    <img src=" https://preview.colorlib.com/theme/toothcare/images/bg_2.jpg.webp" alt="Hero Image"
                        class="img-fluid">

                    <!-- <div class="customers-badge">
          <div class="customer-avatars">
            <img src="assets/img/avatar-1.webp" alt="Customer 1" class="avatar">
            <img src="assets/img/avatar-2.webp" alt="Customer 2" class="avatar">
            <img src="assets/img/avatar-3.webp" alt="Customer 3" class="avatar">
            <img src="assets/img/avatar-4.webp" alt="Customer 4" class="avatar">
            <img src="assets/img/avatar-5.webp" alt="Customer 5" class="avatar">
            <span class="avatar more">12+</span>
          </div>
          <p class="mb-0 mt-2">12,000+ lorem ipsum dolor sit amet consectetur adipiscing elit</p>
        </div> -->
                </div>
            </div>
        </div>

        <div class="row stats-row gy-4 mt-5" data-aos="fade-up" data-aos-delay="500">
            <div class="col-lg-3 col-md-6">
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="bi bi-trophy"></i>
                    </div>
                    <div class="stat-content">
                        <h4>Routine checkups and cleanings</h4>
                        <p class="mb-0">The dentist examines your teeth, gums, and mouth to detect any issues</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="bi bi-briefcase"></i>
                    </div>
                    <div class="stat-content">
                        <h4>Teeth whitening</h4>
                        <p class="mb-0">Removing stains and discoloration</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="bi bi-graph-up"></i>
                    </div>
                    <div class="stat-content">
                        <h4>Root canal treatments</h4>
                        <p class="mb-0">Treat infection or damage inside a tooth's pulp</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="bi bi-award"></i>
                    </div>
                    <div class="stat-content">
                        <h4>Fillings for cavities</h4>
                        <p class="mb-0">Tooth that has been damaged by decay</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section><!-- /Hero Section -->
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

</section><!-- /About Section -->
<!-- services Cards Section -->
<section id="features-cards" class="features-cards section">

    <div class="container">

        <div class="row gy-4">

            <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                <a href="" style="color: #555a60;">
                    <div class="feature-box orange">
                        <i class="bi bi-award"></i>
                        <h4>Teeth whitening</h4>
                        <p>Removing stains and discoloration</p>
                    </div>
                </a>
            </div><!-- End Feature Borx-->

            <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                <div class="feature-box blue">
                    <i class="bi bi-patch-check"></i>
                    <h4>Root canal treatments
                    </h4>
                    <p>Removing stains and discoloration</p>
                </div>
            </div><!-- End Feature Borx-->

            <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                <div class="feature-box green">
                    <i class="bi bi-sunrise"></i>
                    <h4>Emergency dental care (e.g., pain relief, tooth extractions)</h4>
                    <p>treatment provided for urgent dental issues</p>
                </div>
            </div><!-- End Feature Borx-->

            <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                <div class="feature-box red">
                    <i class="bi bi-shield-check"></i>
                    <h4>Pediatric dental carePediatric dental care</h4>
                    <p>focuses on the oral health of children</p>
                </div>
            </div><!-- End serices Borx-->

        </div>

    </div>

</section><!-- /services Cards Section -->

<!-- Features Section -->
<section id="features" class="features section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Features</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="d-flex justify-content-center">

            <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">

                <li class="nav-item">
                    <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                        <h4>Digital X-rays</h4>
                    </a>
                </li><!-- End tab nav item -->

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                        <h4>Dental Lasers</h4>
                    </a><!-- End tab nav item -->

                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                        <h4>Dental Chairs and Units</h4>
                    </a><!-- End tab nav item -->

                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4">
                        <h4>Autoclave Sterilizers</h4>
                    </a>
                </li><!-- End tab nav item -->

            </ul>

        </div>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

            <div class="tab-pane fade active show" id="features-tab-1">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                        <h3>Digital X-rays</h3>
                        <p class="fst-italic">
                            Digital X-rays are a modern and advanced imaging technique used in dental practices to
                            capture detailed images of the teeth, gums, and surrounding structures. Unlike traditional
                            film X-rays, digital X-rays use electronic sensors to capture images, which are then
                            transferred directly to a computer for immediate viewing, processing, and storage.
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>The images appear on a computer screen almost
                                    immediately after the X-ray is taken, eliminating the waiting time associated with
                                    traditional film development.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Cavity detection: Helps identify decay between
                                    teeth or below existing fillings.
                                    .</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Bone loss: Monitors bone density and health,
                                    which is important for detecting periodontal disease.</span></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                        <img src="assets/img/features-illustration-1.webp" alt="" class="img-fluid">
                    </div>
                </div>
            </div><!-- End tab content item -->

            <div class="tab-pane fade" id="features-tab-2">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                        <h3>Dental Lasers</h3>
                        <p class="fst-italic">
                            Dental lasers are advanced tools used in modern dentistry for a variety of treatments
                            involving soft and hard tissues. They use focused light energy to perform dental procedures
                            with precision and minimal discomfort. Laser dentistry has gained popularity due to its
                            efficiency, accuracy, and the enhanced comfort it provides to patients compared to
                            traditional dental tools.
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>Frenectomy (removal of the frenulum, typically
                                    for tongue tie or lip tie in children).</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Treatment of gum disease (periodontal therapy) by
                                    removing infected tissue.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Lasers can be used to clean and sterilize the root canal, improving the success of the treatment.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span> Gum reshaping or contouring to correct a "gummy
                                    smile."
                                </span></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                        <img src="assets/img/features-illustration-2.webp" alt="" class="img-fluid">
                    </div>
                </div>
            </div><!-- End tab content item -->

            <div class="tab-pane fade" id="features-tab-3">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                        <h3>Dental Chairs and Units</h3>
                        <p class="fst-italic">Dental Chairs and Units are essential equipment in every dental clinic, providing both comfort for the patient and functionality for the dentist. The dental chair is specifically designed to support the patient in a variety of positions to accommodate different types of procedures, while the dental unit provides the necessary tools and equipment for the dental professional to perform treatments efficiently. Here's a breakdown of both components:
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>These are the primary tools used by dentists for cutting, shaping, and polishing teeth. They include high-speed drills, low-speed handpieces, and air-driven handpieces.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>The air/water syringe is used to spray a combination of air and water to rinse or dry the treatment area.</span></li>
                           
                        </ul>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                        <img src="assets/img/features-illustration-3.webp" alt="" class="img-fluid">
                    </div>
                </div>
            </div><!-- End tab content item -->

            <div class="tab-pane fade" id="features-tab-4">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                        <h3>Autoclave Sterilizers</h3>
                        <p class="fst-italic">Autoclave Sterilizers are essential pieces of equipment in dental clinics (and other healthcare settings) used to sterilize dental instruments and equipment to ensure they are free from harmful microorganisms. Autoclaving uses high-pressure steam at elevated temperatures to kill bacteria, viruses, fungi, and spores, making it one of the most effective methods of sterilization.
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>Checking water levels and adding distilled water as needed.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Cleaning the chamber regularly to prevent residue buildup.</span></li>
                           
                        </ul>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                        <img src="assets/img/features-illustration-3.webp" alt="" class="img-fluid">
                    </div>
                </div>
            </div><!-- End tab content item -->
        </div>

    </div>

</section><!-- /Features Section -->

  <!-- Faq Section -->
  <section class="faq-9 faq section light-background" id="faq">

<div class="container">
  <div class="row">

    <div class="col-lg-5" data-aos="fade-up">
      <h2 class="faq-title">Have a question? Check out the FAQ</h2>
      <p class="faq-description">Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet adipiscing sem neque sed ipsum.</p>
      <div class="faq-arrow d-none d-lg-block" data-aos="fade-up" data-aos-delay="200">
        <svg class="faq-arrow" width="200" height="211" viewBox="0 0 200 211" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M198.804 194.488C189.279 189.596 179.529 185.52 169.407 182.07L169.384 182.049C169.227 181.994 169.07 181.939 168.912 181.884C166.669 181.139 165.906 184.546 167.669 185.615C174.053 189.473 182.761 191.837 189.146 195.695C156.603 195.912 119.781 196.591 91.266 179.049C62.5221 161.368 48.1094 130.695 56.934 98.891C84.5539 98.7247 112.556 84.0176 129.508 62.667C136.396 53.9724 146.193 35.1448 129.773 30.2717C114.292 25.6624 93.7109 41.8875 83.1971 51.3147C70.1109 63.039 59.63 78.433 54.2039 95.0087C52.1221 94.9842 50.0776 94.8683 48.0703 94.6608C30.1803 92.8027 11.2197 83.6338 5.44902 65.1074C-1.88449 41.5699 14.4994 19.0183 27.9202 1.56641C28.6411 0.625793 27.2862 -0.561638 26.5419 0.358501C13.4588 16.4098 -0.221091 34.5242 0.896608 56.5659C1.8218 74.6941 14.221 87.9401 30.4121 94.2058C37.7076 97.0203 45.3454 98.5003 53.0334 98.8449C47.8679 117.532 49.2961 137.487 60.7729 155.283C87.7615 197.081 139.616 201.147 184.786 201.155L174.332 206.827C172.119 208.033 174.345 211.287 176.537 210.105C182.06 207.125 187.582 204.122 193.084 201.144C193.346 201.147 195.161 199.887 195.423 199.868C197.08 198.548 193.084 201.144 195.528 199.81C196.688 199.192 197.846 198.552 199.006 197.935C200.397 197.167 200.007 195.087 198.804 194.488ZM60.8213 88.0427C67.6894 72.648 78.8538 59.1566 92.1207 49.0388C98.8475 43.9065 106.334 39.2953 114.188 36.1439C117.295 34.8947 120.798 33.6609 124.168 33.635C134.365 33.5511 136.354 42.9911 132.638 51.031C120.47 77.4222 86.8639 93.9837 58.0983 94.9666C58.8971 92.6666 59.783 90.3603 60.8213 88.0427Z" fill="currentColor"></path>
        </svg>
      </div>
    </div>

    <div class="col-lg-7" data-aos="fade-up" data-aos-delay="300">
      <div class="faq-container">

        <div class="faq-item faq-active">
          <h3>Non consectetur a erat nam at lectus urna duis?</h3>
          <div class="faq-content">
            <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
          </div>
          <i class="faq-toggle bi bi-chevron-right"></i>
        </div><!-- End Faq item-->

        <div class="faq-item">
          <h3>Feugiat scelerisque varius morbi enim nunc faucibus?</h3>
          <div class="faq-content">
            <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
          </div>
          <i class="faq-toggle bi bi-chevron-right"></i>
        </div><!-- End Faq item-->

        <div class="faq-item">
          <h3>Dolor sit amet consectetur adipiscing elit pellentesque?</h3>
          <div class="faq-content">
            <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
          </div>
          <i class="faq-toggle bi bi-chevron-right"></i>
        </div><!-- End Faq item-->

        <div class="faq-item">
          <h3>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h3>
          <div class="faq-content">
            <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
          </div>
          <i class="faq-toggle bi bi-chevron-right"></i>
        </div><!-- End Faq item-->

        <div class="faq-item">
          <h3>Tempus quam pellentesque nec nam aliquam sem et tortor?</h3>
          <div class="faq-content">
            <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in</p>
          </div>
          <i class="faq-toggle bi bi-chevron-right"></i>
        </div><!-- End Faq item-->

        <div class="faq-item">
          <h3>Perspiciatis quod quo quos nulla quo illum ullam?</h3>
          <div class="faq-content">
            <p>Enim ea facilis quaerat voluptas quidem et dolorem. Quis et consequatur non sed in suscipit sequi. Distinctio ipsam dolore et.</p>
          </div>
          <i class="faq-toggle bi bi-chevron-right"></i>
        </div><!-- End Faq item-->

      </div>
    </div>

  </div>
</div>
</section><!-- /Faq Section -->
@endsection
