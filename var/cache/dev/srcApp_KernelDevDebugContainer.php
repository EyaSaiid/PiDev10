<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container2ELgulm\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container2ELgulm/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container2ELgulm.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container2ELgulm\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container2ELgulm\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '2ELgulm',
    'container.build_id' => 'f13fbf18',
    'container.build_time' => 1646331314,
], __DIR__.\DIRECTORY_SEPARATOR.'Container2ELgulm');
