<?php
class Slugify
{
    public function slug($title)
    {
        $forbiddenChars = array(" ","é", "è", "à", "ê", "ë", "&", ".", ",", "<", ">","'","#","%", "{","}","|","^",",","~","[","]","`",")",";","/","?",":","@","=","&" );
        $slug = str_replace($forbiddenChars, '-', $title);
        $slug = strtolower($slug);
        return $slug;
    }
}