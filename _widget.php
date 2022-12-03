<?php
# -- BEGIN LICENSE BLOCK ----------------------------------
#
# This file is part of mrvbDeltaDate, a plugin for Dotclear 2
#
# © Mirovinben (http://www.mirovinben.fr/)
# Licensed under the GPL version 2.0 license.
# See LICENSE file or
# http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
#
# -- END LICENSE BLOCK ------------------------------------

if (!defined('DC_RC_PATH')) { return; }

$core->addBehavior('initWidgets', array('mrvbDeltaDateBehaviors','initWidgets'));

class mrvbDeltaDateBehaviors
{
	public static function initWidgets($w)
	{
		$w->create('mrvbDeltaDate',__('Mrvb: delta date'), array('mrvbDeltaDatePublic','mrvbDeltaDate'),null,__('number of days between two dates'));
		
		$w->mrvbDeltaDate->setting('title',__('Title:'),
			'','text');
		$w->mrvbDeltaDate->setting('dateone',__('First date <br />(format yyyy/mm/dd, nothing = today):'),
			'','text');
		$w->mrvbDeltaDate->setting('datetwo',__('Second date <br />(format yyyy/mm/dd, nothing = today):'),
			'','text');
		$w->mrvbDeltaDate->setting('labelsing',__('Caption (singular mode):'),
			__('day'),'text');
		$w->mrvbDeltaDate->setting('labelplur',__('Caption (plural mode):'),
			__('days'),'text');
		$w->mrvbDeltaDate->setting('link',__('Link (optional):'),
			'','text');
		$w->mrvbDeltaDate->setting('bubble',__('Explanatory bubble:'),
			'','text');
		$w->mrvbDeltaDate->setting('intro',__('Text of introduction:'),
			'','textarea');
		$w->mrvbDeltaDate->setting('conclu',__('Text of conclusion:'),
			'','textarea');
		$w->mrvbDeltaDate->setting('homeonly',__('Display on:'),'all','combo',
			array(
				__('All pages') => 0,
				__('Home page only') => 1,
				__('Except on home page') => 2
			));
		$w->mrvbDeltaDate->setting('content_only',__('Content only'),
				0,'check');
		$w->mrvbDeltaDate->setting('CSSclass',__('CSS class:'),
			'','text');
		$w->mrvbDeltaDate->setting('offline',__('To put off line'),
			false,'check');
	}
}
