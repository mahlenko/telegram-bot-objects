<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * ReactionTypeEmoji
 *
 * The reaction is based on an emoji.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class ReactionTypeEmoji implements TelegramTypeInterface
{
    public function __construct(
        /** Type of the reaction, always “emoji” */
        public string $type,
        /**
         * Reaction emoji. Currently, it can be one of "", "", "", "", "", "", "", "", "",
         * "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "",
         * "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "",
         * "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "",
         * "", "", "", ""
         */
        public string $emoji,
    ) {
    }
}
