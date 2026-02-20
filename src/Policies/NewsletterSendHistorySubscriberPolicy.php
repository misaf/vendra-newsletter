<?php

declare(strict_types=1);

namespace Misaf\VendraNewsletter\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Misaf\VendraNewsletter\Enums\NewsletterSendHistorySubscriberPolicyEnum;
use Misaf\VendraNewsletter\Models\NewsletterSendHistorySubscriber;
use Misaf\VendraUser\Models\User;

final class NewsletterSendHistorySubscriberPolicy
{
    use HandlesAuthorization;

    public function create(User $user): bool
    {
        return $user->can(NewsletterSendHistorySubscriberPolicyEnum::CREATE);
    }

    public function delete(User $user, NewsletterSendHistorySubscriber $newsletterSendHistorySubscriber): bool
    {
        return $user->can(NewsletterSendHistorySubscriberPolicyEnum::DELETE);
    }

    public function deleteAny(User $user): bool
    {
        return $user->can(NewsletterSendHistorySubscriberPolicyEnum::DELETE_ANY);
    }

    public function forceDelete(User $user, NewsletterSendHistorySubscriber $newsletterSendHistorySubscriber): bool
    {
        return $user->can(NewsletterSendHistorySubscriberPolicyEnum::FORCE_DELETE);
    }

    public function forceDeleteAny(User $user): bool
    {
        return $user->can(NewsletterSendHistorySubscriberPolicyEnum::FORCE_DELETE_ANY);
    }

    public function replicate(User $user, NewsletterSendHistorySubscriber $newsletterSendHistorySubscriber): bool
    {
        return $user->can(NewsletterSendHistorySubscriberPolicyEnum::REPLICATE);
    }

    public function restore(User $user, NewsletterSendHistorySubscriber $newsletterSendHistorySubscriber): bool
    {
        return $user->can(NewsletterSendHistorySubscriberPolicyEnum::RESTORE);
    }

    public function restoreAny(User $user): bool
    {
        return $user->can(NewsletterSendHistorySubscriberPolicyEnum::RESTORE_ANY);
    }

    public function update(User $user, NewsletterSendHistorySubscriber $newsletterSendHistorySubscriber): bool
    {
        return $user->can(NewsletterSendHistorySubscriberPolicyEnum::UPDATE);
    }

    public function view(User $user, NewsletterSendHistorySubscriber $newsletterSendHistorySubscriber): bool
    {
        return $user->can(NewsletterSendHistorySubscriberPolicyEnum::VIEW);
    }

    public function viewAny(User $user): bool
    {
        return $user->can(NewsletterSendHistorySubscriberPolicyEnum::VIEW_ANY);
    }
}
