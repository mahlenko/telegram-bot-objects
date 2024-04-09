<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * Represents a menu button, which launches a <a href="/bots/webapps">Web
 * App</a>.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class MenuButtonWebApp extends TelegramType implements TypesInterface
{
    /** Type of the button, must be web_app */
    public string $type;

    /** Text on the button */
    public string $text;

    /**
     * Description of the Web App that will be launched when the user presses
     * the button. The Web App will be able to send an arbitrary message on
     * behalf of the user using the method answerWebAppQuery.
     */
    public WebAppInfo $web_app;
}
