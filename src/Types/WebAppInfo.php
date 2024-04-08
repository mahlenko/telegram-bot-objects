<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TelegramTypeInterface;
use TelegramBot\TelegramType;

/**
 * Describes a Web App.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class WebAppInfo extends TelegramType implements TelegramTypeInterface
{
    /**
     * An HTTPS URL of a Web App to be opened with additional data as
     * specified in Initializing Web Apps
     */
    public string $url;
}
