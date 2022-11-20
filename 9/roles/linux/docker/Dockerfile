FROM ubuntu:18.04

RUN apt-get update && apt-get install -y openssh-server
RUN mkdir /var/run/sshd
RUN useradd -m -d /home/balint balint
RUN echo 'balint:theTuboly17' | chpasswd
RUN usermod -s /bin/bash balint

# SSH login fix.
RUN sed 's@session\s*required\s*pam_loginuid.so@session optional pam_loginuid.so@g' -i /etc/pam.d/sshd
ENV NOTVISIBLE "in users profile"
RUN echo "export VISIBLE=now" >> /etc/profile

EXPOSE 22
CMD ["/usr/sbin/sshd", "-D"]

RUN echo "flag{L0v1ng_1n_3l3v4t0r}" | base64 >> /home/balint/sensitive-data
RUN chown balint:balint /home/balint/sensitive-data
RUN chmod 444 /home/balint/sensitive-data
