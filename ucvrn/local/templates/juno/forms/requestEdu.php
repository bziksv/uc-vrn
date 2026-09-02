<div class="question-form">
    <div class="container">
        <div class="question-form-wr question-form-wr_big">
            <div class="left_side">
                <div class="form_title">Заявка на обучение</div>
                <div class="form_sub_title">
                    Заполните простую форму и с вами свяжутся в ближайшее время для уточнения информации.
                </div>
                <div class="form_desc">
                    Если у Вас возникли вопросы - звоните по телефону <br>
                    <a href="tel:+74732396669">+7 (473) 239-66-69</a> 
                    или задайте вопрос в <a href="#callback" class="fancybox">форме обратной связи</a>.
                </div>
            </div>
            <div class="question-form_content-wr">
                <div class="question-form_content">
                    <form class="send_mail_raba">
                        <input type="hidden" name="formTitle" value="Задайте нам вопрос">
                        <input type="hidden" name="page" value="<?= getCurrentUrl() ?>">
                        <input type="text" name="name" placeholder="Ваше имя *" required>
                        <input type="tel" name="phone" placeholder="Телефон *" required>
                        <input type="email" name="email" placeholder="E-mail *" required>
                        <div class="drop_select_container">
                            <input type="hidden" value="" name="spec">
                            <div class="drop_select_value">Выберите специальность</div>
                            <div class="drop_select_item_container">
                                <?
                                $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file",
                                    "PATH" => SITE_DIR . "include/forms/listSpec.php"], false);
                                ?>
                            </div>
                        </div>
                        <input type="checkbox" required id="agreement1" name="agreement" style="display: none">
                        <label for="agreement1">
							<span>Нажимая кнопку «Отправить», я даю <a href="/legal/consent/" target="_blank">согласие</a> на обработку моих персональных данных в соответствии с нашей <a href="/legal/personal-data/" target="_blank">политикой обработки персональных данных</a></span>
                        </label>
                        <button type="submit">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>