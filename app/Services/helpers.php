<?php

/**
 * Custom functions
 */

namespace App\Services\helpers;

function is_even(int $key): bool
{
    return $key % 2 === 0 ? true : false;
}

function generateImage(string $name): string
{
    $info = pathinfo($name);
    $extension = isset($info['extension']) ? ".{$info['extension']}" : '';

    if (!$extension) {
        return false;
    }

    $src = 'data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==';
    $search = ['.png', '.bmp', '.jpg', '.jpeg', '.svg', '.webp'];
    $result = [
        'basic' => $name,
        'retina' => str_replace($search, "@2x{$extension}", $name),
        'webp' => str_replace($search, '.webp', $name),
        'retinawebp' => str_replace($search, "@2x.webp", $name)
    ];

    return "<img data-src=\"{$result['basic']}\" data-retina=\"{$result['retina']}\" data-webp=\"{$result['webp']}\" data-webp-retina=\"{$result['retinawebp']}\" src=\"{$src}\" class=\"lazyWebp\" alt=\"\">";
}
