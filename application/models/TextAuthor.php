<?php
# Table: text_authors
# Primary key: id
# Foreign key: text_id
# Foreign key: person_id

class TextAuthor extends GF\Core\AbstractModel
{
    const MODEL_NAME = 'Тексты по авторам';

    static $belongs_to = array(
        array('text'),
        array('person')
    );
}