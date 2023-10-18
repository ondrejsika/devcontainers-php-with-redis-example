FROM mcr.microsoft.com/devcontainers/php:1-8-bookworm
RUN curl -fsSL https://raw.githubusercontent.com/sikalabs/slu/master/install.sh | sh
RUN pecl install redis && docker-php-ext-enable redis
