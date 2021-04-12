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

    /**
     * @return string[]
     */
    public function getStatuses(): array
    {
        return [
            'draft' => 'Draft',
            'publish' => 'Publish'
        ];
    }

    /**
     * @return string[]
     */
    public function getCustomFieldsList (): array
    {
        return [
            'text' => 'Text',
            'textarea' => 'Textarea',
            'image' => 'Image',
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
}
