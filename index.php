<?php

Kirby::plugin('nielsnicola/kirby-hide-html-comments', []);

// Define global helper function
if (!function_exists('comment')) {
    /**
     * Outputs an HTML comment if enabled
     */
    function comment(string $text): void {
        if(option('nielsnicola.hide-html-comments.enabled', true)) {
            return;
        }
        echo "<!-- " . htmlspecialchars($text, ENT_QUOTES, 'UTF-8') . " -->";
    }
}