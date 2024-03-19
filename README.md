<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Тестовое задание Quest Rest API

PHP 7.4.33, Laravel Framework 8.83.27, Sqlite.

Для работы необходим PHP.

## Installation
- Скачать ZIP архив
- Открыть проект (quest-main) в командной строке
- Ввести команду:
```bash
  php artisan serve
```
- Получаем ответ типа:
```bash
  Starting Laravel development server: http://127.0.0.1:8000
  PHP 7.4.33 Development Server (http://127.0.0.1:8000) started
```
- Открыть ссылку http://127.0.0.1:8000 в браузере.

## Features

- Метод создания задания (создание задания в таблице quests)
- Метод вывода всех заданий
- Метод создания польователя 
(при создании задания, либо при входе, ввод любого нового никнейма создает нового пользователя в таблице users)
- Метод вывода заданий, выполненных пользователем (при входе через поле Login)
- Вывод баланса пользователя
- Метод зачисления очков выполненных заданий пользователем на баланс (реализован отношением многие ко многим через таблицу quest_users):
    - При неверном ответе не начисляет очки (остается на странице задачи)
    - При верном ответе начисляет очки и задачу пользователю (переходит на страницу пользователя)
    - При ответе на выполненную пользователем задачу возвращает на страницу пользователя

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
