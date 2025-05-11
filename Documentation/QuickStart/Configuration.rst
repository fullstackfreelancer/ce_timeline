.. _quickConfiguration:

===================
Quick configuration
===================

Include TypoScript
==================

It is necessary to include at least the basic TypoScript provided by this
extension.

Option 1: Using the Site Configuration for the whole site
=========================================================

Go module :guilabel:`Sites` and chose your site. Open the Site Configuration for the desired site.
Scroll to :guilabel:`Sets for this Site` and add one of the available items, like for instance :guilabel:`Timeline Default`.

.. include:: /Images/Screenshots/SiteConfiguration.rst.txt

Option 2: Using a Template record for specific pages/subpages
=============================================================

Click on :guilabel:`Site Management > TypoScript` in the Backend. Choose the page where you want to include the Timeline element.
Click on :guilabel:`Create an additional TypoScript record`. Then click on :guilabel:`Edit the whole TypoScript record`. Go to the tab
:guilabel:`Advanced Options` and scroll to the section :guilabel:`Include TypoScript sets`. It's important to include the item :guilabel:`Timeline - Content Element`
and then one of the available styles, like :guilabel:`Timeline - Style: Default` etc.

If you want the lightbox to work as well, include the :guilabel:`Timeline - JavaScript` item as well.
