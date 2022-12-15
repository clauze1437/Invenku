@extends('landingpage.index')
@section('content')
<!-- ====== Banner Section Start -->
<div class="relative z-10 overflow-hidden bg-primary pt-[120px] pb-[100px] md:pt-[130px] lg:pt-[160px]">
    <div class="container">
        <div class="-mx-4 flex flex-wrap items-center">
            <div class="w-full px-4">
                <div class="text-center">
                    <h1 class="text-4xl font-semibold text-white">About Us</h1>
                </div>
            </div>
        </div>
    </div>
    <div>
        <span class="absolute top-0 left-0 z-[-1]">
            <svg width="495" height="470" viewBox="0 0 495 470" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="55" cy="442" r="138" stroke="white" stroke-opacity="0.04" stroke-width="50" />
                <circle cx="446" r="39" stroke="white" stroke-opacity="0.04" stroke-width="20" />
                <path d="M245.406 137.609L233.985 94.9852L276.609 106.406L245.406 137.609Z" stroke="white" stroke-opacity="0.08" stroke-width="12" />
            </svg>
        </span>
        <span class="absolute top-0 right-0 z-[-1]">
            <svg width="493" height="470" viewBox="0 0 493 470" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="462" cy="5" r="138" stroke="white" stroke-opacity="0.04" stroke-width="50" />
                <circle cx="49" cy="470" r="39" stroke="white" stroke-opacity="0.04" stroke-width="20" />
                <path d="M222.393 226.701L272.808 213.192L259.299 263.607L222.393 226.701Z" stroke="white" stroke-opacity="0.06" stroke-width="13" />
            </svg>
        </span>
    </div>
</div>
<!-- ====== Banner Section End -->

<!-- ====== About Section Start -->
<section id="about" class="bg-[#f3f4fe] pt-20 pb-20 lg:pt-[120px] lg:pb-[120px]">
    <div class="container">
        <div class="wow fadeInUp bg-white" data-wow-delay=".2s">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="items-center justify-between overflow-hidden border lg:flex">
                        <div class="w-full py-12 px-7 sm:px-12 md:p-16 lg:max-w-[565px] lg:py-9 lg:px-16 xl:max-w-[640px] xl:p-[70px]">
                            <span class="mb-5 inline-block bg-primary py-2 px-5 text-sm font-medium text-white">
                                About Us
                            </span>
                            <h2 class="mb-6 text-3xl font-bold text-dark sm:text-4xl sm:leading-snug 2xl:text-[40px]">
                                Improve performance
                                & process time
                            </h2>
                            <p class="mb-9 text-base leading-relaxed text-body-color">
                                Better organize your warehouse with the smart double entry inventory system.
                            </p>
                            <p class="mb-9 text-base leading-relaxed text-body-color">
                                Get the most efficient stocking method and improve all your internal operations. Invenku's double-entry inventory has no stock input, output or transformation. Instead, all operations are stock moves between locations.
                            </p>
                            <a href="javascript:void(0)" class="inline-flex items-center justify-center rounded bg-primary py-4 px-6 text-base font-medium text-white transition duration-300 ease-in-out hover:bg-opacity-90 hover:shadow-lg">
                                Learn More
                            </a>
                        </div>
                        <div class="text-center">
                            <div class="relative z-10 inline-block">
                                <img src="assets/images/about/about-image.svg" alt="image" class="mx-auto lg:ml-auto" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ====== About Section End -->
@endsection