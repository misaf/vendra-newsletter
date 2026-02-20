<?php

declare(strict_types=1);

namespace Misaf\VendraNewsletter\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Misaf\VendraNewsletter\Enums\NewsletterSendHistoryPostPolicyEnum;
use Misaf\VendraNewsletter\Models\NewsletterSendHistoryPost;
use Misaf\VendraUser\Models\User;

final class NewsletterSendHistoryPostPolicy
{
    use HandlesAuthorization;

    public function create(User $user): bool
    {
        return $user->can(NewsletterSendHistoryPostPolicyEnum::CREATE);
    }

    public function delete(User $user, NewsletterSendHistoryPost $newsletterSendHistoryPost): bool
    {
        return $user->can(NewsletterSendHistoryPostPolicyEnum::DELETE);
    }

    public function deleteAny(User $user): bool
    {
        return $user->can(NewsletterSendHistoryPostPolicyEnum::DELETE_ANY);
    }

    public function forceDelete(User $user, NewsletterSendHistoryPost $newsletterSendHistoryPost): bool
    {
        return $user->can(NewsletterSendHistoryPostPolicyEnum::FORCE_DELETE);
    }

    public function forceDeleteAny(User $user): bool
    {
        return $user->can(NewsletterSendHistoryPostPolicyEnum::FORCE_DELETE_ANY);
    }

    public function replicate(User $user, NewsletterSendHistoryPost $newsletterSendHistoryPost): bool
    {
        return $user->can(NewsletterSendHistoryPostPolicyEnum::REPLICATE);
    }

    public function restore(User $user, NewsletterSendHistoryPost $newsletterSendHistoryPost): bool
    {
        return $user->can(NewsletterSendHistoryPostPolicyEnum::RESTORE);
    }

    public function restoreAny(User $user): bool
    {
        return $user->can(NewsletterSendHistoryPostPolicyEnum::RESTORE_ANY);
    }

    public function update(User $user, NewsletterSendHistoryPost $newsletterSendHistoryPost): bool
    {
        return $user->can(NewsletterSendHistoryPostPolicyEnum::UPDATE);
    }

    public function view(User $user, NewsletterSendHistoryPost $newsletterSendHistoryPost): bool
    {
        return $user->can(NewsletterSendHistoryPostPolicyEnum::VIEW);
    }

    public function viewAny(User $user): bool
    {
        return $user->can(NewsletterSendHistoryPostPolicyEnum::VIEW_ANY);
    }
}
