![alt text](TelegramBotCastsCover.png?v=1.1 "Telegram Bot Casts")

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

Начиная с версии 2.0 проект переходит на собственное версионирование, вместо указания версии Telegram Bot API.
Таким образом, станет удобнее поддерживать свой код, в случае изменений.

## О проекте

Проект содержит описания всех типов и методов из документации Telegram Bot API.
Файлы сгенерированы автоматически с помощью [mahlenko/telegram-api-parser](https://github.com/mahlenko/telegram-api-parser). 
Вы можете попробовать сделать это самостоятельно, если файлы этого репозитория устареют.

## Изменения 2.0:
 - Последняя на текущий момент версия **Telegram Bot API 7.2**
 - Методы Telegram (Available methods, Updating messages и т. д.) теперь имеют `$response_type` в своем классе.

`$response_type` - обычно это строка типа `string` с базовыми типами (`int`, `float`, `string`, `bool`)
или имя класса Telegram Types: `TelegramBot\Types\Message::class`. Некоторые методы Telegram могут вернуть массив,
для таких методов `$response_type` имеет тип `array` в котором всегда 1 элемент с типом данных.

Методы из `Updating messages` можно использовать в `inline` сообщениях, обычно при таком использовании,
**вместо** указанного типа в `$response_type` будет `bool`. Поэтому, вы не должны полагаться 
только на параметр `$response_type` для создания документированных `Response`. 

## Простая установка

```shell
composer require makhlenko/telegram-bot-casts
```

## Расширение

Выполните подмену классов `TelegramBot\BaseType` и `TelegramBot\BaseMethod` используя 
контейнер зависимостей в своем проекте. 

### Расширение через `composer.json`

```json
{
     "autoload": {
       "files": [
         "your_app/path/to/BaseType.php",
         "your_app/path/to/BaseMethod.php"
       ]
     }
}
```
После этого обновите файл дампа:
```shell
composer dumpautoload
```

## ✨ Благодарности

![TonBlockchainLogo](/ton_logo_dark_background.svg#gh-dark-mode-only)
![TonBlockchainLogo](/ton_logo_light_background.svg#gh-light-mode-only)

Вы всегда можете отправить благодарность с помощью TON на мой кошелек
`appto-wallet.ton`