FROM php:7.2-apache as builder
COPY . /var/www/html/
WORKDIR /var/www/html/
ARG name=taufan
#ENV env_name $name
#ARG name=taufan
ARG APP_PORT
ENV APP_PORT ${APP_PORT:-8080}
EXPOSE 8080/tcp
RUN useradd -u 8877 taufan
USER taufan

FROM php:7.2-apache
#RUN apk --no-cache add ca-certificates
WORKDIR /var/www/html/
COPY --from=builder /var/www/html/ .
EXPOSE ${APP_PORT}
#ENTRYPOINT ["./var/www/html/"] 