<?php
/**
 * @version     1.0
 * @package     mod_jn_youtube
 * @copyright   Copyright (C) 2019. All rights reserved.
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @author      Maarten Blokdijk / www.joonextpro.com
 
*Below is set for instructional purposes only
*Normaal
*<iframe width="560" height="315" src="https://www.youtube.com/embed/vlDzYIIOYmM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

*Privacy
*<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/vlDzYIIOYmM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

*Start seconde
*<iframe width="560" height="315" src="https://www.youtube.com/embed/vlDzYIIOYmM?start=3" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

*/
//No Direct Access
defined('_JEXEC') or die;
?>
<style>
.youtube-iframer {<?php echo $jn_youtube_css?>}
</style>

<div class="youtube-iframer">

<iframe width="<?php echo $jn_youtube_width?>" height="<?php echo $jn_youtube_height?>" src="https://www.youtube<?php if ($jn_use_privacy=1){echo '-nocookie';}?>.com/embed/<?php echo $jn_youtube_file?>?start=<?php echo $jn_youtube_startsecond?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

</div>


