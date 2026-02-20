<?php

declare(strict_types=1);

namespace Misaf\VendraNewsletter;

use Filament\Panel;
use Illuminate\Foundation\Console\AboutCommand;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

final class NewsletterServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('vendra-newsletter')
            ->hasTranslations()
            ->hasConfigFile('newsletter')
            ->hasRoute('web')
            ->hasViews('newsletter')
            ->hasInstallCommand(function (InstallCommand $command): void {
                $command->askToStarRepoOnGitHub('misaf/vendra-newsletter');
            });
    }

    public function packageRegistered(): void
    {
        Panel::configureUsing(function (Panel $panel): void {
            if ('admin' !== $panel->getId()) {
                return;
            }

            $panel->plugin(NewsletterPlugin::make());
        });
    }

    public function packageBooted(): void
    {
        AboutCommand::add('Vendra Newsletter', fn() => ['Version' => 'dev-master']);
    }
}
