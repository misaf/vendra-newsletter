<?php

declare(strict_types=1);

namespace Misaf\VendraNewsletter\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Misaf\VendraNewsletter\Enums\NewsletterSubscriberPolicyEnum;
use Misaf\VendraNewsletter\Models\NewsletterSubscriber;
use Misaf\VendraUser\Models\User;

final class NewsletterSubscriberPolicy
{
    use HandlesAuthorization;

    public function create(User $user): bool
    {
        return $user->can(NewsletterSubscriberPolicyEnum::CREATE);
    }

    public function delete(User $user, NewsletterSubscriber $newsletterSubscriber): bool
    {
        return $user->can(NewsletterSubscriberPolicyEnum::DELETE);
    }

    public function deleteAny(User $user): bool
    {
        return $user->can(NewsletterSubscriberPolicyEnum::DELETE_ANY);
    }

    public function forceDelete(User $user, NewsletterSubscriber $newsletterSubscriber): bool
    {
        return $user->can(NewsletterSubscriberPolicyEnum::FORCE_DELETE);
    }

    public function forceDeleteAny(User $user): bool
    {
        return $user->can(NewsletterSubscriberPolicyEnum::FORCE_DELETE_ANY);
    }

    public function replicate(User $user, NewsletterSubscriber $newsletterSubscriber): bool
    {
        return $user->can(NewsletterSubscriberPolicyEnum::REPLICATE);
    }

    public function restore(User $user, NewsletterSubscriber $newsletterSubscriber): bool
    {
        return $user->can(NewsletterSubscriberPolicyEnum::RESTORE);
    }

    public function restoreAny(User $user): bool
    {
        return $user->can(NewsletterSubscriberPolicyEnum::RESTORE_ANY);
    }

    public function update(User $user, NewsletterSubscriber $newsletterSubscriber): bool
    {
        return $user->can(NewsletterSubscriberPolicyEnum::UPDATE);
    }

    public function view(User $user, NewsletterSubscriber $newsletterSubscriber): bool
    {
        return $user->can(NewsletterSubscriberPolicyEnum::VIEW);
    }

    public function viewAny(User $user): bool
    {
        return $user->can(NewsletterSubscriberPolicyEnum::VIEW_ANY);
    }
}
