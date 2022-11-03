<footer>
    <div class="container margin_60_35">
        <div class="row">
            <div class="col-lg-5 col-md-12 p-r-5">
                <p><img src="<?php echo e(url('')); ?>/img/logo-sticky.png" width="150" height="36" alt=""></p>
                <p><b>Opening hours</b><br>
                    09:00 - 21:00</p>
            </div>
            <div class="col-lg-3 col-md-6 ml-lg-auto">
                <h5>Useful links</h5>
                <ul class="links">
                    <li><a href="about.html">About</a></li>
                    <?php if(!isset(auth()->user()->id)): ?>
                        <li><a href="#sign-in-dialog" id="sign-in" title="Sign In">Login</a></li>
                        <li><a href="register.html">Register</a></li>
                    <?php endif; ?>
                    <li><a href="contacts.html">Contacts</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5>Contact with Us</h5>
                <ul class="contacts">
                    <li><a href="tel://61280932400"><i class="ti-mobile"></i> +62 23 8093 3400</a></li>
                    <li><a href="mailto:info@grahaoffice.com"><i class="ti-email"></i> info@grahaoffice.com</a></li>
                </ul>
            </div>
        </div>
        <!--/row-->
        <hr>
        <div class="row">
            <div class="col-lg-6">
                <ul id="footer-selector">
                </ul>
            </div>
            <div class="col-lg-6">
                <ul id="additional_links">
                    <li><span>Terms and conditions</span></li>
                    <li><span>Privacy</span></li>
                    <li><span>© 2022 GrahaOffice</span></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<?php /**PATH C:\Users\ACER\Documents\GitHub\grahaoffice\resources\views/customers/layout/footer.blade.php ENDPATH**/ ?>