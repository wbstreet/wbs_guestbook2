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

if(!defined('WB_PATH')) die(header('Location: index.php'));  

include(__DIR__.'/lib.class.guestbook2.php');
$clsModGuestbook = new ModGuestbook2($page_id, $section_id);
$r = $clsModGuestbook->add();
if (gettype($r) === 'string') {
    $admin->print_error($r);
}
?>