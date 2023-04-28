<?php


add_action('wp_footer' , 'darvish_func');
  function darvish_func(){
    ?>
     <section class="whatsapp-like-crisp">
	<div class="whats-app-logo-crisp">
		<span class="w-oppener">
			<img src="<?php echo PLUGIN_URLIMG . '/whatsapp-icon.png' ?>" class="img-responsive center-block" />
		</span>
		<span class="on-hover-show-wa">
			<p>
				آیا نیاز به کمک دارید؟
			</p>
		</span>
		<div class="onclick-pop-wa">
			<div class="onp-header">
				<div class="close-wa">
					<img src="<?php echo PLUGIN_URLIMG . '/cancel-wa-white.png' ?>" class="img-responsive center-block" />
				</div>
				<div class="onp-wa">
					<img src="<?php echo PLUGIN_URLIMG . '/whats-app-header-logo.png' ?>" class="center-block img-responsive" />
				</div>
			</div>
			<div class="onp-body">
				<div class="onp-text">
					<p class="text-justify">
						سلام خوش آمدید!
						<br />
						برای ارائه خدمات بهتر مشاوران ما در واتس اپ در خدمت شما هستند.
					</p>
				</div>
			</div>
			<div class="enter-chat-wa-btn">
		
				<a href="https://api.whatsapp.com/send?phone=+98">
					<span class="start-chat">ورود به گفتگو</span>
					<span>
						<img src="<?php echo PLUGIN_URLIMG . '/send-new.gif' ?>" class="img-responsive center-block" />
					</span>
				</a>
			</div>
		</div>
	</div>
</section>

<?php
  }

?>
