<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TelegramPassportInterface;
use TelegramBot\TelegramType;

/**
 * This object represents an error in the Telegram Passport element which
 * was submitted that should be resolved by the user. It should be one
 * of:
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class PassportElementError extends TelegramType implements TelegramPassportInterface
{
}
