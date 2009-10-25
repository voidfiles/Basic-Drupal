Basic Drupal
============

I'll I am trying to do is so that I don't have to re-invent the wheel every time I want to do a Drupal install. I have found that I am constantly downloading that same bunch of modules. I imagine this will work something like the following. 

    git clone git://github.com/voidfiles/Basic-Drupal.git basic-drupal;
    cd basic-drupal;
    git branch mybranch; # So you can pull from master with out screwing up your stuff
    git checkout mybranch;
    cd sites;
    cp -fR default example.com;
    cd example.com;
    mv default.settings.php settings.php;
    vi settings.php;
    cd ../../../;
    ln -s example.com basic-drupal;
    
Then go to example.com and you should be able do an install from there. You will immediately have a bunch of modules installed.