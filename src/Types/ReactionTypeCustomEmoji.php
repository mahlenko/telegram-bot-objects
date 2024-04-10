<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * ReactionTypeCustomEmoji
 *
 * The reaction is based on a custom emoji.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class ReactionTypeCustomEmoji implements TelegramTypeInterface
{
    public function __construct(
        /** Type of the reaction, always “custom_emoji” */
        public string $type,
        /** Custom emoji identifier */
        public string $custom_emoji_id,
    ) {
    }
}
