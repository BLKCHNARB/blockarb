<x-guest-layout>
    <div class=" bg-primar bg-about bg-cover relative">
        <div class="absolute top-0 bg-gradient-to-r from-primary opacity-[96%] to-primary-700 left-0 w-full h-full -z-0">
        </div>
        <div class=" lg:max-w-screen-lg px-4 sm:px-8 lg:px-10 py-24 mx-auto relative">
            <div class="grid grid-cols-1 md:grid-cols-12 lg:gap-16 divide- divide-gray-500">
                <div class=" md:col-span-10">

                    <div class=" mt-5">
                        <h1 class=" text-5xl font-bold uppercas text-secondary">Risk Management</h1>
                        <div class="lg:flex items-baseline gap-6">
                            <div class="lg:w-1/3 hidden lg:block">
                                <div class=" h-[0.5px] bg-gray-400"></div>
                            </div>

                            <div class=" lg:w-2/3">
                                <h4 class=" text-lg text-gray-200 pt-[38px] leading-relaxed font-semibol">
                                    Our risk management framework has the objective of preserving capital for our
                                    clients
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

    {{-- <section class=" px-4 sm:px-8 lg:px-20 py-20 mx-auto lg:max-w-screen-lg xl:max-w-screen-xl">
        <div class="flex gap-6 items-baseline">
            <div class=" w-1/4 h-[1px] bg-gray-800 hidden lg:block"></div>
            <h4 class=" mt-3 text-lg text-primary"><span class=" font-bold">Disclaimer:</span> There is no guarantee
                that our investment technology will prevent losses to
                occur. In addition, we may have technological issues that can potentially lead to losses in our
                investments.</h4>
        </div>
    </section> --}}

    <section class=" px-4  bg-gray-100">
        <div class="py-20 mx-auto lg:max-w-screen-lg xl:max-w-screen-xl">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 relative">
                <div class=" lg:col-span-9">
                    <div class=" py-20 border-b-[0.5px] border-gray-400">
                        <h3 class=" text-primary text-2xl">Risk Management Framework</h3>
                        <p class="mt-5">BlockArb prioritizes capital preservation as the cornerstone of its risk
                            management approach, achieved through conservative yet systematic
                            engagement in activities with a strong probability of delivering consistent,
                            albeit moderate, returns</p>
                        {{-- <p class=" mt-5">Managing risk and preserving capital for our clients are of primary importance
                            to us. For this reason, we have developed a rigorous risk management framework monitoring
                            various of types of risks, with the objective of keeping them within predefined limits.</p> --}}

                    </div>

                    <div id="market" class=" py-20 border-b-[0.5px] border-gray-400">
                        <h3 class=" text-primary text-2xl">Market Risk</h3>
                        {{-- <p class=" mt-5">Market risk is the possibility of losses arising from adverse movements in
                            market prices. It is usually measured by the volatility of the instruments in the portfolio,
                            and it can be further classified in equity, interest rate, currency, and commodity risks
                            depending on the types of asset classes in which a portfolio is invested.</p> <br>
                        <p>In order to control our market risk, our automated risk management technology periodically
                            monitors the the volatility in our investment portfolio and rebalances accordingly to keep
                            it within predefined levels set by the investment committee.
                        </p> --}}
                        <p class="mt-5">Market risk refers to the potential for financial losses due to unfavorable
                            fluctuations in market prices. Typically, this risk is gauged by assessing the
                            volatility of the assets within a portfolio</p> <br>
                        <p>We mitigate market risk through a price-agnostic strategy that remains
                            unaffected by adverse price movements. In fact, during periods of
                            heightened volatility, our strategy excels, as it capitalizes on the increased
                            occurrence of market discrepancies in such times.</p>
                    </div>

                    <div id="credit" class=" py-20 border-b-[0.5px] border-gray-400">
                        <h3 class=" text-primary text-2xl">Credit Risk</h3>
                        <p class=" mt-5">Credit risk, also knows as counterparty risk, is the possibility of losses
                            arising from a borrower or a counterparty default by failing to make required payments. In
                            our situation, we have credit risk exposures with counterparties keeping our investment
                            capital in custody, including our prime brokers and custodians.</p> <br>
                        <p>
                            In order to monitor our credit risk, our team periodically reviews our current
                            counterparties to make sure that our credit risk exposure is within predefined limits. In
                            addition, we aim at establishing relationships with multiple counterparties in order to
                            mitigate our financial exposure to one particular entity.
                        </p>

                    </div>

                    <div id="operational" class=" py-20 border-b-[0.5px] border-gray-400">
                        <h3 class=" text-primary text-2xl">Operational Risk</h3>
                        <p class=" mt-5">Operational risk is the risk caused by inadequate internal processes and
                            technological systems within our organization or from external events like regulatory,
                            compliance, and legal risks. In particular, since we rely heavily on trading algorithms to
                            execute our systematic investment strategies, operational risk could arise from glitches in
                            our investment algorithms and errors in the development of our technology.</p> <br>
                        <p>
                            In order to minimize our operational risk, our team adopts a rigorous testing process of our
                            technology and invests in new investment products by using proprietary capital for an
                            initial period before the new investment product is offered to our clients. Since most of
                            our investment technology is proprietary and developed in-house, we have full control and
                            speed in case modifications need to done to our trading algorithms. In addition, our team
                            periodically reviews our backup procedures and disaster recovery systems to minimize
                            downtime in our investment technology and operations.
                        </p> <br>
                    </div>

                    <div id="liquidity" class=" py-20 border-b-[0.5px] border-gray-400">
                        <h3 class=" text-primary text-2xl">Liquidity Risk</h3>
                        <p class=" mt-5">Liquidity risk is the possibility that for a certain time period a given
                            financial asset cannot be traded quickly enough without having a substantial market impact
                            due to a lack of buyers or sellers. This situation arises in particular with alternative
                            investment managers, like private equity, and venture capital companies making investment in
                            private equity or debt securities, or with hedge funds trading illiquid and more exotic
                            securities.
                        </p> <br>
                        <p>
                            We try to minimize our liquidity risk by investing the majority of our capital in public
                            investment products traded on regulated exchanges, meeting certain criteria regarding
                            liquidity and trading volume.
                        </p> <br>

                    </div>

                    <div id="margin" class=" py-20 border-b-[0.5px] border-gray-400">
                        <h3 class=" text-primary text-2xl">Margin Risk</h3>
                        {{-- <p class=" mt-5">Margin risk is the possibility of incurring losses due to margin calls from a
                            broker, and consequent liquidation of positions, arising from a lack of enough capital
                            needed to keep the investment positions opened. In our case, margin risk arises from the
                            fact that our investment strategies trade derivative instruments with embedded leverage due
                            to the use of margin financing.</p> <br>
                        <p>
                            In order to minimize margin and leverage risks, we require our clients to properly fund
                            their investments in our funds by depositing enough capital to minimize margin risk.
                        </p> <br> --}}
                        <p class="mt-5">Margin risk encompasses the potential for losses stemming from
                            broker-imposed margin calls and subsequent liquidation of positions due to
                            insufficient capital to support open investment positions. Our specific
                            exposure to margin risk arises from the nature of our investment strategies,
                            which involve trading derivative instruments with embedded leverage
                            facilitated by margin financing.
                        </p> <br>

                        <p>To effectively mitigate margin and leverage risks, we prudently restrict our
                            trade exposure to a maximum operational threshold of 0.5% of our total
                            capital. This precautionary measure ensures that margin levels never reach
                            a point where investor capital is jeopardized.</p>

                    </div>

                    <div id="execution" class=" py-20 border-b-[0.5px] border-gray-400">
                        <h3 class=" text-primary text-2xl">Execution Risk</h3>
                        <p class=" mt-5">Execution risk is the risk due to the possibility of receiving a different
                            transaction price from the moment when an investment decision is made until its effective
                            execution. It results from many reasons, such as human delays in executing an invesment
                            decision in the case of discretionary investment managers, or from the need to reduce market
                            impact due to a lack of sufficient liquidity in the financial instrument traded in case of
                            large institutional investors.
                        </p> <br>
                        <p>We try to mitigate execution risk by utilizing automated execution algorithms that try to
                            capture investment opportunities as soon as they arise.
                        </p> <br>

                    </div>

                    <div id="asset" class=" py-20 border-b-[0.5px] border-gray-400">
                        <h3 class=" text-primary text-2xl">Asset Class Risk</h3>
                        <p class=" mt-5">Asset class risk is the possibility of losses by having a portfolio
                            concentrated in a particular asset class. This risk arises typically in some hedge fund
                            strategies, like equity long-short, credit, convertible bonds, merger arbitrage, activist
                            investors, or commodity traders who invest in only a particular asset classes. Since a major
                            components in the returns of a particular security are due to systemic factors affecting a
                            particular asset class, measured by its beta, the previous investment entities are usually
                            excessively exposed to risks affecting a particular asset class in a specific time period,
                            unless they hedge their market risk exposure with proper derivative instruments.</p> <br>
                        <p>We aim at reducing out asset class risk exposure by investing in multiple strategies and
                            imperfectly correlated products covering multiple asset classes, including Equity, Fixed
                            Income, Commodities, Currencies, and Volatility.</p>
                    </div>

                    <div id="sector" class=" py-20 border-b-[0.5px] border-gray-400">
                        <h3 class=" text-primary text-2xl">Sector Risk</h3>
                        <p class=" mt-5">Sector risk is the risk arising from investment in a particular market sector,
                            such as technology or biotech. This type of risk is prevalent in equity and credit hedge
                            funds targeting a particular industry, or in venture capital and private equity companies
                            which are highly exposed to the technology sector.</p>
                        <p>In order to minimize sector risk, we have the objective of deploying capital globally on
                            multiple asset classes and different equity sectors through a diversified portfolio.</p>
                    </div>

                    <div id="geographic" class=" py-20 border-b-[0.5px] border-gray-400">
                        <h3 class=" text-primary text-2xl">Geographic Region Risk</h3>
                        <p class=" mt-5">Geographic region risk is the possibility of losses due to the concentration
                            of investments in a particular geographic area. This type of risk is prevalend in hedge
                            funds and alternative investment managers focusing on a particular geographic region, like
                            North America, Europe, Developed World, or Emerging Markets.</p>
                        <p>In order to mitigate geographic region risk, we invest globally on multiple public exchanges
                            and investment products across the world.</p>
                    </div>
                </div>
                <div class=" col-span-3 hidden lg:block">
                    <div class=" sticky top-1/3">
                        <h4 class=" text-primary text-lg">Contents</h4>
                        <ul class=" text-gray-600 font-cabine mt-5">
                            <li class=" capitalize"><a href="#market">Market Risk</a></li>
                            <li class=" capitalize"><a href="#credit">Credit Risk</a></li>
                            <li class=" capitalize"><a href="#operational">Operational Risk</a></li>
                            <li class=" capitalize"><a href="#liquidity">Liquidity Risk</a></li>
                            <li class=" capitalize"><a href="#margin">Margin Risk</a></li>
                            <li class=" capitalize"><a href="#execution">Execution Risk</a></li>
                            <li class=" capitalize"><a href="#asset">Asset Class Risk</a></li>
                            <li class=" capitalize"><a href="#sector">Sector Risk</a></li>
                            <li class=" capitalize"><a href="#geographic">Geographic Region Risk</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
