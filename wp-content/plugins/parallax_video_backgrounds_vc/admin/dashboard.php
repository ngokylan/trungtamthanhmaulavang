<?php
if(isset($_POST['pnvb-submit'])) {
	$result_count = 0;

	// for theme support
	$temp_result = false;
	$temp_val = '';
	if(isset($_POST['uvc-theme-support'])) {
		$temp_result = $_POST['uvc-theme-support'];
	}
	$temp_result = update_option('ultimate_theme_support',$temp_result);
	if($temp_result) {
		$result_count++;
	}

	// for video fixer
	$temp_result = false;
	$temp_val = '';
	if(isset($_POST['uvc-video-fixer'])) {
		$temp_result = $_POST['uvc-video-fixer'];
	}
	$temp_result = update_option('ultimate_video_fixer',$temp_result);
	if($temp_result) {
		$result_count++;
	}

	// smooth scroll
	$temp_result = false;
	$temp_val = '';
	if(isset($_POST['uvc-smooth-scroll'])) {
		$temp_result = $_POST['uvc-smooth-scroll'];
	}
	$temp_result = update_option('ultimate_smooth_scroll',$temp_result);
	if($temp_result) {
		$result_count++;
	}

	// smooth scroll options
	$temp_result = false;
	$temp_val = '';
	if(isset($_POST['ultimate_smooth_scroll_options'])) {
		$temp_result = $_POST['ultimate_smooth_scroll_options'];
	}
	$temp_result = update_option('ultimate_smooth_scroll_options',$temp_result);
	if($temp_result) {
		$result_count++;
	}

	// smooth scroll compatible
	$temp_result = false;
	$temp_val = '';
	if(isset($_POST['uvc-smooth-scroll-compatible'])) {
		$temp_result = $_POST['uvc-smooth-scroll-compatible'];
	}
	$temp_result = update_option('ultimate_smooth_scroll_compatible',$temp_result);
	if($temp_result) {
		$result_count++;
	}

	if($result_count > 0) {
		echo '<div class="updated"><p>Settings updated!</p></div>';
	}
	else {
		echo '<div class="error"><p>Unable to update settings!</p></div>';
	}
}
?>
<div class="wrap">
	<h2>
		<?php echo __('Settings'); ?>
	</h2>
	<div class="form-row clear"></div>
	<div>
		<?php
			$theme_support = get_option('ultimate_theme_support');
			$video_fixer = get_option('ultimate_video_fixer');
			$smooth_scroll = get_option('ultimate_smooth_scroll');
			$ss_options = get_option('ultimate_smooth_scroll_options');
			$smooth_scroll_compatible = get_option('ultimate_smooth_scroll_compatible');
		?>
		<form method="post">
			<div class="clear form-row">
				<?php
					$checked = '';
					if($theme_support === 'enable') {
						$checked = 'checked="checked"';
					}
				?>
				<label>Theme Support</label>
				<div class="onoffswitch">
                	<input type="checkbox" <?php echo $checked ?> id="uvc-theme-support" value="enable" class="onoffswitch-checkbox" name="uvc-theme-support" />
                     <label class="onoffswitch-label" for="uvc-theme-support">
                        <div class="onoffswitch-inner">
                            <div class="onoffswitch-active">
                                <div class="onoffswitch-switch"><?php echo __('ON'); ?></div>
                            </div>
                            <div class="onoffswitch-inactive">
                                <div class="onoffswitch-switch"><?php echo __('OFF'); ?></div>
                            </div>
                        </div>
                    </label>
                </div>
			</div>

			<div class="clear form-row">
				<?php
					$checked = '';
					if($video_fixer === 'enable') {
						$checked = 'checked="checked"';
					}
				?>
				<label>Video Fixer</label>
				<div class="onoffswitch">
                	<input type="checkbox" <?php echo $checked ?> id="uvc-video-fixer" value="enable" class="onoffswitch-checkbox" name="uvc-video-fixer" />
                     <label class="onoffswitch-label" for="uvc-video-fixer">
                        <div class="onoffswitch-inner">
                            <div class="onoffswitch-active">
                                <div class="onoffswitch-switch"><?php echo __('ON'); ?></div>
                            </div>
                            <div class="onoffswitch-inactive">
                                <div class="onoffswitch-switch"><?php echo __('OFF'); ?></div>
                            </div>
                        </div>
                    </label>
                </div>
			</div>

			<div class="clear form-row">
				<?php
					$checked = '';
					if($smooth_scroll === 'enable') {
						$checked = 'checked="checked"';
					}
				?>
				<label>Smooth Scroll</label>
				<div class="onoffswitch">
                	<input type="checkbox" <?php echo $checked ?> id="uvc-smooth-scroll" value="enable" class="onoffswitch-checkbox" name="uvc-smooth-scroll" />
                     <label class="onoffswitch-label" for="uvc-smooth-scroll">
                        <div class="onoffswitch-inner">
                            <div class="onoffswitch-active">
                                <div class="onoffswitch-switch"><?php echo __('ON'); ?></div>
                            </div>
                            <div class="onoffswitch-inactive">
                                <div class="onoffswitch-switch"><?php echo __('OFF'); ?></div>
                            </div>
                        </div>
                    </label>
                </div>
                <div id="ult-smooth-options" style="<?php echo (($smooth_scroll !== 'enable') || ($smooth_scroll_compatible == 'enable')) ? 'display:none' : '' ?>">
                	<div class="clear" style="margin-top:15px">
                		<label style="display: inline-block;width: 50px;">Speed: </label><input type="text" name="ultimate_smooth_scroll_options[speed]" placeholder="250" value="<?php echo (isset($ss_options['speed'])) ? $ss_options['speed'] : ''; ?>" />
                	</div>
                	<div>
                		<label style="display: inline-block;width: 50px;">Step: </label><input type="text" name="ultimate_smooth_scroll_options[step]" placeholder="45" value="<?php echo (isset($ss_options['step'])) ? $ss_options['step'] : ''; ?>" />
                	</div>
                </div>
			</div>

			<div class="clear form-row">
				<?php
					$checked = '';
					if($smooth_scroll_compatible === 'enable') {
						$checked = 'checked="checked"';
					}
				?>
				<label>Smooth Scroll - Compatible Mode</label>
				<div class="onoffswitch">
                	<input type="checkbox" <?php echo $checked ?> id="uvc-smooth-scroll-compatible" value="enable" class="onoffswitch-checkbox" name="uvc-smooth-scroll-compatible" />
                     <label class="onoffswitch-label" for="uvc-smooth-scroll-compatible">
                        <div class="onoffswitch-inner">
                            <div class="onoffswitch-active">
                                <div class="onoffswitch-switch"><?php echo __('ON'); ?></div>
                            </div>
                            <div class="onoffswitch-inactive">
                                <div class="onoffswitch-switch"><?php echo __('OFF'); ?></div>
                            </div>
                        </div>
                    </label>
                </div>
			</div>

			<div class="clear form-row">
				<input type="submit" name="pnvb-submit" value="Update" class="button-primary" />
			</div>
		</form>
	</div>
