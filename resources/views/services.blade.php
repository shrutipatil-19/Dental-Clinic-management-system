@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

<!-- Services Section -->
<section id="services" class="services section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100" id="service-container">
        <div class="row g-4 show">
            <!-- Initial 2 cards -->
            @foreach($services->take(2) as $service)
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card d-flex">
                        <div class="icon flex-shrink-0">
                            <i class="bi bi-activity"></i>
                        </div>
                        <div>
                            <h3>{{$service->title}}</h3>
                            <p>{{$service->description}}</p>
                            <a href="service-details.html" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Load More Button -->
        <button id="load-more" class="btn btn-primary">More</button>
    </div>

</section><!-- /Services Section -->
<!-- services ended -->

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
                            <li><i class="bi bi-check2-all"></i> <span>Lasers can be used to clean and sterilize the
                                    root canal, improving the success of the treatment.</span></li>
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
                        <p class="fst-italic">Dental Chairs and Units are essential equipment in every dental clinic,
                            providing both comfort for the patient and functionality for the dentist. The dental chair
                            is specifically designed to support the patient in a variety of positions to accommodate
                            different types of procedures, while the dental unit provides the necessary tools and
                            equipment for the dental professional to perform treatments efficiently. Here's a breakdown
                            of both components:
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>These are the primary tools used by dentists for
                                    cutting, shaping, and polishing teeth. They include high-speed drills, low-speed
                                    handpieces, and air-driven handpieces.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>The air/water syringe is used to spray a
                                    combination of air and water to rinse or dry the treatment area.</span></li>

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
                        <p class="fst-italic">Autoclave Sterilizers are essential pieces of equipment in dental clinics
                            (and other healthcare settings) used to sterilize dental instruments and equipment to ensure
                            they are free from harmful microorganisms. Autoclaving uses high-pressure steam at elevated
                            temperatures to kill bacteria, viruses, fungi, and spores, making it one of the most
                            effective methods of sterilization.
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>Checking water levels and adding distilled water
                                    as needed.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Cleaning the chamber regularly to prevent residue
                                    buildup.</span></li>

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



@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        var page = 2; // Start from the second page for pagination

        $('#load-more').on('click', function () {
            $.ajax({
                url: '{{ route('services_page') }}',
                method: 'GET',
                data: {
                    page: page,
                    _token: '{{ csrf_token() }}',
                    ajax: true
                },
                success: function (response) {
                    if (response.data.length > 0) {
                        // Create a new row
                        var newRow = $('<div class="row g-4">');

                        // Append new services as columns
                        response.data.forEach(function (service) {
                            newRow.append(
                                `<div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                                <div class="service-card d-flex">
                                    <div class="icon flex-shrink-0">
                                        <i class="bi bi-activity"></i>
                                    </div>
                                    <div>
                                        <h3>${service.title}</h3>
                                        <p>${service.description}</p>
                                        <a href="service-details.html" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>`
                            );
                        });

                        // Append the new row to the container
                        $('#service-container .show').append(newRow);

                        // Update the page number for the next load
                        page++;

                        // If no more services, hide the "More" button
                        if (response.current_page === response.last_page) {
                            $('#load-more').hide();
                        }
                    }
                }
            });
        });
    });
</script>