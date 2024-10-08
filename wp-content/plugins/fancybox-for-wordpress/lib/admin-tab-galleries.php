<h3><?php echo wp_kses_post( __( 'Gallery Settings <span style="color:red">(advanced)</span>', 'mfbfw' ) ); ?></h3>
<p><?php esc_html_e( 'Here you can choose if you want the plugin to group all images into a gallery, or make a gallery for each post. You can also define you own jQuery expression if you like.', 'mfbfw' ); ?></p>
<?php
//customExpression fix for update ( fancybox uses data-fancybox attribute for grouping galleries )
$settings['customExpression'] = str_replace('"rel"','"data-fancybox"',$settings['customExpression']);

?>
<table class="form-table" style="clear:none;">
	<tbody>
		<tr valign="top">
			<th scope="row"><?php esc_html_e( 'Gallery Type', 'mfbfw' ); ?></th>
			<td>
				<input id="galleryTypeAll" class="galleryType" type="radio" value="all" name="mfbfw[galleryType]"<?php if ( $settings[ 'galleryType' ] == 'all' ) echo ' checked="yes"'; ?> />
				<label for="galleryTypeAll">
					<?php esc_html_e( 'Make a gallery for all images on the page (default)', 'mfbfw' ); ?>
				</label><br /><br />

				<input id="galleryTypeGutenbergBlock" class="galleryType" type="radio" value="single_gutenberg_block" name="mfbfw[galleryType]"<?php if ( $settings[ 'galleryType' ] == 'single_gutenberg_block' ) echo ' checked="yes"'; ?> />
				<label for="galleryTypeNone">
					<?php esc_html_e( 'Make a gallery for each gutenberg gallery block', 'mfbfw' ); ?>
				</label><br /><br />

				<input id="galleryTypePost" class="galleryType" type="radio" value="post" name="mfbfw[galleryType]"<?php if ( $settings[ 'galleryType' ] == 'post' ) echo ' checked="yes"'; ?> />
				<label for="galleryTypePost">
					<?php esc_html_e( 'Make a gallery for each post (will only work if your theme uses <code>class="post"</code> on each post, which is common in WordPress', 'mfbfw' ); ?>
				</label><br /><br />

				<input id="galleryTypeCustom" class="galleryType" type="radio" value="custom" name="mfbfw[galleryType]"<?php if ( $settings[ 'galleryType' ] == 'custom' ) echo ' checked="yes"'; ?> />
				<label for="galleryTypeCustom">
					<?php esc_html_e( 'Use a custom expression to apply FancyBox', 'mfbfw' ); ?>
				</label><br /><br />
				<fieldset>
					<div id="customExpressionBlock">
						<label for="mfbfw[customExpression]">
	                        <div class="start-editing"><p><?php esc_html_e( 'Click to start editing', 'mfbfw' ); ?></p></div>
							<textarea rows="10" cols="50" class="large-text code" name="mfbfw[customExpression]" wrap="physical" id="customExpression"><?php echo wp_kses_post($settings[ 'customExpression' ]); ?></textarea>
						</label><br />
						<p class="description"><strong><em><?php esc_html_e( 'Custom expression guidelines:', 'mfbfw' ); ?></em></strong></p><br />
	                    <p class="description"><em><?php esc_html_e('&middot; The custom expression has to apply <code>class="fancybox"</code> to the links where you want to use FancyBox. Do not call the <code>fancybox()</code> function here, the plugin does this for you.', 'mfbfw'); ?></em></p><br />
	                    <p class="description"><em><?php esc_html_e('&middot; The jQuery <code>addClass()</code> function is a good way to add the class to the desired links conserving any existing class.', 'mfbfw'); ?></em></p><br />
	                    <p class="description"><em><?php esc_html_e('&middot; You can use <code>getTitle()</code> in your expression to copy the title attribute from the <code>IMG</code> tag to the <code>A</code> tag, so that FancyBox can show captions.', 'mfbfw'); ?></em></p><br />
	                    <p class="description"><em><?php esc_html_e('&middot; You can use <code>jQuery(thumbnails)</code> like in the example expression to apply FancyBox to thumbnails that link to these extensions: BMP, GIF, JPG, JPEG, PNG (both lowercase and uppercase).', 'mfbfw'); ?></em></p><br />
	                    <p class="description"><em><?php esc_html_e('&middot; If you want to do it manually you can use something like <code>jQuery("a:has(img)[href$=\'.jpg\']")</code> or whatever works for you.', 'mfbfw'); ?></em></p><br />
	                    <p class="description"><em><?php esc_html_e('See the <a href="http://docs.jquery.com/" target="_blank">jQuery Documentation</a> for more help.', 'mfbfw'); ?></em></p><br /><br />
	                    <p class="description"><strong><em><?php esc_html_e('Examples:', 'mfbfw'); ?></em></strong></p><br />
	                    <p class="description"><em><code>jQuery(thumbnails).addClass(&quot;fancybox&quot;).attr(&quot;rel&quot;,&quot;fancybox&quot;).getTitle();</code></em></p><br />
	                    <p class="description"><em><code>jQuery&quot;a:has(img)[href$='.jpg']&quot;).addClass&quot;fancybox&quot;).attr(&quot;rel&quot;,&quot;fancybox&quot;).getTitle();</code></em></p><br /><br />
	                </div>
                </fieldset>
			</td>
		</tr>

	</tbody>
</table>
