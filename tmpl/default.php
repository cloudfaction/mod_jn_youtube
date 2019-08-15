<?php
/**
 * @version     1.0
 * @package     mod_jn_youtube
 * @copyright   Copyright (C) 2019. All rights reserved.
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @author      Maarten Blokdijk / www.joonextpro.com
 */
//No Direct Access
defined('_JEXEC') or die;

if($jn_audio_only=='1'):
  $jn_youtube_height="0 px";
endif;

if($jn_audio_only=='0'):

?>
<style>
.youtube-iframer {<?php echo $jn_youtube_css?>}
</style>

<?php endif;?>

<div class="youtube-iframer">

<iframe width="<?php echo $jn_youtube_width?>" height="<?php echo $jn_youtube_height?>" src="https://www.youtube.com/embed/<?php echo $jn_youtube_file?>?start=<?php echo $jn_youtube_startsecond?><?php if($jn_autoplay=='1'):?>&autoplay=1<?php endif;?><?php if($jn_loop=='1'):?>&loop=1&playlist=<?php echo $jn_youtube_file?><?php endif;?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

</div>


