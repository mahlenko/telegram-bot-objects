<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\InlineModeInterface;
use TelegramBot\TelegramType;

/**
 * Represents the <a href="#inputmessagecontent">content</a> of a contact
 * message to be sent as the result of an inline query.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class InputContactMessageContent extends TelegramType implements InlineModeInterface
{
    /** Contact's phone number */
    public string $phone_number;

    /** Contact's first name */
    public string $first_name;

    /** Optional. Contact's last name */
    public ?string $last_name;

    /**
     * Optional. Additional data about the contact in the form of a vCard,
     * 0-2048 bytes
     */
    public ?string $vcard;
}
