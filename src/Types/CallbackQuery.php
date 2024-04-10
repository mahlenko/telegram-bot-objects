<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * CallbackQuery
 *
 * This object represents an incoming callback query from a callback button in an
 * inline keyboard. If the button that originated the query was attached to a
 * message sent by the bot, the field message will be present. If the button was
 * attached to a message sent via the bot (in inline mode), the field
 * inline_message_id will be present. Exactly one of the fields data or
 * game_short_name will be present.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class CallbackQuery implements TelegramTypeInterface
{
    public function __construct(
        /** Unique identifier for this query */
        public string $id,
        /** Sender */
        public User $from,
        /** Message sent by the bot with the callback button that originated the query */
        public ?MaybeInaccessibleMessage $message,
        /**
         * Identifier of the message sent via the bot in inline mode, that originated the
         * query.
         */
        public ?string $inline_message_id,
        /**
         * Global identifier, uniquely corresponding to the chat to which the message with
         * the callback button was sent. Useful for high scores in games.
         */
        public string $chat_instance,
        /**
         * Data associated with the callback button. Be aware that the message originated
         * the query can contain no callback buttons with this data.
         */
        public ?string $data,
        /**
         * Short name of a Game to be returned, serves as the unique identifier for the
         * game
         */
        public ?string $game_short_name,
    ) {
    }
}
