# Framework life balance v1.1.6.1

Framework life balance предназначен для **сопровождения** всех этапов разработки отеческого сайта с любым масштабом на исходном php-коде, html-разметках ( css, image ) и js-скриптах, с чёткой последовательностью (смотрите <a target="_blank" href="/Компоненты ядра/1.Решения/Стандарты/Основа/4.Стандарт разработки.md">стандарт разработки ядра</a>) введения новых модулей, схем и наработок, и возможностью распределить разработку web-сайта на 8 человек для реализации 10 компонентов web-сайта:

| № | Компоненты ядра | Компоненты интерфейса
 ------------- |  ------------- | ------------- | 
| 1. | Решения | Интеллект
| 2. | Уведомления | Представления
| 3. | Ресурсы | Оформления
| 4. | Дела | Формы
| 5. | Модули | Библиотеки

<hr>

### Направление

У Framework life balance два направления разработки: back-end (ядро) и front-end (интерфейс). Здесь нет места для php-кода в интерфейсе, и html-а в ядре. Ядро и интерфейс разделены и изолированы, что позволяет безпрепятственно разрабатывать оба направления одновременно, почтительно дополняя (без возникновения каких либо merge) на git'e.

![Framework life balance](https://framework-life-balance.ru/Компоненты%20интерфейса/2.Представления/Картинки/slider/slide1_bg.jpg)

В интерфейсе реализована структура landing-page + ajax подгрузка данных с ядра по api, что позволяет пользователю взаимодействовать с сайтом без прерываний, а разработчику интерфейса иметь исходники без каких либо php-вставок.

В ядре реализованы Стандарты (детализации) ядра, наглядность Структуры (планировка), 4-е Сути (распределенная альтернатива контролёров в mvc), Наработки (упрощённая альтернатива моделей в mvc) и Схемы (упрощённая альтернатива yii2 migrate, установки и настроек). Благодаря такому подходу была реализована Схема таблиц базы данных и автоматическая реконструкция базы данных, что освободило разработчиков от необходимости формировать запросы до кучи. А так же реализован внутренний самовызов из консоли, оттого на фоновый режим отработки была переведена отправка почтового сообщения и реструктуризация базы данных, что для пользователя значительно уменьшило время ожидания ответа, а у разработчиков отпала необходимость настраивать cron.

<a target="_blank" href="https://framework-life-balance.ru/#about">Подробнее о проекте</a> (в том числе про этапы развёртки).


<hr>

### Разработка

Порядок разработки выстроен так, что равномерно переводит команду разработчиков на форму управления "холакратия", которая эффективна в непрерывной и распределительной разработке web-сайтов. При этом изучать холакратию не нужно, достаточно каждому участнику разработки соотвествовать ожиданиям (смотрите <a target="_blank" href="/Компоненты ядра/1.Решения/Стандарты/Основа/2.Стандарт разработчиков.md">стандарт разработчиков ядра</a>).

> Холакратия — это способ децентрализации власти, который позволяет выстроить иерархию (холархию) таким образом, чтобы каждый сотрудник мог влиять на жизнь компании и обладал полной властью в рамках своей роли и возложенных на неё ожиданий.


![Framework life balance](https://framework-life-balance.ru/Компоненты%20интерфейса/2.Представления/Картинки/illustrators/4values.jpg)

<hr>

### Документация

Сведения:

| № | Ядро | Интефрейс
 ------------- | ------------- | ------------- | 
| 1.| <a target="_blank" href="/Компоненты ядра/4.Дела/Сведения/Версия ядра.md">Версия ядра</a> | <a target="_blank" href="/Компоненты интерфейса/4.Формы/Сведения/Версия интерфейса.md">Версия интерфейса</a> 


Реализованные цели:

| № | Ядро | Интефрейс
 ------------- | ------------- | ------------- | 
| 0. | <a target="_blank" href="/Компоненты ядра/1.Решения/Цели/0.Цели релиза Framework life balance v1.md">Цели релиза Framework life balance v1</a> | <a target="_blank" href="/Компоненты интерфейса/1.Интеллект/Цели/0.Цели релиза Framework life balance v1.md">Цели релиза Framework life balance v1</a>
| 1. | <a target="_blank" href="/Компоненты ядра/1.Решения/Цели/1.Цели взаимодействий с базой данных по схеме.md">Цели взаимодействий с базой данных по схеме</a> | 

Изменения:

| № | Ядро | Интефрейс
 ------------- | ------------- | ------------- | 
| 1. | <a target="_blank" href="/Компоненты ядра/4.Дела/Изменения/1.Изменения под релиз Framework life balance v1.md">Изменения под релиз Framework life balance v1</a> | <a target="_blank" href="/Компоненты интерфейса/4.Формы/Изменения/1.Изменения под релиз Framework life balance v1.md">Изменения под релиз Framework life balance v1</a>
| 2. | <a target="_blank" href="/Компоненты ядра/4.Дела/Изменения/2.Изменения под взаимодействие с базой данных по схеме.md">Изменения под взаимодействие с базой данных по схеме</a> | 

Стандарты:

| № | Ядро | Интефрейс
 ------------- | ------------- | ------------- | 
| 1. | <a target="_blank" href="/Компоненты ядра/1.Решения/Стандарты/Основа/1.Стандарт ядра.md">Стандарт ядра</a> | <a target="_blank" href="/Компоненты интерфейса/1.Интеллект/Стандарты/Основа/1.Стандарт интерфейса.md">Стандарт интерфейса</a>
| 2. | <a target="_blank" href="/Компоненты ядра/1.Решения/Стандарты/Основа/2.Стандарт разработчиков.md">Стандарт разработчиков</a> | <a target="_blank" href="/Компоненты интерфейса/1.Интеллект/Стандарты/Основа/2.Стандарт разработчиков.md">Стандарт разработчиков</a>
| 3. | <a target="_blank" href="/Компоненты ядра/1.Решения/Стандарты/Основа/3.Стандарт компонентов.md">Стандарт компонентов</a> | <a target="_blank" href="/Компоненты интерфейса/1.Интеллект/Стандарты/Основа/3.Стандарт компонентов.md">Стандарт компонентов</a>
| 4. | <a target="_blank" href="/Компоненты ядра/1.Решения/Стандарты/Основа/4.Стандарт разработки.md">Стандарт разработки</a> | <a target="_blank" href="/Компоненты интерфейса/1.Интеллект/Стандарты/Основа/4.Стандарт разработки.md">Стандарт разработки</a>
| 5. | <a target="_blank" href="/Компоненты ядра/1.Решения/Стандарты/Схемы/Стандарт схемы базы данных.md">Стандарт схемы базы данных</a> |   
| 6. | <a target="_blank" href="/Компоненты ядра/1.Решения/Стандарты/Схемы/Стандарт схемы взаимодействия с базой данных.md">Стандарт схемы взаимодействия с базой данных</a> |  
| 7. | <a target="_blank" href="/Компоненты ядра/1.Решения/Стандарты/Схемы/Стандарт схемы наработок.md">Стандарт схемы наработок</a> |  

Нормативы:

| № | Ядро | Интефрейс
 ------------- | ------------- | ------------- | 
| 1. | <a target="_blank" href="/Компоненты ядра/3.Ресурсы/Нормативы/1.Норматив решений.md">Норматив решений</a> | <a target="_blank" href="/Компоненты интерфейса/3.Оформления/Нормативы/1.Норматив интеллекта.md">Норматив интеллекта</a>
| 2. | <a target="_blank" href="/Компоненты ядра/3.Ресурсы/Нормативы/2.Норматив уведомлений.md">Норматив уведомлений</a> | <a target="_blank" href="/Компоненты интерфейса/3.Оформления/Нормативы/2.Норматив представлений.md">Норматив представлений</a>
| 3. | <a target="_blank" href="/Компоненты ядра/3.Ресурсы/Нормативы/3.Норматив ресурсов.md">Норматив ресурсов</a> | <a target="_blank" href="/Компоненты интерфейса/3.Оформления/Нормативы/3.Норматив оформлений.md">Норматив оформлений</a>
| 4. | <a target="_blank" href="/Компоненты ядра/3.Ресурсы/Нормативы/4.Норматив дел.md">Норматив дел</a> | <a target="_blank" href="/Компоненты интерфейса/3.Оформления/Нормативы/4.Норматив форм.md">Норматив форм</a>
| 5. | <a target="_blank" href="/Компоненты ядра/3.Ресурсы/Нормативы/5.Норматив модулей.md">Норматив модулей</a> | <a target="_blank" href="/Компоненты интерфейса/3.Оформления/Нормативы/5.Норматив библиотек.md">Норматив библиотек</a>

<hr>

### Примечание

Исходный код сайта https://framework-life-balance.ru подгружается с данного репозитория.