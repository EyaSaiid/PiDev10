<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXGr0X5h\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXGr0X5h/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXGr0X5h.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXGr0X5h\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerXGr0X5h\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'XGr0X5h',
    'container.build_id' => '96816341',
    'container.build_time' => 1646326913,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXGr0X5h');
