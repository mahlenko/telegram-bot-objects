<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\GamesInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\InlineKeyboardMarkup;
use TelegramBot\Types\ReplyParameters;

/**
 * Use this method to send a game. On success, the sent Message is
 * returned.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class SendGame extends TelegramMethod implements GamesInterface
{
    /**
     * Unique identifier of the business connection on behalf of which the
     * message will be sent
     */
    public ?string $business_connection_id;

    /** Unique identifier for the target chat */
    public int $chat_id;

    /**
     * Unique identifier for the target message thread (topic) of the forum;
     * for forum supergroups only
     */
    public ?int $message_thread_id;

    /**
     * Short name of the game, serves as the unique identifier for the game.
     * Set up your games via @BotFather.
     */
    public string $game_short_name;

    /**
     * Sends the message silently. Users will receive a notification with no
     * sound.
     */
    public ?bool $disable_notification;

    /** Protects the contents of the sent message from forwarding and saving */
    public ?bool $protect_content;

    /** Description of the message to reply to */
    public ?ReplyParameters $reply_parameters;

    /**
     * A JSON-serialized object for an inline keyboard. If empty, one 'Play
     * game_title' button will be shown. If not empty, the first button must
     * launch the game. Not supported for messages sent on behalf of a
     * business account.
     */
    public ?InlineKeyboardMarkup $reply_markup;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['chat_id', 'game_short_name'];
}
