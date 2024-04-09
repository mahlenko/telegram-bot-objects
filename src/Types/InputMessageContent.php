<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\InlineModeInterface;
use TelegramBot\TelegramType;

/**
 * This object represents the content of a message to be sent as a result
 * of an inline query. Telegram clients currently support the following 5
 * types:
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class InputMessageContent extends TelegramType implements InlineModeInterface
{
}
