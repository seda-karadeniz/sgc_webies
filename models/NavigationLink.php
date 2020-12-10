<?php

class NavigationLink extends Model
{
    public $url;
    public $label;
    public $icon;


    public function __construct($data)
    {
        $this->url = $data['url'];
        $this->label = $data['label'];
        $this->icon = $data['icon'];
        
    }

    static public function getAllDisplayed()
    {
        $results = static::fetchAll('SELECT `url`,`label`,`icon` FROM `navigation_links` ORDER BY `order` ASC;');

        foreach ($results as $index=>$line){
            $results[$index] = new NavigationLink($line);
        }

        return $results;

        
    }
}