# Simble #

This is a simple Blog script where a user is able to add, edit, delete blog posts. The posts are displayed on a frontpage. Each post can be read on a separate page.
The script was originally developed for performance tests in a bachelor thesis.


## Install ##

Edit "blog/conf.example.php" and rename it to blog/conf.php", then execute "install.php".


## Opportunities for Improvement ##

Further considerations for extending the blog script:

* [ ] Update article: Success message (FlashMessenger, $this->message->add('...'); with sessions), Colors, Tell don't Ask!
* [ ] New article: on error fill form
* [ ] Bench Area in <body>
* [ ] Table names and prefix in config
* [ ] Modified field: on update current DATETIME
* [ ] Slug: all lowercase
* [ ] 404 Page
* [ ] Better install script: Auto create config
* [ ] SQLite
* [ ] Blogusers from database
* [ ] Comments
* [ ] Lang Lines
* [ ] Links without .htaccess
