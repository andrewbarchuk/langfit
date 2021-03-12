<?php

/**
 * Template part for displaying modal window
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ieverly
 */
?>

<div class="modal micromodal-slide" id="cta" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
            <header class="modal__header">
                <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
            </header>
            <main class="modal__content" id="cta-content">
                <?php if (ICL_LANGUAGE_CODE == 'uk') : ?>
                    <?php echo do_shortcode('[contact-form-7 id="60" title="Форма (ua)"]'); ?>
                <?php elseif (ICL_LANGUAGE_CODE == 'ru') : ?>
                    <?php echo do_shortcode('[contact-form-7 id="61" title="Форма (ru)"]'); ?>
                <?php endif; ?>
            </main>
        </div>
    </div>
</div>