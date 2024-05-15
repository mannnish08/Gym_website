# Gym_website
IMMERSE FITNESS

This website contain data of the gym and its a online representation of the gym

This is my 3rd Year College Project :)


version: '3.8'

services:
  traefik:
    image: traefik:v2.5
    command:
      - "--api.insecure=true"
      - "--providers.docker=true"
    ports:
      - "80:80"
      - "8080:8080"
    volumes:
      - /var/run/docker.sock:/var/run/docker.sock

  backend1:
    image: nginx:alpine
    labels:
      - "traefik.enable=true"
      - "traefik.http.routers.backend1.rule=Host(`mansih.localhost`)"
    volumes:
      - ./myweb:/usr/share/nginx/html/

  backend2:
    image: httpd:alpine
    labels:
      - "traefik.enable=true"
      - "traefik.http.routers.backend2.rule=Host(`backend2.localhost`)"
    volumes:
      - ./myweb2:/usr/local/apache2/htdocs/

