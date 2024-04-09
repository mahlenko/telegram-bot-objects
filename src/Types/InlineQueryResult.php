<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\InlineModeInterface;
use TelegramBot\TelegramType;

/**
 * This object represents one result of an inline query. Telegram clients
 * currently support results of the following 20 types:
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class InlineQueryResult extends TelegramType implements InlineModeInterface
{
}
