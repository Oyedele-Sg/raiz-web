<!-- ====== Back To Top Start ====== -->
<a href="javascript:void(0)" class="back-to-top">
    <img src="assets/images/icons/arrow-top.svg" class="arrow-icon" alt=""/>
</a>
<!-- ====== Back To Top End ====== -->

<!-- ====== All Javascript Files ====== -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="assets/js/main.js"></script>
<!-- <script>
    // ==== for menu scroll
    const pageLink = document.querySelectorAll(".ud-menu-scroll");

    pageLink.forEach((elem) => {
    elem.addEventListener("click", (e) => {
        e.preventDefault();
        document.querySelector(elem.getAttribute("href")).scrollIntoView({
        behavior: "smooth",
        offsetTop: 1 - 60,
        });
    });
    });

    // section menu active
    function onScroll(event) {
    const sections = document.querySelectorAll(".ud-menu-scroll");
    const scrollPos =
        window.pageYOffset ||
        document.documentElement.scrollTop ||
        document.body.scrollTop;

    for (let i = 0; i < sections.length; i++) {
        const currLink = sections[i];
        const val = currLink.getAttribute("href");
        const refElement = document.querySelector(val);
        const scrollTopMinus = scrollPos + 73;
        if (
        refElement.offsetTop <= scrollTopMinus &&
        refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
        ) {
        document
            .querySelector(".ud-menu-scroll")
            .classList.remove("active");
        currLink.classList.add("active");
        } else {
        currLink.classList.remove("active");
        }
    }
    }

    window.document.addEventListener("scroll", onScroll);
</script> -->
<script>
    // Cookie Policy
    document.addEventListener("DOMContentLoaded", function () {
        const cpCard = document.getElementById("cp-card");
        const acceptBtn = cpCard.querySelector(".cp-button.accept");
        const declineBtn = cpCard.querySelector(".cp-button:not(.accept)");

        function setCookie(name, value, days) {
            let expires = "";
            if (days) {
            const date = new Date();
            date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
            expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + value + expires + "; path=/";
        }

        function getCookie(name) {
            const nameEQ = name + "=";
            const ca = document.cookie.split(";");
            for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == " ") c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }

        function hideCookiePolicy() {
            cpCard.style.display = "none";
        }

        function showCookiePolicy() {
            cpCard.style.display = "block";
        }

        acceptBtn.addEventListener("click", function () {
            setCookie("cookiePolicyAccepted", "true", 30);
            hideCookiePolicy();
        });

        declineBtn.addEventListener("click", function () {
            // No need to set the cookie here, just hide the card
            hideCookiePolicy();
        });

        if (getCookie("cookiePolicyAccepted") === "true") {
            hideCookiePolicy();
        } else {
            showCookiePolicy();
        }
    });
