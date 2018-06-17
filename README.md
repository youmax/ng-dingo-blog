# Build Composer image
install docker on your machine, then run command 
```
docker build . -t composer/blog
```
you can see the image via 'docker images'
```
REPOSITORY          TAG                 IMAGE ID            CREATED             SIZE
composer            latest              a59ba324c7b2        3 days ago          141MB
composer                 blog               f94a7bbcc361        10 days ago         352MB
```

# Composer Usage
Run composer install in your project by mount the folder into docker image.
```
docker run --rm -v $(pwd):/app composer/blog install
```
Interact with docker image
```
docker run --rm -it composer:blog /bin/bash
```