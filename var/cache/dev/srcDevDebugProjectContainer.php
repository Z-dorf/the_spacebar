<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLsTIBhD\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLsTIBhD/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerLsTIBhD.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerLsTIBhD\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerLsTIBhD\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'LsTIBhD',
    'container.build_id' => 'cae44288',
    'container.build_time' => 1531320858,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerLsTIBhD');
