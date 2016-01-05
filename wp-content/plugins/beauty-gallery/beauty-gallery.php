<?php
/*

Plugin Name: Beauty Gallery
Plugin URI: 
Description: This is a beautiful way to show your WordPress Post Gallery. By enabling that, all of your galleries will have this new look.
Version: 1.0.0
Author: Janynne Gomes
Author URI: http://facebook.com/DiarioDeUmaProgramadorA
License: GPLv2 or later
Text Domain: beauty-gallery


    Copyright 2014  JANYNNE  (email : janynnegomes@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA


*/

//load_plugin_textdomain('beauty-gallery', false, basename( dirname( __FILE__ ) ) . '/languages' );

    /**
 * Proper way to enqueue scripts and styles
 */
function beauty_enqueue_externals() {
	wp_enqueue_style(  'beauty', plugin_dir_url( __FILE__ ) .'/beauty-gallery.css');
	wp_enqueue_script( 'beauty',  plugin_dir_url( __FILE__ ) . '/beauty-gallery.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'beauty_enqueue_externals' );


add_filter('post_gallery','beautyGallery',10,2);

function beautyGallery($output,$attr){

	if($attr['show_as_beauty_gallery'] != null && $attr['show_as_beauty_gallery'] == "true"){
	ob_start();

	$posts = get_posts(array('include' => $attr['ids'],'post_type' => 'attachment')); ?>

	<section class="gallery">
		<nav id="thumb-navigation" class="thumb-navigation">
			<a href="#" class="arrow previows-arrow"> << </a>
			<ul>
			<?php $thumbCount = 0;  /* Counter controls the javascript navigation*/
				  foreach($posts as $imagePost){ 
					?>
				<li>
					<article>						
						<?php echo wp_get_attachment_image($imagePost->ID,'full',false, array('id'=> 'thumb'.$imagePost->ID, 'name'=> 'id-'.$imagePost->ID, 'class' => 'index-'.$thumbCount.' thumb-item'));
						echo '<input type="hidden" id="title-'.$imagePost->ID.'" name="title-'.$imagePost->ID.'" value="'.$imagePost->post_excerpt.'" >';
						echo '<input type="hidden" id="caption-'.$imagePost->ID.'" name="caption-'.$imagePost->ID.'" value="'.$imagePost->post_content.'" >'; ?>
					</article>

					<a href="#<?php echo $imagePost->ID; ?>" id="thumb<?php echo $imagePost->ID; ?>-link" class="thumb-link" onclick="changeFeatured('<?php echo $imagePost->ID; ?>')"></a>
				</li>
			<?php $thumbCount++; } ?>					

			</ul>
			<a href="#listImage" class="arrow next-arrow" onclick="setNext();" > >> </a>
		</nav>
		<section class="listImage">
				
			<article class="clipp-imageview" >						
				<?php echo wp_get_attachment_image($posts[0]->ID,'full',false, array('id'=> 'featuredImage')); ?>
				<input type="hidden" id="currentAttachmentId" name="currentAttachmentId" value="0" >
				<input type="hidden" id="currentIndex" value="0" >
			</article>

			<article id="thumb-description">

				<?php  $attachement_post =  get_post($posts[0]->ID); 

				if($attachement_post != null)
					{?>

					<p id="gallery-title"><?php echo $attachement_post->post_excerpt; ?></p>
					<p id="gallery-caption"><?php echo $attachement_post->post_content; ?></p>			
					
					<?php }?>

				</article>					
				
		</section>
	</section>

	<?php
   
   return ob_get_clean();
	}
	else
	{
		return $output;
	}

    //return $output;
}


add_action('print_media_templates', function(){ ?>

  <script type="text/html" id="tmpl-custom-beauty-gallery-setting">
    <label class="setting">
      <span><?php _e('Show as Beauty Gallery'); ?></span>
      <input type='checkbox' data-setting="show_as_beauty_gallery">       
    </label>
  </script>

  <script>

    jQuery(document).ready(function(){

      _.extend(wp.media.gallery.defaults, {
        show_as_beauty_gallery: 'default_val'
      });

      wp.media.view.Settings.Gallery = wp.media.view.Settings.Gallery.extend({
        template: function(view){
          return wp.media.template('gallery-settings')(view)
               + wp.media.template('custom-beauty-gallery-setting')(view);
        }
      });

    });

  </script>
  <?php

});
?>