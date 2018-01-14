<?php
# Table: musics
# Primary key: id
# Foreign key: notation_file_id

class Music extends \GF\Core\AbstractModel
{
    const MODEL_NAME = 'Музыка';

    static $belongs_to = array(
        array('file')
    );

    static $has_one = array(
        array('composition')
    );

    static $has_many = array(
        array('music_authors'),
        array('persons', 'through' => 'music_authors'),
    );
}