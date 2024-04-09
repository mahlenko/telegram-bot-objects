<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TelegramPassportInterface;
use TelegramBot\TelegramType;

/**
 * Describes Telegram Passport data shared with the bot by the user.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class PassportData extends TelegramType implements TelegramPassportInterface
{
    /**
     * Array with information about documents and other Telegram Passport
     * elements that was shared with the bot
     *
     * @var array<EncryptedPassportElement>
     */
    public array $data;

    /** Encrypted credentials required to decrypt the data */
    public EncryptedCredentials $credentials;
}
