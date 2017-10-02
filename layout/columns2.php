<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * A two column layout for the boost theme.
 *
 * @package   theme_boost
 * @copyright 2016 Damyon Wiese
 * @copyright 2017 Hans Jeria (hansjeria@gmail.com)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

user_preference_allow_ajax_update('drawer-open-nav', PARAM_ALPHA);
require_once($CFG->libdir . '/behat/lib.php');

if (isloggedin() && !behat_is_test_site()) {
    $navdraweropen = (get_user_preferences('drawer-open-nav', 'true') == 'true');
} else {
    $navdraweropen = false;
}
$extraclasses = [];
if ($navdraweropen) {
    $extraclasses[] = 'drawer-open-left';
}

$theme_escribiendo_font = get_user_preferences('theme_escribiendo_font');

switch($theme_escribiendo_font) {
    case 'modern':
        $extraclasses[]='escribiendo-font-modern';
        break;
    case 'classic':
        $extraclasses[]='escribiendo-font-classic';
        break;
    case 'comic':
        $extraclasses[]='escribiendo-font-comic';
        break;
}

$theme_escribiendo_size = get_user_preferences('theme_escribiendo_size');

switch($theme_escribiendo_size) {
    case '120':
        $extraclasses[]='escribiendo-size-120';
        break;
    case '140':
        $extraclasses[]='escribiendo-size-140';
        break;
    case '160':
        $extraclasses[]='escribiendo-size-160';
        break;
}

$theme_escribiendo_contrast = get_user_preferences('theme_escribiendo_contrast');

switch($theme_escribiendo_contrast) {
    case 'by':
        $extraclasses[]='escribiendo-contrast';
        $extraclasses[]='escribiendo-contrast-by';
        break;
    case 'yb':
        $extraclasses[]='escribiendo-contrast';
        $extraclasses[]='escribiendo-contrast-yb';
        break;
    case 'wg':
        $extraclasses[]='escribiendo-contrast';
        $extraclasses[]='escribiendo-contrast-wg';
        break;
    case 'bb':
        $extraclasses[]='escribiendo-contrast';
        $extraclasses[]='escribiendo-contrast-bb';
        break;
    case 'br':
        $extraclasses[]='escribiendo-contrast';
        $extraclasses[]='escribiendo-contrast-br';
        break;
}

$theme_escribiendo_bold = get_user_preferences('theme_escribiendo_bold');

switch($theme_escribiendo_bold) {
    case 'on':
        $extraclasses[]='escribiendo-bold';
        break;
}

$escribiendonotificationtype = get_config('theme_escribiendo', 'escribiendo_notification_type');

switch($escribiendonotificationtype) {
    case 'alert-danger':
        $notiftext = '<div class="alert alert-danger"><i class="fa fa-warning"></i>&emsp;'.get_config('theme_escribiendo', 'escribiendo_notification').'</div>';
        break;
    case 'alert-warning':
        $notiftext = '<div class="alert alert-warning"><i class="fa fa-warning"></i>&emsp;'.get_config('theme_escribiendo', 'escribiendo_notification').'</div>';
        break;
    case 'alert-success':
        $notiftext = '<div class="alert alert-success"><i class="fa fa-info-circle"></i>&emsp;'.get_config('theme_escribiendo', 'escribiendo_notification').'</div>';
        break;
    case 'alert-info':
        $notiftext = '<div class="alert alert-info"><i class="fa fa-info-circle"></i>&emsp;'.get_config('theme_escribiendo', 'escribiendo_notification').'</div>';
        break;
    default:
        $notiftext = '';
}

$bodyattributes = $OUTPUT->body_attributes($extraclasses);
$blockshtml = $OUTPUT->blocks('side-pre');
$hasblocks = strpos($blockshtml, 'data-block=') !== false;
$regionmainsettingsmenu = $OUTPUT->region_main_settings_menu();
$templatecontext = [
    'sitename' => format_string($SITE->shortname, true, ['context' => context_course::instance(SITEID), "escape" => false]),
    'output' => $OUTPUT,
    'sidepreblocks' => $blockshtml,
    'hasblocks' => $hasblocks,
    'bodyattributes' => $bodyattributes,
    'navdraweropen' => $navdraweropen,
    'regionmainsettingsmenu' => $regionmainsettingsmenu,
    'hasregionmainsettingsmenu' => !empty($regionmainsettingsmenu),
    'escribiendonotification' => $notiftext
];

$templatecontext['flatnavigation'] = $PAGE->flatnav;

echo $OUTPUT->render_from_template('theme_escribiendo/columns2', $templatecontext);