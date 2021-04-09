<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ImageUploader
{
    public $pathToImages = 'uploads/images';

    /**
     * @param $image
     * @return string
     */
    public static function generateImageName($image): string
    {
        if ($image) {
            $prefix = uniqid(time());
            $originalName = $image->getClientOriginalName();

            return "{$prefix}___{$originalName}";
        }

        return false;
    }

    /**
     * @param $model
     * @param $image
     */
    public function uploadImage($model, $image)
    {
        if ($image === null) {
            return;
        }

        $this->removeImage($model);
        $filename = self::generateImageName($image);

        $isSaveImage = $this->storeOriginalImage($image, $filename);
        $isSaveWebp = $this->storeWebpImage($image, $filename);

        if ($isSaveImage && $isSaveWebp) {
            $model->image_name = $filename;
            $model->save();
        }
    }

    /**
     * @param $image
     * @param $filename
     * @return bool
     */
    public function storeOriginalImage($image, $filename): bool
    {
        if ($image->storeAs("{$this->pathToImages}/originals/", $filename)) {
            return true;
        }

        return false;
    }

    /**
     * @param $image
     * @param $filename
     * @return bool
     */
    public function storeWebpImage($image, $filename): bool
    {
        $webp = Image::make($image)->encode('webp', 80)
            ->save(
                public_path("{$this->pathToImages}/{$filename}.webp")
            );

        if ($webp) {
            return true;
        }

        return false;
    }

    /**
     * @param $imageName
     * @return string
     */
    public function getBasicImage($imageName = ''): string
    {
        if (!$imageName) {
            return ''; // can return path to default image
        }

        return "/{$this->pathToImages}/originals/{$imageName}";
    }

    /**
     * @param $imageName
     * @return string
     */
    public function getWebpImage($imageName = ''): string
    {
        if (!$imageName) {
            return ''; // can return path to default webp image
        }

        return "/{$this->pathToImages}/{$imageName}.webp";
    }

    /**
     * @param $model
     */
    public function removeImage($model)
    {
        if ($model->image_name !== null) {
            // rm original
            Storage::delete("{$this->pathToImages}/originals/{$model->image_name}");
            // rm webp
            Storage::delete("{$this->pathToImages}/{$model->image_name}.webp");
        }
    }


    /**
     * @param string $path
     * @param string $name
     * @param array $attrs
     * @return string
     *
     * Use in blade -> {!! $imageUploader->generateImgTag('/uploads/images/originals', '1617971426607048e25bf12___logo-brand-small.png', ['class' => 'lazyWebp', 'alt' => 'img']) !!}
     */
    public function generateImgTag(string $path, string $name, array $attrs = ['class' => 'lazyWebp']): string
    {
        $src = 'data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==';
        $attrs = collect($attrs)
            ->map(fn ($item, $key) => "{$key}=" . '"' . $item . '"')
            ->implode(' ');

        $img = "{$path}/{$name}";
        $webp = "{$path}/{$name}.webp";

        if (!file_exists(public_path() . $webp)) {
            $image = Storage::get($img);
            $this->storeWebpImage($image, "{$name}");
        }

        $template = '<img data-src="%1$s" data-retina="%1$s" data-webp="%2$s" data-webp-retina="%2$s" %4$s src="%3$s">';
        return sprintf($template, $img, $webp, $src, $attrs);
    }
}
