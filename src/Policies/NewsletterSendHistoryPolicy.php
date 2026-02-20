<?php

declare(strict_types=1);

namespace Misaf\VendraNewsletter\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Misaf\VendraNewsletter\Enums\NewsletterSendHistoryPolicyEnum;
use Misaf\VendraNewsletter\Models\NewsletterSendHistory;
use Misaf\VendraUser\Models\User;

final class NewsletterSendHistoryPolicy
{
    use HandlesAuthorization;

    public function create(User $user): bool
    {
        return $user->can(NewsletterSendHistoryPolicyEnum::CREATE);
    }

    public function delete(User $user, NewsletterSendHistory $newsletterSendHistory): bool
    {
        return $user->can(NewsletterSendHistoryPolicyEnum::DELETE);
    }

    public function deleteAny(User $user): bool
    {
        return $user->can(NewsletterSendHistoryPolicyEnum::DELETE_ANY);
    }

    public function forceDelete(User $user, NewsletterSendHistory $newsletterSendHistory): bool
    {
        return $user->can(NewsletterSendHistoryPolicyEnum::FORCE_DELETE);
    }

    public function forceDeleteAny(User $user): bool
    {
        return $user->can(NewsletterSendHistoryPolicyEnum::FORCE_DELETE_ANY);
    }

    public function replicate(User $user, NewsletterSendHistory $newsletterSendHistory): bool
    {
        return $user->can(NewsletterSendHistoryPolicyEnum::REPLICATE);
    }

    public function restore(User $user, NewsletterSendHistory $newsletterSendHistory): bool
    {
        return $user->can(NewsletterSendHistoryPolicyEnum::RESTORE);
    }

    public function restoreAny(User $user): bool
    {
        return $user->can(NewsletterSendHistoryPolicyEnum::RESTORE_ANY);
    }

    public function update(User $user, NewsletterSendHistory $newsletterSendHistory): bool
    {
        return $user->can(NewsletterSendHistoryPolicyEnum::UPDATE);
    }

    public function view(User $user, NewsletterSendHistory $newsletterSendHistory): bool
    {
        return $user->can(NewsletterSendHistoryPolicyEnum::VIEW);
    }

    public function viewAny(User $user): bool
    {
        return $user->can(NewsletterSendHistoryPolicyEnum::VIEW_ANY);
    }
}
