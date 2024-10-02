import { defineConfig } from "vite";
import path from "node:path";
import { FontaineTransform } from "fontaine";
import laravel, { refreshPaths } from "laravel-vite-plugin";

const here = (uri = "") => path.resolve(__dirname, uri);

/**
 * @param {Partial<import("fontaine").FontaineTransformOptions>} opts
 */
const fontaine = (opts = {}) => {
    /**
     * @type {import("vite").Plugin}
     */
    const plugin = FontaineTransform.vite(opts);

    plugin.enforce = "post";

    return plugin;
};

export default defineConfig({
    plugins: [
        laravel({
            input: [
                //// CSS
                "resources/css/app.css",
                "resources/css/filament/admin/theme.css",

                //// JS
                "resources/js/app.js",
            ],
            refresh: [
                ...refreshPaths,
                "app/Filament/**",
                "app/Forms/Components/**",
                "app/Livewire/**",
                "app/Infolists/Components/**",
                "app/Providers/Filament/**",
                "app/Tables/Columns/**",
            ],
        }),
        fontaine({
            fallbacks: ["BlinkMacSystemFont", "Segoe UI", "Helvetica Neue", "Arial", "Noto Sans", "sans-serif"],
        }),
    ],
});
