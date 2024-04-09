<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\TelegramPassportInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\PassportElementError;

/**
 * Informs a user that some of the Telegram Passport elements they
 * provided contains errors. The user will not be able to re-submit their
 * Passport to you until the errors are fixed (the contents of the field
 * for which you returned the error must change). Returns <em>True</em>
 * on success.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class SetPassportDataErrors extends TelegramMethod implements TelegramPassportInterface
{
    /** User identifier */
    public int $user_id;

    /**
     * A JSON-serialized array describing the errors
     *
     * @var array<PassportElementError>
     */
    public array $errors;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['user_id', 'errors'];

    /** Response mapping type. */
    public string $response_type = 'bool';
}
