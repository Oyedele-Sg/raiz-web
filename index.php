<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Raiz | Seamless banking, global transactions, and spending—all in one place</title>

        <?php 
            include('modules/header-info.php'); 
            include('modules/config.php'); 
            include('modules/base.php'); 
        ?>
        <base href="<?= $base ?>">
    </head>

    <body>
        <?php include('modules/main-nav.php'); ?>

        <div class="body-content">
            <section class="ud-hero hero">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <div class="hero-header wow fadeInUp" data-wow-delay=".2s">
                                <h1 class="hero-title">One app for all your money moves.</h1>
                                <div class="hero-text--wrapper">
                                    <h3 class="hero-subtitle">Send, spend, save, and swap — anywhere, anytime. You just got Raized.</h3>
                                    <div class="btn-action--wrapper">
                                        <a href="#" class="get-app--btn" data-bs-toggle="modal" data-bs-target="#downloadApp">
                                            <div class="text-move--wrapper">
                                                <div class="text-move">
                                                    <div class="button-text">Get the App</div>
                                                    <div class="button-text is_2">Get the App</div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="usd-banking" class="get-app--btn outline-btn">
                                            <div class="text-move--wrapper">
                                                <div class="text-move">
                                                    <div class="button-text">Learn More</div>
                                                    <div class="button-text is_2">Learn More</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-lg-6 col-sm-12">
                            <img src="assets/images/hero-bg-image.webp" class="hero-bg-image wow fadeInUp" data-wow-delay=".35s" alt="Hero Image"/>
                        </div> -->
                    </div>
                </div>
            </section>

            <section class="image-slider--block">
                <div class="image-slider--container">
                    <div class="image-slider--wrapper">
                        <div class="image-holder">
                            <ul class="image-lists">
                                <li class="image-list--item">
                                    <img src="assets/images/scrolling-image-1.avif" class="image" alt=""/>
                                </li>
                                <li class="image-list--item">
                                    <img src="assets/images/scrolling-image-2.avif" class="image" alt=""/>
                                </li>
                                <li class="image-list--item">
                                    <img src="assets/images/scrolling-image-3.avif" class="image" alt=""/>
                                </li>
                                <li class="image-list--item">
                                    <img src="assets/images/scrolling-image-4.avif" class="image" alt=""/>
                                </li>
                                <li class="image-list--item">
                                    <img src="assets/images/scrolling-image-5.avif" class="image" alt=""/>
                                </li>
                                <li class="image-list--item">
                                    <img src="assets/images/scrolling-image-6.avif" class="image" alt=""/>
                                </li>
                            </ul>
                            <ul class="image-lists">
                                <li class="image-list--item">
                                    <img src="assets/images/member1.webp" class="image" alt=""/>
                                </li>
                                <li class="image-list--item">
                                    <img src="assets/images/member2.webp" class="image" alt=""/>
                                </li>
                                <li class="image-list--item">
                                    <img src="assets/images/member3.webp" class="image" alt=""/>
                                </li>
                                <li class="image-list--item">
                                    <img src="assets/images/member4.webp" class="image" alt=""/>
                                </li>
                                <li class="image-list--item">
                                    <img src="assets/images/member5.webp" class="image" alt=""/>
                                </li>
                                <li class="image-list--item">
                                    <img src="assets/images/member6.webp" class="image" alt=""/>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="intro">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <div class="intro-grid">
                                <h2 class="large-text wow fadeInUp" data-wow-delay=".15s">Simplified banking designed for you, controlled by you. (/reɪz am/)</h2>
                                <div class="small-text wow fadeInUp" data-wow-delay=".2s">
                                    <span class="active">Experience personalized finance, track your spending with ease, learn through gamified challenges, express yourself with customized cards, and enjoy frequent rewards. Raiz is your all-in-one financial solution designed to empower you and simplify your financial journey.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="features-main">
                <div class="container">
                    <div class="section-title--wrap">
                        <h2 class="section-title">Banking at your fingertips.</h2>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <div class="r-features--container">
                                <div class="r-features--group top-row">
                                    <div class="r-features--card">
                                        <div class="card-content">
                                            <div class="content-wrap">
                                                <div class="card-top">
                                                    <div class="icon-wrapper">
                                                        <svg viewBox="0 0 40 41" focusable="false" class="svg-icon"><path fill="none" d="M17.3333 16.7119H24.1667V23.5452M16 24.8786L24 16.8786" stroke="currentColor" stroke-width="1.5"></path></svg>
                                                    </div>
                                                    <h3 class="large-text">USD Banking</h3>
                                                </div>
                                                <div class="card-mid">
                                                    <div class="top-text">Access and manage your dollars with ease, no hidden fees or complicated steps.</div>
                                                    <div class="bottom-text">Raiz gives you seamless USD banking to save, send, and transact globally — right from your app.</div>
                                                </div>
                                                <div class="card-bottom">
                                                    <div class="btn-action--wrapper">
                                                        <a href="#" class="btn-action">
                                                            <span>Learn more</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="abl-image--wrapper">
                                                    <div class="abl-image">
                                                        <img class="image" src="assets/images/r-feature-image-1.webp" alt="Product Slide Selector" loading="lazy">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="r-features--card">
                                        <div class="card-content">
                                            <div class="content-wrap">
                                                <div class="card-top">
                                                    <div class="icon-wrapper">
                                                        <svg viewBox="0 0 40 41" focusable="false" class="svg-icon"><path fill="none" d="M17.3333 16.7119H24.1667V23.5452M16 24.8786L24 16.8786" stroke="currentColor" stroke-width="1.5"></path></svg>
                                                    </div>
                                                    <h3 class="large-text">Send</h3>
                                                </div>
                                                <div class="card-mid">
                                                    <div class="top-text">Move money across borders quickly, securely, and without the usual hassle.</div>
                                                    <div class="bottom-text">Raiz makes sending money internationally as easy as a local transfer — fast, transparent, and reliable.</div>
                                                </div>
                                                <div class="card-bottom">
                                                    <div class="btn-action--wrapper">
                                                        <a href="#" class="btn-action">
                                                            <span>Learn more</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="abl-image--wrapper">
                                                    <div class="abl-image">
                                                        <img class="image" src="assets/images/r-feature-image-2.webp" alt="Product Slide Selector" loading="lazy">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="r-features--group bottom-row">
                                    <div class="r-features--card">
                                        <div class="card-content">
                                            <div class="content-wrap">
                                                <div class="card-top">
                                                    <div class="icon-wrapper">
                                                        <svg viewBox="0 0 40 41" focusable="false" class="svg-icon"><path fill="none" d="M17.3333 16.7119H24.1667V23.5452M16 24.8786L24 16.8786" stroke="currentColor" stroke-width="1.5"></path></svg>
                                                    </div>
                                                    <h3 class="large-text">Swap</h3>
                                                </div>
                                                <div class="card-mid">
                                                    <div class="top-text">Swap currencies instantly at competitive rates whenever you need.</div>
                                                    <div class="bottom-text">Raiz lets you exchange your money into USD, GBP, EUR, and more in just a few taps.</div>
                                                </div>
                                                <div class="card-bottom">
                                                    <div class="btn-action--wrapper">
                                                        <a href="#" class="btn-action">
                                                            <span>Learn more</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="abl-image--wrapper">
                                                    <div class="abl-image">
                                                        <img class="image" src="assets/images/r-feature-image-1.webp" alt="Product Slide Selector" loading="lazy">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="r-features--card">
                                        <div class="card-content">
                                            <div class="content-wrap">
                                                <div class="card-top">
                                                    <div class="icon-wrapper">
                                                        <svg viewBox="0 0 40 41" focusable="false" class="svg-icon"><path fill="none" d="M17.3333 16.7119H24.1667V23.5452M16 24.8786L24 16.8786" stroke="currentColor" stroke-width="1.5"></path></svg>
                                                    </div>
                                                    <h3 class="large-text">Card</h3>
                                                </div>
                                                <div class="card-mid">
                                                    <div class="top-text">Spend smarter globally with your Raiz multi-currency virtual card.</div>
                                                    <div class="bottom-text">Get a secure, flexible card that works anywhere — shop, subscribe, and pay in the currencies you choose.</div>
                                                </div>
                                                <div class="card-bottom">
                                                    <div class="btn-action--wrapper">
                                                        <a href="#" class="btn-action">
                                                            <span>Learn more</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="abl-image--wrapper">
                                                    <div class="abl-image">
                                                        <img class="image" src="assets/images/r-feature-image-2.webp" alt="Product Slide Selector" loading="lazy">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php include('modules/video-block.php'); ?>

            <section class="more-features">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <div class="content-wrap">
                                <h2 class="large-text wow fadeInUp" data-wow-delay=".2s"><span class="text-cursive">Raizing</span> the bar in banking.</h2>
                                <p class="small-text wow fadeInUp" data-wow-delay=".3s">Take control of your finances. Earn cashback, get paid early, and split bills with ease. Raiz puts you in charge.</p>
                            </div>
                            
                            <div class="feature-item--wrapper">
                                <div class="feature-item">
                                    <div class="image-wrapper wow fadeInUp" data-wow-delay=".4s">
                                        <img class="image" src="assets/images/reach-financial-goals.webp" alt="Reach your financial goals faster">
                                    </div>
                                    <div class="copy-wrapper wow fadeInUp" data-wow-delay=".45s">
                                        <div class="large-text">Reach your financial goals faster</div>
                                        <div class="small-text">Set personalized savings goals, track progress, and automate transfers to watch your money grow effortlessly.</div>
                                    </div>
                                </div>

                                <div class="feature-item">
                                    <div class="image-wrapper wow fadeInUp" data-wow-delay=".5s">
                                        <img class="image" src="assets/images/hasslefree-bill-splitting.webp" alt="Hassle-free bill splitting with friends">
                                    </div>
                                    <div class="copy-wrapper wow fadeInUp" data-wow-delay=".55s">
                                        <div class="large-text">Hassle-free bill splitting with friends</div>
                                        <div class="small-text">Settling bills with your friends is now easy. Split evenly or vary the amounts for people who've contributed more.</div>
                                    </div>
                                </div>

                                <div class="feature-item">
                                    <div class="image-wrapper wow fadeInUp" data-wow-delay=".6s">
                                        <img class="image" src="assets/images/take-control-of-your-spending.webp" alt="Take control of your spending and Raiz your money game">
                                    </div>
                                    <div class="copy-wrapper wow fadeInUp" data-wow-delay=".65s">
                                        <div class="large-text">Take control of your spending and Raiz your money game</div>
                                        <div class="small-text">Track spending, create budgets, and gain valuable insights to make informed financial decisions.</div>
                                    </div>
                                </div>
                            </div>

                            <div class="db-card--grid">
                                <div class="card-image--wrapper wow fadeInUp" data-wow-delay=".7s">
                                    <img src="assets/images/raiz-card-grouped-edited.webp" loading="lazy" alt="" class="card-image">
                                </div>
                                <div class="card-content--wrapper wow fadeInUp" data-wow-delay=".75s">
                                    <div class="card-content">
                                        <h3 class="large-text"><span class="">Spend in style</span> every day</h3>
                                        <p class="body-text">Vibrant contactless Raiz Debit card to make payments anywhere in the world. Physical or virtual, choose what suits you.</p>
                                    </div>
                                </div>
                                <div class="card-features--wrapper">
                                    <div class="card-features">
                                        <div class="card-features--list wow fadeInUp" data-wow-delay=".8s">
                                            <img src="assets/images/icons/withdrawal-icon.svg" loading="lazy" alt="" class="card-icon">
                                            <h3 class="card-heading">Withdrawals</h3>
                                            <p class="card-text">Cash withdrawal at 25,000 ATMs worldwide.</p>
                                        </div>
                                        <div class="card-features--list wow fadeInUp" data-wow-delay=".85s">
                                            <img src="assets/images/icons/lock-icon.svg" loading="lazy" alt="" class="card-icon">
                                            <div class="card-heading">Freeze or Lock</div>
                                            <p class="card-text">Keep your money safe with freezing or locking functions.</p>
                                        </div>
                                        <div class="card-features--list wow fadeInUp" data-wow-delay=".9s">
                                            <img src="assets/images/icons/cashback-icon.svg" loading="lazy" alt="" class="card-icon">
                                            <div class="card-heading">Earn Cashbacks</div>
                                            <p class="card-text">Get rewarded for using your Raiz debit card.</p>
                                        </div>
                                        <div class="card-features--list wow fadeInUp" data-wow-delay=".95s">
                                            <img src="assets/images/icons/shop-online-icon.svg" loading="lazy" alt="" class="card-icon">
                                            <div class="card-heading">Shop Online Securely</div>
                                            <p class="card-text">Enjoy added security with your Raiz debit card.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="why-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <div class="why-grid">
                                <div class="why-item wow fadeInUp" data-wow-delay=".3s">
                                    <img src="assets/images/icons/facelock-icon.svg" loading="lazy" alt="Safe Log In" class="svg-icon">
                                    <div class="large-text">Safe Log In</div>
                                    <p class="small-text">Securely log in to your app using Face ID, Touch ID or Fingerprint Scanner.</p>
                                </div>
                                <div class="why-item wow fadeInUp" data-wow-delay=".4s">
                                    <img src="assets/images/icons/identity-check-icon.svg" loading="lazy" alt="Identity Check" class="svg-icon">
                                    <div class="large-text">Identity Check</div>
                                    <p class="small-text">To ensure it's really you, we ask for a government-issued ID with your photo, plus a liveness check.</p>
                                </div>
                                <div class="why-item wow fadeInUp" data-wow-delay=".5s">
                                    <img src="assets/images/icons/always-safe-icon.svg" loading="lazy" alt="Always Safe" class="svg-icon">
                                    <div class="large-text">Always Safe</div>
                                    <p class="small-text">Securely log in to your app using Face ID, Touch ID or Fingerprint Scanner.</p>
                                </div>
                                <div class="why-item wow fadeInUp" data-wow-delay=".6s">
                                    <img src="assets/images/icons/notifications-icon.svg" loading="lazy" alt="" class="svg-icon">
                                    <div class="large-text">Notifications</div>
                                    <p class="small-text">Get instant notifications every time you spend with your card.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="scrolling-currency--block">
                <div class="scrolling-currency--container">
                    <div class="scrolling-currency--wrapper">
                        <div class="currency-group">
                            <div class="currency-item">
                                <div class="icon-wrapper">
                                    <span>$</span>
                                </div>
                                <div class="currency-label">United States</div>
                            </div>
                            <div class="currency-item">
                                <div class="icon-wrapper">
                                    <span>$</span>
                                </div>
                                <div class="currency-label">Canada</div>
                            </div>
                            <div class="currency-item">
                                <div class="icon-wrapper">
                                    <span>£</span>
                                </div>
                                <div class="currency-label">England</div>
                            </div>
                            <div class="currency-item">
                                <div class="icon-wrapper">
                                    <span>₦</span>
                                </div>
                                <div class="currency-label">Nigeria</div>
                            </div>
                            <div class="currency-item">
                                <div class="icon-wrapper">
                                    <span>$</span>
                                </div>
                                <div class="currency-label">Mexico</div>
                            </div>
                            <div class="currency-item">
                                <div class="icon-wrapper">
                                    <span>€</span>
                                </div>
                                <div class="currency-label">Portugal</div>
                            </div>
                            <div class="currency-item">
                                <div class="icon-wrapper">
                                    <span>€</span>
                                </div>
                                <div class="currency-label">Sweden</div>
                            </div>
                        </div>
                        <div class="currency-group">
                            <div class="currency-item">
                                <div class="icon-wrapper">
                                    <span>₵</span>
                                </div>
                                <div class="currency-label">Ghana</div>
                            </div>
                            <div class="currency-item">
                                <div class="icon-wrapper">
                                    <span>R</span>
                                </div>
                                <div class="currency-label">South Africa</div>
                            </div>
                            <div class="currency-item">
                                <div class="icon-wrapper">
                                    <span>€</span>
                                </div>
                                <div class="currency-label">Netherland</div>
                            </div>
                            <div class="currency-item">
                                <div class="icon-wrapper">
                                    <span>KES</span>
                                </div>
                                <div class="currency-label">Kenya</div>
                            </div>
                            <div class="currency-item">
                                <div class="icon-wrapper">
                                    <span>€</span>
                                </div>
                                <div class="currency-label">Germany</div>
                            </div>
                            <div class="currency-item">
                                <div class="icon-wrapper">
                                    <span>RF</span>
                                </div>
                                <div class="currency-label">Rwanda</div>
                            </div>
                            <div class="currency-item">
                                <div class="icon-wrapper">
                                    <span>£</span>
                                </div>
                                <div class="currency-label">Scotland</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="customer-ctg">
                <div class="container">
                    <div class="customer-ctg--grid">
                        <a href="#" class="customer-ctg--card">
                            <div class="image-wrapper">
                                <div class="bg-overlay"></div>
                                <img src="https://cdn.prod.website-files.com/663608d6085a91363816e0cb/674e404350f0be3546f7119a_1.avif"  class="layout-image" width="Auto" alt="Individuals">
                            </div>
                            <div class="card-content">
                                <div class="card-content--hidden">
                                    <div class="card-content--bottom">
                                        <div class="text-wrapper">
                                            <h3 class="large-text">Individuals</h3>
                                            <p class="small-text">Simple banking for your daily life. <br>Send, spend, save, and swap — all in one place.</p>
                                        </div>
                                        <div class="action-btn--wrapper">
                                            <div class="action-btn">
                                                <span>Lean more</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="https://cdn.prod.website-files.com/663608d6085a91363816e0cb/66573d0b284b20f6473c17ad_Frame%202087326865.avif" class="scribbles" loading="lazy" alt="">
                                <h4 class="card-heading">Individuals</h4>
                            </div>
                        </a>

                        <a href="#" class="customer-ctg--card">
                            <div class="image-wrapper">
                                <div class="bg-overlay"></div>
                                <img src="https://cdn.prod.website-files.com/663608d6085a91363816e0cb/674e40435c0e0d80f066ed1e_3.avif"  class="layout-image" width="Auto" alt="Freelancers">
                            </div>
                            <div class="card-content">
                                <div class="card-content--hidden">
                                    <div class="card-content--bottom">
                                        <div class="text-wrapper">
                                            <h3 class="large-text">Freelancers</h3>
                                            <p class="small-text">Get paid globally, spend locally. <br>Handle international payments with ease.</p>
                                        </div>
                                        <div class="action-btn--wrapper">
                                            <div class="action-btn">
                                                <span>Lean more</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="https://cdn.prod.website-files.com/663608d6085a91363816e0cb/66573d0b284b20f6473c17ad_Frame%202087326865.avif" class="scribbles" alt="">
                                <h4 class="card-heading">Freelancers</h4>
                            </div>
                        </a>

                        <a href="#" class="customer-ctg--card">
                            <div class="image-wrapper">
                                <div class="bg-overlay"></div>
                                <img src="https://cdn.prod.website-files.com/663608d6085a91363816e0cb/677bab4df52ba5355c27d0a7_biz-img-1.avif" class="layout-image" width="Auto" alt="Students">
                            </div>
                            <div class="card-content">
                                <div class="card-content--hidden">
                                    <div class="card-content--bottom">
                                        <div class="text-wrapper">
                                            <h3 class="large-text">Students</h3>
                                            <p class="small-text">Banking that grows with you. <br>From pocket money to tuition, take control of your finances early.</p>
                                        </div>
                                        <div class="action-btn--wrapper">
                                            <div class="action-btn">
                                                <span>Lean more</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="https://cdn.prod.website-files.com/663608d6085a91363816e0cb/66573d0b284b20f6473c17ad_Frame%202087326865.avif" class="scribbles" loading="lazy" alt="">
                                <h4 class="card-heading">Students</h4>
                            </div>
                        </a>

                        <a href="#" class="customer-ctg--card">
                            <div class="image-wrapper">
                                <div class="bg-overlay"></div>
                                <img src="https://cdn.prod.website-files.com/663608d6085a91363816e0cb/674e3e9b7928a8d99888a482_4.avif"  class="layout-image" width="Auto" alt="Businesses">
                            </div>
                            <div class="card-content">
                                <div class="card-content--hidden">
                                    <div class="card-content--bottom">
                                        <div class="text-wrapper">
                                            <h3 class="large-text">Businesses</h3>
                                            <p class="small-text">Tools to power global commerce. <br>Pay teams, collect payments, and manage multiple currencies seamlessly.</p>
                                        </div>
                                        <div class="action-btn--wrapper">
                                            <div class="action-btn">
                                                <span>Lean more</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="https://cdn.prod.website-files.com/663608d6085a91363816e0cb/66573d0b284b20f6473c17ad_Frame%202087326865.avif" class="scribbles" loading="lazy" alt="">
                                <h4 class="card-heading">Businesses</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </section>

            <!-- <section class="pre-cta--block">
                <div class="container">
                    <div class="pre-cta--wrapper">
                        <div class="content-wrap">
                            <h2 class="large-text">Get the banking app made for you</h2>
                            <p class="body-text">Transform the way you interact with money, make smarter decisions. Download the app and get raized.</p>
                            <div class="cta-btn--link">
                                <a href="https://raizapp.onelink.me/RiOx/webdirect" class="get-app--btn" data-bs-toggle="modal" data-bs-target="#downloadApp">
                                    <img src="assets/images/download-app-icons.svg" loading="lazy" alt="" class="button-icon">
                                    <div class="text-move--wrapper">
                                        <div class="text-move">
                                            <div class="button-text">Get the App</div>
                                            <div class="button-text is_2">Get the App</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="image-wrapper">
                            <img src="assets/images/footer-phone.png" loading="lazy" alt="" class="image">
                        </div>
                    </div>
                </div>
            </section> -->

            <?php
                include('modules/blog-block.php');
            ?>
        </div>

        <?php
            include('modules/footer.php');
        ?>

        <?php
            include('modules/modals.php');
            include('modules/footer-script.php');
        ?>

    </body>
</html>
