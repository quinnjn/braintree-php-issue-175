.PHONY: run build

test: build
	docker run -it -v="$(PWD):/braintree-php" --net="host" braintree-php-composer-test /bin/bash -l -c "\
		./build-composer.sh && ./test.sh"

build:
	docker build -t braintree-php-composer-test .
