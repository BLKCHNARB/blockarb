<x-guest-layout>
    <div class=" bg-primar bg-about bg-cover relative">
        <div class="absolute top-0 bg-gradient-to-r from-primary opacity-[96%] to-primary-700 left-0 w-full h-full -z-0">
        </div>
        <div class=" lg:max-w-screen-lg px-4 sm:px-8 lg:px-10 py-24 mx-auto relative">
            <div class="grid grid-cols-1 md:grid-cols-12 lg:gap-16 divide- divide-gray-500">
                <div class=" col-span-10">

                    <div class=" mt-5">
                        <h1 class=" text-5xl font-bold uppercas text-secondary">Investment Approach</h1>
                        <div class="lg:flex items-baseline gap-6">
                            <div class="lg:w-1/3 hidden lg:block">
                                <div class=" h-[0.5px] bg-gray-400"></div>
                            </div>

                            <div class=" lg:w-2/3">
                                <h4 class=" text-lg text-gray-200 pt-[38px] leading-relaxed font-semibol">
                                    We aim at discovering value in financial data through rigorous and sophisticated
                                    quantitative research
                                </h4>
                                <a href="{{ route('register') }}"
                                    class=" group z-10 relative mt-8 inline-flex py-1 rounded-sm bg-secondary border-2 border-transparent px-4 text-gray-900">
                                    <span class=" mr-2 font-bold">Insights</span>
                                    <div
                                        class="w-6 h-6 rounded-ful bg-whit p-1 flex items-center group-hover:translate-x-2 transition">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M1 7.99999C1 7.86738 1.05268 7.74021 1.14645 7.64644C1.24021 7.55267 1.36739 7.49999 1.5 7.49999H13.293L10.146 4.35399C10.0521 4.2601 9.99937 4.13277 9.99937 3.99999C9.99937 3.86721 10.0521 3.73988 10.146 3.64599C10.2399 3.5521 10.3672 3.49936 10.5 3.49936C10.6328 3.49936 10.7601 3.5521 10.854 3.64599L14.854 7.64599C14.9006 7.69244 14.9375 7.74761 14.9627 7.80836C14.9879 7.8691 15.0009 7.93422 15.0009 7.99999C15.0009 8.06576 14.9879 8.13088 14.9627 8.19162C14.9375 8.25237 14.9006 8.30754 14.854 8.35399L10.854 12.354C10.7601 12.4479 10.6328 12.5006 10.5 12.5006C10.3672 12.5006 10.2399 12.4479 10.146 12.354C10.0521 12.2601 9.99937 12.1328 9.99937 12C9.99937 11.8672 10.0521 11.7399 10.146 11.646L13.293 8.49999H1.5C1.36739 8.49999 1.24021 8.44731 1.14645 8.35354C1.05268 8.25978 1 8.1326 1 7.99999Z"
                                                fill="black" />
                                        </svg>

                                    </div>
                                </a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class=" py-20 mx-auto lg:max-w-screen-lg xl:max-w-screen-xl">
        <div class="flex gap-6 items-baseline">
            <div class=" w-1/3 h-[1px] bg-gray-800"></div>
            <h3 class=" text-4xl text-primary">Our Investment Approach</h3>
        </div>
    </section>

    <section class=" py-20 mx-auto xl:max-w-screen-x">
        <div class="lg:grid grid-cols-12 gap- ">

            <div class="col-span-6 hidden lg:block">
                <img class=" h-full object-cover" src="{{ asset('images/img16.jpg') }}" alt="">
            </div>

            <div class="col-span-6 flex">
                <div class=" px-4 sm:px-8 lg:px-20 text-gray-10 m-auto">
                    <div class="flex items-baseline gap-6 mb-10">
                        <div class="w-1/3 h-[0.5px] bg-gray-800 my-5"></div>
                        <h4 class=" text-primary text-2xl">Quantitative Research</h4>
                    </div>
                    <p class="leading-7">
                        In response to the dynamic and ever-shifting global economic landscape,
                        it is imperative to embrace a sophisticated and adaptive investment
                        approach firmly rooted in advanced research methodologies and
                        state-of-the-art technology. To maintain a competitive edge in this
                        environment, a heightened awareness of risk is paramount
                    </p>
                    {{-- <p class=" text-s leading-7">
                        We deploy the capital of our clients by adopting a sophisticated proprietary quantitative
                        research process. We apply the scientific method to analyze and test our hypotheses on vast
                        amounts of historical in order to find signals of alpha. All the company's strategies undergo an
                        extensive backtesting and validation process before going into production.
                    </p>

                    <p class=" leading-7 text-gray-400 mt-5">Disclaimer: commodity trading involves a substantial risk
                        of loss.</p> --}}

                </div>
            </div>
        </div>
    </section>

    <section class=" py-20 mx-auto xl:max-w-screen-x">
        <div class="lg:grid grid-cols-12 gap- ">

            <div class="col-span-6 flex">
                <div class=" px-4 sm:px-8 lg:px-20 text-gray-10 m-auto">
                    <div class="flex items-baseline gap-6 mb-10">
                        <div class="w-1/3 h-[0.5px] bg-gray-800 my-5"></div>
                        <h4 class=" text-primary text-2xl">Technology</h4>
                    </div>
                    <p class=" text-s leading-7">
                        We invest a substantial amount of monetary and human capital with the objective of developing a
                        superior technological and operational infrastructure. All the code is thoroughly tested by our
                        quantitative developers before going into production. This enables us to minimize technological
                        issues in live production and to easily make modifications when necessary to accommodate the
                        requirements of an investment strategy.
                    </p>

                </div>
            </div>

            <div class="col-span-6 hidden lg:block">
                <img class=" h-full object-cover" src="{{ asset('images/img10.jpg') }}" alt="">
            </div>

        </div>
    </section>

    <section class=" py-20 mx-auto xl:max-w-screen-x">
        <div class="lg:grid grid-cols-12 gap- ">

            <div class="col-span-6 hidden lg:block">
                <img class=" h-full object-cover" src="{{ asset('images/img11.jpg') }}" alt="">
            </div>

            <div class="col-span-6 flex">
                <div class=" px-4 sm:px-8 lg:px-20 text-gray-10 m-auto">
                    <div class="flex items-baseline gap-6 mb-10">
                        <div class="w-1/3 h-[0.5px] bg-gray-800 my-5"></div>
                        <h4 class=" text-primary text-2xl">Risk Management</h4>
                    </div>
                    <p class=" text-s leading-7">
                        Managing all types of risks for our clients and invested capital is of primary importance to us.
                        We developed a sophisticated risk management framework with the objective of monitoring and
                        keeping under predefined limits various types of risks embedded in our investment portfolios.
                    </p>

                </div>
            </div>
        </div>
    </section>

    <section class=" py-20 mx-auto xl:max-w-screen-x">
        <div class="lg:grid grid-cols-12 gap- ">

            <div class="col-span-6 flex">
                <div class=" px-4 sm:px-8 lg:px-20 text-gray-10 m-auto">
                    <div class="flex items-baseline gap-6 mb-10">
                        <div class="w-1/3 h-[0.5px] bg-gray-800 my-5"></div>
                        <h4 class=" text-primary text-2xl">Talent</h4>
                    </div>
                    <p class=" text-s leading-7">
                        We understand that a primary factor of success for a company resides in its team. For this
                        reason, we always strive to attract and retain the best human talent from advanced degrees in
                        the scientific and technological fields. When new members join our firm we always make sure that
                        they fit into our culture and can provide a significant contribution to the improvement of our
                        business.
                    </p>

                </div>
            </div>

            <div class="col-span-6 hidden lg:block">
                <img class=" h-full object-cover" src="{{ asset('images/img13.jpg') }}" alt="">
            </div>

        </div>
    </section>

    <section class=" py-20 mx-auto lg:max-w-screen-lg xl:max-w-screen-xl">
        <div class="flex gap-6 items-baseline">
            <div class=" w-1/3 h-[1px] bg-gray-800"></div>
            <h3 class=" text-4xl text-primary">Our Investment Process</h3>
        </div>
    </section>

    <div class=" bg-gray-100">
        <div class=" lg:max-w-3xl xl:max-w-4xl mx-auto">
            <div class=" grid grid-cols-1 md:grid-cols-2 gap-x-20 gap-y-12">
                <div class=" p-10">
                    <div>
                        <img class=" w-1/3" src="{{ asset('images/processing.svg') }}" alt="">
                    </div>
                    <div class="mt-10">
                        <h2 class=" font-bold text-2xl mb-3">Data Collection</h2>
                        <p class=" mb-5 text-sm">In the first phase of our investment process we collect data
                            from
                            a
                            variety
                            of traditional and alternative sources.</p>
                        {{-- <a href="" class=" text-sm text-blue-600">Read More</a> --}}
                    </div>
                </div>

                <div class=" p-10">
                    <div>
                        <img class=" w-1/3" src="{{ asset('images/financial.svg') }}" alt="">
                    </div>
                    <div class="mt-10">
                        <h2 class=" font-bold text-2xl mb-3">Data Cleaning</h2>
                        <p class=" mb-5 text-sm">We use proprietary automated algorithms to clean the vast
                            amounts
                            of data at our disposal.</p>
                        {{-- <a href="" class=" text-sm text-blue-600">Read More</a> --}}
                    </div>
                </div>

                <div class=" p-10">
                    <div>
                        <img class=" w-1/3" src="{{ asset('images/analysis.svg') }}" alt="">
                    </div>
                    <div class="mt-10">
                        <h2 class=" font-bold text-2xl mb-3">Data Analysis</h2>
                        <p class=" mb-5 text-sm">Our quantitative researchers analyze the data sets processed
                            in
                            the previous step using sophisticated and advanced statistical methods</p>
                        {{-- <a href="" class=" text-sm text-blue-600">Read More</a> --}}
                    </div>
                </div>

                <div class=" p-10">
                    <div>
                        <img class=" w-1/3" src="{{ asset('images/backtesting.svg') }}" alt="">
                    </div>
                    <div class="mt-10">
                        <h2 class=" font-bold text-2xl mb-3">Backtesting</h2>
                        <p class=" mb-5 text-sm">After the data has been thoroughly analyzed, our quants apply
                            the
                            scientific method to the financial data</p>
                        {{-- <a href="" class=" text-sm text-blue-600">Read More</a> --}}
                    </div>
                </div>

                <div class=" p-10">
                    <div>
                        <img class=" w-1/3" src="{{ asset('images/pilot.svg') }}" alt="">
                    </div>
                    <div class="mt-10">
                        <h2 class=" font-bold text-2xl mb-3">Pilot Test</h2>
                        <p class=" mb-5 text-sm">After backtesting, we test them in a pilot live production
                            environment with proprietary capital for a suitable period of time before offering
                            them
                            to our clients.</p>
                        {{-- <a href="" class=" text-sm text-blue-600">Read More</a> --}}
                    </div>
                </div>

                <div class=" p-10">
                    <div>
                        <img class=" w-1/3" src="{{ asset('images/production.svg') }}" alt="">
                    </div>
                    <div class="mt-10">
                        <h2 class=" font-bold text-2xl mb-3">Production</h2>
                        <p class=" mb-5 text-sm">Having confirmed that pilot trading returns are consistent
                            with
                            the backtest and what we expected, our investment team allows our clients to invest
                            in
                            the new investment product.</p>
                        {{-- <a href="" class=" text-sm text-blue-600">Read More</a> --}}
                    </div>
                </div>
            </div>
        </div>
        {{-- <section class=" py-20 mx-auto xl:max-w-screen-xl lg:max-w-screen-lg">
            <div class="lg:grid grid-cols-12 gap- ">

                <div class="col-span-6 hidden lg:block">
                    <img class=" h-full object-cover" src="{{ asset('images/img14.jpg') }}" alt="">
                </div>

                <div class="col-span-6 flex">
                    <div class=" px-4 sm:px-8 lg:px-20 text-gray-10 m-auto">
                        <div class="flex items-baseline gap-6 mb-10">
                            <div class="w-1/3 h-[0.5px] bg-gray-800 my-5"></div>
                            <h4 class=" text-primary text-2xl">Quantitative Research</h4>
                        </div>
                        <p class=" text-s leading-7">
                            We deploy the capital of our clients by adopting a sophisticated proprietary quantitative
                            research process. We apply the scientific method to analyze and test our hypotheses on vast
                            amounts of historical in order to find signals of alpha. All the company's strategies
                            undergo an
                            extensive backtesting and validation process before going into production.
                        </p>

                    </div>
                </div>
            </div>
        </section> --}}

        {{-- <section class=" py-20 mx-auto xl:max-w-screen-xl lg:max-w-screen-lg">
            <div class="lg:grid grid-cols-12 gap- ">

                <div class="col-span-6 flex">
                    <div class=" px-4 sm:px-8 lg:px-20 text-gray-10 m-auto">
                        <div class="flex items-baseline gap-6 mb-10">
                            <div class="w-1/3 h-[0.5px] bg-gray-800 my-5"></div>
                            <h4 class=" text-primary text-2xl">Technology</h4>
                        </div>
                        <p class=" text-s leading-7">
                            We invest a substantial amount of monetary and human capital with the objective of
                            developing a
                            superior technological and operational infrastructure. All the code is thoroughly tested by
                            our
                            quantitative developers before going into production. This enables us to minimize
                            technological
                            issues in live production and to easily make modifications when necessary to accommodate the
                            requirements of an investment strategy.
                        </p>

                    </div>
                </div>

                <div class="col-span-6 hidden lg:block">
                    <img class=" h-full object-cover" src="{{ asset('images/img15.jpg') }}" alt="">
                </div>

            </div>
        </section> --}}

        {{-- <section class=" py-20 mx-auto xl:max-w-screen-xl lg:max-w-screen-lg">
            <div class="lg:grid grid-cols-12 gap- ">

                <div class="col-span-6 hidden lg:block">
                    <img class=" h-full object-cover" src="{{ asset('images/img12.jpg') }}" alt="">
                </div>

                <div class="col-span-6 flex">
                    <div class=" px-4 sm:px-8 lg:px-20 text-gray-10 m-auto">
                        <div class="flex items-baseline gap-6 mb-10">
                            <div class="w-1/3 h-[0.5px] bg-gray-800 my-5"></div>
                            <h4 class=" text-primary text-2xl">Risk Management</h4>
                        </div>
                        <p class=" text-s leading-7">
                            Managing all types of risks for our clients and invested capital is of primary importance to
                            us.
                            We developed a sophisticated risk management framework with the objective of monitoring and
                            keeping under predefined limits various types of risks embedded in our investment
                            portfolios.
                        </p>

                    </div>
                </div>
            </div>
        </section> --}}

        {{-- <section class=" py-20 mx-auto xl:max-w-screen-xl lg:max-w-screen-lg">
            <div class="lg:grid grid-cols-12 gap- ">

                <div class="col-span-6 flex">
                    <div class=" px-4 sm:px-8 lg:px-20 text-gray-10 m-auto">
                        <div class="flex items-baseline gap-6 mb-10">
                            <div class="w-1/3 h-[0.5px] bg-gray-800 my-5"></div>
                            <h4 class=" text-primary text-2xl">Talent</h4>
                        </div>
                        <p class=" text-s leading-7">
                            We understand that a primary factor of success for a company resides in its team. For this
                            reason, we always strive to attract and retain the best human talent from advanced degrees
                            in
                            the scientific and technological fields. When new members join our firm we always make sure
                            that
                            they fit into our culture and can provide a significant contribution to the improvement of
                            our
                            business.
                        </p>

                    </div>
                </div>

                <div class="col-span-6 hidden lg:block">
                    <img class=" h-full object-cover" src="{{ asset('images/img17.jpg') }}" alt="">
                </div>

            </div>
        </section> --}}
    </div>

</x-guest-layout>
