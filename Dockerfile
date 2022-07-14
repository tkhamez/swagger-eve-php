# docker build --tag swagger-eve-php .
# docker run -it --mount type=bind,source="$(pwd)",target=/app --workdir /app swagger-eve-php /bin/sh

FROM php:8.1-alpine
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
