FROM ubuntu:18.04
ENV TZ=Europe/Budapest
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone
RUN apt-get update -q -y && apt-get install -q -y --no-install-recommends apache2 php openssh-server
RUN mkdir /var/run/sshd
RUN useradd -m -d /home/balint balint
RUN echo 'balint:theTuboly17' | chpasswd
RUN usermod -s /bin/bash balint

RUN sed 's@session\s*required\s*pam_loginuid.so@session optional pam_loginuid.so@g' -i /etc/pam.d/sshd
ENV NOTVISIBLE "in users profile"
RUN echo "export VISIBLE=now" >> /etc/profile

EXPOSE 8010
RUN useradd -m -d /home/webserver webserver
COPY --chown=webserver:webserver entrypoint.sh /root/entrypoint.sh
COPY --chown=webserver:webserver 000-default.conf /etc/apache2/sites-available/000-default.conf
COPY --chown=webserver:webserver ports.conf /etc/apache2/ports.conf
ADD --chown=webserver:webserver web_content /var/www/html/
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 700 /var/www/html
RUN rm /var/www/html/index.html
RUN echo "flag{n0th1ng_but_4_g00d_t1m3}" > /home/balint/flag.txt
ENTRYPOINT ["bash", "-c", "/root/entrypoint.sh"]
