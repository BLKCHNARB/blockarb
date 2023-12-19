<x-guest-layout>
    {{-- <div class="xl:max-w-screen-xl lg:max-w-screen-lg px-4 py-20 mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12">
            <div class=" col-span-6 m-auto">
                <h5 class=" text-base font-bold uppercase text-primar">Our Team</h5>
                <h2 class=" font-bold text-7xl mt-7 leading-norma">We work with the best.</h2>
                <h5 class=" text-base leading-8 mt-10 bg-blue-50 rounded-md p-5 border-2 border-blue-200 font-semibold">
                    We are a team of finance professionals, portfolio managers, traders, and product
                    innovators who embrace digital disruption and believe in its potential to transform markets,
                    economies, and modern society. Our leadership team has a proven track record in delivering
                    innovative financial products and services in emerging asset classes. We have managed billions of
                    dollars for institutional investors and built innovative financial products and funds for the
                    world’s leading financial organizations.</h5>
            </div>

            <div class=" col-span-6 m-auto">
                <img src="{{ asset('images/team.png') }}" alt="">
            </div>
        </div>
    </div> --}}

    <div class=" bg-primar bg-about bg-cover relative">
        <div class="absolute top-0 bg-gradient-to-r from-primary opacity-[96%] to-primary-700 left-0 w-full h-full -z-0">
        </div>
        <div class=" lg:max-w-screen-lg px-4 sm:px-8 lg:px-10 py-24 mx-auto relative">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-8 divide- divide-gray-500">
                <div class=" col-span-10">
                    <div class=" mt-5">
                        <h1 class=" text-lg font-bold uppercase text-gray-300">Our Team</h1>
                        <div class="flex items-baseline gap-6">
                            <div class="w-1/3">
                                <div class=" h-[0.5px] bg-gray-400"></div>
                            </div>
                            <h2 class=" leading-snug text-5xl font-bold text-secondary pt-8 capitalize ">A Team of
                                Finance
                                Professionals
                            </h2>
                        </div>

                        {{-- <h3 class=" text-base text-gray-300 pt-6">We Manage investments globally using rigorous
                            quantitative research</h3> --}}
                    </div>
                </div>
                {{-- <div class=" m-auto col-span-5">
                    <h5 class="text-lg text-gray-200 leading-7 font-semibold">We are a team of finance professionals,
                        portfolio managers, traders, and product
                        innovators who embrace digital disruption and believe in its potential to transform markets,
                        economies, and modern society. Our leadership team has a proven track record in delivering
                        innovative financial products and services in emerging asset classes. We have managed billions
                        of
                        dollars for institutional investors and built innovative financial products and funds for the
                        world’s leading financial organizations.</h5> <br>
                </div> --}}
            </div>
        </div>
    </div>

    <section class=" py- mx-auto xl:max-w-screen-x lg:max-w-screen-l">
        <div class="gri grid-cols-12 lg:flex items-center">

            <div class="col-span-6 max-h-min lg:w-1/2 hidden lg:block">
                <img class="h-full object-cover" src="{{ asset('images/img8.jpg') }}" alt="">
            </div>

            <div class="col-span-6 lg:w-1/2">
                <div class=" px-4 sm:px-8 py-20 lg:px-20 text-gray-10 m-auto">

                    <p class=" text-lg leading-8">
                        Our team has combined 30+ year experience in investments, technology and market research with
                        both global vision and local knowledge
                        Our team members come from Citigroup, Fidelity, Bosch and Binance etc, located in China, U.S,
                        Australia and Singapore, we have a true collaboration across the globe for blockchain projects
                        We also team up with our outside partners deeply rooted in the blockchain investment and

                    </p>

                    {{-- <a href="" class=" bg-secondary text-gray-900 py-2 px-7 font-bold inline-block mt-7">Read
                        Our Story</a> --}}

                </div>
            </div>
        </div>
    </section>

    <section class=" py-20 bg-gray-100">

        <div class="max-w-screen-xl mx-auto px-2 sm:px-5">
            <div x-data="{ selected: 1 }">
                <ul>
                    <li class=" ">
                        <button type="button"
                            class=" w-full px-8 py-6 text-left rounded-md mb-2 border border-gray-200 bg-secondary text-gray-900 font-bold"
                            @click=" selected = selected == 1 ? null : 1 ">
                            <div class="flex items-center justify-between">
                                <h4 class=" font-bold text-xl">Matt Wilhem</h4>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>
    
                        <div class=" relative overflow-hidden transition-all duration-500 max-h-0 font-cabinet bg-white"
                            x-ref="container1"
                            x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                            <div class="p-5">
                                <h5 class=" text-2xl font-bold">Chief Executive Officer</h5>
                                <p class=" mt-5">Matt was appointed Chief Executive Officer to the Blockarb Board in
                                    February 2020. Prior to being appointed CEO, Matt was President of Blockarb’s IP
                                    Products Group (IPG) from January 2017. Under his leadership, Matt transformed IPG to
                                    focus on key solutions for vertical markets with a more diversified product portfolio
                                    and increased investment in the Blockarb software ecosystem. In addition to his role as
                                    CEO, Matt also sits on the board of Blockarb Asia.</p> <br>
                                <p>Matt joined Blockarb’s parent company in October 2013 as Vice President of Strategic
                                    Alliances and two years later was appointed to the Executive Committee and named
                                    Blockarb’s Chief Commercial Officer in charge of global sales and marketing.</p> <br>
                                <p>Before joining Blockarb, Matt held several applications management, applications
                                    engineering and product engineering roles, including seven years at NVIDIA as a member
                                    of its computing products business. Prior to NVIDIA, Matt held executive roles at
                                    Scintera Networks and Tensilica.Matt earned his Bachelor of Science in electrical and
                                    electronics engineering from Clarkson University and is a graduate of the Stanford
                                    University Graduate School of Business Executive Education Program.</p>
                            </div>
                        </div>
                    </li>
    
                    <li class=" ">
                        <button type="button"
                            class=" w-full px-8 py-6 text-left rounded-md mb-2 border border-gray-200 bg-secondary text-gray-900 font-bold"
                            @click=" selected = selected == 2 ? null : 2 ">
                            <div class="flex items-center justify-between">
                                <h4 class=" font-bold text-xl">Vincent Crowley</h4>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>
    
                        <div class=" relative overflow-hidden transition-all duration-500 max-h-0 font-cabinet bg-white"
                            x-ref="container2"
                            x-bind:style="selected == 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                            <div class="p-5">
                                <h5 class=" text-2xl font-bold">Chief Financial Officer</h5>
                                <p class=" mt-5">Vincent Crowley is the Executive Vice President and CFO of Blockarb and leads
                                    the global finance organisation as well as corporate IT operations and enterprise
                                    security teams. He joins Blockarb after having served at Uniks Corp., helping to
                                    accelerate organic growth and profitability, while also leading strategy and M&A
                                    functions.</p> <br>
                                <p>Vincent has held senior financial leadership roles at top Fortune 50 companies, including
                                    Cisco Systems, Comcast and AT&T and brings key experience in M&A, IPOs, driving internal
                                    innovation strategies and external investment portfolio management.</p> <br>
                            </div>
                        </div>
                    </li>
    
                    <li class=" ">
                        <button type="button"
                            class=" w-full px-8 py-6 text-left rounded-md mb-2 border border-gray-200 bg-secondary text-gray-900 font-bold"
                            @click=" selected = selected == 3 ? null : 3 ">
                            <div class="flex items-center justify-between">
                                <h4 class=" font-bold text-xl">Michael Flyn</h4>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>
    
                        <div class=" relative overflow-hidden transition-all duration-500 max-h-0 font-cabinet bg-white"
                            x-ref="container3"
                            x-bind:style="selected == 3 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''">
                            <div class="p-5">
                                <h5 class=" text-2xl font-bold">Chief Investment Officer</h5>
                                <p class=" mt-5">Banker with over 20 years of experience in investment management and
                                    private equity. Prior to joining Blockarb, Flyn was with the Investment Management
                                    Division of Goldman Sachs dealing with portfolio construction for the bank's
                                    professional UHNW and family office clients. Prior to that, he worked for JPMorgan,
                                    HSBC, and EBRD.Flyn studied International Business Relations at the University of
                                    National and World Economy in Sofia and earned an Executive MBA degree from the
                                    University of Oxford.</p> <br>
                            </div>
                        </div>
                    </li>
    
                    <li class=" ">
                        <button type="button"
                            class=" w-full px-8 py-6 text-left rounded-md mb-2 border border-gray-200 bg-secondary text-gray-900 font-bold"
                            @click=" selected = selected == 4 ? null : 4 ">
                            <div class="flex items-center justify-between">
                                <h4 class=" font-bold text-xl">Jim Norman</h4>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>
    
                        <div class=" relative overflow-hidden transition-all duration-500 max-h-0 font-cabinet bg-white"
                            x-ref="container4"
                            x-bind:style="selected == 4 ? 'max-height: ' + $refs.container4.scrollHeight + 'px' : ''">
                            <div class="p-5">
                                <h5 class=" text-2xl font-bold">Chief Operating Officer</h5>
                                <p class=" mt-5">Jim is an experienced finance professional with a strong background in
                                    risk management and commodities trading. Starting out his career with Geneva Trading in
                                    Dublin covering derivatives in commodities, rates, FX equities and fixed income. In 2011
                                    Jim established an energy market making and arbitrage desk. In 2013, he established a
                                    market maker covering a diversity of commodities with global reach.</p> <br>
                                <p>Jim graduated from Queen’s University, Belfast (MSc Finance, 2006).</p> <br>
    
                            </div>
                        </div>
                    </li>
    
                    <li class=" ">
                        <button type="button"
                            class=" w-full px-8 py-6 text-left rounded-md mb-2 border border-gray-200 bg-secondary text-gray-900 font-bold"
                            @click=" selected = selected == 5 ? null : 5 ">
                            <div class="flex items-center justify-between">
                                <h4 class=" font-bold text-xl">Dan Neuman</h4>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>
    
                        <div class=" relative overflow-hidden transition-all duration-500 max-h-0 font-cabinet bg-white"
                            x-ref="container5"
                            x-bind:style="selected == 5 ? 'max-height: ' + $refs.container5.scrollHeight + 'px' : ''">
                            <div class="p-5">
                                <h5 class=" text-2xl font-bold">Chief Technology Officer</h5>
                                <p class=" mt-5">Dan started his career in 2001 as a Research Analyst at FME in London. He
                                    became a designated market maker for the electronic markets on all the major derivatives
                                    exchanges in US/EU/USA and headed desks in STIRs, Government Bonds and Stock Futures. In
                                    2010 he moved to Tarex Spectrm where he traded a proprietary book and in 2016 joined
                                    Blockarb where he heads the electronic liquidity provision desk in Crypto. He also set
                                    up and currently heads the Quantitative Trading desk at Blockarb.</p> <br>
                                <p>Dan graduated from ICMA Centre, UK (MSc International Securities, Investment and Banking,
                                    2000).</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        
    </section>

    {{-- <div class="xl:max-w-screen-xl lg:max-w-screen-lg px-4 py-20 mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-24 py-12 border-b border-gray-300">
            <div class=" col-span-5 m-auto">
                <div class="">
                    <img class=" rounded-lg border-4 border-secondary h-[20rem] object-cover"
                        src="{{ asset('images/andrea.jpg') }}" alt="dan">
                </div>
            </div>
            <div class=" col-span-6">
                <div>
                    <h2 class=" font-bold text-3xl">Dan Birnberg</h2>
                    <h5 class=" mt-3 font-semibold">Chief Executive Officer/ Chief Analyst</h5>
                </div>

                <div class="mt-8">
                    <h5 class=" text-lg font-bold">Description</h5>
                    <p class=" mt-3 text-sm leading-7">Dan founded Atlas private equity management company in 2003. He
                        also co-founded
                        and was CEO of
                        Atflax, an electronic foreign exchange platform. Prior to that, he was head of macro trading and
                        CFO at Zigmond Management, global head of FX options at Deutsche Bank in Europe, and managed
                        derivatives trading units and a global macro fund in North America and Greece at Piraeus Trust.
                    </p>
                    <br>
                    <p class=" text-sm leading-7">
                        Dan began his career at Goldman Sachs as a mortgage-backed securities trader. He graduated magna
                        cum laude from the swiss business school of finance with a B.S. in Financial management and
                        received the Carmichael Prize. He has worked extensively as a risk management consultant across
                        the globe, building a skill set that gives him the ability to access risk exposures in
                        businesses and come up with the best practices to mitigate and avoid risk in ventures.</p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-12 gap-24 py-12 border-b border-gray-300">
            <div class=" col-span-5 my-auto">
                <div class="">
                    <img class=" rounded-lg border-4 border-secondary min-w-full max-h-[20rem] w-full object-cover object-top"
                        src="{{ asset('images/endre.jpg') }}" alt="dan">
                </div>
            </div>
            <div class=" col-span-6">
                <div>
                    <h2 class=" font-bold text-3xl">Endre Fredek</h2>
                    <h5 class=" mt-3 font-semibold">Chief Technology officer</h5>
                </div>

                <div class="mt-8">
                    <h5 class=" text-lg font-bold">Description</h5>
                    <p class=" mt-3 text-sm leading-7">Endre is the Chief Technology Officer at BlockArb. He has 15+ years
                        of engineering and management experience having worked in a variety of startups like Skillz, a
                        leading mobile games platform, and Fortune 500 companies like Walmart and PayPal where he scaled
                        and managed large, global engineering organizations as well as spearheaded the development of
                        world-class mobile payments technology and customer experience platforms.</p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-12 gap-24 py-12">
            <div class=" col-span-5 my-auto">
                <div class="">
                    <img class=" rounded-lg border-4 border-secondary min-w-full max-h-[20rem] w-full object-cover object-top"
                        src="{{ asset('images/wade.jpg') }}" alt="dan">
                </div>
            </div>
            <div class=" col-span-6">
                <div>
                    <h2 class=" font-bold text-3xl">Michael Wade</h2>
                    <h5 class=" mt-3 font-semibold">Head of research</h5>
                </div>

                <div class="mt-8">
                    <h5 class=" text-lg font-bold">Description</h5>
                    <p class=" mt-3 text-sm leading-7">Wade has more than five years of experience in TMT and
                        blockchain
                        investments. Prior to BlockArb, Wade joined Blockchain as a strategic researcher, primarily
                        responsible for fintech and blockchain innovation and implementation. He graduated from the
                        University of Southern California with an M.S degree in EE.</p>
                </div>
            </div>
        </div>
    </div> --}}
</x-guest-layout>
