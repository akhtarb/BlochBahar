<?php

/**
 * Command class for block
 *
 * @author Matthew McNaney <mcnaney at gmail dot com>
 * @version $Id$
 */

PHPWS_Core::initModClass('block', 'Block_Item.php');

class Block {

    public static function show()
    {
        Block::showAllBlocks();

        
        Block::showBlocks();

       

    }

    public static function showAllBlocks()
    {
      
        Block::showBlocks();
    }

  

    public static function showBlocks()
    {
        $db = new PHPWS_DB('blockbahar');
       
        Key::restrictView($db, 'blockbahar');
        $result = $db->getObjects('Block_Item');

        if (PHPWS_Error::isError($result)) {
            PHPWS_Error::log($result);
            return NULL;
        }

        if (empty($result)) {
            return NULL;
        }

        foreach ($result as $blockbahar) {
            
            Layout::add($blockbahar->view(), 'blockbahar', $blockbahar->getContentVar());
            $GLOBALS['Current_Blocks'][$blockbahar->id] = TRUE;
        }

    }

}

?>