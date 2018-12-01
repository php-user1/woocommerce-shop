<div class="news-letter">
    <div class="container">
        <div class="join">
            <h6 class="text-uppercase">Store search</h6>
            <div class="sub-left-right">
                <form>
                    <input type="text"
                           name="s"
                           value="Enter Search Query"
                           onfocus="this.value = '';"
                           onblur="if (this.value == '') {this.value = 'Enter Search Query';}" />
                    <input type="submit" class="text-uppercase" value="Search" />
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="container">
        <div class="footer_top">
            <div class="span_of_4">

                <?php
                    if ( is_active_sidebar( 'footer_widget' ) ) {
                        dynamic_sidebar( 'footer_widget' );
                    }
                ?>

                <!--<div class="col-md-3 span1_of_4">
                    <h4>Shop</h4>
                    <ul class="f_nav">
                        <li><a href="#">new arrivals</a></li>
                        <li><a href="#">men</a></li>
                        <li><a href="#">women</a></li>
                        <li><a href="#">accessories</a></li>
                        <li><a href="#">kids</a></li>
                        <li><a href="#">brands</a></li>
                        <li><a href="#">trends</a></li>
                        <li><a href="#">sale</a></li>
                        <li><a href="#">style videos</a></li>
                    </ul>
                </div>-->
                <!--<div class="col-md-3 span1_of_4">
                    <h4>help</h4>
                    <ul class="f_nav">
                        <li><a href="#">frequently asked  questions</a></li>
                        <li><a href="#">men</a></li>
                        <li><a href="#">women</a></li>
                        <li><a href="#">accessories</a></li>
                        <li><a href="#">kids</a></li>
                        <li><a href="#">brands</a></li>
                    </ul>
                </div>
                <div class="col-md-3 span1_of_4">
                    <h4>account</h4>
                    <ul class="f_nav">
                        <li><a href="account.html">login</a></li>
                        <li><a href="register.html">create an account</a></li>
                        <li><a href="#">create wishlist</a></li>
                        <li><a href="checkout.html">my shopping bag</a></li>
                        <li><a href="#">brands</a></li>
                        <li><a href="#">create wishlist</a></li>
                    </ul>
                </div>
                <div class="col-md-3 span1_of_4">
                    <h4>popular</h4>
                    <ul class="f_nav">
                        <li><a href="#">new arrivals</a></li>
                        <li><a href="#">men</a></li>
                        <li><a href="#">women</a></li>
                        <li><a href="#">accessories</a></li>
                        <li><a href="#">kids</a></li>
                        <li><a href="#">brands</a></li>
                        <li><a href="#">trends</a></li>
                        <li><a href="#">sale</a></li>
                        <li><a href="#">style videos</a></li>
                        <li><a href="#">login</a></li>
                        <li><a href="#">brands</a></li>
                    </ul>
                </div>-->
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="cards text-center">
            <img src="<?php bloginfo( 'template_directory' ) ?>/site/images/cards.jpg" alt="cards" />
        </div>
        <div class="copyright text-center">
            <p>© 2015 - <?php echo date('Y'); ?> Eshop. All Rights Reserved | Design by <a href="http://w3layouts.com"> W3layouts</a></p>
        </div>
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>