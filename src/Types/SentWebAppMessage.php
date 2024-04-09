<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\InlineModeInterface;
use TelegramBot\TelegramType;

/**
 * Describes an inline message sent by a <a href="/bots/webapps">Web
 * App</a> on behalf of a user.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class SentWebAppMessage extends TelegramType implements InlineModeInterface
{
    /**
     * Optional. Identifier of the sent inline message. Available only if
     * there is an inline keyboard attached to the message.
     */
    public ?string $inline_message_id;
}
