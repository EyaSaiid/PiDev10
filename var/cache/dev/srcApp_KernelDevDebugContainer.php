<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXOX4b5O\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXOX4b5O/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXOX4b5O.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXOX4b5O\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerXOX4b5O\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'XOX4b5O',
    'container.build_id' => '5edb11d9',
    'container.build_time' => 1645392234,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXOX4b5O');
