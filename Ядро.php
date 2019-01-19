<?php

/*
 * Ядро Framework life balance v1
 *
 * Версия: /Компоненты ядра/4.Дела/Сведения/Версия ядра.md
 *
 * Этапы:
 * 1. Подключение.
 * 2. Инициация.
 * 4. Процесс.
 */

/*
 * 1 этап:
 * Подключение.
 */

/* Подключаем схему внутренних путей */
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'Компоненты ядра'. DIRECTORY_SEPARATOR . '3.Ресурсы'. DIRECTORY_SEPARATOR . 'Схемы'. DIRECTORY_SEPARATOR . 'Схема внутренних путей.php';

/* Подключаем суть решений */
require_once DIR_EXPERIENCES_ESSENCES . 'Функции сути решений.php';

/* Подключаем суть уведомлений */
require_once DIR_EXPERIENCES_ESSENCES . 'Функции сути уведомлений.php';

/* Подключаем суть ресурсов */
require_once DIR_EXPERIENCES_ESSENCES . 'Функции сути ресурсов.php';

/* Подключаем суть дел */
require_once DIR_EXPERIENCES_ESSENCES . 'Функции сути дел.php';

/* Подключаем суть модулей */
require_once DIR_MODULES . 'Суть модулей.php';

/*
 * 2 этап:
 * Инициация.
 */

use \Framework_life_balance\core_components\Notices;
use \Framework_life_balance\core_components\Solutions;
use \Framework_life_balance\core_components\Resources;
use \Framework_life_balance\core_components\Business;

/* Включаем контроль ядра */
Solutions::initiation();

/* Определяем вывод информации */
Notices::initiation();

/* Подготавливаем работу с ресурсами */
Resources::initiation();

/* Подготавливаем работу с наработками */
Business::initiation();

/*
 * 3 этап:
 * Процесс.
 */

/* Разбираем запрос */
Solutions::parse_request();

/* Разбираем авторизованность */
Solutions::parse_authorized();

/* Проверяем запрос на правомерность */
Solutions::check_request_legality();

/* Создаем комуникацию с памятью */
Resources::create_communication_with_memory();

/* Проверяем изменения в схеме базы данных */
Solutions::check_changes_schema_data_base();

/* Создаем комуникацию с базой данных */
Resources::create_communication_with_data_base();

/* Проверяем запрос на доступность */
Solutions::check_request_access();

/* Разбираем параметры запроса */
Solutions::parse_parameters_request();

/* Проверяем запрос на деструктив */
Solutions::check_request_destructive();

/* Выполняем запрошенную наработанную цель */
Business::execute_request_experience_goal();

/* Проверяем ответ на правильность */
Solutions::check_answer_correct();

/* Результат выполнения в интерфейс */
Notices::result_executed_to_interface();

/* Прекращаем работу ядра */
Solutions::stop_core();

?>