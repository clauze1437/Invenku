<body>
    <!-- ====== Navbar Section Start -->
    <div class="ud-header absolute top-0 left-0 z-40 flex w-full items-center bg-transparent">
        <div class="container">
            <div class="relative -mx-4 flex items-center justify-between">
                <div class="w-60 max-w-full px-4">
                    <a href="{{ url('/home1') }}" class="navbar-logo block w-full py-5">
                        <img src="{{ url('assets/images/logo/logo-white.svg') }}" alt="logo" class="header-logo w-full" />
                    </a>
                </div>
                <div class="flex w-full items-center justify-between px-4">
                    <div>
                        <button id="navbarToggler" class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden">
                            <span class="relative my-[6px] block h-[2px] w-[30px] bg-white"></span>
                            <span class="relative my-[6px] block h-[2px] w-[30px] bg-white"></span>
                            <span class="relative my-[6px] block h-[2px] w-[30px] bg-white"></span>
                        </button>
                        <nav id="navbarCollapse" class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-white py-5 shadow-lg lg:static lg:block lg:w-full lg:max-w-full lg:bg-transparent lg:py-0 lg:px-4 lg:shadow-none xl:px-6">
                            <ul class="blcok lg:flex">
                                <li class="group relative">
                                    <a href="{{ url('/home1') }}" class="mx-8 flex py-2 text-base text-dark group-hover:text-primary lg:mr-0 lg:inline-flex lg:py-6 lg:px-0 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70">
                                        Home
                                    </a>
                                </li>
                                <li class="group relative">
                                    <a href="{{ url('/about') }}" class="mx-8 flex py-2 text-base text-dark group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-12">
                                        About
                                    </a>
                                </li>
                                <li class="group relative">
                                    <a href="{{ url('/contact') }}" class="mx-8 flex py-2 text-base text-dark group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-12">
                                        Contact
                                    </a>
                                </li>
                                <!-- <li class="submenu-item group relative">
                                    <a href="javascript:void(0)" class="relative mx-8 flex py-2 text-base text-dark after:absolute after:right-1 after:top-1/2 after:mt-[-2px] after:h-2 after:w-2 after:-translate-y-1/2 after:rotate-45 after:border-b-2 after:border-r-2 after:border-current group-hover:text-primary lg:mr-0 lg:ml-8 lg:inline-flex lg:py-6 lg:pl-0 lg:pr-4 lg:text-white lg:after:right-0 lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-12">
                                        Pages
                                    </a>
                                    <div class="submenu relative top-full left-0 hidden w-[250px] rounded-sm bg-white p-4 transition-[top] duration-300 group-hover:opacity-100 lg:invisible lg:absolute lg:top-[110%] lg:block lg:opacity-0 lg:shadow-lg lg:group-hover:visible lg:group-hover:top-full">
                                        <a href="#" class="block rounded py-[10px] px-4 text-sm text-body-color hover:text-primary">
                                            About Page
                                        </a>
                                        <a href="#" class="block rounded py-[10px] px-4 text-sm text-body-color hover:text-primary">
                                            Pricing Page
                                        </a>
                                        <a href="#" class="block rounded py-[10px] px-4 text-sm text-body-color hover:text-primary">
                                            Contact Page
                                        </a>
                                        <a href="#" class="block rounded py-[10px] px-4 text-sm text-body-color hover:text-primary">
                                            Blog Grid Page
                                        </a>
                                        <a href="#" class="block rounded py-[10px] px-4 text-sm text-body-color hover:text-primary">
                                            Blog Details Page
                                        </a>
                                        <a href="#" class="block rounded py-[10px] px-4 text-sm text-body-color hover:text-primary">
                                            Sign Up Page
                                        </a>
                                        <a href="#" class="block rounded py-[10px] px-4 text-sm text-body-color hover:text-primary">
                                            Sign In Page
                                        </a>
                                        <a href="#" class="block rounded py-[10px] px-4 text-sm text-body-color hover:text-primary">
                                            404 Page
                                        </a>
                                    </div>
                                </li> -->
                            </ul>
                        </nav>
                    </div>
                    <div class="hidden justify-end pr-16 sm:flex lg:pr-0">
                        <a href="{{ url('/login') }}" class="loginBtn py-3 px-7 text-base font-medium text-white hover:opacity-70">
                            Log In
                        </a>
                        <a href="{{ route('register') }}" class="signUpBtn rounded-lg bg-white bg-opacity-20 py-3 px-6 text-base font-medium text-white duration-300 ease-in-out hover:bg-opacity-100 hover:text-dark">
                            Register
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ====== Navbar Section End -->