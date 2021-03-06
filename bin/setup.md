## Run example in Docker:

```
# Install composer (locally)

docker run -it --rm --name pdfmerge \
 -v "$PWD":/usr/src/myapp \
 -w /usr/src/myapp jurosh/php \
 php ./bin/composer-setup.php \
 --install-dir=bin --filename=composer

# Install dependencies

docker run -it --rm --name pdfmerge \
 -v "$PWD":/usr/src/myapp \
 -w /usr/src/myapp jurosh/php \
 php bin/composer install

# Run example

docker run -it --rm --name pdfmerge \
 -v "$PWD":/usr/myapp \
 -w /usr/myapp/example jurosh/php \
 php example.php
```