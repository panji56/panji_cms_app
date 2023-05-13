<?php

return [
    'app' => [
        'name' => 'Winter CMS',
        'tagline' => 'Повернення до витоків',
    ],
    'locale' => [
        'ar' => 'العربية',
        'be' => 'Беларуская',
        'bg' => 'Български',
        'ca' => 'Català',
        'cs' => 'Čeština',
        'da' => 'Dansk',
        'en' => 'English (United States)',
        'en-au' => 'English (Australia)',
        'en-ca' => 'English (Canada)',
        'en-gb' => 'English (United Kingdom)',
        'et' => 'Eesti',
        'de' => 'Deutsch',
        'el' => 'Ελληνικά',
        'es' => 'Español',
        'es-ar' => 'Español (Argentina)',
        'fa' => 'فارسی',
        'fr' => 'Français',
        'fr-ca' => 'Français (Canada)',
        'hu' => 'Magyar',
        'id' => 'Bahasa Indonesia',
        'it' => 'Italiano',
        'ja' => '日本語',
        'kr' => '한국어',
        'lt' => 'Lietuvių',
        'lv' => 'Latviešu',
        'nb-no' => 'Norsk (Bokmål)',
        'nl' => 'Nederlands',
        'pl' => 'Polski',
        'pt-br' => 'Português (Brasil)',
        'pt-pt' => 'Português (Portugal)',
        'ro' => 'Română',
        'rs' => 'Srpski',
        'ru' => 'Русский',
        'fi' => 'Suomi',
        'sv' => 'Svenska',
        'sk' => 'Slovenský',
        'sl' => 'Slovenščina',
        'th' => 'ไทย',
        'tr' => 'Türkçe',
        'uk' => 'Українська мова',
        'zh-cn' => '简体中文',
        'zh-tw' => '繁體中文',
        'vn' => 'Tiếng việt',
    ],
    'directory' => [
        'create_fail' => 'Неможливо створити директорію: :name',
    ],
    'file' => [
        'create_fail' => 'Неможливо створити файл: :name',
    ],
    'combiner' => [
        'not_found' => "Складальник ресурсів не може знайти файл ':name'.",
    ],
    'system' => [
        'name' => 'Система',
        'menu_label' => 'Система',
        'categories' => [
            'cms' => 'CMS',
            'misc' => 'Різне',
            'logs' => 'Журнали',
            'mail' => 'Пошта',
            'shop' => 'Магазин',
            'team' => 'Команда',
            'users' => 'Користувачі',
            'system' => 'Система',
            'social' => 'Соціальне',
            'backend' => 'Backend',
            'events' => 'Події',
            'customers' => 'Клієнтське',
            'my_settings' => 'Мої налаштування',
            'notifications' => 'Сповіщення',
        ],
    ],
    'theme' => [
        'label' => 'Тема',
        'unnamed' => 'Безіменна тема',
        'name' => [
            'label' => 'Назва теми',
            'help' => 'Назва теми по її унікальним кодом. Наприклад, Winter.Vanilla',
        ],
    ],
    'themes' => [
        'install' => 'Встановити теми',
        'search' => 'Пошук тем для установки...',
        'installed' => 'Встановлені теми',
        'no_themes' => 'Немає тем, встановлених з магазину.',
        'recommended' => 'Рекомендуємо',
        'remove_confirm' => 'Ви впевнені, що хочете видалити обрану тему?',
    ],
    'plugin' => [
        'label' => 'Плагін',
        'unnamed' => 'Безіменний плагін',
        'name' => [
            'label' => 'Назва плагіну',
            'help' => 'Введіть назву плагіна зі своїм унікальним кодом. Наприклад, Winter.Blog',
        ],
        'by_author' => 'Автор :name',
    ],
    'plugins' => [
        'manage' => 'Керування плагінами',
        'install' => 'Встановити плагіни',
        'install_products' => 'Встановити розширення',
        'search' => 'Пошук плагінів для установки...',
        'installed' => 'Встановлені плагіни',
        'no_plugins' => 'Немає плагінів, встановлених з маркету.',
        'recommended' => 'Рекомендуємо',
        'plugin_label' => 'Плагін',
        'unknown_plugin' => 'Плагін було видалено з файлової системи.',
        'select_label' => 'Оберіть дію...',
        'bulk_actions_label' => 'Масові дії',
        'check_yes' => 'Да',
        'check_no' => 'Ні',
        'unfrozen' => 'Оновлення включено',
        'enabled' => 'Плагін увімкнето',
        'freeze' => 'вимкнути оновлення для',
        'unfreeze' => 'включити оновлення для',
        'enable' => 'увімкнути',
        'disable' => 'вимкнути',
        'refresh' => 'скинути',
        'remove' => 'Видалити',
        'freeze_label' => 'Вимкнути оновлення',
        'unfreeze_label' => 'Увімкнути оновлення',
        'enable_label' => 'Увімкнути плагіни',
        'disable_label' => 'Вимкнути плагіни',
        'refresh_label' => 'Скинути дані плагіна',
        'action_confirm' => 'Ви впевнені що хочете :action ці плагіни?',
        'freeze_success' => 'Оновлення успішно вимкнено для вибраних плагінів.',
        'unfreeze_success' => 'Оновлення успішно включені для вибраних плагінів.',
        'enable_success' => 'Плагіни успішно включені.',
        'disable_success' => 'Плагіни успішно відключені.',
        'refresh_confirm' => 'Ви впевнені?',
        'refresh_success' => 'Вибрані плагіни успішно оновлені.',
        'remove_confirm' => 'Ви впевнені, що хочете видалити цей плагін?',
        'remove_success' => 'Вибрані плагіни успішно видалені.',
        'replace' => [
            'multi_install_error' => 'Замена нескольких плагинов в настоящее время не поддерживается',
        ],
    ],
    'project' => [
        'name' => 'Проект',
        'owner_label' => 'Власник',
        'attach' => 'Підключити проект',
        'detach' => 'Від\'єднати проект',
        'none' => 'Не підключений',
        'id' => [
            'label' => 'Ідентифікатор проекту',
            'help' => 'Як знайти ідентифікатор проекту?',
            'missing' => 'Будь ласка, вкажіть ідентифікатор вашого проекту.',
        ],
        'detach_confirm' => 'Ви впевнені, що хочете від\'єднати цей проект?',
        'unbind_success' => 'Проект був успішно від\'єднаний.',
    ],
    'settings' => [
        'menu_label' => 'Налаштування',
        'not_found' => 'Неможливо знайти зазначені налаштування.',
        'missing_model' => 'На сторінці налаштувань відсутнє визначення моделі.',
        'update_success' => 'Налаштування для :name успішно оновлені.',
        'test_subject' => 'Тест поштового драйвера',
        'test_content' => 'Це тестовий лист для підтвердження того, що надані налаштування пошти працюють.',
        'test_confirm' => 'Це збереже вашу поточну конфігурацію та надішле тестовий лист на :email.',
        'return' => 'Повернутися до системних налаштувань',
        'search' => 'Пошук',
    ],
    'mail' => [
        'log_file' => 'Файл журналу',
        'menu_label' => 'Налаштування пошти',
        'menu_description' => 'Керування налаштуванням електронної пошти.',
        'general' => 'Загальне',
        'method' => 'Метод',
        'sender_name' => 'Ім\'я відправника',
        'sender_email' => 'Адреса відправника',
        'php_mail' => 'PHP mail',
        'smtp' => 'SMTP',
        'smtp_address' => 'Сервер вихідної пошти',
        'smtp_authorization' => 'Використовувати SMTP авторизацію',
        'smtp_authorization_comment' => 'Активуйте цю опцію, якщо ваш SMTP-сервер вимагає авторизацію.',
        'smtp_username' => 'SMTP логін',
        'smtp_password' => 'SMTP пароль',
        'smtp_port' => 'SMTP порт',
        'smtp_ssl' => 'Використовувати SSL',
        'smtp_encryption' => 'Протокол шифрування для SMTP',
        'smtp_encryption_none' => 'Без шифрування',
        'smtp_encryption_tls' => 'TLS',
        'smtp_encryption_ssl' => 'SSL',
        'sendmail' => 'Sendmail',
        'sendmail_path' => 'Sendmail шлях',
        'sendmail_path_comment' => 'Будь ласка, вкажіть шлях до sendmail.',
        'drivers_hint_content' => 'Дивиться в <a href=":url" target="_blank">документації</a> список інших підтримуваємих поштових методів та способи їх включення.',
    ],
    'mail_templates' => [
        'menu_label' => 'Шаблони пошти',
        'menu_description' => 'Зміна шаблонів листів, що відправляються користувачам і адміністраторам.',
        'new_template' => 'Новий шаблон',
        'new_layout' => 'Новий макет',
        'new_partial' => 'Новий фрагмент',
        'template' => 'Шаблон',
        'templates' => 'Шаблони',
        'partial' => 'Фрагмент',
        'partials' => 'Фрагменти',
        'menu_layouts_label' => 'Макети пошти',
        'menu_partials_label' => 'Фрагменти пошти',
        'layout' => 'Макет',
        'layouts' => 'Макети',
        'no_layout' => '-- макет відсутній --',
        'name' => 'Назва',
        'name_comment' => 'Унікальне ім\'я, яке використовується для позначення цього шаблону',
        'code' => 'Код',
        'code_comment' => 'Унікальний код, який використовується для позначення цього шаблону',
        'subject' => 'Тема',
        'subject_comment' => 'Тема повідомлення',
        'description' => 'Опис',
        'content_html' => 'HTML',
        'content_css' => 'CSS',
        'content_text' => 'Plaintext',
        'test_send' => 'Надіслати тестове повідомлення',
        'test_success' => 'Тестове повідомлення було успішно надіслано.',
        'test_confirm' => 'Тестове повідомлення буде відправлено на :email. Продовжити?',
        'creating' => 'Створення шаблону...',
        'creating_layout' => 'Створення макета...',
        'saving' => 'Збереження шаблону...',
        'saving_layout' => 'Збереження макета...',
        'delete_confirm' => 'Ви дійсно хочете видалити цей шаблон?',
        'delete_layout_confirm' => 'Ви дійсно хочете видалити цей макет?',
        'deleting' => 'Видалення шаблону...',
        'deleting_layout' => 'Видалення макета...',
        'sending' => 'Відправка тестового повідомлення...',
        'return' => 'Повернутися до списку шаблонів',
        'options' => 'Опції',
        'disable_auto_inline_css' => 'Вимкнути автоматичний вбудований CSS',
    ],
    'mail_brand' => [
        'menu_label' => 'Поштовий брендинг',
        'menu_description' => 'Змініть кольори та вигляд шаблонів пошти.',
        'page_title' => 'Налаштування зовнішнього вигляду пошти',
        'sample_template' => [
            'heading' => 'Заголовок',
            'paragraph' => 'Це абзац, що містить текст Lorem Ipsum та посилання. Cumque dicta <a>doloremque eaque</a>, enim error laboriosam pariatur possimus tenetur veritatis voluptas.',
            'table' => [
                'item' => 'Пункт',
                'description' => 'Опис',
                'price' => 'Ціна',
                'centered' => 'По центру',
                'right_aligned' => 'Праворуч',
            ],
            'buttons' => [
                'primary' => 'Основна кнопка',
                'positive' => 'Позитивна кнопка',
                'negative' => 'Негативна кнопка',
            ],
            'panel' => 'Наскільки чудова ця панель?',
            'more' => 'Ще один текст',
            'promotion' => 'Код купона: WINTER',
            'subcopy' => 'Це підкопія листа',
            'thanks' => 'Спасибі',
        ],
        'fields' => [
            '_section_background' => 'Задній план',
            'body_bg' => 'Фон тіла документа',
            'content_bg' => 'Фон обгортки вмісту',
            'content_inner_bg' => 'Фон вмісту',
            '_section_buttons' => 'Кнопки',
            'button_text_color' => 'Колір тексту кнопки',
            'button_primary_bg' => 'Колір основної кнопки',
            'button_positive_bg' => 'Колір позитивної кнопки',
            'button_negative_bg' => 'Колір негативної кнопки',
            '_section_type' => 'Типографія',
            'header_color' => 'Колір заголовку',
            'heading_color' => 'Колір заголовків',
            'text_color' => 'Колір тексту',
            'link_color' => 'Колір посилання',
            'footer_color' => 'Нижній колонтитул',
            '_section_borders' => 'Межі',
            'body_border_color' => 'Колір під заголовком',
            'subcopy_border_color' => 'Колір над колонтитулом',
            'table_border_color' => 'Колір таблиці',
            '_section_components' => 'Компоненти',
            'panel_bg' => 'Фон панелі',
            'promotion_bg' => 'Фон промо блоку',
            'promotion_border_color' => 'Колір рамки промо блоку',
        ],
    ],
    'install' => [
        'project_label' => 'Приєднати до проекту',
        'plugin_label' => 'Встановити плагін',
        'theme_label' => 'Встановити тему',
        'missing_plugin_name' => 'Будь ласка, вкажіть назву плагіна для установки.',
        'missing_theme_name' => 'Будь ласка, вкажіть назву теми для установки.',
        'install_completing' => 'Завершення процесу установки',
        'install_success' => 'Плагін був успішно встановлений.',
    ],
    'updates' => [
        'title' => 'Менеджер оновлень',
        'name' => 'Оновлення ПЗ',
        'menu_label' => 'Оновлення',
        'menu_description' => 'Оновлення системи, керування плагінами та темами.',
        'return_link' => 'Повернутися до системи оновлень',
        'check_label' => 'перевірити оновлення',
        'retry_label' => 'Спробувати ще раз',
        'plugin_name' => 'Назва',
        'plugin_code' => 'Код',
        'plugin_description' => 'Опис',
        'plugin_version' => 'Версія',
        'plugin_author' => 'Автор',
        'plugin_not_found' => 'Плагін не знайдено',
        'plugin_version_not_found' => 'Версія плагіна не знайдена',
        'core_current_build' => 'Поточна версія системи',
        'core_view_changelog' => 'Перегляд списку змін',
        'core_build' => 'Версія :build',
        'core_build_help' => 'Остання доступна версія.',
        'core_downloading' => 'Завантаження файлів програми',
        'core_extracting' => 'Розпакування файлів програми',
        'core_set_build' => 'Встановлення номера збірки',
        'update_warnings_title' => 'Виявлено проблеми, які потребують вашої уваги',
        'update_warnings_plugin_missing' => 'Плагін :code є залежністю плагіна :parent_code, але він не виявлений у системі. Будь ласка, встановіть цей плагін.',
        'update_warnings_plugin_replace' => 'Плагін :plugin заменяет :alias, будь ласка видаліть :alias щоб не було конфліктів',
        'update_warnings_plugin_replace_cli' => 'Плагін :plugin заменяет :alias, будь ласка видаліть :alias щоб не було конфліктів',
        'changelog' => 'Список змін',
        'changelog_view_details' => 'Перегляд подробиць',
        'plugins' => 'Плагіни',
        'themes' => 'Теми',
        'disabled' => 'Відключено',
        'plugin_downloading' => 'Завантаження плагіна: :name',
        'plugin_extracting' => 'Розпакування плагіна: :name',
        'plugin_version_none' => 'Новий плагін',
        'plugin_current_version' => 'Поточна версія плагіну',
        'theme_new_install' => 'Нова тема встановлена.',
        'theme_downloading' => 'Завантаження теми: :name',
        'theme_extracting' => 'Розпакування теми: :name',
        'update_label' => 'Оновити',
        'update_completing' => 'Завершення процесу оновлення',
        'update_loading' => 'Пошук доступних оновлень...',
        'update_success' => 'Процес оновлення успішно завершений.',
        'update_failed_label' => 'Неможливо оновити програму',
        'force_label' => 'Оновити примусово',
        'found' => [
            'label' => 'Доступні нові оновлення!',
            'help' => 'Натисніть «Оновити», щоб почати процес оновлення.',
        ],
        'none' => [
            'label' => 'Оновлень немає',
            'help' => 'Нові оновлення не знайдено.',
        ],
        'important_action' => [
            'empty' => 'оберіть дію',
            'confirm' => 'Підтвердіть оновлення',
            'skip' => 'Пропустити цей плагін (тільки один раз)',
            'ignore' => 'Пропускати цей плагін (завжди)',
        ],
        'important_action_required' => 'Необхідна дія',
        'important_view_guide' => 'Переглянути керівництво по оновленню',
        'important_view_release_notes' => 'Перегляд приміток випуску',
        'important_alert_text' => 'Деякі оновлення вимагають вашої уваги.',
        'details_title' => 'Інформація про плагін',
        'details_view_homepage' => 'Перейти до домашньої сторінки',
        'details_readme' => 'Документація',
        'details_readme_missing' => 'Документація не надана.',
        'details_changelog' => 'Історія змін',
        'details_changelog_missing' => 'Історії змін не надана.',
        'details_upgrades' => 'Інструкція по оновленню',
        'details_upgrades_missing' => 'Інструкція по оновленню не надана.',
        'details_licence' => 'Ліцензія',
        'details_licence_missing' => 'Ліцензія не зазначена.',
        'details_current_version' => 'Поточна версія',
        'details_author' => 'Автор',
    ],
    'server' => [
        'connect_error' => 'Помилка підключення до сервера.',
        'response_not_found' => 'Сервер оновлення не знайдено.',
        'response_invalid' => 'Помилкова відповідь сервера.',
        'response_empty' => 'Порожня відповідь сервера.',
        'file_error' => 'Сервер не зміг доставити пакет.',
        'file_corrupt' => 'Завантажений файл був пошкоджений.',
    ],
    'behavior' => [
        'missing_property' => 'Клас :class повинен містити властивість $:property, що використовується розширенням :behavior.',
    ],
    'config' => [
        'not_found' => 'Не вдалося знайти конфігураційний файл :file, очікуваний для :location.',
        'required' => "Для конфігурації, що використовується в :location не вказано властивість ':property'.",
    ],
    'zip' => [
        'extract_failed' => "Неможливо зволікти файл ':file'.",
    ],
    'event_log' => [
        'hint' => 'У цьому журналі відображається список можливих помилок, які виникають в роботі додатка, таких як виключення і налагоджувальна інформація.',
        'menu_label' => 'Журнал подій',
        'menu_description' => 'Перегляд системного журналу подій.',
        'empty_link' => 'Очистити журнал подій',
        'empty_loading' => 'Очищення журналу подій...',
        'empty_success' => 'Успішне очищення журналу подій.',
        'return_link' => 'Повернутися до журналу подій',
        'id' => 'ID',
        'id_label' => 'ID події',
        'created_at' => 'Дата & Час',
        'message' => 'Повідомлення',
        'level' => 'Рівень',
        'preview_title' => 'Подія',
    ],
    'request_log' => [
        'hint' => 'У цьому журналі відображається список запитів браузера, які потребують уваги. Наприклад, якщо відвідувач відкриває неіснуючу сторінку, то в журналі створюється запис з кодом статусу 404.',
        'menu_label' => 'Журнал запитів',
        'menu_description' => 'Перегляд невдалих або перенаправлених запитів.',
        'empty_link' => 'Очистити журнал запитів',
        'empty_loading' => 'Очищення журналу запитів...',
        'empty_success' => 'Успішне очищення журналу запитів.',
        'return_link' => 'Повернутися до журналу запитів',
        'id' => 'ID',
        'id_label' => 'ID запису',
        'count' => 'Лічильник',
        'referer' => 'Джерело запиту',
        'url' => 'Адреса',
        'status_code' => 'Статус',
        'preview_title' => 'Запит',
    ],
    'permissions' => [
        'name' => 'Система',
        'manage_system_settings' => 'Налаштування системних параметрів',
        'manage_software_updates' => 'Керування оновленнями',
        'access_logs' => 'Перегляд системних логів',
        'manage_mail_templates' => 'Керування поштовими шаблонами',
        'manage_mail_settings' => 'Керування налаштуваннями пошти',
        'manage_other_administrators' => 'Керування іншими адміністраторами',
        'impersonate_users' => 'Видавати себе за користувачів',
        'manage_preferences' => 'Керування налаштуваннями бренду',
        'manage_editor' => 'Керування налаштуваннями редактора коду',
        'manage_own_editor' => 'Управління налаштуваннями персонального редактора коду',
        'view_the_dashboard' => 'Перегляд панелі керування',
        'manage_default_dashboard' => 'Управління панеллю керування за замовчуванням',
        'manage_branding' => 'Персоналізація панелі керування',
    ],
    'log' => [
        'menu_label' => 'Налаштування журналів',
        'menu_description' => 'Вкажіть для яких частин CMS слід вести журнал.',
        'default_tab' => 'Ведення журналу',
        'log_events' => 'Зберігати системні події',
        'log_events_comment' => 'Система зберігання подій в базі даних, на додаток до журналу на основі файлів.',
        'log_requests' => 'Зберігати помилкові запити',
        'log_requests_comment' => 'Запити браузерів, які потребують уваги, такі як помилка 404.',
        'log_theme' => 'Зберігати зміни теми',
        'log_theme_comment' => 'Зміни які внесені засобами CMS.',
    ],
    'media' => [
        'invalid_path' => 'Вказано неприпустимий шлях до файлу: ":path".',
        'folder_size_items' => 'Об\'єктів',
    ],
    'page' => [
        'custom_error' => [
            'label' => 'Помилка сторінки',
            'help' => 'Просимо вибачення, щось пішло не так і сторінка не може бути відображена.',
        ],
        'invalid_token' => [
            'label' => 'Невірний токен безпеки',
        ],
        'maintenance' => [
            'label' => "Ми скоро повернемося!",
            'help' => "В даний час ми знаходимося на обслуговуванні, зайдіть пізніше!",
            'message' => 'Повідомлення:',
            'available_at' => 'Спробуйте ще раз після:',
        ],
    ],
    'pagination' => [
        'previous' => 'Попередній',
        'next' => 'Наступний',
    ],
];
