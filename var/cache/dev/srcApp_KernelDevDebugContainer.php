<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container0sz6y1h\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container0sz6y1h/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container0sz6y1h.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container0sz6y1h\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container0sz6y1h\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '0sz6y1h',
    'container.build_id' => 'fdc469f9',
    'container.build_time' => 1645490944,
], __DIR__.\DIRECTORY_SEPARATOR.'Container0sz6y1h');
