<?php
class Slugify
{
    public function slug(string $title)
    {
        $slug = str_replace(' ', '-', $title);
        $slug = strtolower($slug);
        return $slug;
    }
}