</script>
<script>
    function openVideo(url) {
        document.getElementById('ytplayer').src = url + '?autoplay=1';
        document.getElementById('demoVideo').style.display = "block";
    }

    function closeVideo() {
        document.getElementById('ytplayer').src = '';
        document.getElementById('demoVideo').style.display = "none";
    }
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    const cards = document.querySelectorAll(".customer-ctg--card");

    cards.forEach(card => {
        card.addEventListener("mouseenter", () => {
        cards.forEach(c => {
            if (c === card) {
            c.classList.add("active");
            c.classList.remove("inactive");
            } else {
            c.classList.add("inactive");
            c.classList.remove("active");
            }
        });
        });

        card.addEventListener("mouseleave", () => {
        cards.forEach(c => {
            c.classList.remove("active");
            c.classList.remove("inactive");
        });
        });
    });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    const groups = document.querySelectorAll(".r-features--group");

    groups.forEach((group, groupIndex) => {
        const cards = group.querySelectorAll(".r-features--card");

        function applyExpandedStyles(card) {
        card.style.flex = "1 1 100%";
        const svgIcon = card.querySelector(".svg-icon");
        const largeText = card.querySelector(".large-text");
        const topText = card.querySelector(".top-text");
        const bottomText = card.querySelector(".bottom-text");
        const imageWrapper = card.querySelector(".abl-image--wrapper");

        if (svgIcon) {
            svgIcon.style.width = "48px";
            svgIcon.style.height = "48px";
        }
        if (largeText) {
            largeText.style.fontSize = "3.2rem";
        }
        if (topText) {
            topText.style.transform = "none";
        }
        if (bottomText) {
            bottomText.style.transform = "none";
        }
        if (imageWrapper) {
            imageWrapper.style.width = "400px";
        }
        }

        function applyShrunkStyles(card) {
        card.style.flex = "1 1 50%";
        const svgIcon = card.querySelector(".svg-icon");
        const largeText = card.querySelector(".large-text");
        const topText = card.querySelector(".top-text");
        const bottomText = card.querySelector(".bottom-text");
        const imageWrapper = card.querySelector(".abl-image--wrapper");

        if (svgIcon) {
            svgIcon.style.width = "32px";
            svgIcon.style.height = "32px";
        }
        if (largeText) {
            largeText.style.fontSize = "2.5rem";
        }
        if (topText) {
            topText.style.transform = "translateY(185px) translateZ(0px)";
        }
        if (bottomText) {
            bottomText.style.transform = "translateY(295px) translateZ(0px)";
        }
        if (imageWrapper) {
            imageWrapper.style.width = "0px";
        }
        }

        // Initial State
        if (groupIndex === 0) {
        // Top row: First card expanded
        applyExpandedStyles(cards[0]);
        applyShrunkStyles(cards[1]);
        } else {
        // Bottom row: Second card expanded
        applyShrunkStyles(cards[0]);
        applyExpandedStyles(cards[1]);
        }

        // Hover Behavior
        cards.forEach((card, index) => {
        card.addEventListener("mouseenter", () => {
            // Expand hovered card
            applyExpandedStyles(card);

            // Shrink the other card
            cards.forEach((otherCard, otherIndex) => {
            if (otherIndex !== index) {
                applyShrunkStyles(otherCard);
            }
            });
        });
        });
    });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const swiperWrapper = document.querySelector('.swiper-wrapper');
        const dragOverlays = document.querySelectorAll('.drag-overlay');
        const slideImageWrappers = document.querySelectorAll('.slide-image--wrapper');

        let isDragging = false;
        let startPos = 0;
        let currentTranslate = 0;
        let prevTranslate = 0;
        let animationID;

        slideImageWrappers.forEach(wrapper => {
            const dragOverlay = wrapper.querySelector('.drag-overlay');

            // Update dragOverlay position on mouse move
            wrapper.addEventListener('mousemove', (event) => {
                const wrapperRect = wrapper.getBoundingClientRect();
                const overlayX = event.clientX - wrapperRect.left;
                const overlayY = event.clientY - wrapperRect.top;

                dragOverlay.style.left = `${overlayX}px`;
                dragOverlay.style.top = `${overlayY}px`;
            });

            dragOverlay.addEventListener('mousedown', dragStart);
            wrapper.addEventListener('mouseup', dragEnd);
            wrapper.addEventListener('mouseleave', dragEnd);

            wrapper.addEventListener('touchstart', dragStart);
            wrapper.addEventListener('touchend', dragEnd);
        });

        function dragStart(event) {
            isDragging = true;
            startPos = getPositionX(event);
            swiperWrapper.classList.add('draggable');
            animationID = requestAnimationFrame(animation);
        }

        function dragging(event) {
            if (!isDragging) return;
            const currentPosition = getPositionX(event);
            currentTranslate = prevTranslate + currentPosition - startPos;
        }

        function dragEnd() {
            isDragging = false;
            swiperWrapper.classList.remove('draggable');
            cancelAnimationFrame(animationID);
            prevTranslate = currentTranslate;
        }

        function getPositionX(event) {
            return event.type.includes('mouse') ? event.pageX : event.touches[0].clientX;
        }

        function animation() {
            setSliderPosition();
            if (isDragging) requestAnimationFrame(animation);
        }

        function setSliderPosition() {
            const maxTranslate = 0;
            const minTranslate = -swiperWrapper.scrollWidth + swiperWrapper.clientWidth;

            // Clamp the translate values within bounds
            if (currentTranslate > maxTranslate) {
                currentTranslate = maxTranslate;
            } else if (currentTranslate < minTranslate) {
                currentTranslate = minTranslate;
            }

            swiperWrapper.style.transform = `translateX(${currentTranslate}px)`;
        }

        // Enable dragging on mouse move
        slideImageWrappers.forEach(wrapper => {
            wrapper.addEventListener('mousemove', dragging);
            wrapper.addEventListener('touchmove', dragging);
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    const coinPaths = [
        "assets/images/coin-dollars.png",
        "assets/images/coin-naira.png",
        "assets/images/coin-euros.png",
        "assets/images/coin-pounds.png",
        "assets/images/coin-eth.png",
        "assets/images/coin-btc.png"
    ];

    const slots = document.querySelectorAll(".coin-slot");

    function getRandomCoin(currentSrc) {
        let availableCoins = coinPaths.filter((coin) => !currentSrc.includes(coin));
        return availableCoins[Math.floor(Math.random() * availableCoins.length)];
    }

    slots.forEach((slot, index) => {
        const img = slot.querySelector("img");

        setInterval(() => {
        // Fade out
        slot.style.opacity = 0;

        setTimeout(() => {
            const nextSrc = getRandomCoin(img.src);
            img.src = nextSrc;

            // Fade in
            slot.style.opacity = 1;
        }, 600); // wait for fade-out to finish
        }, 4000 + index * 1000); // stagger animation start times
    });
    });
</script>



