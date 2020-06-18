<main class="my-account fadein-slideup">
    <section class="auth-page">
        <?php if (isset($_GET['signup'])) { ?>
            <div class="method--signup section__info">
                <p class="info__subtitle">Sign up for a</p>
                <p class="info__title">Wooks account</p>
                <hr class="info__line">
                <p class="info__text">em ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="method--signup section__form">
                <form method="post" class="woocommerce-form woocommerce-form-register register" <?php do_action('woocommerce_register_form_tag'); ?>>
                    <?php do_action('woocommerce_register_form_start'); ?>
                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                        <label class="wooks__label" for="reg_email">Email&nbsp;<span class="required">*</span></label>
                        <input type="email" class="wooks__field woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" autocomplete="email" value="<?php echo (!empty($_POST['email'])) ? esc_attr(wp_unslash($_POST['email'])) : ''; ?>" />
                    </p>
                    <?php if ('no' === get_option('woocommerce_registration_generate_password')) : ?>
                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label class="wooks__label" for="reg_password">Password&nbsp;<span class="required">*</span></label>
                            <input type="password" class="wooks__field woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" autocomplete="new-password" />
                        </p>
                    <?php endif; ?>
                    <?php do_action('woocommerce_register_form'); ?>
                    <p class="woocommerce-form-row form-row">
                        <?php wp_nonce_field('woocommerce-register', 'woocommerce-register-nonce'); ?>
                        <button type="submit" class="button button--secondary woocommerce-Button woocommerce-button button woocommerce-form-register__submit" name="register" value="Sign up">
                            <span>Sign up</span>
                        </button>
                    </p>
                    <?php do_action('woocommerce_register_form_end'); ?>
                </form>
            </div>
        <?php } else if (isset($_GET['signin'])) { ?>
            <div class="method--signin section__info">
                <p class="info__subtitle">Welcome back</p>
                <p class="info__title">to Wooks</p>
                <hr class="info__line">
                <p class="info__text">em ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="method--signin section__form">
                <form class="woocommerce-form woocommerce-form-login login" method="post">
                    <?php do_action('woocommerce_login_form_start'); ?>
                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                        <label class="wooks__label" for="username"><?php esc_html_e('Username or email address', 'woocommerce'); ?>&nbsp;<span class="required">*</span></label>
                        <input type="text" class="wooks__field woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" value="<?php echo (!empty($_POST['username'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>" />
                    </p>
                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                        <label class="wooks__label" for="password"><?php esc_html_e('Password', 'woocommerce'); ?>&nbsp;<span class="required">*</span></label>
                        <input class="wooks__field woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password" />
                    </p>
                    <?php do_action('woocommerce_login_form'); ?>
                    <p class="form-row">
                        <label class="wooks__label" class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                            <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span><?php esc_html_e('Remember me', 'woocommerce'); ?></span>
                        </label>
                        <?php wp_nonce_field('woocommerce-login', 'woocommerce-login-nonce'); ?>
                        <button type="submit" class="button button--secondary woocommerce-button button woocommerce-form-login__submit" name="login" value="<?php esc_attr_e('Log in', 'woocommerce'); ?>">
                            <span>
                                <?php esc_html_e('Sign in', 'woocommerce'); ?>
                            </span>
                        </button>
                    </p>
                    <p class="woocommerce-LostPassword lost_password">
                        <a href="<?php echo esc_url(wp_lostpassword_url()); ?>"><?php esc_html_e('Lost your password?', 'woocommerce'); ?></a>
                    </p>
                    <?php do_action('woocommerce_login_form_end'); ?>
                </form>
            </div>
        <?php } else {
            wp_redirect("/my-account/?signin");
            exit();
        } ?>
    </section>
</main>