</div>

<script type="text/javascript">
	(function($){
		$(document).ready(function(){
			$('.onoffswitch').click(function(){
				$switch = $(this);
				setTimeout(function(){
					if($switch.find('.onoffswitch-checkbox').is(':checked'))
						$switch.find('.onoffswitch-checkbox').attr('checked',false);
					else
						$switch.find('.onoffswitch-checkbox').attr('checked',true);
					$switch.trigger('onUltimateSwitchClick');
				},300);

			});

			$('.onoffswitch').on('onUltimateSwitchClick',function(){
				setTimeout(function(){
					var is_smooth_scroll = (jQuery('#uvc-smooth-scroll').is(':checked')) ? true : false;
					var is_smooth_scroll_compatible = (jQuery('#uvc-smooth-scroll-compatible').is(':checked')) ? true : false;
					if(is_smooth_scroll) {
						if(!is_smooth_scroll_compatible) {
							jQuery('#ult-smooth-options').fadeIn(200);
						}
						else {
							jQuery('#ult-smooth-options').fadeOut(200);
						}
					}
					else {
						jQuery('#ult-smooth-options').fadeOut(200);
					}
				},300);
			});
		});
	})(jQuery);
</script>

<style type="text/css">
/*On Off Checkbox Switch*/
.onoffswitch {
	position: relative;
	width: 95px;
	display: inline-block;
	float: left;
	margin-right: 15px;
	-webkit-user-select:none;
	-moz-user-select:none;
	-ms-user-select: none;
}
.onoffswitch-checkbox {
	display: none !important;
}
.onoffswitch-label {
	display: block;
	overflow: hidden;
	cursor: pointer;
	border: 0px solid #999999;
	border-radius: 0px;
}
.onoffswitch-inner {
	width: 200%;
	margin-left: -100%;
	-moz-transition: margin 0.3s ease-in 0s;
	-webkit-transition: margin 0.3s ease-in 0s;
	-o-transition: margin 0.3s ease-in 0s;
	transition: margin 0.3s ease-in 0s;
}
.rtl .onoffswitch-inner{
	margin: 0;
}
.rtl .onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-inner {
	margin-right: -100%;
	margin-left:auto;
}
.onoffswitch-inner > div {
	float: left;
	position: relative;
	width: 50%;
	height: 24px;
	padding: 0;
	line-height: 24px;
	font-size: 12px;
	color: white;
	font-weight: bold;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	box-sizing: border-box;
}
.onoffswitch-inner .onoffswitch-active {
	padding-left: 15px;
	background-color: #CCCCCC;
	color: #FFFFFF;
}
.onoffswitch-inner .onoffswitch-inactive {
	padding-right: 15px;
	background-color: #CCCCCC;
	color: #FFFFFF;
	text-align: right;
}
.onoffswitch-switch {
	/*width: 50px;*/
	width:35px;
	margin: 0px;
	text-align: center;
	border: 0px solid #999999;
	border-radius: 0px;
	position: absolute;
	top: 0;
	bottom: 0;
}
.onoffswitch-active .onoffswitch-switch {
	background: #3F9CC7;
	left: 0;
}
.onoffswitch-inactive .onoffswitch-switch {
	background: #7D7D7D;
	right: 0;
}
.onoffswitch-active .onoffswitch-switch:before {
	content: " ";
	position: absolute;
	top: 0;
	/*left: 50px;*/
	left:35px;
	border-style: solid;
	border-color: #3F9CC7 transparent transparent #3F9CC7;
	/*border-width: 12px 8px;*/
	border-width: 15px;
}
.onoffswitch-inactive .onoffswitch-switch:before {
	content: " ";
	position: absolute;
	top: 0;
	/*right: 50px;*/
	right:35px;
	border-style: solid;
	border-color: transparent #7D7D7D #7D7D7D transparent;
	/*border-width: 12px 8px;*/
	border-width: 50px;
}
.onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-inner {
	margin-left: 0;
}
#ultimate-settings, #ultimate-modules, .ult-tabs{ display:none; }
#ultimate-settings.active-tab, #ultimate-modules.active-tab, .ult-tabs.active-tab{ display:block; }
.ult-badge {
	padding-bottom: 10px;
	height: 170px;
	width: 150px;
	position: absolute;
	border-radius: 3px;
	top: 0;
	right: 0;
}
div#msg > .updated, div#msg > .error { display:block !important;}
div#msg {
	position: absolute;
	left: 0;
	top: 100px;
	max-width: 30%;
}
.onoffswitch-inner:before,
.onoffswitch-inner:after {
    display:none
}
.onoffswitch-switch {
    height: initial !important;
	color: white !important;
}
.form-row {
	margin-bottom: 25px
}
</style>