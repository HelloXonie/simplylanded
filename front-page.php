<?php get_header();?>

<div class="container">

	<h1><?php the_title();?></h1>

	
	<?php get_template_part('includes/section', 'content');?>
</div>

<!-- Include the library. -->
<script
  src="https://unpkg.com/github-calendar@latest/dist/github-calendar.min.js">
</script>

<!-- Optionally, include the theme (if you don't want to struggle to write the CSS) -->
<link
  rel="stylesheet"
  href="https://unpkg.com/github-calendar@latest/dist/github-calendar-responsive.css"
/>

<!-- Prepare a container for your calendar. -->
<div class="calendar">
    <!-- Loading stuff -->
    Loading the data just for you.
</div>

<script>
    GitHubCalendar(".calendar", "your-username");

    // or enable responsive functionality:
    //GitHubCalendar(".calendar", "your-username", { responsive: true });

    // Use a proxy
    GitHubCalendar(".calendar", "helloxonie", {
       proxy (username) {
         return fetch(`https://your-proxy.com/github?user=${helloxonie}`)
       }
    }).then(r => r.text())
</script>




<?php get_footer();?>
