<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\GamesInterface;
use TelegramBot\TelegramType;

/**
 * This object represents one row of the high scores table for a game.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class GameHighScore extends TelegramType implements GamesInterface
{
    /** Position in high score table for the game */
    public int $position;

    /** User */
    public User $user;

    /** Score */
    public int $score;
}
