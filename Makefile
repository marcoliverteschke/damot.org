local:
	rsync -aP wp-config.php /Applications/MAMP/htdocs/
	rsync -aP --delete themes/ /Applications/MAMP/htdocs/wp-content/themes/

install:
	rsync -aP --delete themes/ damot.org@damot.org:htdocs/wp-content/themes/
	rsync -aP plugins/ damot.org@damot.org:htdocs/wp-content/plugins/
	rsync -aP wp-config.php damot.org@damot.org:htdocs/
