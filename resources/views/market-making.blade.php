<x-guest-layout>
    {{-- hero --}}
    <div class=" bg-[#1743e4b5] relative padding-y padding-x">
        <div class=" w-[80%] mx-auto base:py-32 py-20 text-center text-shadow text-white ">
            <h1 class="font-extrabold lg:text-xxxl base:text-xxl text-xl">Market Making</h1>
            <p class=" md:text-lg base:text-base sm:text-sm text-s pt-[20px] leading-relaxed">
                We help kick-start new crypto assets & exchanges with crypto Market Making &
                liquidity services. Crypto market making involves providing liquidity by submitting
                both bid and ask limit orders
            </p>
        </div>
    </div>

     {{-- intro --}}
     <section class="padding-y padding-x">
        <div class=" my-10 leading-8">
            <p>
                Blockarb Technology provides crypto tokens and exchanges with proprietary scripts and algorithms
                to provide consistent spreads, healthy order books and access to third-party ask-bid orders on
                other exchanges. It helps in democratising liquidity and customisation as per expected ROI. We
                use Machine Learning and high-frequency trading as well to deliver Crypto market making services.
            </p>
            <br>
            <p>
                New crypto assets usually face lots of challenges such as low liquidity, small trading volume,
                Price manipulation, little interest by investors and difficulty to get listed on major crypto exchanges etc.
            </p>
        </div>
    </section>

    {{-- overview--}}
    <section class="padding-x base:pb-16 pb-10 ">
        <div class="base:text-start text-center">
            <h2 class="font-extrabold mb-5 base:text-[1.7rem] text-[1.2rem] base:text-start text-center "> About crypto <span class="text-blue_600">market making</span>  </h2>
            <p class="leading-7">
                Crypto Market making is providing liquidity for crypto
                assets/tokens/coins on centralised exchanges. This is done by quoting the buy and sell price
                of a crypto asset simultaneously to bridge the gap between the buyers and sellers.
            </p>
            <a href="{{ route('invest') }}"
            class=" group z-10 relative mt-3 inline-flex py-1 rounded-sm bg-secondary border-2 border-transparent px-4">
            <span class=" mr-2 font-bold text-blue_800">Investment Strategies</span>
            <div
                class="w-6 h-6 rounded-ful bg-whit p-1 flex items-center group-hover:translate-x-2 transition">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M1 7.99999C1 7.86738 1.05268 7.74021 1.14645 7.64644C1.24021 7.55267 1.36739 7.49999 1.5 7.49999H13.293L10.146 4.35399C10.0521 4.2601 9.99937 4.13277 9.99937 3.99999C9.99937 3.86721 10.0521 3.73988 10.146 3.64599C10.2399 3.5521 10.3672 3.49936 10.5 3.49936C10.6328 3.49936 10.7601 3.5521 10.854 3.64599L14.854 7.64599C14.9006 7.69244 14.9375 7.74761 14.9627 7.80836C14.9879 7.8691 15.0009 7.93422 15.0009 7.99999C15.0009 8.06576 14.9879 8.13088 14.9627 8.19162C14.9375 8.25237 14.9006 8.30754 14.854 8.35399L10.854 12.354C10.7601 12.4479 10.6328 12.5006 10.5 12.5006C10.3672 12.5006 10.2399 12.4479 10.146 12.354C10.0521 12.2601 9.99937 12.1328 9.99937 12C9.99937 11.8672 10.0521 11.7399 10.146 11.646L13.293 8.49999H1.5C1.36739 8.49999 1.24021 8.44731 1.14645 8.35354C1.05268 8.25978 1 8.1326 1 7.99999Z"
                        fill="#1744E4" />
                </svg>

            </div>
        </a>   
        </div>
    </section>

    {{-- who is --}}
    <section class="padding-x base:pb-16 pb-10">
        <div class="base:text-start text-center">
            <h2 class="font-extrabold mb-5 base:text-[1.7rem] text-[1.2rem] base:text-start text-center "> Who is a Crypto <span class="text-blue_600">Market Maker?</span> </h2>
            <p class="leading-7">
                Big institutions or brokerage houses with huge cash reserves act as market maker for crypto and
                other securities by buying and selling crypto. They aim to keep financial markets liquid while
                also generating a profit for themselves.

            </p>
            <br>
            <p class="leading-7">
                A Market maker ensures that you get the needed volume at
                the ask price whenever you try to sell or vice versa. This helps in generating better investor
                interest in markets where trading is low and there is a wide gap between the sell and ask price.
            </p>
        </div>
    </section>

    {{-- automated --}}
    <section class="padding-x base:pb-16 pb-10">
        <div class="base:text-start text-center">
            <h2 class="font-extrabold mb-5 base:text-[1.7rem] text-[1.2rem] base:text-start text-center "> Automated <span class="text-blue_600">Market Makers</span> </h2>
            <p class=" leading-7">
                Earlier when the technology was not as developed, order books were manually initiated trades to
                increase liquidity. However, this caused slippage and price discovery latency and also at times
                price manipulation accusation. AMM removes these problems by using software and removing the
                human factor. With technology instant trades and transparency became possible.
            </p>
        </div>
    </section>

    {{-- decentralized --}}
    <section class="padding-x base:pb-16 pb-10">
        <div class="base:text-start text-center">
            <h2 class="font-extrabold mb-5 base:text-[1.7rem] text-[1.2rem] base:text-start text-center "> Decentralized <span class="text-blue_600">Market Making</span> </h2>
            <p class=" leading-7">
                Automated Market Making software does the work of providing liquidity in Decentralised Exchanges
                (DEX). There are algorithms that compute the price and automated software places the bid.
                However, in DEX, traditional order books are replaced by liquidity pools composed of different
                crypto assets. AMMs quote the price between two digital assets simultaneously. Token holders
                place their tokens within this pool in AMM. Liquidity providers earn passive income on their
                deposits that is proportional to the percentage of liquidity they provide to a pool.
            </p>
        </div>
    </section>

    {{-- liquidity --}}
    <section class="padding-x base:pb-16 pb-10 border-b">
        <div class="base:text-start text-center">
            <h2 class="font-extrabold mb-5 base:text-[1.7rem] text-[1.2rem] base:text-start text-center "> <span class="text-blue_600">Market Making</span> and Liquidity Software </h2>
            <p class=" leading-7">
                Our software provides trading solutions and enhances liquidity through cutting-edge technology.
                Crypto assets suffer from low liquidity, therefore there is a huge need for market making.
                Blockarb Technology fulfils this need through Crypto market making services and customised AMM
                software. You can trade tokens, coins, crypto pairs on multiple exchanges and liquidity pools
                through our AMM. Some of the benefits are pricing arbitrage, real-time monitoring, metrics
                including day trading volume, open volume on the market and P&L.
            </p>
        </div>
    </section>

</x-guest-layout>
