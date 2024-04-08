<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TelegramPassportInterface;
use TelegramBot\TelegramType;

/**
 * Describes Telegram Passport data shared with the bot by the user.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class PassportData extends TelegramType implements TelegramPassportInterface
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
