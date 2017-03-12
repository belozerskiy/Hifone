<?php

/*
 * This file is part of Hifone.
 *
 * (c) Hifone.com <hifone@hifone.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

// Global
    'home'                => 'Главная',
    'excellent'           => 'Топ',
    'search'              => 'Поиск',
    'dashboard'           => 'Админ',
    'logout'              => 'Выйти',
    'logout_confirm'      => 'Вы точно хотите выйти?',
    'signup'              => 'Войти',
    'noitem'              => 'No items',
    'markdown_support'    => 'Поддерживается Markdown разметка',
    'at'                  => '',
    'view_count'          => 'кол-во просмотров',
    'follow'              => 'Следить',
    'unfollow'            => 'Не следить',
    'favorite'            => 'Избранное',
    'like'                => 'Нравится',
    'unlike'              => 'Не нравится',
    'deleted'             => 'Обьект был удален',
    'awesome'             => 'Успех.',
    'whoops'              => 'Упс',
    'success'             => 'Операция выполнена успешно',
    'failure'             => 'НЕ удалось выполнить операцию!',
    'powered_by'          => 'Copyright &copy; 2015-2016 <a href="http://hifone.com">Hifone</a> ',
    'feed'                => 'Лента',
    'registered_users'    => 'Для зарегестрированных пользователей:',
    'ranking'             => 'Ранк',
    'member'              => 'Член',
    'yes'                 => 'Да',
    'error_occurred'      => 'An error occurred',
    'content_empty'       => 'Контент пуст',
    'loading'             => 'Загрузка...',
    'uploading_file'      => 'Загрузка файла...',
    'action_title'        => 'Подтверждение',
    'action_text'         => 'Вы уверены что хотите выполнить это?',
// Nodes
    'nodes'            => [
        'all'               => 'Категории',
        'current'           => 'Текущая категория',
        'same_node_threads' => 'Связаныне посты',
    ],

// Threads
    'threads' => [
        'threads'        => 'Посты',
        'title'          => 'Заголовок',
        'body'           => 'Контент',
        'add'            => 'Добавить новый пост',
        'list'           => 'Посты',
        'recent'         => 'Недавние',
        'excellent'      => 'Топ',
        'like'           => 'Популярные',
        'unanswered'     => 'Без ответа',
        'stick'          => 'Прикрепить',
        'recommended'    => 'Рекомендованный',
        'last_reply_by'  => '',
        'more'           => 'подробнее',
        'noitem'         => 'Здесь нету постов.',
        'is_excellent'   => 'Пост был отмечене знаком отличия！',
        'login_needed'   => 'For Commenting you need to <a class="btn btn-success" href="/auth/login">Login</a>. If you dont have a Account you need to <a class="btn btn-primary" href="/auth/register">Register</a>.',
        'thread_count'   => 'Всего :threads постов',

        // Share
        'share2weibo'    => 'Share to weibo',
        'share2twitter'  => 'Share to Twitter',
        'share2google'   => 'Share to Google Plus',
        'share2facebook' => 'Share to Facebook',

        // Create or Edit
        'pick_node'      => 'Выбрать категорию',
        'mark_excellent' => 'Отмеить отлично',
        'mark_stick'     => 'Отметить прикрепленные',
        'mark_sink'      => 'Отметить понижение',
        // Posting Tips
        'posting_tips'   => [
            'title'     => 'Описание',
            'pt1_title' => 'Заголовок поста',
            'pt1_desc'  => 'Пожалуйста опишите суть проблемы в заголовке',
            'pt2_title' => 'Выберете категорию',
            'pt2_desc'  => 'Пожалуйста выберете правильную категорию для вашего поста. Правильный выбор категории делает ваш пост более ценным.',
            'pt3_title' => 'Markdown синтаксис',
            'pt3_desc'  => 'Hifone поддерживает <span style="font-family: Consolas, \'Panic Sans\', mono"><a href="https://help.github.com/articles/github-flavored-markdown" target="_blank">GitHub Flavored Markdown</a></span> текстовую разметку. Вы можете воспользоваться функцией предпросмотра и посматреть как будет выглядеть ваша страница.',
        ],
        //Community Guidelines
        'community_guidelines' => [
            'title'     => 'Правила сообщества',
            'cg1_title' => 'Пиратские ресурсы',
            'cg1_desc'  => 'Пожалуйста не размещайте ссылки на пиратские ресурсы.',
            'cg2_title' => 'Бла бла бла',
            'cg2_desc'  => 'бла бла бла бла бла',
            // 'cg2_title' => 'Friendship and Mutual Assistance',
            // 'cg2_desc'  => 'Be friendly and help others.',
        ],
        'insert_code'  => 'Insert code',
        'upload_image' => 'Upload image',
    ],

// Appends
    'appends' => [
        'appends' => 'Append',
        'content' => 'Content',
        'notice'  => 'By default, notifications are sent to the followers, if an appendant was added successfully.',
    ],

// Favorites
    'favorites' => [
        'favorites' => 'Избранные',
        'noitem'    => 'There are no favorites.',
    ],

// Replies
    'replies' => [
        'replies'        => 'Ответы',
        'add'            => 'Добавить ответ',
        'body'           => 'Контент',
        'recent'         => 'Недавние',
        'total'          => 'Всего',
        'noitem'         => 'Нету ответов.',
        'login_required' => 'Для того чтобы оставлять коментарии необходима войти.',
    ],

// Photos
    'photos' => [
        'drag_drop'     => '<div style="text-align: right;">Перетащите файл с помощью мыши, <a class="btn-upload" href="javascript:void(0);">выберете его</a>,<br> или скопируйте через буффер.</div>',
        'markdown_desc' => 'Markdown описание',
        'upload_error'  => 'Произошла ошибка во время загрузки файла.',
    ],

// Tags
    'tags' => [
        'tags'      => 'Тэги',
        'name'      => 'Имя тэга',
        'hot'       => 'Горячие тэги',
        'tags_help' => 'Тэги разделяются через запятую',
    ],

// Users
    'users' => [
        'users'                     => 'Пользователи',
        'id'                        => 'ID',
        'username'                  => 'Имя',
        'email'                     => 'Email',
        'avatar'                    => 'Аватар',
        'avatar_upload_success'     => 'Аватар успешно обнавлен.',
        'nickname'                  => 'Ник',
        'company'                   => 'Фирма',
        'score'                     => 'Score',
        'location'                  => 'Город',
        'location_help'             => 'Пожалуйста введите существующий город.',
        'blog'                      => 'Блог',
        'block'                     => 'Заблокирован',
        'unblock'                   => 'Разблокирован',
        'role'                      => 'Роль',
        'info'                      => 'Информация',
        'is_banned'                 => 'been banned',
        'total'                     => 'Высего',
        'list'                      => 'Список',
        'create'                    => 'Создать',
        'followers'                 => 'Следят',
        'signature'                 => 'Сигнатура',
        'bio'                       => 'Биография',
        'password'                  => 'Пароль',
        'password_confirmation'     => 'Подтвердиить пароль',
        'website'                   => 'Сайт',
        'profile'                   => 'Ваш профиль',
        'favorites'                 => 'Избарнное',
        'credits'                   => 'Your Credits',
        'locale'                    => 'Язык',
        'edit_profile'              => 'Отредактировать профиль',
        'edit_avatar'               => 'Изменить автар',
        'upload_avatar'             => 'Загрузить новый аватар',
        'upload_avatar_help'        => 'Формат аватара: .png или .jpg. Максимальный размер файла 2M',
        'password_settings'         => 'Настройки пароля',
        'password_current'          => 'Текущий пароль',
        'password_new'              => 'Введите новый пароль',
        'password_new_confirmation' => 'Подтвердить новый пароль',
        'password_update'           => 'Обновить пароль',
        'select_language'           => 'Выберете язык',
        'register_date'             => 'Дата:',
        'add'                       => [
            'title'   => 'Создать',
            'success' => 'Пользователь успешно создан.',
            'failure' => 'Пользователь не создан, пожалуйста попробуйте снова.',
        ],
        'edit'     => [
            'title'   => 'Настройки профиля',
            'success' => 'Информация пользователя обнавлена.',
        ],
    ],

// Notifications
    'notifications' => [
        'my'                          => 'Мои уведомления',
        'deleted'                     => 'Обьект был перемещен или удален.',
        'noitem'                      => 'У вас нету уведомлений',
        'thread_new_reply'            => 'новый коментарий в посте:',
        'thread_mention'              => 'упомянул вас:',
        'thread_favorite'             => 'добавил в избранное пост:',
        'thread_follow'               => 'следит за вами в посте:',
        'thread_like'                 => 'понравился ваш пост',
        'thread_mark_excellent'       => 'рекомендует ваш пост',
        'thread_move'                 => 'переместил ваш пост',
        'followed_thread_new_reply'   => 'commented on your followed thread:',
        'followed_thread_new_append'  => 'added a new append on thread',
        'followed_user_new_thread'    => 'добавил новый пост',
        'commented_thread_new_append' => 'added a new append',
        'user_follow'                 => 'следит за вами',
        'reply_like'                  => 'понравился ваш ответ',
        'reply_mention'               => 'упомеянул вас on:',
        'credit_register'             => 'added credits via register',
        'credit_login'                => 'added credits via daily login',
    ],

// Pms
    'pms'   => [
        'pms'             => 'Pm',
        'create'          => 'Create new Message',
        'list'            => 'Message List',
        'home'            => 'Private Messages - Overview',
        'readed'          => 'Readed',
        'unreaded'        => 'New Message',
        'send'            => 'Send Message',
        'pick_user'       => 'Choose Recipient',
        'recipient'       => 'Recipient',
        'recipient_error' => 'Recipient not exists.',
        'new_pm'          => 'New PM',
        'view_inbox'      => 'View my Inbox',
        'nav_create'      => 'Send PM',
        'nav_inbox'       => 'View Inbox',
        'nav_outbox'      => 'View Outbox',
        'same_user_error' => 'Recipient ID and sender ID have the same value.',
    ],

// Credits
    'credits' => [
        'credits'         => 'Credits',
        'mine'            => 'My credits',
        'time'            => 'Time',
        'type'            => 'Type',
        'reward'          => 'Reward',
        'balance'         => 'Balance',
        'balance_current' => 'Current balance',
    ],

// Tips
    'tips' => [
        'tips' => 'Случайный совет',
    ],

// Links
    'links' => [
        'links' => 'Полезные ссылки',
    ],

// Stats
    'stats' => [
        'title'   => 'Статус сообщества',
        'users'   => 'Пользователи',
        'threads' => 'Категории',
        'replies' => 'Ответы',
    ],

    'captcha' => [
        'captcha' => 'КАПЧА',
        'refresh' => 'Обновить',
        'failure' => 'Неправильная капча',
    ],

// Login
    'login' => [
        'login'                => 'Войти',
        'username'             => 'Имя',
        'login_placeholder'    => 'Email',
        'password'             => 'Пароль',
        'auth_prompt'          => 'Войдите пожалуйста.',
        'remember'             => 'Запомнить меня',
        'invalid'              => 'Неправельное имя пользователя или пароль.',
        'success'              => 'Вы успешно вошли.',
        'success_oauth'        => 'Вы успешно вошли через :provider.',
        'tips'                 => '',
        'account_available'    => 'If you have a account or do you want do login with Goolge Auth, klick <a href="/auth/login">Login</a>.',
        'login_with_oauth'     => 'Войти через соцсети',
        //OAuth Strings
        'oauth' => [
            'unbound'         => 'Disconnect from :provider',
            'unbound_success' => 'Disconnect successful.',
            'bound'           => 'Connect to :provider',
            //OAuth Messages for Login
            'login' => [
                'note' => 'After successful login, your :provider Account for :name is connected with your Hifone Account.',
            ],
            //OAuth Landing Page
            'landing' => [
                'title'    => 'Thirdparty Login',
                'welcome'  => ', to complete the Registration please select one of the following:',
                'choice_1' => '1. Existing Hifone Account',
                'button_1' => 'Login',
                'choice_2' => '2. Create new Hifone Account',
                'button_2' => 'Automatic registration',
                'note'     => 'Both choices conneting your :provider Account :name with a Hifone Account.',
            ],
            'errors' => [
                'InvalidState' => 'Аутентификация не удалась.',
            ],
        ],
    ],

    // Footer
    'footer' => [
        'about'   => 'О нас',
        'contact' => 'Контакты',
        'faq'     => 'ЧАВО',
    ],
];
