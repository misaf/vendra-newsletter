<?php

declare(strict_types=1);

namespace Misaf\VendraNewsletter\Database\Seeders;

use Misaf\VendraNewsletter\Enums\NewsletterPolicyEnum;
use Misaf\VendraNewsletter\Enums\NewsletterPostPolicyEnum;
use Misaf\VendraNewsletter\Enums\NewsletterSendHistoryPolicyEnum;
use Misaf\VendraNewsletter\Enums\NewsletterSendHistoryPostPolicyEnum;
use Misaf\VendraNewsletter\Enums\NewsletterSendHistorySubscriberPolicyEnum;
use Misaf\VendraNewsletter\Enums\NewsletterSubscriberPolicyEnum;
use Misaf\VendraNewsletter\NewsletterPlugin;
use Misaf\VendraSupport\Concerns\RequiresCurrentTenant;
use Misaf\VendraSupport\Database\Seeders\PermissionPolicySeeder as BasePermissionPolicySeeder;

final class PermissionPolicySeeder extends BasePermissionPolicySeeder
{
    use RequiresCurrentTenant;

    protected const string MODULE_NAME = NewsletterPlugin::ID;

    public function run(): void
    {
        $tenant = $this->currentTenant();

        $this->seedPermissionPolicies($tenant->getKey());
    }

    /**
     * @return list<string>
     */
    protected function policies(): array
    {
        return [
            ...array_column(NewsletterPolicyEnum::cases(), 'value'),
            ...array_column(NewsletterPostPolicyEnum::cases(), 'value'),
            ...array_column(NewsletterSubscriberPolicyEnum::cases(), 'value'),
            ...array_column(NewsletterSendHistoryPolicyEnum::cases(), 'value'),
            ...array_column(NewsletterSendHistoryPostPolicyEnum::cases(), 'value'),
            ...array_column(NewsletterSendHistorySubscriberPolicyEnum::cases(), 'value'),
        ];
    }
}
