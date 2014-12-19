=== InstaTeam Instagram Importer ===
Contributors: spark6
Donate link: Free
Tags: instagram, import, teams, photo, gallery
Author URI: http://www.spark6.com/about-us
Plugin URI: http://wordpress.org/plugins/instateam-instagram-importer
Requires at least: 3.0.1
Tested up to: 3.9.1
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Import a whitelist of Instagram users and hashtagged photos into Wordpress!

== Description ==

**Introduction**

We built this plugin out of necessity. Our agency, [SPARK6](http://www.spark6.com), has a team distributed all over the world. Instagram is the perfect way for us to convey company culture by allowing the team to post photos with the #spark6 hashtag for anything they would like surfaced on the company site.

If you are looking for a plugin that will allow you to consolidate posts from one or more Instagram users on your Wordpress blog then this is the plugin for you!

**Features**

* Ability to import one or more Instagram user accounts (whitelist) into Wordpress as custom Post Types.
* Ability to choose which photos are imported based on one or more #hashtags. You can also import tags without providing a user user whitelist. 
* Ability to map imported photos to a new or pre-existing Post Type of your choosing.
* Workflow - choose the post status of all imported photos. Helpful if you want to review any photos that are imported before they post live to site. There are 3 settings: Auto-post, moderate, or private (must be logged in to view).
* Option to set all imported images to featured images.
* Ability to specify how many photos are imported per Instagram API call (20, 40, 60, 80, 100 or 200).
* Ability to set import frequency (every minute, every hour, twice daily, daily)
* Shortcode supports a custom CSS class name of your own choosing.
* Shortcode supports an optional “photos” parameter that lets you specify the number of images to return in the grid.
* Support for responsive web breakpoints!!! 
* When clicked, individual photos launch into a responsive lightbox (courtesy of Magnific Popup). This is set with the lightbox=yes parameter.
* Ability to unlink account at any time. 

**Demo**

You can view a live demo on our About Us page: http://www.spark6.com/about-us/ - that photo grid at the bottom is powered by this plugin. Be sure to resize the browser to view the different responsive breakpoints!

== Installation ==

**Automatic Install**

By far, the simplest way to install the plugin is to click on “Plugins” then “Add” and type “InstaTeam Instagram Importer” in the search field. 
From here you can click “Install” and have Wordpress automatically install and configure the plugin for you. 

**Manual Install**

1. Login to your Wordpress site and go to the Plugins section of your admin panel.
2. Click the Add New button.
3. Under Install Plugins, click the upload link.
4. Select the plugin zip file (instateam-intagram-importer.x.x.zip) from your computer then click the Install Now button.
5. You should see a message stating that the plugin was installed successfully.

**Configuration**

Once the plugin has been installed navigate to the “Plugins” page and click the “Activate Plugin” link. 
You will now see a new item at the bottom of the left navigation called “InstaTeam”. Click this item to launch the plugin configuration.
Be sure that you are logged into your Instagram account, then click the “Secure Authentication” button located on this page. This will authorize your website to use the Instagram API.  Click the “Authorize” button when prompted by Instagram. Installation is complete once you are redirected back to the main plugin page.


== Screenshots ==

1. This is the default screen you see after you install the plugin. Be sure to sign up for the e-mail list to get important updates about the plugin!
2. This is where you manage your Instagram users and tags.
3. This is where you can set a variety of Instagram import rules.
4. Flexible Shortcodes give you precise control over your responsive photo grids.
5. Unlink your Instagram account at any time.
6. We offer a variety of help options.
7. Desktop grid - demo this live at http://www.spark6.com/about-us
8. Tablet grid - demo this live at http://www.spark6.com/about-us
9. Phone grid - demo this live at http://www.spark6.com/about-us

== Changelog ==

= 1.1 = 
* Added support links under the Help tab. 
= 1.0 =
* Initial release.

== Upgrade Notice ==

We added links to our Help tab. This isn't a critical update, more of a nice to have :)

== Frequently Asked Questions ==

**Can I use an existing post type with this plugin?**

Yes, the plugin supports all custom post types installed on your theme. By default all images are imported into the post type “wpteam_instagram”. You can change this setting on the Import Options tab.

**How can I import all Instagram photos for a particular user?**

If you add a username with no tags, the plugin will attempt to import all public Instagram photos for that user.

**Can I import photos from a private user or private photos?**

Unfortunately the Instagram API does not grant us access to private accounts or photos. If you attempt to add a private user to the whitelist, we will show you a warning that the user is private. All private photos will be skipped when an import occurs.

**The Shortcode is displaying the photo URLs on my page, but not the photos - what's up with that?**

Under Import Options tab > Featured Image? Make sure that "Save imported image as featured image" is checked by default. Don't forget to select Save Settings.

== Credits ==

= SPARK6 Inc. =

We are a collection of people committed to compassion. Our leadership believes in leveraging technology for the reduction of suffering. We offer discounted rates for those also dedicated to social innovation. Please inquire about our special programs if your project involves the environment, poverty, social injustice or education.

View our work samples at: http://www.spark6.com/work-samples

Like us on Facebook: https://www.facebook.com/spark6agency

= Dmitry Semenov =

Special thanks to Dmitry Semenov for allowing us to include his excellent Magnific Popup lightbox script as part of InstaTeam Instagram Importer. Dmitry’s script allows our generated photo-grids to have a cool lightbox feature that is fully responsive!

Download Magnific Popup script form his website:

[http://dimsemenov.com/plugins/magnific-popup/](http://dimsemenov.com/plugins/magnific-popup/)

Learn more by reading his excellent SMASHING Magazine article:

[http://www.smashingmagazine.com/2013/05/02/truly-responsive-lightbox/](http://www.smashingmagazine.com/2013/05/02/truly-responsive-lightbox/)

Thanks again Dmitry!