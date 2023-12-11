<?php

namespace App\Providers\Filament;

use App\Filament\Resources\BeritaResource;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Navigation\NavigationGroup;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->colors([
                'danger' => Color::Rose,
                'gray' => Color::Gray,
                'info' => Color::Blue,
                'primary' => Color::Indigo,
                'success' => Color::Emerald,
                'warning' => Color::Orange,
            ])
            ->brandName('Kaltara')
            ->brandLogo(asset('img/kaltara-prov.png'))
            ->brandLogoHeight('2.5rem')
            ->favicon(asset('img/kaltara-prov.png'))
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                // Widgets\FilamentInfoWidget::class,
                // BeritaResource\Widgets\BeritaOverview::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->navigationGroups([
                NavigationGroup::make()
                    ->label('Tentang')
                    ->icon('heroicon-o-information-circle'),
                NavigationGroup::make()
                     ->label('Berita')
                     ->icon('heroicon-o-newspaper'),
                NavigationGroup::make()
                    ->label('Layanan Publik')
                    ->icon('heroicon-o-building-office-2'),
                NavigationGroup::make()
                    ->label('Arsip dan Dokumen')
                    ->icon('heroicon-o-document-duplicate'),
                NavigationGroup::make()
                    ->label('Program Unggulan')
                    ->icon('heroicon-o-clipboard-document-check'),
                NavigationGroup::make()
                    ->label('Umum')
                    ->icon('heroicon-o-magnifying-glass'),
                NavigationGroup::make()
                    ->label('Lainnya')
                    ->icon('heroicon-o-bars-3-center-left'),
            ]);
    }
}
