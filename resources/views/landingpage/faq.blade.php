@extends('landingpage.index')
@section('content')
<!-- ====== Banner Section Start -->
<div class="relative z-10 overflow-hidden bg-primary pt-[120px] pb-[100px] md:pt-[130px] lg:pt-[160px]">
    <div class="container">
        <div class="-mx-4 flex flex-wrap items-center">
            <div class="w-full px-4">
                <div class="text-center">
                    <h1 class="text-4xl font-semibold text-white">FAQ</h1>
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

<!-- ====== Faq Section Start -->
<section class="relative z-20 overflow-hidden bg-[#f3f4ff] pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]">
    <div class="container">
        <div class="-mx-4 flex flex-wrap">
            <div class="w-full px-4">
                <div class="mx-auto mb-[60px] max-w-[620px] text-center lg:mb-20">
                    <span class="mb-2 block text-lg font-semibold text-primary">
                        FAQ
                    </span>
                    <h2 class="mb-4 text-3xl font-bold text-dark sm:text-4xl md:text-[42px]">
                        Any Questions? Answered
                    </h2>
                    <p class="text-lg leading-relaxed text-body-color sm:text-xl sm:leading-relaxed">
                        There are many variations of passages of Lorem Ipsum available
                        but the majority have suffered alteration in some form.
                    </p>
                </div>
            </div>
        </div>

        <div class="-mx-4 flex flex-wrap">
            <div class="w-full px-4 lg:w-1/2">
                <div class="single-faq wow fadeInUp mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-5 sm:p-8" data-wow-delay=".1s
              ">
                    <button class="faq-btn flex w-full items-center text-left">
                        <div class="mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-primary bg-opacity-5 text-primary">
                            <svg width="17" height="10" viewBox="0 0 17 10" class="icon fill-current">
                                <path d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z" fill="#3056D3" stroke="#3056D3" />
                            </svg>
                        </div>
                        <div class="w-full">
                            <h4 class="text-base font-semibold text-black sm:text-lg">
                                How to use TailGrids?
                            </h4>
                        </div>
                    </button>
                    <div class="faq-content hidden pl-[62px]">
                        <p class="py-3 text-base leading-relaxed text-body-color">
                            It takes 2-3 weeks to get your first blog post ready. That
                            includes the in-depth research & creation of your monthly
                            content marketing strategy that we do before writing your
                            first blog post, Ipsum available .
                        </p>
                    </div>
                </div>
                <div class="single-faq wow fadeInUp mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-5 sm:p-8" data-wow-delay=".15s
              ">
                    <button class="faq-btn flex w-full items-center text-left">
                        <div class="mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-primary bg-opacity-5 text-primary">
                            <svg width="17" height="10" viewBox="0 0 17 10" class="icon fill-current">
                                <path d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z" fill="#3056D3" stroke="#3056D3" />
                            </svg>
                        </div>
                        <div class="w-full">
                            <h4 class="text-base font-semibold text-black sm:text-lg">
                                How to download icons from LineIcons?
                            </h4>
                        </div>
                    </button>
                    <div class="faq-content hidden pl-[62px]">
                        <p class="py-3 text-base leading-relaxed text-body-color">
                            It takes 2-3 weeks to get your first blog post ready. That
                            includes the in-depth research & creation of your monthly
                            content marketing strategy that we do before writing your
                            first blog post, Ipsum available .
                        </p>
                    </div>
                </div>
                <div class="single-faq wow fadeInUp mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-5 sm:p-8" data-wow-delay=".2s
              ">
                    <button class="faq-btn flex w-full items-center text-left">
                        <div class="mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-primary bg-opacity-5 text-primary">
                            <svg width="17" height="10" viewBox="0 0 17 10" class="icon fill-current">
                                <path d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z" fill="#3056D3" stroke="#3056D3" />
                            </svg>
                        </div>
                        <div class="w-full">
                            <h4 class="text-base font-semibold text-black sm:text-lg">
                                Is GrayGrids part of UIdeck?
                            </h4>
                        </div>
                    </button>
                    <div class="faq-content hidden pl-[62px]">
                        <p class="py-3 text-base leading-relaxed text-body-color">
                            It takes 2-3 weeks to get your first blog post ready. That
                            includes the in-depth research & creation of your monthly
                            content marketing strategy that we do before writing your
                            first blog post, Ipsum available .
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 lg:w-1/2">
                <div class="single-faq wow fadeInUp mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-5 sm:p-8" data-wow-delay=".1s
              ">
                    <button class="faq-btn flex w-full items-center text-left">
                        <div class="mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-primary bg-opacity-5 text-primary">
                            <svg width="17" height="10" viewBox="0 0 17 10" class="icon fill-current">
                                <path d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z" fill="#3056D3" stroke="#3056D3" />
                            </svg>
                        </div>
                        <div class="w-full">
                            <h4 class="text-base font-semibold text-black sm:text-lg">
                                Can I use this template for commercial project?
                            </h4>
                        </div>
                    </button>
                    <div class="faq-content hidden pl-[62px]">
                        <p class="py-3 text-base leading-relaxed text-body-color">
                            It takes 2-3 weeks to get your first blog post ready. That
                            includes the in-depth research & creation of your monthly
                            content marketing strategy that we do before writing your
                            first blog post, Ipsum available .
                        </p>
                    </div>
                </div>
                <div class="single-faq wow fadeInUp mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-5 sm:p-8" data-wow-delay=".15s
              ">
                    <button class="faq-btn flex w-full items-center text-left">
                        <div class="mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-primary bg-opacity-5 text-primary">
                            <svg width="17" height="10" viewBox="0 0 17 10" class="icon fill-current">
                                <path d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z" fill="#3056D3" stroke="#3056D3" />
                            </svg>
                        </div>
                        <div class="w-full">
                            <h4 class="text-base font-semibold text-black sm:text-lg">
                                Do you have plan to releasing Play Pro?
                            </h4>
                        </div>
                    </button>
                    <div class="faq-content hidden pl-[62px]">
                        <p class="py-3 text-base leading-relaxed text-body-color">
                            It takes 2-3 weeks to get your first blog post ready. That
                            includes the in-depth research & creation of your monthly
                            content marketing strategy that we do before writing your
                            first blog post, Ipsum available .
                        </p>
                    </div>
                </div>
                <div class="single-faq wow fadeInUp mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-5 sm:p-8" data-wow-delay=".2s
              ">
                    <button class="faq-btn flex w-full items-center text-left">
                        <div class="mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-primary bg-opacity-5 text-primary">
                            <svg width="17" height="10" viewBox="0 0 17 10" class="icon fill-current">
                                <path d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z" fill="#3056D3" stroke="#3056D3" />
                            </svg>
                        </div>
                        <div class="w-full">
                            <h4 class="text-base font-semibold text-black sm:text-lg">
                                Where and how to host this template?
                            </h4>
                        </div>
                    </button>
                    <div class="faq-content hidden pl-[62px]">
                        <p class="py-3 text-base leading-relaxed text-body-color">
                            It takes 2-3 weeks to get your first blog post ready. That
                            includes the in-depth research & creation of your monthly
                            content marketing strategy that we do before writing your
                            first blog post, Ipsum available .
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="absolute bottom-0 right-0 z-[-1]">
        <svg width="1440" height="886" viewBox="0 0 1440 886" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.5" d="M193.307 -273.321L1480.87 1014.24L1121.85 1373.26C1121.85 1373.26 731.745 983.231 478.513 729.927C225.976 477.317 -165.714 85.6993 -165.714 85.6993L193.307 -273.321Z" fill="url(#paint0_linear)" />
            <defs>
                <linearGradient id="paint0_linear" x1="1308.65" y1="1142.58" x2="602.827" y2="-418.681" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#3056D3" stop-opacity="0.36" />
                    <stop offset="1" stop-color="#F5F2FD" stop-opacity="0" />
                    <stop offset="1" stop-color="#F5F2FD" stop-opacity="0.096144" />
                </linearGradient>
            </defs>
        </svg>
    </div>
</section>
<!-- ====== Faq Section End -->
@endsection