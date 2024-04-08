<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\InlineModeInterface;
use TelegramBot\TelegramType;

/**
 * Describes an inline message sent by a Web App on behalf of a user.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class SentWebAppMessage extends TelegramType implements InlineModeInterface
{
    /**
     * Optional. Identifier of the sent inline message. Available only if
     * there is an inline keyboard attached to the message.
     */
    public ?string $inline_message_id;
}
