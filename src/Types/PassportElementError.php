<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TelegramPassportInterface;
use TelegramBot\TelegramType;

/**
 * This object represents an error in the Telegram Passport element which
 * was submitted that should be resolved by the user. It should be one
 * of:
 *
 * PassportElementErrorDataField
 * PassportElementErrorFrontSide
 * PassportElementErrorReverseSide
 * PassportElementErrorSelfie
 * PassportElementErrorFile
 * PassportElementErrorFiles
 * PassportElementErrorTranslationFile
 * PassportElementErrorTranslationFiles
 * PassportElementErrorUnspecified
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class PassportElementError extends TelegramType implements TelegramPassportInterface
{
}
