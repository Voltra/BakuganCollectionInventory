import preset from '../../../../vendor/filament/filament/tailwind.config.preset'

export default {
    presets: [preset],
    content: [
        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
        './vendor/laravel/**/resources/**/*.blade.php',
        ////
        './vendor/awcodes/filament-curator/resources/**/*.blade.php',
        './vendor/jeffgreco13/filament-breezy/resources/**/*.blade.php',
        './vendor/bezhansalleh/filament-language-switch/resources/**/*.blade.php',
        './vendor/pxlrbt/filament-spotlight/resources/**/*.blade.php',
        './vendor/njxqlus/filament-progressbar/resources/**/*.blade.php',
        './vendor/awcodes/filament-curator/resources/**/*.blade.php',
        './vendor/mohamedsabil83/filament-forms-tinyeditor/resources/**/*.blade.php',
        './vendor/voltra/filament-svg-avatar/resources/**/*.blade.php',
        './vendor/solution-forest/filament-tree/resources/**/*.blade.php',
        './vendor/awcodes/filament-quick-create/resources/**/*.blade.php',
        './vendor/joaopaulolndev/filament-world-clock/resources/**/*.blade.php',
    ],
}
