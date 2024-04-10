<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * InlineKeyboardMarkup
 *
 * This object represents an inline keyboard that appears right next to the message
 * it belongs to.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class InlineKeyboardMarkup implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Array of button rows, each represented by an Array of InlineKeyboardButton
         * objects
         * @var array<InlineKeyboardButton>
         */
        public array $inline_keyboard,
    ) {
    }
}
