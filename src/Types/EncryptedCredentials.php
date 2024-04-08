<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TelegramPassportInterface;
use TelegramBot\TelegramType;

/**
 * Describes data required for decrypting and authenticating
 * EncryptedPassportElement. See the Telegram Passport Documentation for
 * a complete description of the data decryption and authentication
 * processes.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class EncryptedCredentials extends TelegramType implements TelegramPassportInterface
{
    /**
     * Base64-encoded encrypted JSON-serialized data with unique user's
     * payload, data hashes and secrets required for EncryptedPassportElement
     * decryption and authentication
     */
    public string $data;

    /** Base64-encoded data hash for data authentication */
    public string $hash;

    /**
     * Base64-encoded secret, encrypted with the bot's public RSA key,
     * required for data decryption
     */
    public string $secret;
}
