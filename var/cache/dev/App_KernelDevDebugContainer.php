<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerV81XVOY\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerV81XVOY/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerV81XVOY.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerV81XVOY\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerV81XVOY\App_KernelDevDebugContainer([
    'container.build_hash' => 'V81XVOY',
    'container.build_id' => 'feed262e',
    'container.build_time' => 1720683191,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerV81XVOY');
