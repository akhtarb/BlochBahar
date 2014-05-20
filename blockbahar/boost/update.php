<?php

/**
 * @author Matthew McNaney <mcnaney at gmail dot com>
 * @version $Id$
 */
function blockbahar_update(&$content, $currentVersion)
{
   
    return TRUE;
}

function moveblockbaharImages()
{
    require_once PHPWS_SOURCE_DIR . 'core/class/Form.php';
    require_once PHPWS_SOURCE_DIR . 'mod/blockbahar/class/block_Item.php';
    require_once PHPWS_SOURCE_DIR . 'mod/filecabinet/class/File_Assoc.php';
    require_once PHPWS_SOURCE_DIR . 'mod/filecabinet/class/Cabinet.php';

    $db = Database::newDB();
    $blockbahar = $db->addTable('blockbahar');
    $db->setConditional($blockbaharbahar->getFieldConditional('file_id', 0, '>'));
    $db->loadSelectStatement();

    while ($blockbahar = $db->fetchObject('block_Item')) {
        $file = new FC_File_Assoc($blockbaharbahar->file_id);
        $file->_use_style = false;
        $tag = $file->getTag();
        $old_content = $blockbaharbahar->getContent();
        $new_content = "<div>$tag</div>" . $old_content;
        $blockbahar->setContent($new_content);
        $blockbahar->save();
    }
}

?>