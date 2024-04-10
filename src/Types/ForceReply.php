<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * ForceReply
 *
 * Upon receiving a message with this object, Telegram clients will display a reply
 * interface to the user (act as if the user has selected the bot's message and
 * tapped 'Reply'). This can be extremely useful if you want to create
 * user-friendly step-by-step interfaces without having to sacrifice privacy mode.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class ForceReply implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Shows reply interface to the user, as if they manually selected the
         * bot's message and tapped 'Reply'
         */
        public true $force_reply,
        /**
         * The placeholder to be shown in the input field when the reply is
         * active; 1-64 characters
         */
        public ?string $input_field_placeholder,
        /**
         * Use this parameter if you want to force reply from specific users
         * only. Targets: 1) users that are @mentioned in the text of the Message
         * object; 2) if the bot's message is a reply to a message in the same
         * chat and forum topic, sender of the original message.
         */
        public ?bool $selective,
    ) {
    }
}
