<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * BusinessIntro
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class BusinessIntro implements TelegramTypeInterface
{
    public function __construct(
        /** Title text of the business intro */
        public ?string $title,
        /** Message text of the business intro */
        public ?string $message,
        /** Sticker of the business intro */
        public ?Sticker $sticker,
    ) {
    }
}
