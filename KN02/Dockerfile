# benutzt das Nginx Image als basis
FROM nginx 
# setzt das Arbeitsverzeichnis
WORKDIR /usr/share/nginx/html
# der Inhalt des ersten Paths vom Host wird zum zweiten Path kopiert
COPY helloworld.html .  
# erlaubt externen Zugriff auf den Server
EXPOSE 80 