SilverStripe 3 HTML OptionsetField
===================================

Overview
--------------

This is the start of a SilverStripe 3 module for creating radio button fields with a more custom appearance.

At the moment it's only tested with images in place of radio buttons/labels but will ideally take whole HTML blocks.




Maintainer Contacts
-------------------
*  Nathan Cox (<nathan@flyingmonkey.co.nz>)


Requirements
------------
* SilverStripe 3.0+


Installation Instructions
-------------------------

1. Place the files in a directory called htmloptionsetfield in the root of your SilverStripe installation
2. Visit yoursite.com/dev/build to rebuild the database


Documentation
-------------
[GitHub Wiki](https://github.com/nathancox/silverstripe-htmloptionsetfield/wiki)


Example code:
```php
<?php

		// set up a field to pick an icon for this page
		$icons = array(
			'user',
			'user-female',
			'user-white',
			'user-white-female',
			'user-yellow',
			'user-yellow-female',
			'user-green',
			'user-green-female',
		);

		$makeOption = function($iconName) {
			return "<img src='mysite/images/treeicons/" . $iconName . ".png' alt='' />";
		};

		$options = array();
		foreach($icons as $iconName) {
			$options[$iconName] = $makeOption($iconName);
		}

		$fields->addFieldtoTab('Root.Settings', $iconField = new HTMLOptionsetField(
			'Icon', 
			'Tree icon',
			$options
		));
```



Known Issues
------------
[Issue Tracker](https://github.com/nathancox/silverstripe-htmloptionsetfield/issues)
