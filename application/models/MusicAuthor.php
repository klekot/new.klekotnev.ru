<?php
# Table: collective_musicians
# Primary key: id
# Foreign key: music_id
# Foreign key: author_id

class MusicAuthor extends GF\Core\AbstractModel
{
    const MODEL_NAME = 'Музыка по авторам';

    static $belongs_to = array(
        array('music'),
        array('person')
    );
}