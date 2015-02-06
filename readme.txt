=== Bimbler Exclude Posts ===
Contributors: paulperkins
Tags: bimblers, posts, exclude
Requires at least: 3.1
Tested up to: 4.1
Stable tag: 1.0.0
License: GPLv2 or later

Excludes selected posts from the main loop. Filters by post category.

== Description ==

The Bimblers Exclude Posts plugin is used to exclude selected post categories from the main loop.

This might be useful if you use WordPress posts to author content which should not be listed on the front page,
but you still want to utilise the features of a WordPress post type and do not want to go to the effort of 
setting up custom post types. 

At this point in time, the post categories excluded by the plugin are hard-coded in the main class file. A future
version of the plugin will include a configuration GUI.

== Installation ==

1. Create a new directory within your `/wp-content/plugins/` directory. We'd recommend `bimbler-exclude-posts`.
1. Upload `bimbler-exclude-posts.php` and `class-bimbler-exclude-posts.php` to the `/wp-content/plugins/bimbler-exclude-posts` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= How do I change the posts to exclude? =

Open class-bimbler-exclude-posts.php using your favourite editor (or in the plugin editor within WordPress) and
examine the `exclude_category` method. Here you'll find `$query->set(...`. The comma-separated list are the
post categories (prefixed with '-' to imply 'remove') which will not be displayed.

To determine which categories are suitable for you, navigate to the Posts -> Categories menu within the
WordPress GUI and hover your mouse over each of the categories listed. The URL displayed in your browser's
status bar will contain something along the lines of `yourblog.com/wp-admin/edit-tags.php?...tag_id=nnn...`.
'nnn' is the ID you're interested in.

Amend the list to the categories you'd like to exclude and save the file. The post list on the main page of 
your blog should now no longer show posts which have the selected categories set.

= What is / are Bimblers? =

The Bimblers is a cycling group in Brisbane. I decided I'd use WordPress to create a website for the group, and 
developed a range of plugins to implement the functionality I needed.

I take the philosophy of creating simple, specific plugins to address a particular issue, rather than implementing
an ever-convoluting code-base.

Some of the plugins are generic, and have been implemented over and over by others, but I wanted to create clean,
standalone plugins rather than re-using and adapting others wherever possible. This decision was largely to aid
in learning how to write WordPress plugins other than any other reason.  

= What other plugins do you have? =

Please have a look at http://bimblers.com/plugins/ to see if anything else is of use to you.

== Changelog ==

= 1.0.0 =
*Release Date - 1st February, 2015*

* Initial revision.

