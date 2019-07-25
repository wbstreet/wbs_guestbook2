<?php
/**
 *
 * @category        module
 * @package         wbs_guestbook2
 * @author          Konstantin Polyakov
 * @license         http://www.gnu.org/licenses/gpl.html
 * @platform        WebsiteBaker 2.10.0
 * @requirements    PHP 5.2.2 and higher
 *
 */

if(!defined('WB_PATH')) {
        require_once(dirname(dirname(__FILE__)).'/framework/globalExceptionHandler.php');
        throw new IllegalFileException();
}

include(__DIR__.'/lib.class.guestbook2.php');
$clsModGuestbook2 = new ModGuestbook2(null, null);
$r = $clsModAuth->uninstall();
if (gettype($r) === 'string') {
    $admin->print_error($r);
}

?>