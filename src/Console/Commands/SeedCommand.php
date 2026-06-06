<?php

declare(strict_types=1);

namespace Misaf\VendraNewsletter\Console\Commands;

use Misaf\VendraNewsletter\Database\Seeders\DemoContentSeeder;
use Misaf\VendraNewsletter\Database\Seeders\PermissionPolicySeeder;
use Misaf\VendraNewsletter\NewsletterPlugin;
use Misaf\VendraSupport\Console\Commands\BaseSeedCommand;

final class SeedCommand extends BaseSeedCommand
{
    protected const string MODULE_NAME = NewsletterPlugin::ID;

    protected $signature = self::MODULE_NAME . ':seed
        {tenant : Tenant ID or slug to seed blog data for}
        {seeders* : Seeder keys to run. Use "all" or one or more of: permissions, contents}';

    protected $description = 'Seed blog module data for a tenant';

    /**
     * @return array<string, class-string>
     */
    protected function seeders(): array
    {
        return [
            'permissions' => PermissionPolicySeeder::class,
            'contents'    => DemoContentSeeder::class,
        ];
    }
}
