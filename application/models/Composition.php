<?php
# Table: compositions
# Primary key: id
# Foreign key: music_id
# Foreign key: text_id
# Foreign key: notation_file_id

class Composition extends \GF\Core\AbstractModel
{
    const MODEL_NAME = 'Композиции';

    static $belongs_to = array(
        array('music'),
        array('text'),
        array('file')
    );
}