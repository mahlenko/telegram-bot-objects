<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * PassportElementError
 *
 * This object represents an error in the Telegram Passport element which was submitted that should be resolved by the user. It should be one of:
 *  - PassportElementErrorDataField
 *  - PassportElementErrorFrontSide
 *  - PassportElementErrorReverseSide
 *  - PassportElementErrorSelfie
 *  - PassportElementErrorFile
 *  - PassportElementErrorFiles
 *  - PassportElementErrorTranslationFile
 *  - PassportElementErrorTranslationFiles
 *  - PassportElementErrorUnspecified
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class PassportElementError implements TelegramTypeInterface
{
}
