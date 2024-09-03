@extends('frontoffice.layouts.app')

@section('content')

<div class="section__article-hero">
    <div class="padding-section__large top-p-none">
        <div class="container-large">
            <div class="article__parent">
                <div class="article__child">
                    <a href="{{route('front-office.blogs.index')}}" class="back-button_wrap w-inline-block">
                        <div class="close-embed_svg w-embed">
                            <svg width="26" height="20" viewBox="0 0 26 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.0058 0.15918L0 10.0001C2.50965 12.4615 7.49637 17.38 10.0056 19.8413L11.2683 18.6196C9.01062 16.406 6.0246 13.4562 3.38963 10.8687H25.1313L25.1313 9.13124L3.38963 9.13124L11.2685 1.39386L10.0058 0.15918Z" fill="currentColor" />
                            </svg>
                        </div>
                        <div class="p-tiny is--bgtext-gray">Back to Blog</div>
                    </a>
                </div>
                <div class="arrticle_parent article_wrapper">
                    <div class="article-hero_wrap">
                        <img src="/front-office/images/Card-Payments.png" loading="lazy" alt="Card-Payments" sizes="(max-width: 479px) 87vw, (max-width: 767px) 76vw, (max-width: 1919px) 53vw, 955.3203125px" />
                    </div>
                    <div class="article-heading_wrap">
                        <h1 class="h4">A New Era in Financial Transactions</h1>
                        <div class="blog-info_wrap article">
                            <div class="category-wrap">
                                <div fs-cmsfilter-field="categories" class="p-tiny is--bgtext-dark">Product
                                </div>
                            </div>
                            <div class="p-tiny is--bgtext-gray">June 28, 2023</div>
                        </div>
                    </div>
                    <div class="article_wrap">
                        <div class="sepparator_article"></div>
                        <div class="c-rich-text w-richtext">
                            <h2>Introduction</h2>
                            <p>In this digitalized and evolving world of finance, consumers and businesses alike
                                have a secure and efficient way to manage their transactions. Open banking is
                                the new paradigm, which promises innovative solutions.</p>
                            <p>‍</p>
                            <p>In this blog post you&#x27;ll take a detailed look at two payment methods,
                                focusing on these open banking offerings over ad card payments and platforms
                                like Contiant being at the forefront of the industry.</p>
                            <p>‍</p>
                            <h2>What is Open Banking?</h2>
                            <p>Open Banking is a technical solution for financial institutions and banks to
                                connect their databases through APIs. This fosters a partnership environment
                                where third-party developers can build and innovate new services and
                                applications. This is bringing a drastic change in the financial ecosystem.</p>
                            <p>‍</p>
                            <h2>The Limitations of Card Payments</h2>
                            <p>Card payment is popular and widely used among consumers and businesses, however
                                they have their setbacks such as: </p>
                            <p>‍</p>
                            <p>
                                <strong>High fees:</strong> these significantly reduce business profits,
                                especially for small transactions and small businesses.
                            </p>
                            <p>
                                <strong>Chargebacks:</strong> When a consumer disputes a transaction, the funds
                                are taken from the business account and returned to the consumer. This leads to
                                lost sales and additional charges.
                            </p>
                            <p>
                                <strong>Delayed Settlements: </strong>It can take several days for card
                                transactions to be processed and deposited into the business bank account.
                            </p>
                            <p>‍</p>
                            <h2>The Advantages of Open Banking</h2>
                            <p>‍</p>
                            <p>Open banking has several advantages over traditional banking, including:</p>
                            <p>‍</p>
                            <p>
                                <strong>Lower fees:</strong> Contiant offers an open banking payment solution
                                that can be three times cheaper than traditional card payments.
                            </p>
                            <p>
                                <strong>No Chargebacks: </strong>The risk of chargebacks is eliminated with open
                                banking, thus reducing the financial and administrative burden on businesses.
                            </p>
                            <p>
                                <strong>Instant settlements:</strong> Businesses and consumers can have instant
                                access to their funds, improving their cash flow.
                            </p>
                            <p>
                                <strong>Security and fraud prevention</strong>: Open banking gives security to
                                businesses by verifying the identity of users and thus reducing the risk of
                                fraud.
                            </p>
                            <p>
                                <strong>Unique user experience:</strong> Contiant provides a seamless and fast
                                checkout experience, helping conversions and customer satisfaction.
                            </p>
                            <p>
                                <strong>Access to data and analytics:</strong> Businesses have continuous access
                                to detailed information and history of transactions and account balances.
                            </p>
                            <p>‍</p>
                            <p>Contiant&#x27;s open banking platform provides a &quot;one payments power
                                grid&quot; that works with 95% of all the EU banks such as Barclays, HSBC, Bank
                                of Scotland, Revolut Bank, Deutsche Bank, and Citi Bank,offering a robust and
                                versatile solution for businesses.</p>
                            <p>‍</p>
                            <h2>Open Banking Across Industries</h2>
                            <p>‍</p>
                            <p>Contiant has spanned several industries, providing innovative customized
                                solutions:</p>
                            <p>‍</p>
                            <p>
                                <strong>Lending:</strong> Open Banking provides income and expenditure analysis,
                                balance checks, etc
                            </p>
                            <p>
                                <strong>iGaming and Forex:</strong> Helps reduce fraud, players can receive
                                their
                                winnings in seconds, increasing security and user satisfaction.
                            </p>
                            <p>
                                <strong>Crypto: </strong>Users can load their FIAT accounts in two clicks and
                                receive their funds in seconds.
                            </p>
                            <p>Jump into the future of finance with Contiant!</p>
                        </div>
                        <div class="sepparator_article"></div>
                        <div class="share-to-social__parent"><a r-share-facebook="1" href="#" target="_blank" class="share-icon w-inline-block">
                                <img alt="icon" loading="lazy" src="/front-office/images/fa-icon.svg" class="social-img" />
                            </a>
                            <a r-share-twitter="1" href="#" target="_blank" class="share-icon w-inline-block">
                                <img alt="icon" loading="lazy" src="/front-office/images/tw-icon.svg" class="social-img" />
                            </a>
                            <a r-share-linkedin="1" href="#" target="_blank" class="share-icon w-inline-block">
                                <img alt="icon" loading="lazy" src="/front-office/images/li-icon-1.svg" class="social-img" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="article__child second">
                    <div class="read-n_wrap">
                        <div class="h6 is--bgtext-gray">Read Next</div>
                    </div>
                    <div fs-cmsprevnext-element="next"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection