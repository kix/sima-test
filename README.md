Установка
=========

Зависимости в проекте управляются [Composer](http://getcomposer.org), приложение реализовано на Symfony 2.1.

В общем случае конфигурация сводится к установке Composer и зависимостей (``curl -s http://getcomposer.org/installer | php && php composer.phar install``), настройке доступа к БД в [app/config/parameters.yml](https://github.com/kix/wtpro-test/blob/master/app/config/parameters.yml) и выполнении команды ``app/console doctrine:schema:create`` для инициализации схемы БД. Assetic в проекте не используется, т.к. все скрипты и стили лежат в шаблонах, а jQuery подтягивается с CDN Яндекса.

Прилложение проверялось на PHP 5.4 с ключом -S, но должно быть работоспособно и в других окружениях вроде Nginx + PHP-FPM.

Публично доступный путь — ``web/``, в него должен смотреть паблик сервера. Входные скрипты — app.php и app_dev.php для различных окружений соответственно.