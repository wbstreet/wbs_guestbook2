<?php
/**
 *
 * @category        module
 * @package         wbs_guestbook2
 * @author          Konstantin Polyakov
 * @license         http://www.gnu.org/licenses/gpl.html
 * @platform        WebsiteBaker 2.10.0
 * @requirements    PHP 7.0 and higher
 *
 */

if(!defined('WB_PATH')) {
        require_once(dirname(dirname(__FILE__)).'/framework/globalExceptionHandler.php');
        throw new IllegalFileException();
}
/* -------------------------------------------------------- */

$name = substr(basename(__DIR__), 4);
$class_name = "Mod".ucfirst(str_replace('_', '', ucwords($name, '_'))); // portal_obj_blog into ModPortalObjBlog

include(__DIR__."/lib.class.$name.php");
$GLOBALS['cls'.$class_name] = new $class_name(null, null);

$r = $GLOBALS['cls'.$class_name]->_import_sql(__FILE__, 'struct');
if (gettype($r) === 'string') $admin->print_error($r);

$r = $GLOBALS['cls'.$class_name]->_import_sql(__FILE__, 'data');
if (gettype($r) === 'string') $admin->print_error($r);

$r = $GLOBALS['cls'.$class_name]->install();
if (gettype($r) === 'string') $admin->print_error($r);
?>