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
}
