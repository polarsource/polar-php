<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


enum WebhookFormat: string
{
    case Raw = 'raw';
    case Discord = 'discord';
    case Slack = 'slack';
}
