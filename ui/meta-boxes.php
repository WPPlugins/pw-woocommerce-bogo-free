<?php

/*
Copyright (C) 2017 Pimwick, LLC

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

if ( ! class_exists( 'PW_BOGO_Meta_Boxes' ) ) :

class PW_BOGO_Meta_Boxes {

    public static function description( $post ) {
        ?>
        <input type="hidden" name="pw_bogo_meta_nonce" id="pw_bogo_meta_nonce" value="<?php echo wp_create_nonce( 'pw_bogo_save_data' ); ?>" />
        <p>Just enter a title and click Publish. The title will be shown to the customer in the cart and all WooCommerce products in your catalog will be eligible for "Buy One, Get One of equal or lesser value for free."</p>
        <p>To end the promotion, simply click Move to Trash.</p>
        <?php
    }

    public static function pro( $post ) {
        ?>
        <a href="https://pimwick.com/pw-bogo" target="_blank"><img src="<?php echo plugins_url( 'assets/images/logo.png', dirname( __FILE__ ) ); ?>" width="722" height="250" border="0" class="pw-bogo-logo"></a>
        <div class="pw-bogo-features-header"><a href="https://pimwick.com/pw-bogo" target="_blank">PW WooCommerce BOGO Pro</a> features</div>
        <div id="pw-bogo-features">
            <ul class="pw-bogo-features-list">
                <li>Buy One, Get One Free</li>
                <li>Buy One, Get One % Off</li>
                <li>Schedule begin and end dates</li>
                <li>Specify products by category</li>
                <li>Include or exclude individual products</li>
                <li>Options to exclude sale items or not allow other coupons in conjunction with BOGO offer</li>
            </ul>
        </div>
        <a href="https://pimwick.com/pw-bogo" class="button button-primary pw-bogo-buy-button" target="_blank">Buy the Pro Version for only $20</a>
        <?php
    }

    public static function about( $post ) {
        ?>
        <span class="pw-bogo-title">PW WooCommerce BOGO</span>
        <span class="pw-bogo-version">v<?php echo PW_BOGO::version(); ?></span>
        <div>by <a href="https://www.pimwick.com" target="_blank" class="pw-bogo-link">Pimwick, LLC</a></div>
        <?php
    }

}

endif;

?>