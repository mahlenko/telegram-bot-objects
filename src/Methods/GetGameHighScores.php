<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\GamesInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\GameHighScore;

/**
 * Use this method to get data for high score tables. Will return the
 * score of the specified user and several of their neighbors in a game.
 * Returns an Array of <a href="#gamehighscore">GameHighScore</a>
 * objects.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class GetGameHighScores extends TelegramMethod implements GamesInterface
{
    /** Target user id */
    public int $user_id;

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
    public array $required_properties = ['user_id'];

    /** Response mapping type. */
    public string $response_type = GameHighScore::class;
}
