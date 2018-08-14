<!--
	How would you include the external script for the last version of jQuery in WordPress? (Take it from any public cdn, do not use the version included with core). Show the actual code you would use.

	Answer:
		I've recently had to implement this on one of my projects.  The client wanted a custom page that automates some of their daily taks.  This included a random email generator.  I created a custom post type for the emails and then created a custom page template that contains a form.  This form, when submitted, grabs a random email, merges some data points, and sends it out to variuos people.  I created a plugin that handles this whole process. I needed jQuery for the form page because there is data processing the form and also needed to post to a custom API endpoint I created, which takes care of grabbing emails.  

		In my main plugin folder, I created a script.js file that will take care of the form submission.  In my main PHP script where I registered the plugn, I registered the script.js file as the following:

		function plugin_scripts() {
			wp_enqueue_script('customjs', plugins_url('/scripts.js', __FILE__), array('jquery'), false, true);
		}

		As you can see, I'm able to pass the global jQuery object to my script.  In my script.js, I have a closure that is able to pass in the global jQuery:
		
		(function($) {
			// Script content...
		})(jQuery);

-->
