<?php

namespace Piwik\Plugins\ThemeWinter;

use Piwik\Plugin;

class ThemeWinter extends Plugin
{
    public function registerEvents()
    {
        return [
            'Theme.configureThemeVariables' => 'configureThemeVariables',
        ];
    }

    public function configureThemeVariables(Plugin\ThemeStyles $themeStyles)
    {
        // === BACKGROUNDS — bright icy whites and pale blues ===
        $themeStyles->colorBackgroundBase = '#eef2f7';       // snow ground
        $themeStyles->colorBackgroundContrast = '#ffffff';    // crisp white cards
        $themeStyles->colorBackgroundHighContrast = '#1e3a5f';
        $themeStyles->colorBackgroundTinyContrast = '#f4f7fb';
        $themeStyles->colorBackgroundLowContrast = '#dce4ef';

        // === TEXT — cool dark blue-grays ===
        $themeStyles->colorText = '#1e293b';
        $themeStyles->colorTextLight = '#475569';
        $themeStyles->colorTextLighter = '#64748b';
        $themeStyles->colorTextContrast = '#334155';

        // === BRAND — vivid frost blue ===
        $themeStyles->colorBrand = '#0284c7';
        $themeStyles->colorBrandContrast = '#ffffff';

        // === SERIES ===
        $themeStyles->colorBaseSeries = '#0284c7';

        // === LINKS ===
        $themeStyles->colorLink = '#0369a1';

        // === HEADER — steel blue, bright and cool ===
        $themeStyles->colorHeaderBackground = '#1e3a5f';
        $themeStyles->colorHeaderText = '#f0f9ff';

        // === HEADLINES ===
        $themeStyles->colorHeadlineAlternative = '#334155';

        // === BORDERS — soft frost ===
        $themeStyles->colorBorder = '#cbd5e1';

        // === CODE ===
        $themeStyles->colorCode = '#0c4a6e';
        $themeStyles->colorCodeBackground = '#f0f9ff';

        // === MENU ===
        $themeStyles->colorMenuContrastText = '#475569';
        $themeStyles->colorMenuContrastTextSelected = '#1e293b';
        $themeStyles->colorMenuContrastTextActive = '#0284c7';
        $themeStyles->colorMenuContrastBackground = '#ffffff';

        // === WIDGETS ===
        $themeStyles->colorWidgetBackground = '#ffffff';
        $themeStyles->colorWidgetBorder = '#e2e8f0';
        $themeStyles->colorWidgetTitleText = '#1e293b';
        $themeStyles->colorWidgetTitleBackground = '#ffffff';
        $themeStyles->colorWidgetExportedBackgroundBase = '#ffffff';

        // === FOCUS ===
        $themeStyles->colorFocusRing = '#0284c7';
        $themeStyles->colorFocusRingAlternative = '#38bdf8';
    }
}
