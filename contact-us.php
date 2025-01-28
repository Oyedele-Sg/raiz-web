<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Contact Us | Raiz</title>

        <?php include('modules/header-info.php'); ?>
    </head>

    <body>
        <?php include('modules/main-nav.php'); ?>

        <section class="terms-of--use">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="content-wrap wow fadeInUp" data-wow-delay=".2s">
                            <h2 class="large-text">Contact Us</h2>
                            <h3 class="small-text font-size-18">You've got a question? We've got the answer!</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         <section class="more-features product-more--features">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="feature-item--wrapper">
                            <div class="feature-item">
                                <div class="image-wrapper wow fadeInUp" data-wow-delay=".4s">
                                    <img class="image" src="assets/images/multi-currency-wallet.webp" alt="Multi-Currency Wallet">
                                </div>
                                <div class="copy-wrapper wow fadeInUp" data-wow-delay=".45s">
                                    <div class="large-text">Let's hear from you</div>
                                    <div class="contact-form-wrapper">
                                        <form id="contactForm" method="POST" action="send_contact_email.php">
                                            <label for="name">Name</label>
                                            <input type="text" id="name" name="name" placeholder="Enter your first name" required />

                                            <label for="email">Email Address</label>
                                            <input type="email" id="email" name="email" placeholder="Enter your email address" required />

                                            <label for="phone">Phone Number</label>
                                            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required />

                                            <label for="message">Message</label>
                                            <textarea id="message" name="message" placeholder="Type your message" rows="5" required></textarea>

                                            <button type="submit">Submit</button>
                                        </form>
                                        <div id="formAlert" class="form-alert"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="feature-item">
                                <div class="image-wrapper wow fadeInUp" data-wow-delay=".5s">
                                    <img class="image" src="assets/images/competitive-exchange-rate.webp" alt="Competitive Exchange Rates">
                                </div>
                                <div class="copy-wrapper wow fadeInUp" data-wow-delay=".55s">
                                    <div class="large-text">Our Info</div>
                                    <div class="contact-info-wrapper">
                                        <div class="contact-info-item">
                                            <i class="fas fa-phone"></i>
                                            <span>  +1 832 86 21 096</span>
                                        </div>
                                        <div class="contact-info-item">
                                            <i class="fas fa-phone"></i>
                                            <span>  +234 704 43 77 645</span>
                                        </div>
                                        <div class="contact-info-item">
                                            <i class="fas fa-envelope"></i>
                                            <span>  <a href="mailto:support@raiz.app">support@raiz.app</a></span>
                                        </div>
                                        <div class="contact-info-item">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <span>  300 N Creek View Rd, Suite 205, Newark, DE, USA 19711</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
            include('modules/footer.php');
        ?>

        <?php
            include('modules/modals.php');
            include('modules/footer-script.php');
        ?>
    <script>
        document.getElementById("contactForm").addEventListener("submit", async function (e) {
            e.preventDefault();

            const form = e.target;
            const formData = new FormData(form);
            const response = await fetch(form.action, {
                method: "POST",
                body: formData,
            });

            const result = await response.json();
            const alertDiv = document.getElementById("formAlert");
            alertDiv.textContent = result.message;

            if (result.status === "success") {
                alertDiv.classList.add("success");
                form.reset();
            } else {
                alertDiv.classList.add("error");
            }
        });
    </script>


    </body>
</html>
