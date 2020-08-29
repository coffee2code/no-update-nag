# Changelog

## _(in-progress)_
* Change: Restructure unit test file structure
    * New: Create new subdirectory `phpunit/` to house all files related to unit testing
    * Change: Move `bin/` to `phpunit/bin/`
    * Change: Move `tests/bootstrap.php` to `phpunit/`
    * Change: Move `tests/` to `phpunit/tests/`
    * Change: Rename `phpunit.xml` to `phpunit.xml.dist` per best practices
* Change: Note compatibility through WP 5.5+

## 1.4.8 _(2020-05-24)_
* New: Add TODO.md and move existing TODO list from top of main plugin file into it (and add to it)
* Change: Use HTTPS for link to WP SVN repository in bin script for configuring unit tests (and delete commented-out code)
* Change: Note compatibility through WP 5.4+
* Change: Update links to coffee2code.com to be HTTPS

## 1.4.7 _(2019-12-03)_
* Change: Update unit test install script and bootstrap to use latest WP unit test repo
* Change: Note compatibility through WP 5.3+
* Change: Update copyright date (2020)

## 1.4.6 _(2019-04-01)_
* New: Add unit tests
* New: Add CHANGELOG.md file and move all but most recent changelog entries into it
* Change: Minor tweak to extended plugin description
* Change: Note compatibility through WP 5.1+
* Change: Update copyright date (2019)
* Change: Update License URI to be HTTPS
* Change: Split paragraph in README.md's "Support" section into two

## 1.4.5 _(2018-04-29)_
* New: Add README.md
* Change: Add GitHub link to readme
* Change: Note compatibility through WP 4.9+
* Change: Update copyright date (2018)

## 1.4.4 _(2017-02-11)_
* Change: Minor code and code documentation reformatting (spacing)
* Change: Minor readme.txt tweaks
* Change: Note compatibility through WP 4.7+
* Change: Update copyright date (2017)

## 1.4.3 _(2016-03-18)_
* New: Add LICENSE file.
* New: Add empty index.php to prevent files from being listed if web server has enabled directory listings.
* Change: Note compatibility through WP 4.4+.
* Change: Update copyright date (2016).

## 1.4.2 _(2015-08-20)_
* Update: Note compatibility through WP 4.3+

## 1.4.1 _(2015-02-25)_
* Reformat plugin header
* Change documentation links to wp.org to be https
* Note compatibility through WP 4.1+
* Update copyright date (2015)
* Add plugin icon

## 1.4 _(2014-01-30)_
* Remove nag from network_admin_notices
* Minor documentation improvements
* Note compatibility through WP 3.8+
* Update copyright date (2014)
* Change donate link
* Add assets directory to plugin repository checkout
* Add screenshot
* Add banner

## 1.3
* Add check to prevent execution of code if file is directly accessed
* Re-license as GPLv2 or later (from X11)
* Add 'License' and 'License URI' header tags to readme.txt and plugin file
* Remove ending PHP close tag
* Minor code reformatting (spacing)
* Note compatibility through WP 3.5+
* Update copyright date (2013)

## 1.2.1
* Note compatibility through WP 3.3+
* Add link to plugin directory page to readme.txt
* Update copyright date (2012)

## 1.2
* Add function `c2c_no_update_nag()`
* Hook `c2c_no_update_nag()` into `admin_init` action rather than use `create_function()` (as was done prior to v1.1)
* Note compatibility through WP 3.2+
* Minor code formatting changes (spacing)
* Fix plugin homepage and author links in description in readme.txt

## 1.1.3
* Remove header documentation from plugin file (all that info and more are in the readme.txt)
* Add package info to top of plugin file
* Add link to plugin homepage to description in readme.txt

## 1.1.2
* Note compatibility through WP 3.1+
* Add Upgrade Notice section to readme.txt
* Update copyright date (2011)

## 1.1.1
* Update readme.txt, including adding Changelog section
* Note compatibility through WP 2.9+, 3.0+
* Update copyright date

## 1.1
* Remove the sole function `no_update_nag()` and embed its functionality directly in `add_action()` call via `create_function()`
* Hook `admin_init` instead of `admin_head`, which causes a drop in support for WP2.3
* Note compatibility with WP 2.8+
* Tweak readme.txt

## 1.0.1
* Note compatibility with WP 2.6+ and 2.7+
* Update copyright date
* Minor tweaks to readme.txt;

## 1.0
* Initial release
