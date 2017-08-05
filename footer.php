
  </main>
  <!-- footer -->
	<footer class="page-footer" id="footer">
      <div class="container  container-small">
                  
        <div class="row">
          <div class="col m8 s12">
      <!-- <h5>Newsletter</h5> 
              <div class="row newsletter-row">
                <form class="col s12" id="newsletterForm">
                    <div class="row newsletter-row">
                        <div class="col s12 grey-text text-lighten-4">
                            Stay up to date with our weekly digest. (Secure and Private)
                        </div>
                    </div>
                  <div class="row">
                    <div class="input-field col s8">
                      <input id="newsletter-email" type="email" class="validate" ng-model="newsletteremail" required minlength="5">
                      <label for="newsletter-email">Email</label>
                    </div>
                  </div>
                    <div class="row">
                        <div class="col s12">
                            <button class="btn waves-effect waves-light" type="submit" name="action" ng-click="submitNewsletter(newsletteremail)">Subscribe
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </div>
                </form>
              </div> -->
            <h5>Rational Gifts</h5>
            <p class="grey-text text-lighten-4">We help you find that perfect gift that will be appreciated! All our products are categorized by sport activity type
                and gifts under each category are carefully currated by our team of experts. No more socks for Christmas!</p>
          </div>
          <div class="col m4 s12">
            <div class="row">
                <div class="col s12">
                    <h5>Links</h5>
                    <ul>
                        <li><a href="<?php bloginfo('url'); ?>/about">About Us</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/about">Contact Us</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/privacy">Privacy Policy</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/terms">Terms and Conditions</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/faq">Frequently asked questions (FAQ)</a></li>
                    </ul>
                </div>
            </div>
                <!-- Facebook Meta Tags 
            <div class="row">
                <div class="col s12">
                    <h5>Connect with us</h5>
                    <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-facebook-f fa-lg"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p fa-lg"></i></a></li>
                    </ul>
                </div>
            </div>
              -->
              
          </div>

        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        © 2016 Rational Gifts
        <a class="grey-text text-lighten-4 right" href="<?php bloginfo('url'); ?>/women">Women</a>
        <div class="right dot"><i class="material-icons tiny wc">wc</i></div> 
        <a class="grey-text text-lighten-4 right" href="<?php bloginfo('url'); ?>/men">Men</a>
        </div>
      </div>
    </footer>

  <!-- Modals when submitting newsletter -->
  <div id="newsletterSuccessModal" class="modal">
    <div class="modal-content">
      <h4 class="text-green accent-4">Subscription successful</h4>
      <p>Thank you very much for your interest, expect no more that one letter a week from us! We will not share your email address please refer to our <a href="/#/privacy">Privacy Policy</a> for details.</p>
    </div>
    <div class="modal-footer">
      <a href="" ng-click="dismissSuccessNewsletter()" class="modal-action modal-close waves-effect waves-green btn-flat green accent-4">Dismiss</a>
    </div>
  </div>

   <div id="newsletterFailModal" class="modal">
    <div class="modal-content">
      <h4 class="red-text">Subscription failed</h4>
      <p>An error has occured please reach out via email at hello@rationalgifts.com, we have been notified of this error and will get this resolved as soon as possible!</p>
    </div>
    <div class="modal-footer">
      <a href="" ng-click="dismissFailNewsletter()" class="modal-action modal-close waves-effect waves-red btn-flat red">Dismiss</a>
    </div>
  </div>
    <!-- End Modals -->
    <!-- Spinner to signal work -->
  
    <div class="status centered" style="display:none">
        <i class="fa fa-spinner fa-5x fa-spin green-text accent-4"></i>
    </div>
  <!-- End spinner-->

    <a href="#top" class="back-to-top font-size16px "><i class="material-icons">arrow_upward</i></a>
    <!-- Scripts  -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
