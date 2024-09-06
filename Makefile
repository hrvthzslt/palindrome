run-test:
	docker run --rm --volume $(shell pwd):/app composer test
