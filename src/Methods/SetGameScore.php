<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\GamesInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\Message;

/**
 * Use this method to set the score of the specified user in a game
 * message. On success, if the message is not an inline message, the <a
 * href="#message">Message</a> is returned, otherwise <em>True</em> is
 * returned. Returns an error, if the new score is not greater than the
 * user's current score in the chat and <em>force</em> is <em>False</em>.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class SetGameScore extends TelegramMethod implements GamesInterface
{
    /** User identifier */
    public int $user_id;

    /** New score, must be non-negative */
    public int $score;

    /**
     * Pass True if the high score is allowed to decrease. This can be useful
     * when fixing mistakes or banning cheaters
     */
    public ?bool $force;

    /**
     * Pass True if the game message should not be automatically edited to
     * include the current scoreboard
     */
    public ?bool $disable_edit_message;

    /**
     * Required if inline_message_id is not specified. Unique identifier for
     * the target chat
     */
    public ?int $chat_id;

    /**
     * Required if inline_message_id is not specified. Identifier of the sent
     * message
     */
    public ?int $message_id;

    /**
     * Required if chat_id and message_id are not specified. Identifier of
     * the inline message
     */
    public ?string $inline_message_id;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['user_id', 'score'];

    /** Response mapping type. */
    public string $response_type = 'bool';
}
