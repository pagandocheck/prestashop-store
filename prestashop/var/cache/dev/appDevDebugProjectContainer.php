<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZb3iajq\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZb3iajq/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerZb3iajq.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerZb3iajq\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerZb3iajq\appDevDebugProjectContainer([
    'container.build_hash' => 'Zb3iajq',
    'container.build_id' => 'e7a0df04',
    'container.build_time' => 1629254836,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZb3iajq');
