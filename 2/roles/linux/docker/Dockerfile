FROM ubuntu:18.04

RUN apt-get update && apt-get install -y netcat libcap2-bin
RUN useradd -m -d /home/balint balint
RUN echo 'balint:theTuboly17' | chpasswd
RUN usermod -s /bin/bash balint

EXPOSE 22
COPY --chown=balint:balint entrypoint.sh /root/entrypoint.sh
RUN echo "flag{b3h1nd3_blu3_3y3s}" >> /home/balint/flag.txt
ENTRYPOINT ["bash", "-c", "/root/entrypoint.sh"]
