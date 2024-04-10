<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;
use TelegramBotCast\Types\File;
use TelegramBotCast\Types\InputFile;

/**
 * UploadStickerFile
 *
 * Use this method to upload a file with a sticker for later use in the createNewStickerSet, addStickerToSet, or replaceStickerInSet methods (the file can be used multiple times). Returns the uploaded File on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class UploadStickerFile implements TelegramMethodInterface
{
    public const RESPONSE_TYPE = File::class;

    public function __construct(
        /** User identifier of sticker file owner */
        public ?int $user_id,
        /** A file with the sticker in .WEBP, .PNG, .TGS, or .WEBM format. See https://core.telegram.org/stickers for technical requirements. More information on Sending Files » */
        public ?InputFile $sticker,
        /** Format of the sticker, must be one of “static”, “animated”, “video” */
        public ?string $sticker_format,
    ) {
    }
}
