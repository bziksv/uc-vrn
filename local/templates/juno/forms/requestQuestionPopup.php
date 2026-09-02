<div class="question-form form_popup" id="question" style="display: none">
    <div class="question-form-wr">
        <div class="question-form_content-wr">
            <div class="form_title">Задать вопрос</div>
            <div class="question-form_content">
                <form class="send_mail_raba">
                    <input type="hidden" name="formTitle" value="Задайте нам вопрос popup">
                    <input type="hidden" name="page" value="<?= getCurrentUrl() ?>">
                    <input type="text" name="name" placeholder="Ваше имя *" required>
                    <div class="form_popup_row">
                        <input type="tel" name="phone" placeholder="Телефон *" required>
                        <input type="email" name="email" placeholder="E-mail">
                    </div>
                    <input type="text" name="question" placeholder="Ваш вопрос">
                    <input type="checkbox" required id="agreement5" name="agreement" style="display: none">
                    <label for="agreement5">
						<span>Нажимая кнопку «Отправить», я даю <a href="/legal/consent/" target="_blank">согласие</a> на обработку моих персональных данных в соответствии с нашей <a href="/legal/personal-data/" target="_blank">политикой обработки персональных данных</a></span>
                    </label>
                    <button type="submit">Отправить</button>
                </form>
            </div>
        </div>
    </div>
</div>