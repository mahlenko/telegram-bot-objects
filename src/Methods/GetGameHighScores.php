<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\GamesInterface;
use TelegramBot\TelegramMethod;

/**
 * Use this method to get data for high score tables. Will return the
 * score of the specified user and several of their neighbors in a game.
 * Returns an Array of GameHighScore objects.
 *
 * This method will currently return scores for the target user, plus two
 * of their closest neighbors on each side. Will also return the top
 * three users if the user and their neighbors are not among them. Please
 * note that this behavior is subject to change.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class GetGameHighScores extends TelegramMethod implements GamesInterface
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
}
