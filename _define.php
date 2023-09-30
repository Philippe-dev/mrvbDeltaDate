<?php
/**
 * @brief mrvbDeltaDate, a plugin for Dotclear 2
 *
 * @package Dotclear
 * @subpackage Plugins
 *
 * @author Mirovinben (https://www.mirovinben.fr/)
 *
 * @copyright GPL-2.0 [https://www.gnu.org/licenses/gpl-2.0.html]
 */
if (!defined('DC_RC_PATH')) {
    return;
}

$this->registerModule(
    'mrvbDeltaDate',
    'Number of days between two dates',
    'Mirovinben',
    '0.2.1',
    [
        'permissions' => 'usage,contentadmin',
        'type'        => 'plugin',
        'dc_min'      => '2.24',
        'support'     => 'http://www.mirovinben.fr/blog/index.php?post/id1559',
        'details'     => 'http://plugins.dotaddict.org/dc2/details/mrvbDeltaDate',
    ]
);
