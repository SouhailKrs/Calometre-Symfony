<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container69tXrXV\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container69tXrXV/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container69tXrXV.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container69tXrXV\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container69tXrXV\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '69tXrXV',
    'container.build_id' => '975e5cb6',
    'container.build_time' => 1646586194,
], __DIR__.\DIRECTORY_SEPARATOR.'Container69tXrXV');
