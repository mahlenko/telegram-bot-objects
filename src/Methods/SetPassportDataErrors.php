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
 * for which you returned the error must change). Returns True on
 * success.
 * Use this if the data submitted by the user doesn't satisfy the
 * standards your service requires for any reason. For example, if a
 * birthday date seems invalid, a submitted document is blurry, a scan
 * shows evidence of tampering, etc. Supply some details in the error
 * message to make sure the user knows how to correct the issues.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class SetPassportDataErrors extends TelegramMethod implements TelegramPassportInterface
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
}
