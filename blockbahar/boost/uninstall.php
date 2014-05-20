<?php

/**
 * Uninstall file for block
 *
 * @author Matthew McNaney <mcnaney at gmail dot com>
 * @version $Id$
 */

function block_uninstall(&$content)
{
    PHPWS_DB::dropTable('blockbahar');
   
    $content[] = dgettext('blockbahar', 'Block tables removed.');
    return true;
}


?>
