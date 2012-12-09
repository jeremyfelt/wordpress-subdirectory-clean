WordPress Subdirectory Clean
============================

Provides a clean initial structure for setting up WordPress (trunk) in a subdirectory with a separate content directory. Once this repository is cloned, the origin can be removed and your repo can live on elsewhere as it changes.

[WordPress][1] is provided via submodule from [github.com/WordPress/WordPress][2], which tracks the [WordPress SVN repository][3] and updates every 15 minutes.

Getting started is easy.

1.    Decide which directory this site will live in.
2.    Clone this repo to that directory
    -    git clone git://github.com/jeremyfelt/wordpress-subdirectory-clean.git my-new-wordpress-site
3.    Initialize and update the WordPress submodule in the repository
    -    cd my-new-wordpress-site
    -    git submodule init
    -    git submodule update
4.    Configure your HTTP server to point to your _my-new-wordpress-site_ directory
5.    Add a new database to MySQL and setup user permissions
6.    Configure and move required files to their proper names
    -    mv configure-gitignore .gitignore
    -    mv configure-local-config.php local-config.php
    -    mv configure-wp-config.php wp-config.php
7.    Go to your new domain and install WordPress

Then put it under version control!

1.    Stop tracking this clone, there's no need to.
    - git remote rm origin
2.    Create a new repository, if you want, on another remote
    - git remote add my-new-git-remote-url
3.    Update your WordPress submodule regularly
    - git submodule update
4.    New plugins and themes are installed in _my-new-wordpress-site/content/_
5.    Use this to keep your local and production environments in tune.


[1]: http://wordpress.org
[2]: https://github.com/WordPress/WordPress
[3]: http://core.svn.wordpress.org