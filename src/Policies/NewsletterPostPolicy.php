<?php

declare(strict_types=1);

namespace Misaf\VendraNewsletter\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Misaf\VendraNewsletter\Enums\NewsletterPostPolicyEnum;
use Misaf\VendraNewsletter\Models\NewsletterPost;
use Misaf\VendraUser\Models\User;

final class NewsletterPostPolicy
{
    use HandlesAuthorization;

    public function create(User $user): bool
    {
        return $user->can(NewsletterPostPolicyEnum::CREATE);
    }

    public function delete(User $user, NewsletterPost $newsletterPost): bool
    {
        return $user->can(NewsletterPostPolicyEnum::DELETE);
    }

    public function deleteAny(User $user): bool
    {
        return $user->can(NewsletterPostPolicyEnum::DELETE_ANY);
    }

    public function forceDelete(User $user, NewsletterPost $newsletterPost): bool
    {
        return $user->can(NewsletterPostPolicyEnum::FORCE_DELETE);
    }

    public function forceDeleteAny(User $user): bool
    {
        return $user->can(NewsletterPostPolicyEnum::FORCE_DELETE_ANY);
    }

    public function replicate(User $user, NewsletterPost $newsletterPost): bool
    {
        return $user->can(NewsletterPostPolicyEnum::REPLICATE);
    }

    public function restore(User $user, NewsletterPost $newsletterPost): bool
    {
        return $user->can(NewsletterPostPolicyEnum::RESTORE);
    }

    public function restoreAny(User $user): bool
    {
        return $user->can(NewsletterPostPolicyEnum::RESTORE_ANY);
    }

    public function update(User $user, NewsletterPost $newsletterPost): bool
    {
        return $user->can(NewsletterPostPolicyEnum::UPDATE);
    }

    public function view(User $user, NewsletterPost $newsletterPost): bool
    {
        return $user->can(NewsletterPostPolicyEnum::VIEW);
    }

    public function viewAny(User $user): bool
    {
        return $user->can(NewsletterPostPolicyEnum::VIEW_ANY);
    }
}
