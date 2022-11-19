FROM ubuntu:18.04

RUN apt-get update && apt-get install -y vsftpd
RUN useradd -m -d /home/balint balint
RUN echo 'balint:theTuboly17' | chpasswd

EXPOSE 21
COPY --chown=balint:balint entrypoint.sh /root/entrypoint.sh
COPY --chown=root:root vsftpd.conf /etc/vsftpd.conf
RUN echo "flag{b4d_r3put4t10n}" >> /home/balint/flag
RUN mkdir /tmp/empty
RUN chmod 555 /tmp/empty
RUN mkdir /var/ftp
RUN echo "balint:theTuboly17" | base64 >> /var/ftp/.hidden_creds
ENTRYPOINT ["bash", "-c", "/root/entrypoint.sh"]
