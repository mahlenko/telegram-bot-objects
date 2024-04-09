<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\MethodsInterface;
use TelegramBot\TelegramMethod;

/**
 * Use this method to send answers to callback queries sent from <a
 * href="/bots/features#inline-keyboards">inline keyboards</a>. The
 * answer will be displayed to the user as a notification at the top of
 * the chat screen or as an alert. On success, <em>True</em> is returned.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class AnswerCallbackQuery extends TelegramMethod implements MethodsInterface
{
    /** Unique identifier for the query to be answered */
    public string $callback_query_id;

    /**
     * Text of the notification. If not specified, nothing will be shown to
     * the user, 0-200 characters
     */
    public ?string $text;

    /**
     * If True, an alert will be shown by the client instead of a
     * notification at the top of the chat screen. Defaults to false.
     */
    public ?bool $show_alert;

    /**
     * URL that will be opened by the user's client. If you have created a
     * Game and accepted the conditions via @BotFather, specify the URL that
     * opens your game - note that this will only work if the query comes
     * from a callback_game button.Otherwise, you may use links like
     * t.me/your_bot?start=XXXX that open your bot with a parameter.
     */
    public ?string $url;

    /**
     * The maximum amount of time in seconds that the result of the callback
     * query may be cached client-side. Telegram apps will support caching
     * starting in version 3.14. Defaults to 0.
     */
    public ?int $cache_time;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['callback_query_id'];

    /** Response mapping type. */
    public string $response_type = 'bool';
}
