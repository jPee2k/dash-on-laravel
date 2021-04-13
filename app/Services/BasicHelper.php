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
     * @return array
     */
    public function getStatusKeys (): array
    {
        return array_keys($this->getStatuses());
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

    public function getCustomFieldKeys (): array
    {
        return array_keys($this->getCustomFieldsList());
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
