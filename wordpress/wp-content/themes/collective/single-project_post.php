<?php 
get_header(); 

if(get_field('project_display')=='slider')
	 get_template_part('single-project2');
elseif(get_field('project_display')=='casestudy')
	 get_template_part('single-project1');
else 
	 get_template_part('single-project3');	
get_footer();?>