<!-- Modals -->

<!-- Video Playback -->
<div id="demoVideo" class="video-modal">
    <iframe id="ytplayer" frameborder="0" allowfullscreen allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"></iframe>
    <a href="#" class="video-close-button" id="closeModal" onclick="closeVideo()"></a>
</div>

<!-- Download App -->
<div class="modal fade" id="downloadApp" tabindex="-1" role="dialog" aria-labelledby="downloadAppLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="qr-code--grid">
                    <div class="qr-text--wrapper">
                        <h3 class="large-text">Scan This with Your Phone</h3>
                        <p class="body-text">Point your camera at the QR code on the right and open a link. You'll be redirected to App Store or Google Play to download the app.</p>
                        <div class="button-wrapper">
                            <a href="https://apps.apple.com/us/app/raiz-app/id6502309659" class="app-download--btn" target="_blank">
                                <svg width="30" height="30" class="button-icon" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.1563 1.25C18.715 1.33375 17.0604 2.13668 16.0767 3.15918C15.1879 4.08918 14.4867 5.47039 14.773 6.80664C16.3392 6.84789 17.9113 6.02416 18.8525 4.98291C19.7313 4.00916 20.3975 2.65 20.1563 1.25ZM20.2417 6.8042C17.9805 6.8042 17.035 8.19336 15.4688 8.19336C13.8575 8.19336 12.3846 6.89209 10.4346 6.89209C7.78207 6.89334 3.75 9.35041 3.75 15.1392C3.75 20.4054 8.52207 26.25 11.2158 26.25C12.8521 26.2663 13.2488 25.2212 15.4688 25.21C17.6913 25.1937 18.1708 26.2638 19.8096 26.25C21.6546 26.2362 23.0955 24.2088 24.148 22.6025C24.903 21.4525 25.2133 20.8654 25.7983 19.5654C21.4571 18.4654 20.5933 11.4646 25.7983 10.0171C24.8158 8.34084 21.948 6.8042 20.2417 6.8042Z" fill="currentColor"/>
                                </svg>
                                <div class="text-move--wrapper">
                                    <div class="text-move">
                                        <div class="button-text">App Store</div>
                                        <div class="button-text is_2">App Store</div>
                                    </div>
                                </div>
                            </a>
                            <a href="https://play.google.com/store/apps/details?id=com.raiz.application" class="app-download--btn" target="_blank">
                                <svg width="30" height="30" class="button-icon" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.33398 27.1498L15.1043 16.2114L18.9007 20.0666L6.09716 27.2967C5.61034 27.5717 5.01409 27.5675 4.53034 27.2852L4.33398 27.1498ZM14.0182 15.1083L3.75 25.5363V4.68035L14.0182 15.1083V15.1083ZM20.4348 10.799L25.4512 13.6313C25.9442 13.9104 26.25 14.4333 26.25 15C26.25 15.5667 25.9442 16.0896 25.4512 16.3687L20.2977 19.2781L16.1915 15.1083L20.4348 10.799V10.799ZM4.22045 2.95121C4.3125 2.86058 4.4158 2.78142 4.53034 2.71475C5.01409 2.43246 5.61034 2.4283 6.09716 2.70329L19.0377 10.0105L15.1043 14.0052L4.22045 2.95121Z" fill="currentColor"/>
                                </svg>
                                <div class="text-move--wrapper">
                                    <div class="text-move">
                                        <div class="button-text">Google Play</div>
                                        <div class="button-text is_2">Google Play</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="qr-scan--wrapper">
                        <div class="qr-scan">
                            <img src="https://cdn.prod.website-files.com/62e124360f555f5d020e84b9/62e3d68ee8067033a933947d_qr-code-2%202.png" loading="lazy" alt="" class="qr-code">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- USD Banking -->
<div class="modal fade" id="usdBanking" tabindex="-1" role="dialog" aria-labelledby="usdBankingLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body pt-0">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="more-info--content">
                    <h4 class="large-text">USD Banking Disclosures</h4>
                    <p class="body-text">Boost Bonuses are credited to your Savings Pods within 48 hours of enabling the Boost feature and on a daily basis thereafter, provided that the Savings Pod has accrued a Boost Bonus of at least $0.01. The Boost rate on Savings Pods is variable and may change at any time. The disclosed rate is effective as of August 1, 2023. Must have $0.01 in Savings Pods to earn a Boost rate of either 0.25% or 4.00% annually on the portion of balances up to $2000 per Savings Pod, up to $6000 total. The remaining balance earns 0.00%. To earn a Boost rate of 4.00%, the sum of your Eligible Payroll Deposits over a rolling 35-day period must be $500 or more, with at least one Eligible Payroll Deposit equalling a minimum of $100. No minimum balance required.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Payday Loans -->
<div class="modal fade" id="paydayLoans" tabindex="-1" role="dialog" aria-labelledby="paydayLoansLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body pt-0">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="more-info--content">
                    <h4 class="large-text">Payday Loans Disclosures</h4>
                    <p class="body-text">Boost Bonuses are credited to your Savings Pods within 48 hours of enabling the Boost feature and on a daily basis thereafter, provided that the Savings Pod has accrued a Boost Bonus of at least $0.01. The Boost rate on Savings Pods is variable and may change at any time. The disclosed rate is effective as of August 1, 2023. Must have $0.01 in Savings Pods to earn a Boost rate of either 0.25% or 4.00% annually on the portion of balances up to $2000 per Savings Pod, up to $6000 total. The remaining balance earns 0.00%. To earn a Boost rate of 4.00%, the sum of your Eligible Payroll Deposits over a rolling 35-day period must be $500 or more, with at least one Eligible Payroll Deposit equalling a minimum of $100. No minimum balance required.</p>
                </div>
            </div>
        </div>
    </div>
</div>

