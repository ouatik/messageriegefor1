<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEeFfqwm\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEeFfqwm/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerEeFfqwm.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerEeFfqwm\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerEeFfqwm\App_KernelDevDebugContainer([
    'container.build_hash' => 'EeFfqwm',
    'container.build_id' => 'f6cdbe53',
    'container.build_time' => 1680476463,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEeFfqwm');
