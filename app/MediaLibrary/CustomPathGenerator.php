<?php
namespace App\MediaLibrary;

use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\Support\PathGenerator\PathGenerator;

class CustomPathGenerator implements PathGenerator
{
    public function getPath(Media $media): string
    {
        return $media->id;
    }

    public function getPathForConversions(Media $media): string
    {
        // Customize the path for conversions if needed
        return $this->getPath($media) . '/conversions';
    }

    public function getPathForResponsiveImages(Media $media): string{
        return $this->getPath($media) . '/responsives';
    }
}