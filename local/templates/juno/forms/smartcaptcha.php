<?php
if (!function_exists('ucvrn_smartcaptcha_enabled') || !ucvrn_smartcaptcha_enabled()) {
    return;
}
?>
<div class="smart-captcha-modal">
    <div class="smart-captcha-modal__backdrop js-smart-captcha-close"></div>
    <div class="smart-captcha-modal__dialog" role="dialog" aria-modal="true" aria-labelledby="smart-captcha-modal-title">
        <button type="button" class="smart-captcha-modal__close js-smart-captcha-close" aria-label="Закрыть">
            <svg width="20" height="20" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.2929 10.9203L0 21.2132L0.707092 21.9203L11 11.6274L21.2929 21.9203L22 21.2132L11.7071 10.9203L21.9203 0.707108L21.2132 0L11 10.2132L0.786804 0L0.0797119 0.707108L10.2929 10.9203Z"></path></svg>
        </button>
        <div class="smart-captcha-modal__title" id="smart-captcha-modal-title">Подтвердите, что вы не робот</div>
        <div class="smart-captcha-modal__widget js-smart-captcha"></div>
    </div>
</div>
