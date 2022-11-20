A fealdatok telepítéséhez kell egy 1  ansible parancsokat futtató környezet és egy a feladatnak helytadó host pl.: virtuális gép. A két eszköz között ssh kapcsolatra lesz szükség valamint a vezérlő gép esetében az ansible összes szükséges összetevőjének megléte.
At inventory fájlokat mindig a vezérleni kívánt gép elérési útjával kell ellátni.
Az ansible.cfg tartalmazza, hogy milyen invetory fájlthasználunk és és a privát kulcsunk elérési útját.


1. SQL Injection feladat.
   át kell jutni a loggin felületen sql injectionnel.
   Fut egy apache szerver a 80-as porton egy ubuntu 18.04 docker containerben amiben telepítve van apache2 php és mysql server.
   SQL fájból ki lehet nyerni a felhasználot és a jelszót:
   joe: b1zt0sn3mj0sszr4 (a jelszó az adatbázisban kódolva van MD5-vel)
   flag{s1k3r3s3nm3gf3jt3tt3d!!}

2. Netcat
   Nem fut SSH Netcattel kell halgatózni a 22-es porton és begyüjteni a flag.txt file-t úgy hogy futtatunk egy bash parancsot
   flag{b3h1nd3_blu3_3y3s}

3. WEB fealdat.
   egy weboldalon kell keresgélni hitelesítő adatokat keresve.
   a hitelesítő adatok olyan fájlban vannak ami szerrepel nevesebb wordlist hacker toolokban(ebben álltalános rossz gyakorlatokra alapozva vannak kereső szavak) jelen esetben: remind_password
   tubyadmin:myp4ssw0rd1ss3cure
   flag{n4gyonugy3sgr4tul4l0k!}

4. SSH feladat
   Meg kell szerezni az ssh hozzáférest szabadon választott módon.Az ssh a 6007-es porton fut. Ha ez meg van meg kell keresni egy fájlt amit base64-ben kódoltam.
   user:pass
   luca:the77Magic
   flag{th3_sl0v3nian_m4g1c}

5. SSH feladat Netstat
   Meg kell találni a megfelelő portot Netstat segítségével majd megszerezni a flag-et. A port véletlen szerűen kerül meghatározásra mindig amikor a játék el van indítva.
   flag{b3d_r3put4t10n}
   
6.WEB feladat
  be kell jutni a weboldalra, beloggolni és megszerezni a flag-et X-Forwarded-For a 127.0.0.1-re
  flag{n0th1ng_but_4_g00d_t1m3}
  
7. Sudo (nincs jelszó)
   Challenge is to ssh onto a box and grab the flag in `catme.txt` which is in the user's home directory, BUT the file is owned by root and permissions are 600, so sudo must be used. 
   flag{ZászlóLászló}

8. Parancssori paraméter
   Challenge is to ssh onto a box and grab the flag that is password as a command line parameter in a running process. 
   flag{n3ed5_S0mb0dy_T0_L0v3}
   
9.chmod
  Challenge is to ssh onto a box and decode the base64 encoded flag.
  flag{L0v1ng_1n_3l3v4t0r}
  
10. $PATH
    Challenge is to ssh onto a box and grab the flag that is in the $PATH variable. 
    flag{H3r3_1_6o_4g41n}
