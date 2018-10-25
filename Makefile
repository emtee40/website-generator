site: index.html about.html projects.html privacy.html
	cp -r assets static/
index.html: index.php
	mkdir -p static
	php index.php > static/index.html
about.html: about.php
	mkdir -p static
	php about.php > static/about.html
projects.html: projects.php
	mkdir -p static
	php projects.php > static/projects.html
privacy.html: privacy.php
	mkdir -p static
	php privacy.php > static/privacy.html
	
clean:
	rm -rf static
