<?php

namespace App\InsertTag;

use Contao\ContentModel;
use Contao\Controller;
use Contao\CoreBundle\InsertTag\InsertTagInterface;

class CustomInsertContent implements InsertTagInterface
{
    public function getInsertTagNames(): array
    {
        return ['custom_insert_content'];
    }

    public function replaceInsertTag(string $tag): string|false
    {
        $parts = explode('::', $tag);
        if ($parts[0] !== 'custom_insert_content' || !is_numeric($parts[1] ?? null)) {
            return false;
        }

        $id = (int) $parts[1];
        $element = ContentModel::findByPk($id);

        if ($element === null || $element->invisible) {
            return '';
        }

        $time = time();
        if (($element->start && $element->start > $time) || ($element->stop && $element->stop < $time)) {
            return '';
        }

        return Controller::getContentElement($element->current());
    }
}
