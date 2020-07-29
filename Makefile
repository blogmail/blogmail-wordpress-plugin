CURPATH := $(abspath $(lastword $(MAKEFILE_LIST)))
CURDIR := $(notdir $(patsubst %/,%,$(dir $(CURPATH))))

lint:
	./vendor/bin/phpcbf --standard=phpcs.ruleset.xml
	./vendor/bin/phpcs --standard=phpcs.ruleset.xml

setup-tests:
	bin/install-wp-tests.sh wordpress_test root '' localhost latest

test:
	phpunit
	# yarn test

run:
	docker-compose up --build -d
	# yarn run start

reset:
	docker-compose down --volumes

rebuild:
	reset
	docker-compose build --no-cache

install:
	docker exec ${CURDIR}_wordpress_1 wp core install --url='localhost:8888' --title='Example' --admin_user='admin' --admin_password='admin' --admin_email='admin@example.com'

activate:
	docker exec ${CURDIR}_wordpress_1 wp plugin activate blogmail

# js:
	# yarn run build

dist:
	# yarn run build
	rm -f blogmail.zip
	zip -r blogmail.zip blogmail
