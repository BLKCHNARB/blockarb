<x-guest-layout>
    <div class=" bg-primar bg-about bg-cover relative">
        <div class="absolute top-0 bg-gradient-to-r from-primary opacity-[96%] to-primary-700 left-0 w-full h-full -z-0">
        </div>
        <div class=" lg:max-w-screen-lg px-4 sm:px-8 lg:px-10 py-24 mx-auto relative">
            <div class="grid grid-cols-1 md:grid-cols-12 md:gap-16 divide- divide-gray-500">
                <div class=" col-span-12 md:col-span-10">

                    <div class=" mt-5">
                        <h1 class=" text-5xl font-bold uppercas text-secondary">Company</h1>
                        <div class="md:flex items-baseline gap-6">
                            <div class="md:w-1/3 hidden md:block">
                                <div class=" h-[0.5px] bg-gray-400"></div>
                            </div>

                            <div class=" md:w-2/3">
                                <h4 class=" text-lg text-gray-200 pt-[38px] leading-relaxed font-semibol">
                                    We manage digital investments and trade globally using rigorous quantitative
                                    research
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

    <section class=" max-w-screen-lg px-4 sm:px-8 lg:px-10 py-24 mx-auto">
        <div class="">
            <h4 class=" text-3xl text-primary mb-10 font-bold">Our Firm</h4>
            <h5>
                Blockarb was founded in 2015 by investment industry veterans with an
                eye to enabling investors to access the returns of digital assets in a
                risk managed enviroment. The fund offers a unique opportunity to
                access a market neutral investment strategy in the crypto currency
                ecosystem backed by bespoke proprietary software solutions.

            </h5>
            <h5 class=" mt-5">The fund aims to generate consistent returns and preserve capital for its
                clients with zero exposure to crypto currency movements and volatility by
                adopting a cross-market arbitrage strategy. The fund deals with the most
                liquid crypto assets listed in the safest and most reputable exchanges,
                offering counterparty diversification benefits. We provide a disciplined
                approach and a rigorous counterparty due diligence which are essential to
                protect investors from extreme downside risks at all times.</h5>
            {{-- <h5 class=" mt-3 text-gray-500"> <span class=" font-bold">Disclaimer :</span> Commodity trading involves a
                substantial risk of loss.</h5> --}}
        </div>
    </section>

    <section
        class=" py- mx-auto xl:max-w-screen-x lg:max-w-screen-l bg-gradient-to-r from-primary to-primary-700 text-gray-200">
        <div class="grid grid-cols-1 lg:grid-cols-12">

            <div class="col-span-6 hidden lg:block">
                <img class=" h-full object-cover" src="{{ asset('images/img5.jpg') }}" alt="">
            </div>

            <div class="col-span-6">
                <div class=" px-4 sm:px-8 py-20 lg:px-20 text-gray-10 m-auto">
                    <div class="mb-10 flex items-baseline gap-6">
                        <div class="w-1/3 h-[0.1px] bg-gray-200"></div>
                        <h4 class=" uppercas text-4xl mb-5 font-bold text-secondary">Our Mission</h4>
                    </div>

                    <p class=" text-s leading-7">
                        To provide capital preservation in all market conditions, while generating consistent return of
                        short term profit,the mission is to algorithmically take advantage of multiple low risk
                        opportunities to make consistent short term profit that can be compounded over time.
                        We help high-net worth individuals, family offices, and institutional investors achieve their
                        investment objectives by deploying capital to digital assets through our risk managed investment
                        protocols.

                        {{-- On the investment management side, we help high-net worth individuals, family offices, and
                        institutional investors achieve their investment objectives by deploying capital in public
                        financial products on all asset classes across the globe. On the market making side, we help
                        token projects and cryptocurrency exchanges enhance their liquidity conditions needed to
                        successfully grow their companies. --}}
                    </p>

                    {{-- <p class="leading-7">
                        <span class=" font-bold">Disclaimer :</span> commodity trading involves a substantial risk of
                        loss.
                    </p> --}}

                    {{-- <a href="" class=" bg-secondary text-gray-900 py-2 px-7 font-bold inline-block mt-7">Read
                        Our Story</a> --}}

                </div>
            </div>
        </div>
    </section>

    <div class="grid grid-cols-1 lg:grid-cols-12 xl:max-w-screen-xl lg:max-w-screen-lg px-4 py-24 mx-auto gap-24">
        <div class="md:col-span-6 xl:col-span-5">
            <div>
                <div class="flex gap-6 items-baseline">
                    <div class=" w-1/3 h-[0.5px] bg-primary-700"></div>
                    <h2 class=" font-bold text-3xl text-primary">Our Competitive Advantage</h2>
                </div>
                <h5 class=" text-base mt-5">We work hard to be among the best quantitative alternative investment
                    managers.
                    In order to
                    do this, we focus our efforts on four core components.</h5>
            </div>

            <div class=" mt-6">
                <img class=" object-cover lg:h-full rounded" src="{{ asset('images/foto.jpg') }}" alt="">
            </div>
            {{-- <div class="mt-5 rounded from-secondary to-primary"></div> --}}
        </div>

        <div class=" md:col-span-6 xl:col-span-7">
            <div class=" flex">
                <div>
                    <h4 class=" text-5xl font-bold text-secondary">01</h4>
                </div>

                <div class=" ml-5">
                    <h4 class=" text-2xl font-bold">Trust</h4>
                    <h6 class=" mt-5 leading-6">Founded in 2016, our team brings you decades of experience from top
                        financial companies globally.

                    </h6>
                </div>
            </div>

            <div class=" flex mt-10">
                <div>
                    <h4 class=" text-5xl font-bold text-secondary">02</h4>
                </div>

                <div class=" ml-5">
                    <h4 class=" text-2xl font-bold">Clients First</h4>
                    <h6 class=" mt-5 leading-6">We always put you as a client first. Our focus is to create a
                        long-term partnership with you and do our best to make you satisfied.</h6>
                </div>
            </div>

            <div class=" flex mt-10">
                <div>
                    <h4 class=" text-5xl font-bold text-secondary">03</h4>
                </div>

                <div class=" ml-5">
                    <h4 class=" text-2xl font-bold">Excellence</h4>
                    <h6 class=" mt-5 leading-6">We invest a substantial amount of resources in solid proprietary
                        quantitative research bring you top-quality investment products.</h6>
                </div>
            </div>

            <div class=" flex mt-10">
                <div>
                    <h4 class=" text-5xl font-bold text-secondary">04</h4>
                </div>

                <div class=" ml-5">
                    <h4 class=" text-2xl font-bold">Institutional Grade</h4>
                    <h6 class=" mt-5 leading-6">We deliver you an institutional-grade infrastructure on all
                        fronts, including compliance, technology, operations, and custody.</h6>
                </div>
            </div>
        </div>
    </div>

    <div class=" bg-gray-100 py-24 ">
        <div class="xl:max-w-screen-xl lg:max-w-screen-l mx-auto md:gap-24 px-4">
            <div class=" grid grid-cols-1 lg:grid-cols-12 px-5">
                <div class="lg:col-span-10">
                    <div class="flex gap-6 items-baseline">
                        <div class=" w-1/3 h-[0.5px] bg-primary-700"></div>
                        <h2 class=" font-bold text-4xl text-primary">Our Clients</h2>
                    </div>
                    <h5 class=" text-lg mt-10 leading-relaxed">Our mission is to be a partner of both individual and
                        institutional
                        investors who need help in order to manage their capital. We understand that each of our clients
                        has
                        a unique set of requirements that needs to be satisfied. For this reason, we work closely with
                        our
                        clients to understand their specific investment goals and see if one of our investment products
                        can
                        provide a solution.</h5>
                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-12 mt-20">
                <div class="col-span-1 lg:col-span-4">
                    <div class=" bg-secondar px-5 py-10 rounded-lg relative">
                        <div class="md:flex items-center">
                            <div>
                                <svg width="70" height="70" viewBox="0 0 150 150" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M74.1056 19.1972L26.7889 42.8556C26.0083 43.2458 25.618 43.441 25.618 43.75C25.618 44.059 26.0083 44.2542 26.7889 44.6444L74.1056 68.3028L74.1056 68.3028C74.5445 68.5222 74.7639 68.632 75 68.632C75.2361 68.632 75.4555 68.5222 75.8944 68.3028L75.8944 68.3028L123.211 44.6444C123.992 44.2542 124.382 44.059 124.382 43.75C124.382 43.441 123.992 43.2458 123.211 42.8556L75.8944 19.1972C75.4555 18.9778 75.2361 18.868 75 18.868C74.7639 18.868 74.5445 18.9778 74.1056 19.1972Z"
                                        fill="#222222" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M43.7486 65.6275L73.2111 80.3587C74.0889 80.7976 74.5278 81.0171 75 81.0171C75.4721 81.0171 75.911 80.7976 76.7888 80.3587L106.251 65.6274L123.211 74.1073C123.992 74.4976 124.382 74.6927 124.382 75.0018C124.382 75.3108 123.992 75.5059 123.211 75.8962L75.8944 99.5545L75.8944 99.5546C75.4555 99.774 75.2361 99.8837 75 99.8837C74.7639 99.8837 74.5445 99.774 74.1056 99.5546L74.1056 99.5545L26.7889 75.8962C26.0083 75.5059 25.618 75.3108 25.618 75.0018C25.618 74.6927 26.0083 74.4976 26.7889 74.1073L43.7486 65.6275Z"
                                        fill="#222222" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M43.7455 96.8774L73.2113 111.61C74.0891 112.049 74.528 112.269 75.0001 112.269C75.4722 112.269 75.9112 112.049 76.789 111.61L106.255 96.8775L123.211 105.356C123.992 105.746 124.382 105.941 124.382 106.25C124.382 106.559 123.992 106.754 123.211 107.145L75.8944 130.803L75.8944 130.803C75.4555 131.022 75.2361 131.132 75 131.132C74.7639 131.132 74.5445 131.022 74.1056 130.803L74.1056 130.803L26.7889 107.145C26.0083 106.754 25.618 106.559 25.618 106.25C25.618 105.941 26.0083 105.746 26.7889 105.356L43.7455 96.8774Z"
                                        fill="#222222" />
                                </svg>

                            </div>

                            <div class=" md:ml-5 mt-4">
                                <h3 class=" font-bold text-2xl"> High Net-Worth Individual </h3>
                                <p class="mt-5 text-s leading-6">
                                    We can work with entrepreneurs, corporate executives, angel investors, private
                                    wealth
                                    managers, and other high-net worth individuals who need to outsource the investment
                                    management process. At BloackArb we work closely with investors to
                                    understand
                                    their
                                    investment goals and current financial situation.
                                </p>
                            </div>

                        </div>
                        <div class=" border-2 border-gray-700 h-full w-full absolute top-8 right-8 rounded-lg -z-10">
                        </div>
                    </div>
                </div>
                <div class="col-span-1 lg:col-span-4">
                    <div class=" bg-secondar px-5 py-10 rounded-lg relative">
                        <div class="md:flex items-center">
                            <div>
                                <svg width="70" height="70" viewBox="0 0 150 150" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M75 6.25C70.856 6.25 66.8817 7.8962 63.9515 10.8265C61.0212 13.7567 59.375 17.731 59.375 21.875C59.3766 24.9139 60.2643 27.8864 61.9294 30.4285C63.5945 32.9706 65.9648 34.9719 68.75 36.1875V43.75H43.75C40.4348 43.75 37.2554 45.067 34.9112 47.4112C32.567 49.7554 31.25 52.9348 31.25 56.25V60.6875C28.4648 61.9031 26.0945 63.9044 24.4294 66.4465C22.7643 68.9886 21.8766 71.9611 21.875 75C21.8766 78.0389 22.7643 81.0114 24.4294 83.5535C26.0945 86.0956 28.4648 88.0969 31.25 89.3125V93.75H25C21.6848 93.75 18.5054 95.067 16.1612 97.4112C13.817 99.7554 12.5 102.935 12.5 106.25V113.812C9.7148 115.028 7.34452 117.029 5.67939 119.572C4.01426 122.114 3.12657 125.086 3.125 128.125C3.125 132.269 4.7712 136.243 7.70146 139.174C9.15237 140.624 10.8749 141.775 12.7706 142.561C14.6663 143.346 16.6981 143.75 18.75 143.75C22.894 143.75 26.8683 142.104 29.7985 139.174C32.7288 136.243 34.375 132.269 34.375 128.125C34.3734 125.086 33.4857 122.114 31.8206 119.572C30.1555 117.029 27.7852 115.028 25 113.812V106.25H50V113.812C47.2148 115.028 44.8445 117.029 43.1794 119.572C41.5143 122.114 40.6266 125.086 40.625 128.125C40.625 132.269 42.2712 136.243 45.2015 139.174C48.1317 142.104 52.106 143.75 56.25 143.75C58.3019 143.75 60.3337 143.346 62.2294 142.561C64.1251 141.775 65.8476 140.624 67.2985 139.174C68.7495 137.723 69.9004 136 70.6856 134.104C71.4708 132.209 71.875 130.177 71.875 128.125C71.8734 125.086 70.9857 122.114 69.3206 119.572C67.6555 117.029 65.2852 115.028 62.5 113.812V106.25C62.5 102.935 61.183 99.7554 58.8388 97.4112C56.4946 95.067 53.3152 93.75 50 93.75H43.75V89.3125C46.5352 88.0969 48.9055 86.0956 50.5706 83.5535C52.2357 81.0114 53.1234 78.0389 53.125 75C53.1234 71.9611 52.2357 68.9886 50.5706 66.4465C48.9055 63.9044 46.5352 61.9031 43.75 60.6875V56.25H106.25V60.6875C103.465 61.9031 101.095 63.9044 99.4294 66.4465C97.7643 68.9886 96.8766 71.9611 96.875 75C96.8766 78.0389 97.7643 81.0114 99.4294 83.5535C101.095 86.0956 103.465 88.0969 106.25 89.3125V93.75H100C96.6848 93.75 93.5054 95.067 91.1612 97.4112C88.817 99.7554 87.5 102.935 87.5 106.25V113.812C84.7148 115.028 82.3445 117.029 80.6794 119.572C79.0143 122.114 78.1266 125.086 78.125 128.125C78.125 132.269 79.7712 136.243 82.7015 139.174C85.6317 142.104 89.606 143.75 93.75 143.75C97.894 143.75 101.868 142.104 104.799 139.174C107.729 136.243 109.375 132.269 109.375 128.125C109.373 125.086 108.486 122.114 106.821 119.572C105.155 117.029 102.785 115.028 100 113.812V106.25H125V113.812C122.215 115.028 119.845 117.029 118.179 119.572C116.514 122.114 115.627 125.086 115.625 128.125C115.625 132.269 117.271 136.243 120.201 139.174C123.132 142.104 127.106 143.75 131.25 143.75C135.394 143.75 139.368 142.104 142.299 139.174C145.229 136.243 146.875 132.269 146.875 128.125C146.873 125.086 145.986 122.114 144.321 119.572C142.655 117.029 140.285 115.028 137.5 113.812V106.25C137.5 102.935 136.183 99.7554 133.839 97.4112C131.495 95.067 128.315 93.75 125 93.75H118.75V89.3125C121.535 88.0969 123.905 86.0956 125.571 83.5535C127.236 81.0114 128.123 78.0389 128.125 75C128.123 71.9611 127.236 68.9886 125.571 66.4465C123.905 63.9044 121.535 61.9031 118.75 60.6875V56.25C118.75 52.9348 117.433 49.7554 115.089 47.4112C112.745 45.067 109.565 43.75 106.25 43.75H81.25V36.1875C84.0352 34.9719 86.4055 32.9706 88.0706 30.4285C89.7357 27.8864 90.6234 24.9139 90.625 21.875C90.625 17.731 88.9788 13.7567 86.0485 10.8265C83.1183 7.8962 79.144 6.25 75 6.25ZM75 15.625C76.6576 15.625 78.2473 16.2835 79.4194 17.4556C80.5915 18.6277 81.25 20.2174 81.25 21.875C81.25 23.5326 80.5915 25.1223 79.4194 26.2944C78.2473 27.4665 76.6576 28.125 75 28.125C73.3424 28.125 71.7527 27.4665 70.5806 26.2944C69.4085 25.1223 68.75 23.5326 68.75 21.875C68.75 20.2174 69.4085 18.6277 70.5806 17.4556C71.7527 16.2835 73.3424 15.625 75 15.625ZM37.5 68.75C39.1576 68.75 40.7473 69.4085 41.9194 70.5806C43.0915 71.7527 43.75 73.3424 43.75 75C43.75 76.6576 43.0915 78.2473 41.9194 79.4194C40.7473 80.5915 39.1576 81.25 37.5 81.25C35.8424 81.25 34.2527 80.5915 33.0806 79.4194C31.9085 78.2473 31.25 76.6576 31.25 75C31.25 73.3424 31.9085 71.7527 33.0806 70.5806C34.2527 69.4085 35.8424 68.75 37.5 68.75ZM112.5 68.75C114.158 68.75 115.747 69.4085 116.919 70.5806C118.092 71.7527 118.75 73.3424 118.75 75C118.75 76.6576 118.092 78.2473 116.919 79.4194C115.747 80.5915 114.158 81.25 112.5 81.25C110.842 81.25 109.253 80.5915 108.081 79.4194C106.908 78.2473 106.25 76.6576 106.25 75C106.25 73.3424 106.908 71.7527 108.081 70.5806C109.253 69.4085 110.842 68.75 112.5 68.75ZM18.75 121.875C20.4076 121.875 21.9973 122.533 23.1694 123.706C24.3415 124.878 25 126.467 25 128.125C25 129.783 24.3415 131.372 23.1694 132.544C21.9973 133.717 20.4076 134.375 18.75 134.375C17.0924 134.375 15.5027 133.717 14.3306 132.544C13.1585 131.372 12.5 129.783 12.5 128.125C12.5 126.467 13.1585 124.878 14.3306 123.706C15.5027 122.533 17.0924 121.875 18.75 121.875ZM56.25 121.875C57.9076 121.875 59.4973 122.533 60.6694 123.706C61.8415 124.878 62.5 126.467 62.5 128.125C62.5 129.783 61.8415 131.372 60.6694 132.544C59.4973 133.717 57.9076 134.375 56.25 134.375C54.5924 134.375 53.0027 133.717 51.8306 132.544C50.6585 131.372 50 129.783 50 128.125C50 126.467 50.6585 124.878 51.8306 123.706C53.0027 122.533 54.5924 121.875 56.25 121.875ZM93.75 121.875C95.4076 121.875 96.9973 122.533 98.1694 123.706C99.3415 124.878 100 126.467 100 128.125C100 129.783 99.3415 131.372 98.1694 132.544C96.9973 133.717 95.4076 134.375 93.75 134.375C92.0924 134.375 90.5027 133.717 89.3306 132.544C88.1585 131.372 87.5 129.783 87.5 128.125C87.5 126.467 88.1585 124.878 89.3306 123.706C90.5027 122.533 92.0924 121.875 93.75 121.875ZM131.25 121.875C132.908 121.875 134.497 122.533 135.669 123.706C136.842 124.878 137.5 126.467 137.5 128.125C137.5 129.783 136.842 131.372 135.669 132.544C134.497 133.717 132.908 134.375 131.25 134.375C129.592 134.375 128.003 133.717 126.831 132.544C125.658 131.372 125 129.783 125 128.125C125 126.467 125.658 124.878 126.831 123.706C128.003 122.533 129.592 121.875 131.25 121.875Z"
                                        fill="black" />
                                </svg>


                            </div>

                            <div class=" md:ml-5 mt-4">
                                <h3 class=" font-bold text-2xl"> Family Offices </h3>
                                <p class="mt-5 text-s leading-6">
                                    We can work with family offices who are looking for portfolio diversification
                                    through an
                                    allocation to uncorrelated strategies in the alternative investment space. In
                                    particular,
                                    our team has a discussion to understand exposures to traditional and alternative
                                    investments
                                    in their current portfolio in terms of risk and performance.
                                </p>
                            </div>

                        </div>
                        <div class=" border-2 border-gray-700 h-full w-full absolute top-8 right-8 rounded-lg -z-10">
                        </div>
                    </div>
                </div>
                <div class="col-span-1 lg:col-span-4">
                    <div class=" bg-secondar px-5 py-10 rounded-lg relative">
                        <div class="md:flex items-center">
                            <div>
                                <svg width="70" height="70" viewBox="0 0 150 150" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12.5 118.75H137.5V137.5H12.5V118.75ZM75 12.5L12.5 37.5V50H137.5V37.5L75 12.5ZM106.25 62.5H125V106.25H106.25V62.5ZM65.625 62.5H84.375V106.25H65.625V62.5ZM25 62.5H43.75V106.25H25V62.5Z"
                                        fill="black" />
                                </svg>


                            </div>

                            <div class=" md:ml-5 mt-4">
                                <h3 class=" font-bold text-2xl"> Institutions</h3>
                                <p class="mt-5 text-s leading-6">
                                    We can work with public and private pension funds, corporations, asset and private
                                    wealth
                                    managers, not-for-profit organizations. Our objective is to understand their unique
                                    needs
                                    and objectives in terms of target risk and returns, and see if one of our investment
                                    product
                                    can help them match their needs. We always improve our operations, technology, and
                                    procedures to meet the requirements of institutional investors.
                                </p>
                            </div>

                        </div>
                        <div class=" border-2 border-gray-700 h-full w-full absolute top-8 right-8 rounded-lg -z-10">
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="col-span-6 xl:col-span-5">
                <div>
                    <div class="flex gap-6 items-baseline">
                        <div class=" w-1/3 h-[0.5px] bg-primary-700"></div>
                        <h2 class=" font-bold text-4xl text-primary">Our Clients</h2>
                    </div>
                    <h5 class=" text-lg mt-10 leading-relaxed">Our mission is to be a partner of both individual and
                        institutional
                        investors who need help in order to manage their capital. We understand that each of our clients
                        has
                        a unique set of requirements that needs to be satisfied. For this reason, we work closely with
                        our
                        clients to understand their specific investment goals and see if one of our investment products
                        can
                        provide a solution.</h5>
                </div>
            </div> --}}

            {{-- <div class=" col-span-6 xl:col-span-7">
                <div class=" bg-secondar px-5 py-10 rounded-lg relative">
                    <div class="md:flex items-center">
                        <div>
                            <svg width="70" height="70" viewBox="0 0 150 150" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M74.1056 19.1972L26.7889 42.8556C26.0083 43.2458 25.618 43.441 25.618 43.75C25.618 44.059 26.0083 44.2542 26.7889 44.6444L74.1056 68.3028L74.1056 68.3028C74.5445 68.5222 74.7639 68.632 75 68.632C75.2361 68.632 75.4555 68.5222 75.8944 68.3028L75.8944 68.3028L123.211 44.6444C123.992 44.2542 124.382 44.059 124.382 43.75C124.382 43.441 123.992 43.2458 123.211 42.8556L75.8944 19.1972C75.4555 18.9778 75.2361 18.868 75 18.868C74.7639 18.868 74.5445 18.9778 74.1056 19.1972Z"
                                    fill="#222222" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M43.7486 65.6275L73.2111 80.3587C74.0889 80.7976 74.5278 81.0171 75 81.0171C75.4721 81.0171 75.911 80.7976 76.7888 80.3587L106.251 65.6274L123.211 74.1073C123.992 74.4976 124.382 74.6927 124.382 75.0018C124.382 75.3108 123.992 75.5059 123.211 75.8962L75.8944 99.5545L75.8944 99.5546C75.4555 99.774 75.2361 99.8837 75 99.8837C74.7639 99.8837 74.5445 99.774 74.1056 99.5546L74.1056 99.5545L26.7889 75.8962C26.0083 75.5059 25.618 75.3108 25.618 75.0018C25.618 74.6927 26.0083 74.4976 26.7889 74.1073L43.7486 65.6275Z"
                                    fill="#222222" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M43.7455 96.8774L73.2113 111.61C74.0891 112.049 74.528 112.269 75.0001 112.269C75.4722 112.269 75.9112 112.049 76.789 111.61L106.255 96.8775L123.211 105.356C123.992 105.746 124.382 105.941 124.382 106.25C124.382 106.559 123.992 106.754 123.211 107.145L75.8944 130.803L75.8944 130.803C75.4555 131.022 75.2361 131.132 75 131.132C74.7639 131.132 74.5445 131.022 74.1056 130.803L74.1056 130.803L26.7889 107.145C26.0083 106.754 25.618 106.559 25.618 106.25C25.618 105.941 26.0083 105.746 26.7889 105.356L43.7455 96.8774Z"
                                    fill="#222222" />
                            </svg>

                        </div>

                        <div class=" md:ml-5 mt-4">
                            <h3 class=" font-bold text-2xl"> High Net-Worth Individual </h3>
                            <p class="mt-5 text-s leading-6">
                                We can work with entrepreneurs, corporate executives, angel investors, private wealth
                                managers, and other high-net worth individuals who need to outsource the investment
                                management process. At Arbitrage Finance we work closely with investors to understand
                                their
                                investment goals and current financial situation.
                            </p>
                        </div>

                    </div>
                    <div class=" border-2 border-gray-700 h-full w-full absolute top-8 right-8 rounded-lg -z-10"></div>
                </div>

            </div>

            <div class=" col-span-6 xl:col-span-7">
                <div class=" bg-secondar px-5 py-10 rounded-lg relative">
                    <div class="md:flex items-center">
                        <div>
                            <svg width="70" height="70" viewBox="0 0 150 150" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M75 6.25C70.856 6.25 66.8817 7.8962 63.9515 10.8265C61.0212 13.7567 59.375 17.731 59.375 21.875C59.3766 24.9139 60.2643 27.8864 61.9294 30.4285C63.5945 32.9706 65.9648 34.9719 68.75 36.1875V43.75H43.75C40.4348 43.75 37.2554 45.067 34.9112 47.4112C32.567 49.7554 31.25 52.9348 31.25 56.25V60.6875C28.4648 61.9031 26.0945 63.9044 24.4294 66.4465C22.7643 68.9886 21.8766 71.9611 21.875 75C21.8766 78.0389 22.7643 81.0114 24.4294 83.5535C26.0945 86.0956 28.4648 88.0969 31.25 89.3125V93.75H25C21.6848 93.75 18.5054 95.067 16.1612 97.4112C13.817 99.7554 12.5 102.935 12.5 106.25V113.812C9.7148 115.028 7.34452 117.029 5.67939 119.572C4.01426 122.114 3.12657 125.086 3.125 128.125C3.125 132.269 4.7712 136.243 7.70146 139.174C9.15237 140.624 10.8749 141.775 12.7706 142.561C14.6663 143.346 16.6981 143.75 18.75 143.75C22.894 143.75 26.8683 142.104 29.7985 139.174C32.7288 136.243 34.375 132.269 34.375 128.125C34.3734 125.086 33.4857 122.114 31.8206 119.572C30.1555 117.029 27.7852 115.028 25 113.812V106.25H50V113.812C47.2148 115.028 44.8445 117.029 43.1794 119.572C41.5143 122.114 40.6266 125.086 40.625 128.125C40.625 132.269 42.2712 136.243 45.2015 139.174C48.1317 142.104 52.106 143.75 56.25 143.75C58.3019 143.75 60.3337 143.346 62.2294 142.561C64.1251 141.775 65.8476 140.624 67.2985 139.174C68.7495 137.723 69.9004 136 70.6856 134.104C71.4708 132.209 71.875 130.177 71.875 128.125C71.8734 125.086 70.9857 122.114 69.3206 119.572C67.6555 117.029 65.2852 115.028 62.5 113.812V106.25C62.5 102.935 61.183 99.7554 58.8388 97.4112C56.4946 95.067 53.3152 93.75 50 93.75H43.75V89.3125C46.5352 88.0969 48.9055 86.0956 50.5706 83.5535C52.2357 81.0114 53.1234 78.0389 53.125 75C53.1234 71.9611 52.2357 68.9886 50.5706 66.4465C48.9055 63.9044 46.5352 61.9031 43.75 60.6875V56.25H106.25V60.6875C103.465 61.9031 101.095 63.9044 99.4294 66.4465C97.7643 68.9886 96.8766 71.9611 96.875 75C96.8766 78.0389 97.7643 81.0114 99.4294 83.5535C101.095 86.0956 103.465 88.0969 106.25 89.3125V93.75H100C96.6848 93.75 93.5054 95.067 91.1612 97.4112C88.817 99.7554 87.5 102.935 87.5 106.25V113.812C84.7148 115.028 82.3445 117.029 80.6794 119.572C79.0143 122.114 78.1266 125.086 78.125 128.125C78.125 132.269 79.7712 136.243 82.7015 139.174C85.6317 142.104 89.606 143.75 93.75 143.75C97.894 143.75 101.868 142.104 104.799 139.174C107.729 136.243 109.375 132.269 109.375 128.125C109.373 125.086 108.486 122.114 106.821 119.572C105.155 117.029 102.785 115.028 100 113.812V106.25H125V113.812C122.215 115.028 119.845 117.029 118.179 119.572C116.514 122.114 115.627 125.086 115.625 128.125C115.625 132.269 117.271 136.243 120.201 139.174C123.132 142.104 127.106 143.75 131.25 143.75C135.394 143.75 139.368 142.104 142.299 139.174C145.229 136.243 146.875 132.269 146.875 128.125C146.873 125.086 145.986 122.114 144.321 119.572C142.655 117.029 140.285 115.028 137.5 113.812V106.25C137.5 102.935 136.183 99.7554 133.839 97.4112C131.495 95.067 128.315 93.75 125 93.75H118.75V89.3125C121.535 88.0969 123.905 86.0956 125.571 83.5535C127.236 81.0114 128.123 78.0389 128.125 75C128.123 71.9611 127.236 68.9886 125.571 66.4465C123.905 63.9044 121.535 61.9031 118.75 60.6875V56.25C118.75 52.9348 117.433 49.7554 115.089 47.4112C112.745 45.067 109.565 43.75 106.25 43.75H81.25V36.1875C84.0352 34.9719 86.4055 32.9706 88.0706 30.4285C89.7357 27.8864 90.6234 24.9139 90.625 21.875C90.625 17.731 88.9788 13.7567 86.0485 10.8265C83.1183 7.8962 79.144 6.25 75 6.25ZM75 15.625C76.6576 15.625 78.2473 16.2835 79.4194 17.4556C80.5915 18.6277 81.25 20.2174 81.25 21.875C81.25 23.5326 80.5915 25.1223 79.4194 26.2944C78.2473 27.4665 76.6576 28.125 75 28.125C73.3424 28.125 71.7527 27.4665 70.5806 26.2944C69.4085 25.1223 68.75 23.5326 68.75 21.875C68.75 20.2174 69.4085 18.6277 70.5806 17.4556C71.7527 16.2835 73.3424 15.625 75 15.625ZM37.5 68.75C39.1576 68.75 40.7473 69.4085 41.9194 70.5806C43.0915 71.7527 43.75 73.3424 43.75 75C43.75 76.6576 43.0915 78.2473 41.9194 79.4194C40.7473 80.5915 39.1576 81.25 37.5 81.25C35.8424 81.25 34.2527 80.5915 33.0806 79.4194C31.9085 78.2473 31.25 76.6576 31.25 75C31.25 73.3424 31.9085 71.7527 33.0806 70.5806C34.2527 69.4085 35.8424 68.75 37.5 68.75ZM112.5 68.75C114.158 68.75 115.747 69.4085 116.919 70.5806C118.092 71.7527 118.75 73.3424 118.75 75C118.75 76.6576 118.092 78.2473 116.919 79.4194C115.747 80.5915 114.158 81.25 112.5 81.25C110.842 81.25 109.253 80.5915 108.081 79.4194C106.908 78.2473 106.25 76.6576 106.25 75C106.25 73.3424 106.908 71.7527 108.081 70.5806C109.253 69.4085 110.842 68.75 112.5 68.75ZM18.75 121.875C20.4076 121.875 21.9973 122.533 23.1694 123.706C24.3415 124.878 25 126.467 25 128.125C25 129.783 24.3415 131.372 23.1694 132.544C21.9973 133.717 20.4076 134.375 18.75 134.375C17.0924 134.375 15.5027 133.717 14.3306 132.544C13.1585 131.372 12.5 129.783 12.5 128.125C12.5 126.467 13.1585 124.878 14.3306 123.706C15.5027 122.533 17.0924 121.875 18.75 121.875ZM56.25 121.875C57.9076 121.875 59.4973 122.533 60.6694 123.706C61.8415 124.878 62.5 126.467 62.5 128.125C62.5 129.783 61.8415 131.372 60.6694 132.544C59.4973 133.717 57.9076 134.375 56.25 134.375C54.5924 134.375 53.0027 133.717 51.8306 132.544C50.6585 131.372 50 129.783 50 128.125C50 126.467 50.6585 124.878 51.8306 123.706C53.0027 122.533 54.5924 121.875 56.25 121.875ZM93.75 121.875C95.4076 121.875 96.9973 122.533 98.1694 123.706C99.3415 124.878 100 126.467 100 128.125C100 129.783 99.3415 131.372 98.1694 132.544C96.9973 133.717 95.4076 134.375 93.75 134.375C92.0924 134.375 90.5027 133.717 89.3306 132.544C88.1585 131.372 87.5 129.783 87.5 128.125C87.5 126.467 88.1585 124.878 89.3306 123.706C90.5027 122.533 92.0924 121.875 93.75 121.875ZM131.25 121.875C132.908 121.875 134.497 122.533 135.669 123.706C136.842 124.878 137.5 126.467 137.5 128.125C137.5 129.783 136.842 131.372 135.669 132.544C134.497 133.717 132.908 134.375 131.25 134.375C129.592 134.375 128.003 133.717 126.831 132.544C125.658 131.372 125 129.783 125 128.125C125 126.467 125.658 124.878 126.831 123.706C128.003 122.533 129.592 121.875 131.25 121.875Z"
                                    fill="black" />
                            </svg>


                        </div>

                        <div class=" md:ml-5 mt-4">
                            <h3 class=" font-bold text-2xl"> Family Offices </h3>
                            <p class="mt-5 text-s leading-6">
                                We can work with family offices who are looking for portfolio diversification through an
                                allocation to uncorrelated strategies in the alternative investment space. In
                                particular,
                                our team has a discussion to understand exposures to traditional and alternative
                                investments
                                in their current portfolio in terms of risk and performance.
                            </p>
                        </div>

                    </div>
                    <div class=" border-2 border-gray-700 h-full w-full absolute top-8 right-8 rounded-lg -z-10"></div>
                </div>

            </div>

            <div class=" col-span-5 hidden lg:block"></div>
            <div class=" col-span-5 hidden lg:block"></div>

            <div class=" col-span-6 xl:col-span-7">
                <div class=" bg-secondar px-5 py-10 rounded-lg relative">
                    <div class="md:flex items-center">
                        <div>
                            <svg width="70" height="70" viewBox="0 0 150 150" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.5 118.75H137.5V137.5H12.5V118.75ZM75 12.5L12.5 37.5V50H137.5V37.5L75 12.5ZM106.25 62.5H125V106.25H106.25V62.5ZM65.625 62.5H84.375V106.25H65.625V62.5ZM25 62.5H43.75V106.25H25V62.5Z"
                                    fill="black" />
                            </svg>


                        </div>

                        <div class=" md:ml-5 mt-4">
                            <h3 class=" font-bold text-2xl"> Institutions</h3>
                            <p class="mt-5 text-s leading-6">
                                We can work with public and private pension funds, corporations, asset and private
                                wealth
                                managers, not-for-profit organizations. Our objective is to understand their unique
                                needs
                                and objectives in terms of target risk and returns, and see if one of our investment
                                product
                                can help them match their needs. We always improve our operations, technology, and
                                procedures to meet the requirements of institutional investors.
                            </p>
                        </div>

                    </div>
                    <div class=" border-2 border-gray-700 h-full w-full absolute top-8 right-8 rounded-lg -z-10"></div>
                </div>

            </div> --}}
        </div>
    </div>


</x-guest-layout>
