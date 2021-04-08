<?php


namespace App\Services;


class BasicHelper
{
    /**
     * @return int[]
     * admin->pages->index
     */
    public function getLimits(): array
    {
        return [
            20,
            50,
            100
        ];
    }

    public function getStatuses(): array
    {
        return [
            'draft' => 'Draft',
            'publish' => 'Publish'
        ];
    }

    /**
     * @param int $key
     * @return bool
     */
    public function is_even(int $key): bool
    {
        return ($key % 2 === 0) ? true : false;
    }

    /**
     * @param string $name
     * @return string
     */
    public function generateImage(string $name): string
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
}
