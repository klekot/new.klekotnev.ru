<?php
# Table: person
# Primary key: id

class Person extends \GF\Core\AbstractModel
{
    const MODEL_NAME = 'Персоны';

    static $has_many = array(
        array('collective_musicians'),
        array('collectives', 'through' => 'collective_musicians'),
        array('text_authors'),
        array('texts', 'through' => 'text_authors'),
        array('music_authors'),
        array('musics', 'through' => 'music_authors'),
        array('musician_records'),
        array('records', 'through' => 'musician_records'),
        array('instruments', 'through' => 'musician_records')
    );
}