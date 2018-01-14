<?php
# Table: texts
# Primary key: id
# Foreign key: content_file_id

class Text extends GF\Core\AbstractModel
{
    const MODEL_NAME = 'Тексты';

    static $belongs_to = array(
        array('file')
    );

    static $has_one = array(
        array('composition')
    );
}