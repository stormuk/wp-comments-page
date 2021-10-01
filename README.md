:warning: This code is not maintained, it is here for reference only 
==========

Storm Separate Comments Page for WordPress
====================================

This plugin generates a separate comments page for each post at /comments/, using the WordPress [rewrite endpoints API](http://make.wordpress.org/plugins/2012/06/07/rewrite-endpoints-api/).

WordPress has some legacy support for [pop-up comments](http://codex.wordpress.org/Function_Reference/comments_popup_link), but the feature is [largely abandoned](http://core.trac.wordpress.org/ticket/4860) and poorly supported. Also, it generates the comments pages at yoursite.com/?comments_popup=XXXX, which is both bad for SEO and will often appear in analytics as one page.

However, displaying a post's comments separately from the main content can be useful in many circumstances. Although less common nowadays, traditionally many blogs chose to feature comments in a pop-up window or lightbox. It can also be desirable for editorial or legal reasons, for caching purposes, or perhaps if you are publishing [individually art-directed posts](http://www.webdesignerdepot.com/2011/03/the-pros-and-cons-of-art-directed-blogs/). You may also find this code handy if you're using WordPress for a non-blog website.

Installation
============

Install the plugin using the Plugins admin panel, or upload the files to your wp-content/plugins directory.

* You will need to customise the generated page by copying the included comments-single.php template into your theme; if you're using this as a pop-up you will want to remove the get_header() and get_footer() calls.
* WordPress doesn't provide a filter hook for comments_link(), so you'll need to manually replace links to your comments to point to the new page at /comments/


To-do
=====

* Implement comment page pagination
* Add configuration options

About
=====

Version: 1.0

Written by [Felix Renicks](http://felixrenicks.com/) for [Storm Consultancy](http://www.stormconsultancy.co.uk/), a web design and development agency based in Bath, UK. If you're looking for [WordPress developers in Bath](http://www.stormconsultancy.co.uk/services/bath-wordpress-developers), then [get in touch](http://www.stormconsultancy.co.uk/contact)!

License
=======

Copyright (c) 2012 Storm Consultancy (EU) Ltd, 
<http://www.stormconsultancy.co.uk/>

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
"Software"), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software. 

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

