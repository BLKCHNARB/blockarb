<x-guest-layout>
    {{-- hero --}}
    <div class=" bg-[#1743e4b5] relative padding-y padding-x">
        <div class=" w-[80%] mx-auto base:py-32 py-20 text-center text-shadow text-white ">
            <h1 class="font-extrabold lg:text-xxxl base:text-xxl text-xl">Our Team</h1>
            <p class=" md:text-lg base:text-base sm:text-sm text-s pt-[20px] leading-relaxed">
                A Team of Finance Professionals
            </p>
        </div>
    </div>

    <section class="padding-y padding-x">
        <p class=" my-10 leading-8">
            Our team has combined 30+ year experience in investments, technology and market research with
            both global vision and local knowledge
            Our team members come from Citigroup, Fidelity, Bosch and Binance etc, located in China, U.S,
            Australia and Singapore, we have a true collaboration across the globe for blockchain projects
            We also team up with our outside partners deeply rooted in the blockchain investment and
        </p>
    </section>
    

    <section class=" padding-y padding-x">
        <div x-data="{ selected: 1 }">
            <ul class=" space-y-2">
                <li class=" ">
                    <button type="button"
                        class=" bg-blue_100 rounded-tl-[10px] rounded-tr-[10px] flex justify-between items-center py-5 px-7 w-full "
                        @click=" selected = selected == 1 ? null : 1 ">
                        <h2 class="font-extrabold base:text-[1.35rem] text-[1.1rem]">Matt Wilhem</h2>
                        <div :class=" { 'transition-transform rotate-180 duration-300': selected == 1, 'transition-transform rotate-0 duration-300': selected !== 1  }">
                            <svg width="13" height="10" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </button>

                    <div class=" relative overflow-hidden transition-all duration-500 max-h-0 bg-white"
                        x-ref="container1"
                        x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                        <div class="p-7">
                            <h2 class=" font-bold base:text-[1.2rem] text-[1rem]">Chief Executive Officer</h2>
                            <div class=" my-5 base-text">
                                <p >Matt was appointed Chief Executive Officer to the Blockarb Board in
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
                    </div>
                </li>

                <li class=" ">

                    <button type="button"
                        class=" bg-blue_100 flex justify-between items-center py-5 px-7 w-full "
                        @click=" selected = selected == 2 ? null : 2 ">
                        <h2 class="font-extrabold base:text-[1.35rem] text-[1.1rem]">Vincent Crowley</h2>
                        <div :class=" { 'transition-transform rotate-180 duration-300': selected == 2, 'transition-transform rotate-0 duration-300': selected !== 2  }">
                            <svg width="13" height="10" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </button>

                    <div class=" relative overflow-hidden transition-all duration-500 max-h-0 bg-white"
                        x-ref="container1"
                        x-bind:style="selected == 2 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                        <div class="p-7">
                            <h2 class=" font-bold base:text-[1.2rem] text-[1rem]">Chief Financial Officer</h2>
                            <div class=" my-5 base-text">
                                <p >Vincent Crowley is the Executive Vice President and CFO of Blockarb and leads
                                    the global finance organisation as well as corporate IT operations and enterprise
                                    security teams. He joined Blockarb after having served at Uniks Corp., helping to
                                    accelerate organic growth and profitability, while also leading strategy and M&A
                                    functions.</p> <br>
                                <p>Vincent has held senior financial leadership roles at top Fortune 50 companies, including
                                    Cisco Systems, Comcast and AT&T and brings key experience in M&A, IPOs, driving internal
                                    innovation strategies and external investment portfolio management.</p>
                            </div>
                        </div>
                    </div>
                </li>

                <li class=" ">
                    <button type="button"
                        class=" bg-blue_100 flex justify-between items-center py-5 px-7 w-full "
                        @click=" selected = selected == 3 ? null : 3 ">
                        <h2 class="font-extrabold base:text-[1.35rem] text-[1.1rem]">Michael Flyn</h2>
                        <div :class=" { 'transition-transform rotate-180 duration-300': selected == 3, 'transition-transform rotate-0 duration-300': selected !== 3  }">
                            <svg width="13" height="10" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </button>

                    <div class=" relative overflow-hidden transition-all duration-500 max-h-0 bg-white"
                        x-ref="container1"
                        x-bind:style="selected == 3 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                        <div class="p-7">
                            <h2 class=" font-bold base:text-[1.2rem] text-[1rem]">Chief Investment Officer</h2>
                            <div class="my-5 base-text">
                                <p >Banker with over 20 years of experience in investment management and
                                    private equity. Prior to joining Blockarb, Flyn was with the Investment Management
                                    Division of Goldman Sachs dealing with portfolio construction for the bank's
                                    professional UHNW and family office clients. Prior to that, he worked for JPMorgan,
                                    HSBC, and EBRD.Flyn studied International Business Relations at the University of
                                    National and World Economy in Sofia and earned an Executive MBA degree from the
                                    University of Oxford.</p>
                            </div>
                        </div>
                    </div>
                </li>

                <li class=" ">
                    <button type="button"
                        class=" bg-blue_100 flex justify-between items-center py-5 px-7 w-full "
                        @click=" selected = selected == 4 ? null : 4 ">
                        <h2 class="font-extrabold base:text-[1.35rem] text-[1.1rem]">Jim Norman</h2>
                        <div :class=" { 'transition-transform rotate-180 duration-300': selected == 4, 'transition-transform rotate-0 duration-300': selected !== 4  }">
                            <svg width="13" height="10" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </button>

                    <div class=" relative overflow-hidden transition-all duration-500 max-h-0 bg-white"
                        x-ref="container1"
                        x-bind:style="selected == 4 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                        <div class="p-7">
                            <h2 class=" font-bold base:text-[1.2rem] text-[1rem]">Chief Operating Officer</h2>
                            <div class="my-5 base-text">
                                <p >Jim is an experienced finance professional with a strong background in
                                    risk management and commodities trading. Starting out his career with Geneva Trading in
                                    Dublin covering derivatives in commodities, rates, FX equities and fixed income. In 2011
                                    Jim established an energy market making and arbitrage desk. In 2013, he established a
                                    market maker covering a diversity of commodities with global reach.</p> <br>
                                <p>Jim graduated from Queen’s University, Belfast (MSc Finance, 2006).</p>
                            </div>
                        </div>
                    </div>
                </li>

                <li class=" ">
                    <button type="button"
                        class=" bg-blue_100 rounded-bl-[10px] rounded-br-[10px] flex justify-between items-center py-5 px-7 w-full "
                        @click=" selected = selected == 5 ? null : 5 ">
                        <h2 class="font-extrabold base:text-[1.35rem] text-[1.1rem]">Dan Neuman</h2>
                        <div :class=" { 'transition-transform rotate-180 duration-300': selected == 5, 'transition-transform rotate-0 duration-300': selected !== 5  }">
                            <svg width="13" height="10" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </button>

                    <div class=" relative overflow-hidden transition-all duration-500 max-h-0 bg-white"
                        x-ref="container1"
                        x-bind:style="selected == 5 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                        <div class="p-7">
                            <h2 class=" font-bold base:text-[1.2rem] text-[1rem]">Chief Technology Officer</h2>
                            <div class="my-5 base-text">
                                <p>Dan started his career in 2001 as a Research Analyst at FME in London. He
                                    became a designated market maker for the electronic markets on all the major derivatives
                                    exchanges in US/EU/USA and headed desks in STIRs, Government Bonds and Stock Futures. In
                                    2010 he moved to Tarex Spectrm where he traded a proprietary book and in 2016 joined
                                    Blockarb where he heads the electronic liquidity provision desk in Crypto. He also set
                                    up and currently heads the Quantitative Trading desk at Blockarb.</p> <br>
                                <p>Dan graduated from ICMA Centre, UK (MSc International Securities, Investment and Banking, 2000).</p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

</x-guest-layout>
