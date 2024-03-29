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

dcCore::app()->addBehavior('initWidgets', ['mrvbDeltaDateBehaviors','initWidgets']);

class mrvbDeltaDateBehaviors
{
    public static function initWidgets($w)
    {
        $w->create('mrvbDeltaDate', __('Mrvb: delta date'), ['mrvbDeltaDatePublic','mrvbDeltaDate'], null, __('number of days between two dates'));

        $w->mrvbDeltaDate->setting(
            'title',
            __('Title:'),
            '',
            'text'
        );
        $w->mrvbDeltaDate->setting(
            'dateone',
            __('First date <br />(format yyyy/mm/dd, nothing = today):'),
            '',
            'text'
        );
        $w->mrvbDeltaDate->setting(
            'datetwo',
            __('Second date <br />(format yyyy/mm/dd, nothing = today):'),
            '',
            'text'
        );
        $w->mrvbDeltaDate->setting(
            'labelsing',
            __('Caption (singular mode):'),
            __('day'),
            'text'
        );
        $w->mrvbDeltaDate->setting(
            'labelplur',
            __('Caption (plural mode):'),
            __('days'),
            'text'
        );
        $w->mrvbDeltaDate->setting(
            'link',
            __('Link (optional):'),
            '',
            'text'
        );
        $w->mrvbDeltaDate->setting(
            'bubble',
            __('Explanatory bubble:'),
            '',
            'text'
        );
        $w->mrvbDeltaDate->setting(
            'intro',
            __('Text of introduction:'),
            '',
            'textarea'
        );
        $w->mrvbDeltaDate->setting(
            'conclu',
            __('Text of conclusion:'),
            '',
            'textarea'
        );
        $w->mrvbDeltaDate->addHomeOnly();
        $w->mrvbDeltaDate->addContentOnly();
        $w->mrvbDeltaDate->addClass();
        $w->mrvbDeltaDate->addOffline();
    }
}
