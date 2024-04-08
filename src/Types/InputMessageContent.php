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
 * InputTextMessageContent
 * InputLocationMessageContent
 * InputVenueMessageContent
 * InputContactMessageContent
 * InputInvoiceMessageContent
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class InputMessageContent extends TelegramType implements InlineModeInterface
{
}
