# Центрально-Чернозёмный Учебный Центр (uc-vrn)

Корпоративный сайт учебного центра в Воронеже: [https://uc-vrn.ru](https://uc-vrn.ru)

Сайт на **1С-Битрикс** (ядро `25.750.0`). Кастомный шаблон `juno`, контент в инфоблоках, заявки с форм уходят в инфоблок и на почту через SMTP-модуль.

## Стек

| Компонент | Значение |
|-----------|----------|
| CMS | 1С-Битрикс (сайт `s1`) |
| Ядро | 25.750.0 (сентябрь 2025) |
| PHP | 8.3, UTF-8 |
| БД | MySQL / MariaDB, кодировка `utf8_unicode_ci` |
| Хостинг (прод) | Beget |
| Шаблон | `local/templates/juno` |
| Путь на сервере | `/new.uc-vrn.ru/public_html` |
| Git | [https://github.com/bziksv/uc-vrn](https://github.com/bziksv/uc-vrn) |

Контакты в шапке/подвале: Воронеж, Ленинский проспект 119А; телефон `+7 (473) 239-66-69`; почта `uchcomb@mail.ru`.

## Структура репозитория

```
uc-vrn/                       # DOCUMENT_ROOT сайта (= public_html)
├── README.md                 # эта документация
├── .gitignore
├── index.php                 # главная
├── .htaccess                 # ЧПУ, 301 со старых URL, блокировка IP
├── urlrewrite.php            # SEF-маршруты инфоблоков
├── include/                  # редактируемые области (телефон, адрес, тексты)
├── local/                    # кастомный код и шаблон
├── bitrix/                   # ядро и модули CMS
├── upload/                   # загруженные файлы
├── o-kompanii/               # о компании, новости, документы, преподаватели
├── obuchenie/                # каталог программ обучения
├── legal/                    # согласия, cookies, персональные данные
├── scripts/                  # локальный стенд
└── ucvrn_new.sql             # дамп БД (не коммитить)
```

## Разделы сайта

| URL | Назначение |
|-----|------------|
| `/` | Главная: баннер, программы, рабочие специальности, новости, формы |
| `/o-kompanii/` | О компании |
| `/o-kompanii/dokumenty/` | Документы и лицензии |
| `/o-kompanii/novosti/` | Новости |
| `/o-kompanii/statyi/` | Статьи |
| `/o-kompanii/prepodavateli/` | Преподаватели |
| `/o-kompanii/vopros-otvet/` | FAQ |
| `/o-kompanii/svedeniya-ob-uchreditelyakh/` | Учредители |
| `/o-kompanii/struktura-i-organy-upravleniya/` | Структура |
| `/obuchenie/` | Программы обучения (SEF) |
| `/distantsionnoe-obuchenie/` | Дистанционные программы |
| `/otzyvy-i-klienty/` | Отзывы и клиенты |
| `/kontakty/` | Контакты |
| `/search/` | Поиск |
| `/legal/` | Юридические страницы (согласие, cookies, ПДн) |
| `/politika-konfidentsialnosti/` | Политика конфиденциальности |

Старые URL (`/about/`, `/news/`, `/contacts/` и др.) редиректятся в `.htaccess`.

Программы на главной и в меню:

- Охрана труда
- Пожарная безопасность
- ДОПОГ
- Трактористы / водители погрузчика
- Электробезопасность
- Подготовка водителей
- Другие рабочие специальности

## Инфоблоки

| ID | Тип | Название | Где используется |
|----|-----|----------|------------------|
| 5 | `faq` | Вопрос-ответ | `/o-kompanii/vopros-otvet/` |
| 6 | `novosti` | Новости | главная, `/o-kompanii/novosti/` |
| 7 | `founders` | Сведения об учредителях | `/o-kompanii/svedeniya-ob-uchreditelyakh/` |
| 8 | `docs` | Документы | `/o-kompanii/dokumenty/` |
| 9 | `learning` | Обучение | `/obuchenie/`, главная |
| 10 | `learning` | Группы обучения | привязка к программам |
| 11 | `learning` | Документы программы обучения | файлы к курсам |
| 12 | `teachers` | Преподаватели | `/o-kompanii/prepodavateli/` |
| 13 | `formsmsg` | Сообщения из форм | заявки из форм |
| 14 | `requests` | Отзывы и клиенты | `/otzyvy-i-klienty/` |
| 16 | `novosti` | Статьи | `/o-kompanii/statyi/` |
| 17 | `learning` | Дистанционное обучение | `/distantsionnoe-obuchenie/` |

2–4 — служебные инфоблоки мастера «Корпоративный сайт» (продукция, услуги, вакансии), на публичной части не задействованы.

Свойства программ обучения (ИБ 9): `PROP_FORMAT`, `PROP_SROK`, `PROP_RES_DOC`, `PROP_COST`, `PROP_ONLINE`, `PROP_SHOW_ON_MAIN`, `PROP_IS_SPEC`, `PROP_MAIN_TITLE`, `PROP_MAIN_DESC`, `PROP_MAIN_ORDER`.

## Шаблон `juno`

Путь: `local/templates/juno/`

- `header.php` / `footer.php` — вёрстка, меню, контакты из `include/`
- `css/` — `main.css`, `custom.css`, `responsive.css`, Slick, Fancybox
- `js/` — jQuery 3.6, Slick, masked input, Fancybox, `script.js`
- `forms/` — HTML форм и AJAX-обработчик
- `components/bitrix/` — переопределения стандартных компонентов

Шаблоны компонентов:

- `news/obuchenie`, `news/obuchenieDistanse`, `news/news`, `news/teachers`
- `news.list`: `mainPageLearnSpec`, `newsListSlider`, `FAQ`, `docs`, `founders`, `lastNews` и др.
- `menu`: `topMenu`, `topMenuMobile`, `aboutMenu`, футерные меню

Тексты шапки, подвала и главной правятся через `bitrix:main.include` из `include/`.

## Формы заявок

Файлы: `local/templates/juno/forms/`

| Файл | Назначение |
|------|------------|
| `requestCallPopup.php` | заказ звонка |
| `requestEdu.php` / `requestEduPopup.php` / `askEdu.php` | заявка на обучение |
| `askQuestion.php` / `requestQuest.php` / `requestQuestionPopup.php` | вопрос |
| `searchPopup.php` | поиск |
| `ajax_sendForm.php` | обработчик POST |

Обработчик:

1. Проверяет honeypot-поля (`clickField`, `inputField`) и согласие на ПДн.
2. Пишет элемент в инфоблок 13.
3. Шлёт почтовое событие `FEEDBACK_MSG` (шаблон ID 32).

Почта идёт через модуль `wsrubi.smtp` (подключается в `bitrix/php_interface/init.php`).

Заявки защищены honeypot и **Яндекс SmartCaptcha**. Ключи (клиентский + серверный) лежат в `local/php_interface/smartcaptcha.keys.php` (не в git). Пока ключи пустые, виджет не показывается, сервер капчу не проверяет. В консоли SmartCaptcha в разрешённые домены добавить `uc-vrn.ru`, `127.0.0.1`, `localhost`.

## Кастомный PHP

`local/php_interface/init.php` подключает `functions.php`.

Полезные функции: `getElementById`, `getElemensList`, `getElemensList2`, `getSectionById`, `getIblockSections`, `getResizeImgSrc`, `getPhoneLink`, `getFileIco`, `getFileSize`, `detectMobile`, `dump` (только с конкретного IP).

## Модули (кроме стандартных)

- `wsrubi.smtp` — SMTP-отправка почты
- `niges.cookiesaccept` — баннер cookies
- `ismagin.filecleaner` — очистка файлов
- `thebrainstech.copyiblock` — копирование инфоблоков
- `landing` — лендинги (`/pub/site/`)

## Конфигурация и секреты

Эти файлы **не должны попадать в git** (см. `.gitignore`):

| Файл | Что внутри |
|------|------------|
| `bitrix/.settings.php` | логин/пароль БД, `crypto_key` |
| `bitrix/.settings_extra.php` | доп. настройки ядра (если есть) |
| `bitrix/php_interface/dbconn.php` | подключение к БД (legacy) |
| `bitrix/php_interface/after_connect_d7.php` | SQL после коннекта |
| `bitrix/license_key.php` | лицензионный ключ Битрикс |
| `*.sql` | дампы БД |

В текущем `.settings.php` заданы:

- хост БД: `localhost`
- имя БД и пользователь: `ucvrn_new`
- `utf_mode`: включён
- `exception_handling.debug`: `true` (для прода лучше выключить)
- cookies: `http_only`, `secure` выключен

После клонирования скопируйте эти файлы с продакшена или создайте заново и пропишите свои учётные данные.

## Локальный запуск

1. PHP 8.3+, MySQL, Apache/Nginx с `mod_rewrite`.
2. Document root указать на корень репозитория.
3. Создать БД и импортировать дамп:

```bash
mysql -u USER -p -e "CREATE DATABASE ucvrn_new CHARACTER SET utf8 COLLATE utf8_unicode_ci;"
mysql -u USER -p ucvrn_new < ucvrn_new.sql
```

4. Восстановить секреты: `.settings.php`, `dbconn.php`, `license_key.php`, `after_connect_d7.php`.
5. Права: файлы `644`, каталоги `755` (так задано в `dbconn.php`).
6. Админка: `/bitrix/admin/`.

Пример фрагмента `.settings.php` (пароль подставить свой):

```php
'connections' => [
  'value' => [
    'default' => [
      'className' => '\\Bitrix\\Main\\DB\\MysqliConnection',
      'host' => 'localhost',
      'database' => 'ucvrn_new',
      'login' => 'ucvrn_new',
      'password' => '***',
      'options' => 2.0,
    ],
  ],
  'readonly' => true,
],
```

`after_connect_d7.php` выставляет `utf8` / `utf8_unicode_ci` и сбрасывает `sql_mode`.

## Сервер и Git

Document root на хостинге (Beget):

```
/new.uc-vrn.ru/public_html
```

Корень репозитория соответствует этому каталогу на сервере.

Репозиторий: [https://github.com/bziksv/uc-vrn](https://github.com/bziksv/uc-vrn)

```
git remote add origin https://github.com/bziksv/uc-vrn.git
```

## SEO и служебное

- `robots.txt` — сайт `https://uc-vrn.ru`, sitemap `sitemap.xml` (индекс по инфоблокам 5–9, 12, 14, 16, 17).
- В `robots.txt` опечатка в `Host`: `httsp://` вместо `https://`.
- Яндекс-верификация: `yandex_1a747d4b512c0334.html`.
- В `.htaccess` закрыт набор IP-подсетей.

## Что править при разработке

- Вёрстка и поведение — `local/templates/juno/`
- Тексты шапки/подвала/главной — `include/`
- Хелперы — `local/php_interface/functions.php`
- Маршруты SEF — `urlrewrite.php` и настройки компонента `bitrix:news`
- Контент курсов, новостей, заявок — админка, инфоблоки выше
- Ядро `bitrix/modules/` лучше не править вручную
