FROM ubuntu:18.04

RUN apt-get update && apt-get install -y openssh-server python python-pip
RUN mkdir /var/run/sshd
RUN useradd -m -d /home/balint balint
RUN echo 'balint:theTuboly17' | chpasswd
RUN usermod -s /bin/bash balint

# SSH login fix.
RUN sed 's@session\s*required\s*pam_loginuid.so@session optional pam_loginuid.so@g' -i /etc/pam.d/sshd
ENV NOTVISIBLE "in users profile"
RUN echo "export VISIBLE=now" >> /etc/profile

EXPOSE 22
RUN pip install SimpleHTTPAuthServer
COPY --chown=root:root entrypoint.sh /root/entrypoint.sh
ENTRYPOINT ["bash", "-c", "/root/entrypoint.sh"]
