<?php
# Table: albums
# Primary key: id
# Foreign key: cover_file_id

class Album extends \GF\Core\AbstractModel
{
    const MODEL_NAME = 'Альбомы';

    static $belongs_to = array(
        array('file')
    );

    static $has_many = array(
        array('records')
    );
}