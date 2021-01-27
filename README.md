# Sticky-header-plugin-wordpress
I made a wordpress plugin using various PHP Functions &amp; WordPress backend functions and hooks. This plugin allows you to make any header sticky. You can enter the CSS class property and set text color.



File structure explained:

Includes folder- when plugin is activated, Wordpress will automatically run these files… the core file is 
	includes/class-plugin-name.php 

Then from that file I used Object Oriented PHP. The main class is plugin_name, in that class is the construct method that will automatically run hooks. 

The admin & public methods titled define_admin_hooks and define_public_hooks respectively calls to other methods in other folders. 



Admin folder - backend admin view of the user.
	The main file that will run is 
	admin/class-plugin-name-admin.php

	In this file is a new instance of the class plugin_name… this class has methods for 	
wordpress backend settings and hook functions. This file has methods that call other methods in partials folder. 
admin/partials/plugin-name-admin-display.php
admin/partials/submenu-page.php
The backend view of admin is in these folders. Thes first file is the settings. The second one is a submenu explaining how to use the plugin. 


Public folder- frontend of site visitors will see
	The main file that will run is
	public/class-plugin-name-public.php

	In this file is a new instance of the class plugin_name… this class has methods for CSS & JQUERY which will take effect on the frontend of website visitors will see. 
