<?php
class Slugify
{
    public function slug($title)
    {
        $slug = str_replace(' ', '-', $title);
        $slug = strtolower($slug);
        return $slug;
    }
}