
	<?php
		foreach ($scripts['foot'] as $file)
		{
			$url = starts_with($file, 'http') ? $file : base_url($file);
			echo "<script src='$url'></script>".PHP_EOL;
		}
	?>


		<script>
	    	 $(document).ready(function() {
				$("#lightGallery").lightGallery({
					mode:"fade",
					speed:800,
					caption:true,
					desc:true,
					mobileSrc:true
				});
			});
	    </script>
	<!-- //For Gallery js files -->


		<!-- here stars scrolling script -->
		<script type="text/javascript">
			$(document).ready(function() {
				/*
					var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear'
					};
				*/

				$().UItoTop({ easingType: 'easeOutQuart' });

				});
		</script>
		<!-- //here ends scrolling script -->
	<!-- //here ends scrolling icon -->

	<!-- scrolling script -->
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- //scrolling script -->

	<!-- FlexSlider-JavaScript -->
		<script defer src="<?php echo dist_url('js/jquery.flexslider.js'); ?>"></script>
		<script type="text/javascript">
			$(function(){
				SyntaxHighlighter.all();
					});
					$(window).load(function(){
					$('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
							$('body').removeClass('loading');
						}
				});
			});
		</script>
	<!-- //FlexSlider-JavaScript -->

	<!-- typer js--><!-- For banner text -->
	<script src='<?php echo dist_url('js/jquery.typer.js'); ?>'></script>
		<script>
							var win = $(window),
								foo = $('#typer');

							foo.typer(['Lets your hair do the talking', 'Wake up and smell the hair spray', 'Grow Your Hair and Make Stylish']);

							// unneeded...
							win.resize(function(){
								var fontSize = Math.max(Math.min(win.width() / (1 * 10), parseFloat(Number.POSITIVE_INFINITY)), parseFloat(Number.NEGATIVE_INFINITY));

								foo.css({
									fontSize: fontSize * .8 + 'px'
								});
							}).resize();
						</script>
	<!-- //typer js--><!-- //For banner text -->


	<?php // Google Analytics ?>
	<?php $this->load->view('_partials/ga') ?>
</body>
</html>
