<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\UpdatesInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\Update;

/**
 * Use this method to receive incoming updates using long polling (<a
 * href="https://en.wikipedia.org/wiki/Push_technology#Long_polling">wiki</a>).
 * Returns an Array of <a href="#update">Update</a> objects.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class GetUpdates extends TelegramMethod implements UpdatesInterface
{
    /**
     * Identifier of the first update to be returned. Must be greater by one
     * than the highest among the identifiers of previously received updates.
     * By default, updates starting with the earliest unconfirmed update are
     * returned. An update is considered confirmed as soon as getUpdates is
     * called with an offset higher than its update_id. The negative offset
     * can be specified to retrieve updates starting from -offset update from
     * the end of the updates queue. All previous updates will be forgotten.
     */
    public ?int $offset;

    /**
     * Limits the number of updates to be retrieved. Values between 1-100 are
     * accepted. Defaults to 100.
     */
    public ?int $limit;

    /**
     * Timeout in seconds for long polling. Defaults to 0, i.e. usual short
     * polling. Should be positive, short polling should be used for testing
     * purposes only.
     */
    public ?int $timeout;

    /**
     * A JSON-serialized list of the update types you want your bot to
     * receive. For example, specify ["message", "edited_channel_post",
     * "callback_query"] to only receive updates of these types. See Update
     * for a complete list of available update types. Specify an empty list
     * to receive all update types except chat_member, message_reaction, and
     * message_reaction_count (default). If not specified, the previous
     * setting will be used.Please note that this parameter doesn't affect
     * updates created before the call to the getUpdates, so unwanted updates
     * may be received for a short period of time.
     *
     * @var array<string>
     */
    public ?array $allowed_updates;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = [];

    /** Response mapping type. */
    public string $response_type = Update::class;
}
