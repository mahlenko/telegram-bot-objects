<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TelegramTypeInterface;
use TelegramBot\TelegramType;

/**
 * This object represents a message about a scheduled giveaway.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class Giveaway extends TelegramType implements TelegramTypeInterface
{
    /**
     * The list of chats which the user must join to participate in the
     * giveaway
     *
     * @var array<Chat>
     */
    public array $chats;

    /**
     * Point in time (Unix timestamp) when winners of the giveaway will be
     * selected
     */
    public int $winners_selection_date;

    /**
     * The number of users which are supposed to be selected as winners of
     * the giveaway
     */
    public int $winner_count;

    /**
     * Optional. True, if only users who join the chats after the giveaway
     * started should be eligible to win
     */
    public ?bool $only_new_members;

    /**
     * Optional. True, if the list of giveaway winners will be visible to
     * everyone
     */
    public ?bool $has_public_winners;

    /** Optional. Description of additional giveaway prize */
    public ?string $prize_description;

    /**
     * Optional. A list of two-letter ISO 3166-1 alpha-2 country codes
     * indicating the countries from which eligible users for the giveaway
     * must come. If empty, then all users can participate in the giveaway.
     * Users with a phone number that was bought on Fragment can always
     * participate in giveaways.
     *
     * @var array<string>
     */
    public ?array $country_codes;

    /**
     * Optional. The number of months the Telegram Premium subscription won
     * from the giveaway will be active for
     */
    public ?int $premium_subscription_month_count;
}
