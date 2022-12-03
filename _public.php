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
require_once dirname(__FILE__).'/_widget.php';

class mrvbDeltaDatePublic
{
	public static function mrvbDeltaDate($w)
	{
		global $core;

		if ($w->offline) {
			return;
		}
		if (($w->homeonly == 1 && $core->url->type != 'default') ||
			($w->homeonly == 2 && $core->url->type == 'default')) {
			return;
		}

		$today = dt::str('%Y/%m/%d',null,$core->blog->settings->system->blog_timezone);
		$bubble = html::escapeHTML(__($w->bubble));
		if (strlen($w->dateone)==0) {$w->dateone = $today;}
		if (strlen($w->datetwo)==0) {$w->datetwo = $today;}
		$nbr = (strtotime($w->datetwo) - strtotime($w->dateone)) / 86400;
		if ($nbr>1 || $nbr<-1) {
			$txt = html::escapeHTML(__($w->labelplur));
		} else {
			$txt = html::escapeHTML(__($w->labelsing));
		};
		$link = html::escapeHTML(__($w->link));
		$res = ($w->title ? $w->renderTitle(html::escapeHTML($w->title))."\n" : '');
		$res .= ($w->intro ? '<div class="first">'."\n".__($w->intro)."\n".'</div>'."\n" : '');
		$res .= '<p class="date">';
		if ((strlen($bubble)>0) || (strlen($link)>0)) {
			$res .= '<a';
			if (strlen($bubble)>0) {
				$res .= ' title="'.$bubble.'"';
			}
			if (strlen($link)==0) {
				$link = '#';
			}
			$res .= ' href="'.$link.'">';
			$res .= $nbr;
			if (strlen($txt)>0) {$res .= '<span> '.$txt.'</span>';}
			$res .= '</a>';
		} else {
			$res .= $nbr;
			if (strlen($txt)>0) {$res .= '<span> '.$txt.'</span>';}
		}
		$res .= '</p>';
		$res .= ($w->conclu ? "\n".'<div class="last">'."\n".__($w->conclu)."\n".'</div>' : '');
		return $w->renderDiv($w->content_only,'deltadate '.$w->CSSclass,'',$res);
	}
}