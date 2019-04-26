<?php
/**
 * @Package Single-form
 * @Version 1.0
 */
/*
Plugin Name: Single Form
Plugin URI: https://pgeorgiev.tech
Description: A simple Lead Gen form plugin - insert shortcode  [simple_form]  to your page.
Author: Plamen Georgiev
Version: 1.0
Author URI: https://pgeorgiev.tech
Text domain: sf_wp
*/

add_action('admin_menu', 'simple_form_setup_menu');
 
function simple_form_setup_menu(){
        add_menu_page( 'Simple form Page', 'Simple Form', 'manage_options', 'simple-form', 'simple_form_init' );
}
 
function simple_form_init() {
    echo "<h1>Please insert shortcode to your page - [simple_form]</h1>";
}


// ------------------------------------------------
// A simple Lead Gen form plugin
// ------------------------------------------------
function simple_form() {
	ob_start();
    $a = shortcode_atts(array(
    ), $atts);
    ?>

        <section class="sec-spacer">
                <div class="container container-center">
                    <h3 class="title text-center">Simple Lead Gen Form Plugin</h3>
                    <form class="tc-form-style">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-field">
                                    <input type="text" placeholder="Name" maxlength="18" required>
                                </div>
                                <div class="form-field">
                                    <input type="tel" placeholder="Phone Number" maxlength="14" required>
                                <div class="form-field">
                                </div>
                                    <input type="email" placeholder="Email Address" maxlength="18" required>
                                </div>
                                <div class="form-field">
                                    <input type="text" placeholder="Desired Budget" maxlength="5" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-field">
                                    <textarea placeholder="Message" rows="7" cols="50" maxlength="140"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-button">
                            <button type="submit">Send Message</button>
                        </div>
                    </form>                 
                </div>
            </section>

        <style>
.tc-form-style .form-field {margin-bottom: 20px;}
.tc-form-style .form-field input {width: 100%;height: 50px;padding: 5px 18px;font-size: 14px;border: 2px solid rgba(0, 0, 0, 0.04);}
.tc-form-style .form-field textarea {width: 100%;padding: 10px 18px;font-size: 14px;border: 2px solid rgba(0, 0, 0, 0.04);}
.tc-form-style .form-field input:focus, 
.tc-form-style .form-field textarea:focus {border-color: rgba(0, 0, 0, 0.4);outline: none;}
.tc-form-style .form-button {text-align: center;}
.tc-form-style .form-button button {background: #fff;border: 2px solid rgba(0, 0, 0, 0.04);height: 46px;min-width: 170px;font-size: 14px;-webkit-transition: all .3s ease-out;transition: all .3s ease-out;}
.tc-form-style .form-button button:hover {background: #444;border-color: #444;color: #fff; cursor: pointer;} 
@media (max-width: 767px) {
    .row [class*="col-"]:nth-child(n+2) {
        margin-top: 60px;
    }
}
        </style>
    <?php
	return ob_get_clean();
}


add_shortcode('simple_form', 'simple_form');
/*End of new signup form */
