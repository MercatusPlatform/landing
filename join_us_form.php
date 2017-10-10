<div class="ninth_section_wrapper">
	<div class="ninth_section_content content_container">
		<div class="join_us_wrapper">
			<div class="join_us_title">join us</div>
			<div class="join_us_text">To learn more about trust management of digital assets, how to use Mercatus, and to meet the team!</div>
			<form class="join_us_form feedback_form_js" name="subscribe2" method="post">
				<div class="join_us_field_wrapper clearfix">
					<input type="text" class="join_us_field email_field_js" name="email" placeholder="Type your e-mail here...">
					<div class="join_us_submit_wrapper">
						<div class="join_us_submit_wrapper1"></div>
						<div class="join_us_submit_wrapper2"></div>
						<input type="submit" class="join_us_submit" name="Subscribe" value="Subscribe">	
					</div>
				</div>
				<div class="form_error">*Type correct mail to subscribe</div>
			</form>
		</div>
		<?if($_SERVER['REQUEST_URI'] != '/contacts/'):?>
			<div class="join_us_networks_wrapper">
				<a class="join_us_a twitter" href="#" target="_blank"></a>
				<a class="join_us_a telegram" href="#" target="_blank"></a>
				<a class="join_us_a facebook" href="#" target="_blank"></a>
				<a class="join_us_a medium" href="#" target="_blank"></a>
				<a class="join_us_a github" href="#" target="_blank"></a>
			</div>
			<div class="mercatus_email">info@mercatus.im</div>
		<?endif;?>
	</div>
</div>