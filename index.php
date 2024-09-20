<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Raiz | Seamless banking, personalized savings, and spending—all in one place</title>

        <?php include('modules/header-info.php'); ?>
    </head>

    <body>
        <?php include('modules/main-nav.php'); ?>

        <section class="ud-hero hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <div class="hero-header wow fadeInUp" data-wow-delay=".2s">
                            <h1 class="hero-title"><span class="text-cursive">Empower</span> your finances with Raiz Finance</h1>
                            <div class="hero-text--wrapper">
                                <h3 class="hero-subtitle">Seamless banking, personalized savings, and spending—all in one place.</h3>
                                <div class="mb-4 pt-3">
                                    <a href="#" class="get-app--btn" data-bs-toggle="modal" data-bs-target="#downloadApp">
                                        <!-- <img src="assets/images/download-app-icons.svg" loading="lazy" alt="" class="button-icon"> -->
                                        <div class="text-move--wrapper">
                                            <div class="text-move">
                                                <div class="button-text">Get the App</div>
                                                <div class="button-text is_2">Get the App</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="usd-banking.php" class="get-app--btn">
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
                    <div class="col-lg-6 col-sm-12">
                        <img src="assets/images/hero-bg-image.webp" class="hero-bg-image" alt=""/>
                    </div>
                </div>
                <div class="disclaimer-text wow fadeInUp" data-wow-delay=".3s">Raiz is a financial technology company, not a bank. Banking services are provided by Hope Payment Service Bank.</div>
            </div>
            <!-- <div class="hero-image--background"></div> -->
        </section>

        <section class="ms-block">
            <div class="container">
                <div class="ms-flex--cards">
                    <div class="ms-card--item wow fadeInUp" data-wow-delay=".2s">
                        <div class="ms-card">
                            <img src="assets/images/mobile-screen1.svg" class="ms-card--image" alt="Mobile Screen 1"/>
                        </div>
                    </div>
                    <div class="ms-card--item low wow fadeInUp" data-wow-delay=".3s">
                        <div class="ms-card">
                            <img src="assets/images/mobile-screen2.svg" class="ms-card--image" alt="Mobile Screen 2"/>
                        </div>
                    </div>
                    <div class="ms-card--item wow fadeInUp" data-wow-delay=".4s">
                        <div class="ms-card">
                            <img src="assets/images/mobile-screen3.svg" class="ms-card--image" alt="Mobile Screen 3"/>
                        </div>
                    </div>
                    <div class="ms-card--item low wow fadeInUp" data-wow-delay=".5s">
                        <div class="ms-card">
                            <img src="assets/images/mobile-screen4.svg" class="ms-card--image" alt="Mobile Screen 4"/>
                        </div>
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
                        <div class="features-tab--layout">
                            <div class="nav-container">
                                <div class="nav flex-column" id="features-tab" role="tablist" aria-orientation="vertical">
                                    <a href="#usd-banking" class="nav-link active" data-bs-toggle="tab" role="tab" aria-controls="usd-banking" aria-selected="true">
                                        <div class="link-content">
                                            <img class="tab-icon" src="assets/images/icons/usd-banking-icon.svg" alt="USD Banking Icon">
                                            <span class="tab-text">USD Banking</span>
                                        </div>
                                    </a>
                                    <a href="#payday-loans" class="nav-link" data-bs-toggle="tab" role="tab" aria-controls="payday-loans" aria-selected="false">
                                        <div class="link-content">
                                            <img class="tab-icon" src="assets/images/icons/payday-loan-icon.svg" alt="Payday Loans Icon">
                                            <span class="tab-text">Payday Loans</span>
                                        </div>
                                    </a>
                                    <a href="#swap" class="nav-link" data-bs-toggle="tab" role="tab" aria-controls="swap" aria-selected="false">
                                        <div class="link-content">
                                            <img class="tab-icon" src="assets/images/icons/swap-icon.svg" alt="Swap Icon">
                                            <span class="tab-text">Swap</span>
                                        </div>
                                    </a>
                                    <a href="#ajo" class="nav-link" data-bs-toggle="tab" role="tab" aria-controls="ajo" aria-selected="false">
                                        <div class="link-content">
                                            <img class="tab-icon" src="assets/images/icons/ajo-icon.svg" alt="Ajo Icon">
                                            <span class="tab-text">Ajo</span>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="content-container">
                                <div class="tab-content" id="features-tabContent">
                                    <div class="tab-pane fade show active" id="usd-banking" role="tabpanel" aria-labelledby="usd-banking-tab">
                                        <div class="content-wrapper">
                                            <div class="image-wrapper">
                                                <img src="assets/images/raiz-usd-wallet-screen.png" loading="lazy" sizes="(max-width: 479px) 300px, (max-width: 767px) 55vw, 100vw" alt="" class="image">
                                            </div>
                                            <div class="copy-wrapper">
                                                <div class="tagline">USD Banking</div>
                                                <h3 class="large-text">Raiz the bar with USD Banking just for you</h3>
                                                <div class="small-text">Open a USD account with a few clicks and enjoy money transfer with ease</div>
                                                <div class="btn-link--wrapper">
                                                    <a href="usd-banking.php" class="get-app--btn">
                                                        <div class="text-move--wrapper">
                                                            <div class="text-move">
                                                                <div class="button-text">Explore USD Banking</div>
                                                                <div class="button-text is_2">Explore USD Banking</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="payday-loans" role="tabpanel" aria-labelledby="payday-loans-tab">
                                        <div class="content-wrapper">
                                            <div class="image-wrapper">
                                                <img src="assets/images/raiz-loans-screen.png" loading="lazy" sizes="(max-width: 479px) 300px, (max-width: 767px) 55vw, 100vw" alt="" class="image">
                                            </div>
                                            <div class="copy-wrapper">
                                                <div class="tagline">Payday Loans</div>
                                                <h3 class="large-text">Turn any day into payday</h3>
                                                <div class="small-text">Get quick payday loans tailored to your needs.</div>
                                                <div class="btn-link--wrapper">
                                                    <a href="payday-loans.php" class="get-app--btn">
                                                        <div class="text-move--wrapper">
                                                            <div class="text-move">
                                                                <div class="button-text">Explore Payday Loans</div>
                                                                <div class="button-text is_2">Explore Payday Loans</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="swap" role="tabpanel" aria-labelledby="swap-tab">
                                        <div class="content-wrapper">
                                            <div class="image-wrapper">
                                                <img src="assets/images/raiz-swap-usd-screen.png" loading="lazy" sizes="(max-width: 479px) 300px, (max-width: 767px) 55vw, 100vw" alt="" class="image">
                                            </div>
                                            <div class="copy-wrapper">
                                                <div class="tagline">Swap</div>
                                                <h3 class="large-text">Swap Currencies, Quick & Easy</h3>
                                                <div class="small-text">Enjoy the freedom to exchange currency whenever you desire, for transactions or investing.</div>
                                                <div class="btn-link--wrapper">
                                                    <a href="swaps.php" class="get-app--btn">
                                                        <div class="text-move--wrapper">
                                                            <div class="text-move">
                                                                <div class="button-text">Explore Swap</div>
                                                                <div class="button-text is_2">Explore Swap</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="ajo" role="tabpanel" aria-labelledby="ajo-tab">
                                        <div class="content-wrapper">
                                            <div class="image-wrapper">
                                                <img src="assets/images/raiz-community-saving-screen.png" loading="lazy" sizes="(max-width: 479px) 300px, (max-width: 767px) 55vw, 100vw" alt="" class="image">
                                            </div>
                                            <div class="copy-wrapper">
                                                <div class="tagline">Community Savings (Ajo)</div>
                                                <h3 class="large-text">Achieve your Saving goal Faster with Community Savings</h3>
                                                <div class="small-text">Join a community of savers, build healthy financial habits, and achieve your goals with ease..</div>
                                                <div class="btn-link--wrapper">
                                                    <a href="ajo.php" class="get-app--btn">
                                                        <div class="text-move--wrapper">
                                                            <div class="text-move">
                                                                <div class="button-text">Explore Community Savings</div>
                                                                <div class="button-text is_2">Explore Community Savings</div>
                                                            </div>
                                                        </div>
                                                    </a>
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
            <div class="hero-image--background"></div>
        </section>

        <section class="more-features">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="content-wrap">
                            <h2 class="large-text"><span class="text-cursive">Raizing</span> the bar in banking.</h2>
                            <p class="small-text">Take control of your finances. Earn cashback, get paid early, and split bills with ease. Raiz puts you in charge.</p>
                        </div>
                        
                        <div class="feature-item--wrapper">
                            <div class="feature-item">
                                <div class="image-wrapper">
                                    <img class="image" src="https://sqy7rm.media.zestyio.com/Envoy-Home-CLIR-1.png" alt="Automatically save and invest with Round-Ups® feature">
                                </div>
                                <div class="copy-wrapper">
                                    <div class="large-text">Reach your financial goals faster</div>
                                    <div class="small-text">Set personalized savings goals, track progress, and automate transfers to watch your money grow effortlessly.</div>
                                </div>
                            </div>

                            <div class="feature-item">
                                <div class="image-wrapper">
                                    <img class="image" src="https://sqy7rm.media.zestyio.com/Envoy-Home-CLIR-1.png" alt="Automatically save and invest with Round-Ups® feature">
                                </div>
                                <div class="copy-wrapper">
                                    <div class="large-text">Hassle-free bill splitting with friends</div>
                                    <div class="small-text">Settling bills with your friends is now easy. Split evenly or vary the amounts for people who've contributed more.</div>
                                </div>
                            </div>

                            <div class="feature-item">
                                <div class="image-wrapper">
                                    <img class="image" src="https://sqy7rm.media.zestyio.com/Envoy-Home-CLIR-1.png" alt="Automatically save and invest with Round-Ups® feature">
                                </div>
                                <div class="copy-wrapper">
                                    <div class="large-text">Take control of your spending and Raiz your money game</div>
                                    <div class="small-text">Track spending, create budgets, and gain valuable insights to make informed financial decisions.</div>
                                </div>
                            </div>
                        </div>

                        <div class="db-card--grid">
                            <div class="card-image--wrapper wow fadeInUp" data-wow-delay=".2s">
                                <img src="assets/images/raiz-card-grouped-edited.webp" loading="lazy" alt="" class="card-image">
                            </div>
                            <div class="card-content--wrapper wow fadeInUp" data-wow-delay=".25s">
                                <div class="card-content">
                                    <h3 class="large-text"><span class="">Spend in style</span> every day</h3>
                                    <p class="body-text">Vibrant contactless Raiz Debit card to make payments anywhere in the world. Physical or virtual, choose what suits you.</p>
                                </div>
                            </div>
                            <div class="card-features--wrapper">
                                <div class="card-features">
                                    <div class="card-features--list wow fadeInUp" data-wow-delay=".3s">
                                        <img src="assets/images/icons/withdrawal-icon.svg" loading="lazy" alt="" class="card-icon">
                                        <h3 class="card-heading">Withdrawals</h3>
                                        <p class="card-text">Cash withdrawal at 25,000 ATMs worldwide.</p>
                                    </div>
                                    <div class="card-features--list wow fadeInUp" data-wow-delay=".35s">
                                        <img src="assets/images/icons/lock-icon.svg" loading="lazy" alt="" class="card-icon">
                                        <div class="card-heading">Freeze or Lock</div>
                                        <p class="card-text">Keep your money safe with freezing or locking functions.</p>
                                    </div>
                                    <div class="card-features--list wow fadeInUp" data-wow-delay=".4s">
                                        <img src="assets/images/icons/cashback-icon.svg" loading="lazy" alt="" class="card-icon">
                                        <div class="card-heading">Earn Cashbacks</div>
                                        <p class="card-text">Get rewarded for using your Raiz debit card.</p>
                                    </div>
                                    <div class="card-features--list wow fadeInUp" data-wow-delay=".45s">
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
                            <div class="why-item">
                                <img src="assets/images/icons/facelock-icon.svg" loading="lazy" alt="Safe Log In" class="svg-icon">
                                <div class="large-text">Safe Log In</div>
                                <p class="small-text">Securely log in to your app using Face ID, Touch ID or Fingerprint Scanner.</p>
                            </div>
                            <div class="why-item">
                                <img src="assets/images/icons/identity-check-icon.svg" loading="lazy" alt="Identity Check" class="svg-icon">
                                <div class="large-text">Identity Check</div>
                                <p class="small-text">To ensure it's really you, we ask for a government-issued ID with your photo, plus a liveness check.</p>
                            </div>
                            <div class="why-item">
                                <img src="assets/images/icons/always-safe-icon.svg" loading="lazy" alt="Always Safe" class="svg-icon">
                                <div class="large-text">Always Safe</div>
                                <p class="small-text">Securely log in to your app using Face ID, Touch ID or Fingerprint Scanner.</p>
                            </div>
                            <div class="why-item">
                                <img src="assets/images/icons/notifications-icon.svg" loading="lazy" alt="" class="svg-icon">
                                <div class="large-text">Notifications</div>
                                <p class="small-text">Get instant notifications every time you spend with your card.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
            include('modules/footer.php');
        ?>

        <!-- Accept Cookies -->
        <div class="cp-card" id="cp-card">
            <img src="assets/images/cookie.svg" class="cp-image" alt="">
            <p class="cp-title">Choose your cookies</p>
            <p class="cp-text">Cookies help us to enhance your experience, tailor ads to your interests, and improve our website. <a target="_blank" rel="nofollow" title="Cookie Policy" href="/cookie-policy">Learn more and manage</a>.</p>
            <div class="cp-action">
                <button type="button" class="cp-button accept">Yum! I Agree</button>
                <button type="button" class="cp-button">Decline</button>
            </div>
        </div>

        <?php
            include('modules/modals.php');
            include('modules/footer-script.php');
        ?>

    </body>
</html>
