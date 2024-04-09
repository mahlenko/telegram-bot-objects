<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\InlineModeInterface;
use TelegramBot\TelegramType;

/**
 * Represents a <a href="#inlinequeryresult">result</a> of an inline
 * query that was chosen by the user and sent to their chat partner.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class ChosenInlineResult extends TelegramType implements InlineModeInterface
{
    /** The unique identifier for the result that was chosen */
    public string $result_id;

    /** The user that chose the result */
    public User $from;

    /** Optional. Sender location, only for bots that require user location */
    public ?Location $location;

    /**
     * Optional. Identifier of the sent inline message. Available only if
     * there is an inline keyboard attached to the message. Will be also
     * received in callback queries and can be used to edit the message.
     */
    public ?string $inline_message_id;

    /** The query that was used to obtain the result */
    public string $query;
}
