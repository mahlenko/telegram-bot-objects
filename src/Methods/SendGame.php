<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;
use TelegramBotCast\Types\InlineKeyboardMarkup;
use TelegramBotCast\Types\Message;
use TelegramBotCast\Types\ReplyParameters;

/**
 * SendGame
 *
 * Use this method to send a game. On success, the sent Message is returned.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class SendGame implements TelegramMethodInterface
{
    public const RESPONSE_TYPE = Message::class;

    public function __construct(
        /** Unique identifier of the business connection on behalf of which the message will be sent */
        public string $business_connection_id,
        /** Unique identifier for the target chat */
        public ?int $chat_id,
        /** Unique identifier for the target message thread (topic) of the forum; for forum supergroups only */
        public int $message_thread_id,
        /** Short name of the game, serves as the unique identifier for the game. Set up your games via @BotFather. */
        public ?string $game_short_name,
        /** Sends the message silently. Users will receive a notification with no sound. */
        public bool $disable_notification,
        /** Protects the contents of the sent message from forwarding and saving */
        public bool $protect_content,
        /** Description of the message to reply to */
        public ReplyParameters $reply_parameters,
        /** A JSON-serialized object for an inline keyboard. If empty, one 'Play game_title' button will be shown. If not empty, the first button must launch the game. Not supported for messages sent on behalf of a business account. */
        public InlineKeyboardMarkup $reply_markup,
    ) {
    }
}
