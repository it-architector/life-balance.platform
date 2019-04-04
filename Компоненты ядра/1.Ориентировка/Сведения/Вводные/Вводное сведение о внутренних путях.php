<?php

/* Схема внутренних путей */

/* Корень */
define('DIR_ROOT', dirname(dirname(dirname(dirname(dirname(__FILE__))))) . DIRECTORY_SEPARATOR);


/* Компонент ядра */
define('DIR_CORE_COMPONENTS', DIR_ROOT . 'Компоненты ядра' . DIRECTORY_SEPARATOR);

/* Компоненты интерфейса */
define('DIR_INTERFACE_COMPONENTS', DIR_ROOT . 'Компоненты интерфейса' . DIRECTORY_SEPARATOR);

/* Пользовательские данные */
define('DIR_USERS_DATA', DIR_ROOT . 'Пользовательские данные' . DIRECTORY_SEPARATOR);


/* Компонент решения */
define('DIR_SOLUTIONS', DIR_CORE_COMPONENTS . '1.Ориентировка' . DIRECTORY_SEPARATOR);

/* Компонент уведомления */
define('DIR_NOTICES', DIR_CORE_COMPONENTS . '2.Условие' . DIRECTORY_SEPARATOR);

/* Компонент ресурсов */
define('DIR_RESOURCES', DIR_CORE_COMPONENTS . '3.Распределение' . DIRECTORY_SEPARATOR);

/* Компонент дела */
define('DIR_BUSINESS', DIR_CORE_COMPONENTS . '4.Движение' . DIRECTORY_SEPARATOR);

/* Компонент модулей */
define('DIR_MODULES', DIR_CORE_COMPONENTS . '5.Модули' . DIRECTORY_SEPARATOR);

/* Github.com Модули */
define('DIR_GITHUB_MODULES', DIR_MODULES . 'Github.com' . DIRECTORY_SEPARATOR);

/* Модуль базы данных mysql */
define('DIR_MODULE_DATA_BASE', DIR_MODULES . 'Модуль базы данных mysql' . DIRECTORY_SEPARATOR);

/* Структуры */
define('DIR_STRUCTURES', DIR_NOTICES . 'Структуры' . DIRECTORY_SEPARATOR);

/* Нормативы */
define('DIR_MEASURES', DIR_RESOURCES . 'Нормативы' . DIRECTORY_SEPARATOR);

/* Нормативы базы данных */
define('DIR_MEASURES_DATA_BASE', DIR_MEASURES . 'Базы данных' . DIRECTORY_SEPARATOR);

/* Нормативы функций */
define('DIR_MEASURES_FUNCTIONS', DIR_MEASURES . 'Функций' . DIRECTORY_SEPARATOR);

/* Функции */
define('DIR_EXPERIENCES', DIR_BUSINESS . 'Функции' . DIRECTORY_SEPARATOR);

/* Функции сайта */
define('DIR_EXPERIENCES_SITE', DIR_EXPERIENCES . 'Категорий сайта' . DIRECTORY_SEPARATOR);

/* Функции компонентов */
define('DIR_EXPERIENCES_ESSENCES', DIR_EXPERIENCES . 'Компонентов' . DIRECTORY_SEPARATOR);

/* Протоколы */
define('DIR_PROTOCOLS', DIR_BUSINESS . 'Протоколы' . DIRECTORY_SEPARATOR);

/* Протоколы процессов */
define('DIR_PROTOCOLS_PROCESSES', DIR_PROTOCOLS . 'Процессов' . DIRECTORY_SEPARATOR);


/* Картинки пользователей */
define('DIR_USERS_IMAGES', DIR_USERS_DATA . 'images' . DIRECTORY_SEPARATOR);

/* Html блоки */
define('DIR_HTML', DIR_INTERFACE_COMPONENTS . '3.Распределение' . DIRECTORY_SEPARATOR . 'Нормативы' . DIRECTORY_SEPARATOR . 'Блочные' . DIRECTORY_SEPARATOR);


?>
