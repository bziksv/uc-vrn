<div class="question-form form_popup" id="callback" style="display: none">
    <div class="question-form-wr">
        <div class="question-form_content-wr">
            <div class="form_title">Заказать звонок</div>
            <div class="question-form_content">
                <form class="send_mail_raba">
                    <input type="hidden" name="formTitle" value="Задайте нам вопрос popup">
                    <input type="hidden" name="page" value="<?= getCurrentUrl() ?>">
                    <input type="text" name="name" placeholder="Ваше имя *" required>
                    <input type="tel" name="phone" placeholder="Телефон *" required>
                    <input type="checkbox" id="agreement2" name="agreement" style="display: none">
                    <label for="agreement2">
						<span>Нажимая кнопку «Отправить», я даю <a href="/legal/consent/" target="_blank">согласие</a> на обработку моих персональных данных в соответствии с нашей <a href="/legal/personal-data/" target="_blank">политикой обработки персональных данных</a></span>
                    </label>
                    <button type="submit">Отправить</button>
                </form>
            </div>
        </div>
    </div>
</div>