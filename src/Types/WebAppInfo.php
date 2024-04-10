<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * WebAppInfo
 *
 * Describes a Web App.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class WebAppInfo implements TelegramTypeInterface
{
    public function __construct(
        /**
         * An HTTPS URL of a Web App to be opened with additional data as specified in
         * Initializing Web Apps
         */
        public string $url,
    ) {
    }
}
