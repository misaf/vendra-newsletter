<?php

declare(strict_types=1);

namespace Misaf\VendraNewsletter;

use Filament\Contracts\Plugin;
use Filament\Panel;

final class NewsletterPlugin implements Plugin
{
    public function getId(): string
    {
        return 'vendra-newsletter';
    }

    public static function make(): static
    {
        /** @var static $plugin */
        $plugin = app(static::class);

        return $plugin;
    }

    public function register(Panel $panel): void
    {
        $panel->discoverClusters(
            in: __DIR__ . '/Filament/Clusters',
            for: 'Misaf\\VendraNewsletter\\Filament\\Clusters',
        );
    }

    public function boot(Panel $panel): void {}
}
