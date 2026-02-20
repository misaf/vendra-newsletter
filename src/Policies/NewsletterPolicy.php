<?php

declare(strict_types=1);

namespace Misaf\VendraNewsletter\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Misaf\VendraNewsletter\Enums\NewsletterPolicyEnum;
use Misaf\VendraNewsletter\Models\Newsletter;
use Misaf\VendraUser\Models\User;

final class NewsletterPolicy
{
    use HandlesAuthorization;

    public function create(User $user): bool
    {
        return $user->can(NewsletterPolicyEnum::CREATE);
    }

    public function delete(User $user, Newsletter $newsletter): bool
    {
        return $user->can(NewsletterPolicyEnum::DELETE);
    }

    public function deleteAny(User $user): bool
    {
        return $user->can(NewsletterPolicyEnum::DELETE_ANY);
    }

    public function forceDelete(User $user, Newsletter $newsletter): bool
    {
        return $user->can(NewsletterPolicyEnum::FORCE_DELETE);
    }

    public function forceDeleteAny(User $user): bool
    {
        return $user->can(NewsletterPolicyEnum::FORCE_DELETE_ANY);
    }

    public function replicate(User $user, Newsletter $newsletter): bool
    {
        return $user->can(NewsletterPolicyEnum::REPLICATE);
    }

    public function restore(User $user, Newsletter $newsletter): bool
    {
        return $user->can(NewsletterPolicyEnum::RESTORE);
    }

    public function restoreAny(User $user): bool
    {
        return $user->can(NewsletterPolicyEnum::RESTORE_ANY);
    }

    public function update(User $user, Newsletter $newsletter): bool
    {
        return $user->can(NewsletterPolicyEnum::UPDATE);
    }

    public function view(User $user, Newsletter $newsletter): bool
    {
        return $user->can(NewsletterPolicyEnum::VIEW);
    }

    public function viewAny(User $user): bool
    {
        return $user->can(NewsletterPolicyEnum::VIEW_ANY);
    }
}
