<?php

namespace Anax\View;

/**
 * Template file to render a view.
 */

// Show incoming variables and view helper functions
//echo showEnvironment(get_defined_vars(), get_defined_functions());



?><span class="site-logo-text" >
    <a href="<?= url($homeLink) ?>">
        <?php if (isset($siteLogoText)) : ?>
        <span class="site-logo-text-icon" >
            <img src="<?= asset($siteLogoTextIcon) ?>" alt="<?= $siteLogoTextIconAlt ?>">
            <h1><?= $siteLogoText ?></h1>
        </span>
        <?php endif; ?>
    </a>
</span>
