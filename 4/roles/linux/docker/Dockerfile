FROM ubuntu:18.04

RUN apt-get update && apt-get install -y openssh-server
RUN mkdir /var/run/sshd
RUN useradd -m -d /home/luca luca
RUN echo 'luca:the77Magic' | chpasswd
RUN usermod -s /bin/bash luca

# SSH login fix. Otherwise user is kicked off after login
RUN sed 's@session\s*required\s*pam_loginuid.so@session optional pam_loginuid.so@g' -i /etc/pam.d/sshd
ENV NOTVISIBLE "in users profile"
RUN echo "export VISIBLE=now" >> /etc/profile

EXPOSE 22
CMD ["/usr/sbin/sshd", "-D"]

RUN echo "flag{th3_sl0v3nian_m4g1c}" | base64 >> /home/luca/nagyon-titkos-adta
RUN chown luca:luca /home/luca/nagyon-titkos-adta
RUN chmod 444 /home/luca/nagyon-titkos-adta
