<x-guest-layout>
    <div class=" bg-primar bg-about bg-cover relative">
        <div class="absolute top-0 bg-gradient-to-r from-primary opacity-[96%] to-primary-700 left-0 w-full h-full -z-0">
        </div>
        <div class=" lg:max-w-screen-lg px-4 sm:px-8 lg:px-10 py-24 mx-auto relative">
            <div class="grid grid-cols-1 md:grid-cols-12 lg:gap-16 divide- divide-gray-500">
                <div class=" md:col-span-10">

                    <div class=" mt-5">
                        <h1 class=" text-5xl font-bold uppercas text-secondary">Technology</h1>
                        <div class="lg:flex items-baseline gap-6">
                            <div class="lg:w-1/3 hidden lg:block">
                                <div class=" h-[0.5px] bg-gray-400"></div>
                            </div>

                            <div class=" lg:w-2/3">
                                <h4 class=" text-lg text-gray-200 pt-[38px] leading-relaxed font-semibol">
                                    We invest in technology with the objective of seamlessly executing our investment
                                    strategies
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
                that our investment technology will prevent losses to occur. In addition, we may have technological
                issues that can potentially lead to losses in our investments.</h4>
        </div>
    </section> --}}

    <section class=" px-4 sm:px-8 lg:px-20 bg-gray-100">
        <div class="py-20 mx-auto lg:max-w-screen-lg xl:max-w-screen-xl">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 relative">
                <div class=" lg:col-span-9">
                    <div class=" py-20 border-b-[0.5px] border-gray-400">
                        <h3 class=" text-primary text-2xl">Trading Technology</h3>
                        <p class=" mt-5">Our proprietary trading technology supports the deployment of investment
                            capital.
                            Since our strategies are fully systematic, we developed most of our investment technology
                            in-house in order to have control over execution quality and satisfy the requirements
                            imposed by
                            our trading algorithms.</p> <br>
                        <p>
                            In order to support our quantitative research process, our quantitative developers have
                            developed internally automated tools that help our quantitative research team in the
                            identification of new sources of alpha in big amounts of data in an effective and efficient
                            way.
                        </p> <br>

                        {{-- <p class=" text-gray-500"> <span class=" font-bold">Disclaimer: </span> these investment
                            products
                            involve substantial risks of loss.</p> --}}

                    </div>

                    <div id="dataretrieval" class=" py-20 border-b-[0.5px] border-gray-400">
                        <h3 class=" text-primary text-2xl">Data Retrieval Technology</h3>
                        <p class=" mt-5">The first step in the deployment of a new quantitative investment strategy is
                            the
                            retrieval of data. While years ago data was in limited supply because of the lack of proper
                            methods for storing and processing data, today the advancement of technology and the
                            reduction
                            in the cost of storage has massively increased the amount of data stored by organizations
                            from
                            all industries. We can say that the problem today is the opposite, in other words too much
                            data
                            is stored and often it cannot be effectively analyzed by human operators, leading to the new
                            field of Big Data.</p> <br>
                        <p>
                            In order to support our team in the objective of discovering new sources of alpha, we take
                            advantage of Big Data by looking at many different datasets from various fields. They
                            include
                            traditional historical financial time series data, fundamental data about companies and
                            macroeconomic sectors, and more sophisticated alternative datasets.
                        </p> <br>

                        <p>Our quantitative developers continuously develop new technological tools to support the
                            requirements of our data scientists to efficiently retrieve and store very large amounts of
                            historical data.</p> <br>

                        {{-- <p class=" text-gray-500"> <span class=" font-bold">Disclaimer: </span> these investment
                            products
                            involve substantial risks of loss.</p> --}}

                    </div>

                    <div id="datacleaning" class=" py-20 border-b-[0.5px] border-gray-400">
                        <h3 class=" text-primary text-2xl">Data Cleaning Scripts</h3>
                        <p class=" mt-5">A common problem in dealing with data is that most of the time the datasets
                            contain errors, or a not structured in the way required by the quantitative researchers and
                            analysts, thus they need to be cleaned. While years ago, where the amount of data to by
                            analyzed
                            was limited and it could be done by a human operator, nowadays the vast amount of data
                            recorded
                            makes it impractical to manually clean the data at disposal and makes it necessary for
                            organizations to adopt automated tools.</p> <br>
                        <p>
                            In order to support the vast amount of data that needs to be cleaned and checked for
                            potential
                            errors, our technology team has implemented various automated tools that help our quants run
                            their analyses and reduce the occurrence of faulty data which could lead to biased
                            backtesting
                            and erroneous conclusions.
                        </p>

                    </div>

                    <div id="analysis" class=" py-20 border-b-[0.5px] border-gray-400">
                        <h3 class=" text-primary text-2xl">Analysis Tools</h3>
                        <p class=" mt-5">After the data has been cleaned, our quantitative researcher can start
                            exploring
                            the data using the scientific method to find patterns, formulate hypotheses, and test them
                            within a rigorous research framework.</p> <br>
                        <p>
                            In order to run their analyses on dataset containing millions of records, our quants need
                            advanced technological tools, which enable them to run sophisticated queries and statistical
                            analyses on data with speed, to visualize patterns, and to discover relationships within
                            disparate datasets.
                        </p> <br>

                        <p>Among the technology used in the analysis phase there are advanced statistical analyses
                            methods,
                            machine learning techniques, and sophisticated visualization and patter recognition tools.
                        </p>

                    </div>

                    <div id="backtesting" class=" py-20 border-b-[0.5px] border-gray-400">
                        <h3 class=" text-primary text-2xl">Backtesting Technology</h3>
                        <p class=" mt-5">After our researchers believe that new sources of alpha have been found, they
                            run
                            backtests spanning long historical data to increase the probability of finding robust
                            signals.
                        </p> <br>
                        <p>
                            Since the backtesting phase is very time consuming due to the large amount of historical
                            data on
                            which to run the strategy, our quants need advanced algorithms and enough computing
                            processing
                            power in order to complete their tests as fast as possible.
                        </p> <br>

                        <p>In order to support the speed requirements imposed by the backtesting phase, our team of
                            quantitative developers and system administrators check that fast testing tools are
                            developed
                            and that our researchers have the computing resources needed to run their tests quickly.</p>
                        <br>


                    </div>

                    <div id="execution" class=" py-20 border-b-[0.5px] border-gray-400">
                        <h3 class=" text-primary text-2xl">Execution Algorithms</h3>
                        <p class=" mt-5">Once the hypotheses formulated by our researchers have been validated through
                            statistical analyses and backtesting, the next step is to deploy the new investment
                            strategies
                            into production and execute them.</p> <br>
                        <p>
                            In order to connect to our prime brokers, exchanges, and custodians to execute our
                            investment
                            orders, our technology team of quant developers deploys execution and network algorithms
                            that
                            enable our funds to connect to our counterparties and execute our investment strategies. In
                            addition, our team of system administrators and engineers checks that all the connectivity
                            is in
                            place and promptly intervenes in case of network and technological issues.
                        </p> <br>

                        <p>Our quantitative team has the objective of performing periodic research into market
                            microstructure to deploy new execution algorithms that reduce our market impact and
                            execution
                            costs.</p>

                    </div>

                    <div id="monitoring" class=" py-20 border-b-[0.5px] border-gray-400">
                        <h3 class=" text-primary text-2xl">Monitoring Technology</h3>
                        <p class=" mt-5">Once a strategy is put into production and orders can be sent to the prime
                            brokers
                            and exchanges, our team monitors the investment strategies to make sure that everything is
                            running properly and to promptly intervene when the situation dictates.
                        </p> <br>
                        <p>
                            To facilitate the tasks of our trading team, our developers have the objective of developing
                            new
                            monitoring tools that help us in the monitornig of our investment strategies.
                        </p> <br>

                    </div>

                    <div id="operational" class=" py-20 border-b-[0.5px] border-gray-400">
                        <h3 class=" text-primary text-2xl">Operational Infrastructure</h3>
                        <p class=" mt-5">In order to run our investment strategies into production and to support the
                            development of new investment strategies by our quantitative researcher, our technology team
                            needs to periodically review our technological infrastructure and upgrade it when needed.
                            Our
                            live trading algorithms are run both on local premises and on-the-cloud in order to minimize
                            the
                            possibility of interruptions due to technological issues and in order to take advantage of a
                            scalable computing power which can handle the requirements of our business.</p> <br>
                    </div>

                    <div id="backup" class=" py-20 border-b-[0.5px] border-gray-400">
                        <h3 class=" text-primary text-2xl">Backup & Disaster Recovery Systems</h3>
                        <p class=" mt-5">Our technology team has the objective of reviewing our backup and disaster
                            recovery system to check that it meets predefined service criteria set by the management,
                            and in
                            order to minimize the possibility of interruption in our investment operations due to
                            technological issues, such as power outages, loss of internet and network connection, or
                            server
                            breakdowns.</p>
                    </div>
                </div>
                <div class=" lg:col-span-3  hidden lg:block">
                    <div class=" sticky top-1/3">
                        <h4 class=" text-primary text-lg">Contents</h4>
                        <ul class=" text-gray-600 font-cabine mt-5">
                            <li class=" capitalize"><a href="#dataretrieval">Data Retrieval Technology</a></li>
                            <li class=" capitalize"><a href="#datacleaning">Data Cleaing scripts</a></li>
                            <li class=" capitalize"><a href="#analysis">Analysis Tools</a></li>
                            <li class=" capitalize"><a href="#backtesting">Backtesting Technology</a></li>
                            <li class=" capitalize"><a href="#execution">Execution algorithms</a></li>
                            <li class=" capitalize"><a href="#monitoring">monitoring Technology</a></li>
                            <li class=" capitalize"><a href="#operational">Operational Infrastructure</a></li>
                            <li class=" capitalize"><a href="#backup">Backup & disaster recovery systems</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
