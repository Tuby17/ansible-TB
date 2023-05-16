Az inventory fájlokat mindig a vezérleni kívánt gép elérési útjával kell ellátni.
Az ansible.cfg tartalmazza, hogy milyen invetory fájlt használunk és és a privát kulcsunk elérési útját.


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
   ssh-n keresztül be kell jutni meg kell keresni a catme.txt-t ami a felhasználó home könyvtárában van de a fájl a root tulajdona a jogosultságok 600 ezért sudo-t kell használni
   flag{ZászlóLászló}

8. Parancssori paraméter
   be kell jutni a rendszerbe ahol a flag egy futó folyamat parancssori paramétere 
   flag{n3ed5_S0mb0dy_T0_L0v3}
   
9.chmod
  bejutás után meg kell szerezni a user home könyvtárában lévő fájlból a flag-et ami Base64 ben van kódolva
  flag{L0v1ng_1n_3l3v4t0r}
  
10. $PATH
     Bejutás után meg kell szerezni a flag-et ami a $PATH változóban van 
    flag{H3r3_1_6o_4g41n}
