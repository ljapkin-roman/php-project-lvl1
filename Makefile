install:
		composer install
lint:
		composer run-script phpcs -- --standard=PSR12 src bin
path:
		export PATH=$(PATH):~/.config/composer/vendor/bin
