# d7tod8_multilingual_node_migration
This is an example of D7 to D8 multilingual node migration.

In this repository you will find working demo of multilingual node migrattion from drupal 7 to drupal 8.
We have used English and Hindi languages to demonstrate this, and article node type for node migration.

Here you will find 2 code base with DB.

1. Drupal 7 codebase is named as drupal7 and it has a database drupa.sql inside drupal7/ folder.
2. Drupal 8 codebase is names as drupal8 and it has a database d8_migrate.sql inside drupal8/ folder.

Both the codebase has all the required modules for multilingual support and database has all the related settings.

So, you can directly setup these code base and check see the migration happening.

Here, in drupal8/modules/custom you will find a custom written module "node_migrate". This module has all the code for multilingual node migrate functionality.

Hope this helps!
