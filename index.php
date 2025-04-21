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
                                <h2 class="large-text wow fadeInUp" data-wow-delay=".15s">The modern way to manage your money. (/reɪz am/)</h2>
                                <div class="small-text wow fadeInUp" data-wow-delay=".2s">
                                    <span class="active">— built for individuals, freelancers, students, and businesses who live, work, and transact across borders. We're rethinking what a bank should be: simple, accessible, and global from day one.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php include('modules/video-block.php'); ?>

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

            <section class="more-features">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <div class="content-wrap">
                                <h2 class="large-text wow fadeInUp" data-wow-delay=".2s">Smart money tools, built around you</h2>
                                <p class="small-text wow fadeInUp" data-wow-delay=".3s">We didn't just build Raiz to hold your money — we built it to work for you.</p>
                            </div>

                            <ul class="more-features--grid">
                                <li class="more-features--list wow fadeInUp" data-wow-delay=".5s">
                                    <svg class="list-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20.9994 15.9123H15.9767C14.8226 15.9123 13.8877 14.9774 13.8877 13.8233C13.8877 12.6693 14.8226 11.7344 15.9767 11.7344H20.9994" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.434 6.17578H7.56605C5.04392 6.17578 3 8.2197 3 10.7418V16.9064C3 19.4285 5.04392 21.4724 7.56605 21.4724H16.434C18.9561 21.4724 21 19.4285 21 16.9064V10.7418C21 8.2197 18.9561 6.17578 16.434 6.17578Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M8.11357 12.6055V15.0344" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M18.2853 6.54779L16.7329 4.06457C15.7744 2.53163 13.752 2.07083 12.2283 3.02111L7.21575 6.16174L7.20551 6.17198H7.19629" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    <div class="title-text">Get paid the easy way</div>
                                    <div class="des-text">Request money from friends, clients, or family — with a note, in any currency, straight to your wallet.</div>
                                </li>
                                <li class="more-features--list wow fadeInUp" data-wow-delay=".55s">
                                    <svg class="list-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.9357 19.9023L17.6956 20.2661C18.4944 20.6485 19.4187 20.0657 19.4177 19.1793L19.408 6.92492C19.408 4.50225 18.0604 3 15.6417 3H8.34252C5.91791 3 4.59955 4.50225 4.59955 6.92492L4.58203 19.1774C4.58106 20.0638 5.50537 20.6475 6.30514 20.2642L7.05919 19.9032C7.51259 19.6853 8.03701 19.6697 8.50306 19.8604L10.6494 20.7351C11.5144 21.0883 12.4844 21.0883 13.3494 20.7351L15.4918 19.8604C15.9579 19.6697 16.4823 19.6853 16.9357 19.9023Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M9.25586 14.4531H14.3639" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M9.66602 9.83875L11.2082 11.3809L14.3644 8.22461" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    <div class="title-text">No awkward money chats</div>
                                    <div class="des-text">Split bills instantly and track who's paid — from dinners to group trips, Raiz keeps it fair and simple.</div>
                                </li>
                                <li class="more-features--list wow fadeInUp" data-wow-delay=".6s">
                                    <svg class="list-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.2703 4.17257C12.7023 3.60915 11.7848 3.61198 11.2202 4.17972L11.2191 4.18085L10.517 4.88397C9.96514 5.43058 9.21955 5.74009 8.43988 5.74009L7.43973 5.74009C7.43965 5.74009 7.43982 5.74009 7.43973 5.74009C6.63878 5.74087 5.99021 6.38969 5.99021 7.18998C5.99021 7.20829 5.98956 7.22644 5.98827 7.24442V8.18684C5.98827 8.96689 5.67912 9.71433 5.12992 10.2661L4.43584 10.9612C4.42462 10.9732 4.41437 10.9834 4.40558 10.9918C3.85668 11.5614 3.86538 12.467 4.42894 13.0255L4.43172 13.0282L5.13186 13.7294C5.68069 14.2808 5.99021 15.0271 5.99021 15.8067V16.8123C5.99021 17.6128 6.63864 18.2613 7.43913 18.2613H8.43919C9.21668 18.2626 9.96395 18.5699 10.5163 19.1196L10.5175 19.1209L11.2053 19.8086C11.2124 19.8152 11.2195 19.8219 11.2264 19.8287C11.7938 20.3917 12.7114 20.388 13.2746 19.8196L13.2774 19.8168L13.9785 19.1167C14.5302 18.5676 15.2776 18.2583 16.0568 18.2583H17.0615C17.8611 18.259 18.5108 17.6121 18.5124 16.8117C18.5124 16.8115 18.5124 16.8118 18.5124 16.8117V15.8087C18.5124 15.0311 18.8202 14.2835 19.3697 13.7313L19.371 13.73L20.0791 13.0219C20.0794 13.0216 20.0796 13.0214 20.0799 13.0211C20.6429 12.4535 20.6399 11.536 20.0717 10.9711L20.0702 10.9696L19.37 10.2693L19.3681 10.2675C18.8193 9.7147 18.5114 8.96849 18.5114 8.18878V7.18901C18.5114 6.38851 17.862 5.73911 17.0615 5.73911H16.0588C15.2804 5.73911 14.5327 5.43142 13.9805 4.88174L13.9792 4.88048L13.2934 4.19469C13.2856 4.18748 13.2779 4.18011 13.2703 4.17257ZM13.2703 4.17257C13.2703 4.17255 13.2703 4.17259 13.2703 4.17257L13.2693 4.17155L13.7996 3.64117L13.271 4.1733C13.2708 4.17305 13.2706 4.17281 13.2703 4.17257ZM4.49087 7.12705C4.52434 5.52709 5.83122 4.24137 7.43853 4.24009L8.43988 4.24009C8.82081 4.24009 9.18725 4.0891 9.46001 3.8196L10.1566 3.12207C10.1568 3.12183 10.157 3.12159 10.1573 3.12135C11.3016 1.9713 13.1581 1.96181 14.3142 3.09536C14.3229 3.10324 14.3314 3.11132 14.3396 3.11959L15.0386 3.81857C15.0388 3.81874 15.0384 3.8184 15.0386 3.81857C15.309 4.08745 15.6762 4.23911 16.0588 4.23911H17.0615C18.6904 4.23911 20.0114 5.56009 20.0114 7.18901V8.18878C20.0114 8.57187 20.1622 8.93791 20.4318 9.20978C20.432 9.21005 20.4323 9.21031 20.4325 9.21057L21.1294 9.90742C21.1296 9.90763 21.1292 9.90721 21.1294 9.90742C22.2837 11.0559 22.2911 12.9234 21.1434 14.0789L21.1416 14.0807L20.4329 14.7894C20.4327 14.7896 20.4331 14.7893 20.4329 14.7894C20.1639 15.06 20.0124 15.4273 20.0124 15.8087V16.8123L20.0124 16.8135C20.0097 18.4422 18.6886 19.7596 17.0609 19.7583H16.0568C15.6751 19.7583 15.3081 19.9099 15.0371 20.1794L14.3401 20.8754L13.8074 20.3475L14.3373 20.8782L14.3385 20.877C13.1995 22.0247 11.3499 22.0397 10.1928 20.9161C10.2198 20.9404 10.2486 20.9628 10.2789 20.983L10.2818 20.985L10.6981 20.3611L10.1699 20.8936C10.1775 20.9011 10.1852 20.9086 10.1928 20.9161C10.1833 20.9075 10.174 20.8986 10.1649 20.8895L9.45813 20.1828L9.9872 19.6512L9.45687 20.1815L9.45813 20.1828C9.18794 19.9141 8.8208 19.7621 8.43763 19.7613H7.43913C5.81021 19.7613 4.49021 18.4412 4.49021 16.8123V15.8067C4.49021 15.4253 4.33892 15.0593 4.06915 14.788L3.3731 14.0909L3.90102 13.5582L3.37032 14.0882L3.37161 14.0895C2.21607 12.9427 2.20899 11.0785 3.3534 9.92233C3.29931 9.97778 3.25416 10.0413 3.2195 10.1106C3.26046 10.0287 3.30743 9.97288 3.33186 9.94573C3.33937 9.93739 3.34643 9.92943 3.3534 9.92233C3.3555 9.92019 3.35781 9.91834 3.35985 9.91631C3.37583 9.90041 3.38976 9.88799 3.39998 9.87924C3.41675 9.86486 3.43141 9.85362 3.44208 9.84577L3.45751 9.83471L3.46426 9.83005L3.46742 9.82791C3.46817 9.82741 3.46898 9.82686 3.46973 9.82636M3.46742 9.82791C3.46744 9.8279 3.4674 9.82792 3.46742 9.82791C3.42883 9.8539 3.39296 9.88364 3.35985 9.91631L4.06675 9.208L4.59833 9.73707L4.06764 9.20711C4.33705 8.93619 4.48827 8.56975 4.48827 8.18684V7.18998C4.48827 7.16879 4.48915 7.1478 4.49087 7.12705M3.46973 9.82636C3.46991 9.82624 3.46955 9.82648 3.46973 9.82636V9.82636Z" fill="#000000"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.8343 9.49689C16.1273 9.78971 16.1274 10.2646 15.8346 10.5575L11.7615 14.6325C11.6208 14.7733 11.4299 14.8524 11.2309 14.8523C11.0319 14.8523 10.841 14.7731 10.7004 14.6322L8.72319 12.6521C8.43051 12.359 8.43086 11.8842 8.72397 11.5915C9.01708 11.2988 9.49195 11.2992 9.78463 11.5923L11.2314 13.0411L14.7736 9.49714C15.0665 9.20418 15.5413 9.20406 15.8343 9.49689Z" fill="#000000"></path>
                                    </svg>
                                    <div class="title-text">Earn every time you spend</div>
                                    <div class="des-text">Get rewarded for everyday transactions with cashback, points, and badges that grow with your usage.</div>
                                </li>
                                <li class="more-features--list wow fadeInUp" data-wow-delay=".65s">
                                    <svg class="list-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.8854 20.5641H7.54737C6.90679 20.5728 6.27095 20.453 5.6775 20.2117C5.08405 19.9703 4.54505 19.6124 4.09238 19.1591C3.57305 18.6221 3.16531 17.9876 2.89274 17.2921C2.62017 16.5965 2.48816 15.8539 2.50437 15.1071V9.29408C2.46271 8.5997 2.56199 7.90407 2.79624 7.24907C3.03049 6.59407 3.39486 5.99324 3.86741 5.48276C4.33996 4.97227 4.91093 4.56269 5.54594 4.27867C6.18094 3.99464 6.86686 3.84205 7.56239 3.83008H13.3334C13.5323 3.83008 13.7231 3.9091 13.8637 4.04975C14.0044 4.1904 14.0834 4.38117 14.0834 4.58008C14.0834 4.77899 14.0044 4.96976 13.8637 5.11041C13.7231 5.25106 13.5323 5.33008 13.3334 5.33008H7.56239C7.06338 5.34124 6.57193 5.45454 6.11842 5.66299C5.6649 5.87144 5.25892 6.17063 4.92551 6.54208C4.59211 6.91353 4.33837 7.34936 4.17994 7.82268C4.02151 8.296 3.96175 8.79677 4.00437 9.29408V15.1071C3.98876 15.6565 4.08208 16.2036 4.27894 16.7168C4.4758 17.2299 4.77231 17.6991 5.15137 18.0971C5.46628 18.4108 5.84097 18.658 6.25324 18.8241C6.66551 18.9902 7.10696 19.0718 7.55137 19.0641H15.8854C16.3298 19.0718 16.7712 18.9902 17.1835 18.8241C17.5957 18.658 17.9705 18.4108 18.2854 18.0971C18.6648 17.6993 18.9616 17.2302 19.1587 16.717C19.3557 16.2038 19.4491 15.6566 19.4334 15.1071V11.8331C19.4334 11.6342 19.5124 11.4434 19.6531 11.3027C19.7937 11.1621 19.9844 11.0831 20.1834 11.0831C20.3823 11.0831 20.573 11.1621 20.7137 11.3027C20.8543 11.4434 20.9334 11.6342 20.9334 11.8331V15.1071C20.9496 15.8539 20.8176 16.5965 20.545 17.2921C20.2724 17.9876 19.8647 18.6221 19.3454 19.1591C18.8921 19.613 18.3523 19.9712 17.7579 20.2126C17.1636 20.4539 16.5268 20.5735 15.8854 20.5641Z" fill="#000000"></path>
                                        <path d="M18.878 9.68955C18.2595 9.68955 17.6549 9.50615 17.1407 9.16255C16.6265 8.81895 16.2257 8.33058 15.989 7.7592C15.7523 7.18781 15.6904 6.55908 15.8111 5.9525C15.9317 5.34592 16.2295 4.78874 16.6668 4.35143C17.1042 3.91411 17.6613 3.61629 18.2679 3.49563C18.8745 3.37498 19.5032 3.4369 20.0746 3.67358C20.646 3.91025 21.1344 4.31105 21.478 4.82528C21.8216 5.33951 22.005 5.94409 22.005 6.56255C22.0042 7.39164 21.6745 8.18654 21.0882 8.77279C20.502 9.35905 19.707 9.68875 18.878 9.68955V9.68955ZM18.878 4.93555C18.5562 4.93555 18.2416 5.03097 17.9741 5.20975C17.7065 5.38852 17.498 5.64263 17.3748 5.93992C17.2517 6.23722 17.2194 6.56435 17.2822 6.87996C17.345 7.19557 17.5 7.48547 17.7275 7.71301C17.955 7.94055 18.245 8.09551 18.5606 8.15829C18.8762 8.22106 19.2033 8.18884 19.5006 8.0657C19.7979 7.94256 20.052 7.73402 20.2308 7.46646C20.4095 7.1989 20.505 6.88434 20.505 6.56255C20.505 6.13086 20.3336 5.71682 20.0286 5.41138C19.7235 5.10594 19.3096 4.93408 18.878 4.93355V4.93555Z" fill="#000000"></path>
                                        <path d="M11.7426 13.7657C11.1337 13.7647 10.5432 13.5571 10.0676 13.1767L6.26763 10.1167C6.18966 10.0554 6.12465 9.97916 6.07634 9.8925C6.02804 9.80584 5.99741 9.71046 5.98623 9.61187C5.97504 9.51329 5.98352 9.41347 6.01119 9.31819C6.03886 9.22291 6.08518 9.13407 6.14742 9.05681C6.20966 8.97955 6.28662 8.91541 6.37383 8.8681C6.46104 8.82079 6.55674 8.79126 6.65545 8.7812C6.75415 8.77115 6.85389 8.78078 6.94884 8.80954C7.0438 8.8383 7.1321 8.88561 7.20864 8.94873L11.0016 12.0057C11.2119 12.1742 11.4732 12.266 11.7426 12.266C12.012 12.266 12.2734 12.1742 12.4836 12.0057L14.0996 10.6937C14.2547 10.5755 14.4496 10.5223 14.6432 10.5454C14.8368 10.5685 15.0138 10.666 15.1367 10.8174C15.2596 10.9687 15.3187 11.162 15.3015 11.3562C15.2843 11.5504 15.1922 11.7303 15.0446 11.8577L13.4236 13.1747C12.9463 13.5563 12.3537 13.7646 11.7426 13.7657V13.7657Z" fill="#000000"></path>
                                    </svg>
                                    <div class="title-text">Stay in the know, always</div>
                                    <div class="des-text">Every swipe, transfer, or request comes with an instant, no-stress heads-up — fun, helpful, and always on time.</div>
                                </li>
                                <li class="more-features--list wow fadeInUp" data-wow-delay=".7s">
                                    <svg class="list-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.5034 8.90885C9.5034 10.5541 8.11011 11.8871 6.52514 11.8871C4.94017 11.8871 3.54688 10.6028 3.54688 8.90885C3.54688 8.05361 4.06839 5.75351 4.41866 4.68713C4.74947 3.67913 5.68838 3 6.74892 3H18.1794C19.2351 3 20.172 3.6733 20.5058 4.67448C20.8628 5.7428 21.395 8.04972 21.395 8.90885C21.395 10.5104 20.0018 11.8871 18.4168 11.8871C16.8318 11.8871 15.4385 10.5541 15.4385 8.90885" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M9.49219 7.97656V8.90769C9.49219 10.553 10.8261 11.886 12.4705 11.886C14.1157 11.886 15.4487 10.553 15.4487 8.90769V7.97656" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M4.75879 14.1875V16.6939C4.75879 19.2178 6.33014 21.0002 8.85597 21.0002H16.0812C18.6081 21.0002 20.1804 19.2178 20.1804 16.6939V14.1875" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M10.6484 16.6094H14.2932" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    <div class="title-text">Shop smart, shop safe</div>
                                    <div class="des-text">Use your Raiz virtual card to protect your main wallet and control spending while shopping online.</div>
                                </li>
                                <li class="more-features--list wow fadeInUp" data-wow-delay=".75s">
                                    <svg class="list-icon" width="24" height="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.7178 3.11865H8.28314C5.34378 3.11865 3.5 5.19984 3.5 8.14503V16.0923C3.5 19.0375 5.33503 21.1187 8.28314 21.1187H16.7169C19.6659 21.1187 21.5 19.0375 21.5 16.0923V8.14503C21.5 5.19984 19.6659 3.11865 16.7178 3.11865Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M8.34196 16.9983V16.0107" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12.5002 16.9975V14.3267" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M16.6579 16.9971V12.6431" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M16.6602 7.23877L16.2837 7.67758C14.2093 10.0974 11.4344 11.8137 8.34229 12.5862" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M14.4668 7.23877H16.6589V9.4299" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    <div class="title-text">Track it, tweak it, thrive</div>
                                    <div class="des-text">Raiz breaks down your spending into bite-sized insights, so you can spend better and save smarter — no lectures, just vibes.</div>
                                </li>
                            </ul>

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
