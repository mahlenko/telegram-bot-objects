<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * Describes a <a href="/bots/webapps">Web App</a>.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class WebAppInfo extends TelegramType implements TypesInterface
{
    /**
     * An HTTPS URL of a Web App to be opened with additional data as
     * specified in Initializing Web Apps
     */
    public string $url;
}
