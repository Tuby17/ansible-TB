FROM ubuntu:18.04

RUN apt-get update && apt-get install -y openssh-server sudo
RUN mkdir /var/run/sshd
RUN useradd -m -d /home/balint balint
RUN echo 'balint:theTuboly17' | chpasswd
RUN usermod -s /bin/bash balint

RUN sed 's@session\s*required\s*pam_loginuid.so@session optional pam_loginuid.so@g' -i /etc/pam.d/sshd
ENV NOTVISIBLE "in users profile"
RUN echo "export VISIBLE=now" >> /etc/profile

EXPOSE 22
CMD ["/usr/sbin/sshd", "-D"]

RUN touch /home/balint/catme.txt
RUN echo "flag{ZászlóLászló}" >> /home/balint/catme.txt
RUN chown root:root /home/balint/catme.txt
RUN chmod 400 /home/balint/catme.txt
RUN echo 'balint ALL=NOPASSWD: /bin/cat, /usr/bin/whoami' >> /etc/sudoers
