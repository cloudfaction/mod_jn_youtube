<?php
/**
 * @version     1.0
 * @package     mod_jn_youtube
 * @copyright   Copyright (C) 2018. All rights reserved.
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @author      Maarten Blokdijk 
 */
//No Direct Access
defined('_JEXEC') or die;

// fetch variables

$jn_youtube_height        = $params->get('jn_youtube_height','600px');
$jn_youtube_width         = $params->get('jn_youtube_width','100%');
$jn_youtube_file          = $params->get('jn_youtube_file','vlDzYIIOYmM');
$jn_autoplay             = $params->get('jn_autoplay','0');
$jn_audio_only             = $params->get('jn_audio_only','0');
$jn_youtube_startsecond   = $params->get('jn_youtube_startsecond','0');
$jn_youtube_css           = $params->get('jn_youtube_css','background: rgba(0, 0, 0, 0,5); box-shadow: 0px 5px 20px 0px rgba(0, 0, 0, 0,5);');
$jn_loop                  = $params->get('jn_loop','0');
?>
