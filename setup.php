<?php
/**
 *                    jojo_theme_bootstrap
 *                ===========================
 *
 * Copyright 2010 Jaijaz <info@jaijaz.co.nz>
 *
 * See the enclosed file license.txt for license information (LGPL). If you
 * did not receive this file, see http://www.fsf.org/copyleft/lgpl.html.
 *
 * @author  Jai Ivarsson <jai@jaijaz.co.nz>
 * @link    http://www.jaijaz.co.nz
 */
 
 
/* Set options in Jojo that either this theme needs to work fully */

/* ensure we are using google's CDN for our jQuery goodness */
Jojo::setOption('googleajaxlibs', 'yes');

/* Use a custom modernizr build NOTE: It is recommended that you add a custom build for your site from http://modernizr.com/download/ */
Jojo::setOption('modernizr', 'custom');

/* use latest version of jQuery */
Jojo::setOption('jquery_version', '1.7.2');

/* put jQuery in the foot of the doc as per best practice javascript placement */
Jojo::setOption('jquery_head', 'no');

/* put common.js in the foot of the doc as per best practice javascript placement */
Jojo::setOption('commonjs_head', 'no');

/* turn on LessPHP css prepropressing */
Jojo::setOption('less', 'yes');

/* Include the normalize.css file at the top of styles.css */
Jojo::setOption('normalize_cssreset', 'yes');


/* Turn on all Twitter bootstrap options. It is suggested that when you push this theme live, you turn off what you aren't using */
Jojo::setOption('tbootstrap_variables', 'yes');
Jojo::setOption('tbootstrap_mixins', 'yes');
Jojo::setOption('tbootstrap_scaffolding_typelinks', 'yes');
Jojo::setOption('tbootstrap_scaffolding_grid', 'yes');
Jojo::setOption('tbootstrap_scaffolding_layout', 'yes');
Jojo::setOption('tbootstrap_bass_type', 'yes');
Jojo::setOption('tbootstrap_bass_code', 'yes');
Jojo::setOption('tbootstrap_bass_labels', 'yes');
Jojo::setOption('tbootstrap_bass_tables', 'yes');
Jojo::setOption('tbootstrap_bass_forms', 'yes');
Jojo::setOption('tbootstrap_bass_buttons', 'yes');
Jojo::setOption('tbootstrap_bass_sprites', 'yes');
Jojo::setOption('tbootstrap_components_buttongroups', 'yes');
Jojo::setOption('tbootstrap_components_navs', 'yes');
Jojo::setOption('tbootstrap_components_navbar', 'yes');
Jojo::setOption('tbootstrap_components_breadcrumbs', 'yes');
Jojo::setOption('tbootstrap_components_pagination', 'yes');
Jojo::setOption('tbootstrap_components_pager', 'yes');
Jojo::setOption('tbootstrap_components_thumbnails', 'yes');
Jojo::setOption('tbootstrap_components_alerts', 'yes');
Jojo::setOption('tbootstrap_components_progressbars', 'yes');
Jojo::setOption('tbootstrap_components_herounit', 'yes');
Jojo::setOption('tbootstrap_miscellaneous_wells', 'yes');
Jojo::setOption('tbootstrap_miscellaneous_close', 'yes');
Jojo::setOption('tbootstrap_miscellaneous_utilities', 'yes');
Jojo::setOption('tbootstrap_miscellaneous_componentanimations', 'yes');
Jojo::setOption('tbootstrap_responsive', 'yes');

Jojo::setOption('tbootstrap_js_transition', 'yes');
Jojo::setOption('tbootstrap_js_modal', 'yes');
Jojo::setOption('tbootstrap_js_dropdown', 'yes');
Jojo::setOption('tbootstrap_js_scrollspy', 'yes');
Jojo::setOption('tbootstrap_js_tab', 'yes');
Jojo::setOption('tbootstrap_js_tooltip', 'yes');
Jojo::setOption('tbootstrap_js_popover', 'yes');
Jojo::setOption('tbootstrap_js_alert', 'yes');
Jojo::setOption('tbootstrap_js_button', 'yes');
Jojo::setOption('tbootstrap_js_collapse', 'yes');
Jojo::setOption('tbootstrap_js_carousel', 'yes');
Jojo::setOption('tbootstrap_js_typeahead', 'yes');