<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container0FLu1DU\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container0FLu1DU/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container0FLu1DU.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\Container0FLu1DU\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \Container0FLu1DU\srcDevDebugProjectContainer(array(
    'container.build_hash' => '0FLu1DU',
    'container.build_id' => '6abab330',
    'container.build_time' => 1531312445,
), __DIR__.\DIRECTORY_SEPARATOR.'Container0FLu1DU');
