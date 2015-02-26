# wp-module-boilerplate
Boilerplate for code modules for WordPress plugins and themes

##Usage
Usage for this is pretty simple.  Create a folder for your module and add the `init.php` file.  Add `css` and `js` folders where applicable.  Edit the `init.php` file, adding module code, includes/required and registering/enqueueing of scripts and styles.  Make sure to uniquely name your constants and function names.

Once you customize your module, drop it in the plugin/theme of your choice, then requie the `init.php` file and voila.
