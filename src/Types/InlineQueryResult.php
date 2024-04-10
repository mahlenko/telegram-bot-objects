<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * InlineQueryResult
 *
 * This object represents one result of an inline query. Telegram clients currently
 * support results of the following 20 types:
 *  - InlineQueryResultCachedAudio
 *  -
 * InlineQueryResultCachedDocument
 *  - InlineQueryResultCachedGif
 *  -
 * InlineQueryResultCachedMpeg4Gif
 *  - InlineQueryResultCachedPhoto
 *  -
 * InlineQueryResultCachedSticker
 *  - InlineQueryResultCachedVideo
 *  -
 * InlineQueryResultCachedVoice
 *  - InlineQueryResultArticle
 *  -
 * InlineQueryResultAudio
 *  - InlineQueryResultContact
 *  - InlineQueryResultGame
 *  -
 * InlineQueryResultDocument
 *  - InlineQueryResultGif
 *  - InlineQueryResultLocation
 *
 * - InlineQueryResultMpeg4Gif
 *  - InlineQueryResultPhoto
 *  - InlineQueryResultVenue
 *
 * - InlineQueryResultVideo
 *  - InlineQueryResultVoice
 * Note: All URLs passed in
 * inline query results will be available to end users and therefore must be
 * assumed to be public.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class InlineQueryResult implements TelegramTypeInterface
{
}
