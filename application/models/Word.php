<?php
# Table: words
# Primary key: id
# Foreign key: idea_id
# Foreign key: language_id

class Word extends \GF\Core\AbstractModel
{
    const MODEL_NAME = 'Слова';

    static $belongs_to = array(
        array('idea'),
        array('language')
    );
}