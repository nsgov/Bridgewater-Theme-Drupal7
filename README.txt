Copyright (C) 2011 Government of Nova Scotia
Author: mclaugkl (mclaugkl@gov.ns.ca)
http://www.gov.ns.ca

Last Updated: January 28th, 2013 by mclaugkl@gov.ns.ca

This is the Province of Nova Scotia Common Look and Feel Drupal Theme for Drupal 7.x


-----------------------------------------------------------------------

TO INSTALL:

1.	Upload this folder and its contents into /sites/all/themes

2.	Enable and set as Default under /admin/build/themes

3.	Go to Structure -> Blocks and +Add Block.  Set the description to "Footer Menus" and 
	set the Block title to <none> (this will hide the block title), and paste in the 
	contents of the block-footer-menus.html file into the body field.  
	
4.	Assign your new block to the Footer Menus region, then Save.
	
-----------------------------------------------------------------------

NOTES:

The main navigation and search form are hard-coded into the template so these 
can not be replaced or changed.

Since there is a high probability that the links in the footer menu will change over time, 
our solution for now is to dump the HTML for all that into a block that you will assign to 
the region Footer Menus.  

This is less annoying that going through and editing the menu items for six 
different Drupal menus. However, if you have a suggestion for how we can 
manage the footer data across our various sites in a simpler way please 
send us your suggestions.

This theme is HTML5 with RDF support.  If you have the RDF module (core in 7.x)
turned on, you will notice that your page won't validate with the HTML5 
performance checker (as they say: "be aware that it may be unreliable, or not 
perfectly up to date with the latest development of some cutting-edge 
technologies"), which isn't up to date enough to validate all the extra
markup.

The logo image that appears on this theme is the property of the 
Province of Nova Scotia and intended for official use only.

If you have any questions or problems with this theme please email me 
and I'll get you sorted out.

-----------------------------------------------------------------------

I built this theme based on the starter theme Framework by 
André Griffin (http://d7.andregriffin.com)
Its a great starter theme - I highly recommend it:
http://drupal.org/project/framework

Modified and redistributed under the terms of the GNU 
General Public License as published by the Free Software Foundation.
