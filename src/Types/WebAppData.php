<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * Describes data sent from a Web App to the bot.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class WebAppData extends TelegramType implements TypesInterface
{
    /**
     * The data. Be aware that a bad client can send arbitrary data in this
     * field.
     */
    public string $data;

    /**
     * Text of the web_app keyboard button from which the Web App was opened.
     * Be aware that a bad client can send arbitrary data in this field.
     */
    public string $button_text;
}
