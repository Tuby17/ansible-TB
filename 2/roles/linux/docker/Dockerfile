FROM vcatechnology/linux-mint
ENV TZ=Europe/Budapest
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone
RUN apt-get update && apt-get upgrade -y && apt-get install -y netcat
RUN useradd -m -d /home/balint balint
RUN echo 'balint:theTuboly17' | chpasswd
RUN usermod -s /bin/bash balint

EXPOSE 22
COPY --chown=balint:balint entrypoint.sh /root/entrypoint.sh
RUN echo "flag{b3h1nd3_blu3_3y3s}" >> /home/balint/flag.txt
ENTRYPOINT ["bash", "-c", "/root/entrypoint.sh"]
