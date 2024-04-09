<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\UpdatesInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\InputFile;

/**
 * Use this method to specify a URL and receive incoming updates via an
 * outgoing webhook. Whenever there is an update for the bot, we will
 * send an HTTPS POST request to the specified URL, containing a
 * JSON-serialized <a href="#update">Update</a>. In case of an
 * unsuccessful request, we will give up after a reasonable amount of
 * attempts. Returns <em>True</em> on success.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class SetWebhook extends TelegramMethod implements UpdatesInterface
{
    /**
     * HTTPS URL to send updates to. Use an empty string to remove webhook
     * integration
     */
    public string $url;

    /**
     * Upload your public key certificate so that the root certificate in use
     * can be checked. See our self-signed guide for details.
     */
    public ?InputFile $certificate;

    /**
     * The fixed IP address which will be used to send webhook requests
     * instead of the IP address resolved through DNS
     */
    public ?string $ip_address;

    /**
     * The maximum allowed number of simultaneous HTTPS connections to the
     * webhook for update delivery, 1-100. Defaults to 40. Use lower values
     * to limit the load on your bot's server, and higher values to increase
     * your bot's throughput.
     */
    public ?int $max_connections;

    /**
     * A JSON-serialized list of the update types you want your bot to
     * receive. For example, specify ["message", "edited_channel_post",
     * "callback_query"] to only receive updates of these types. See Update
     * for a complete list of available update types. Specify an empty list
     * to receive all update types except chat_member, message_reaction, and
     * message_reaction_count (default). If not specified, the previous
     * setting will be used.Please note that this parameter doesn't affect
     * updates created before the call to the setWebhook, so unwanted updates
     * may be received for a short period of time.
     *
     * @var array<string>
     */
    public ?array $allowed_updates;

    /** Pass True to drop all pending updates */
    public ?bool $drop_pending_updates;

    /**
     * A secret token to be sent in a header
     * “X-Telegram-Bot-Api-Secret-Token” in every webhook request, 1-256
     * characters. Only characters A-Z, a-z, 0-9, _ and - are allowed. The
     * header is useful to ensure that the request comes from a webhook set
     * by you.
     */
    public ?string $secret_token;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['url'];

    /** Response mapping type. */
    public string $response_type = 'bool';
}
