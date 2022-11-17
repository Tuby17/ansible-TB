A fealdatok telepítéséhez kell egy 1  ansible parancsokat futtató környezet és egy a feladatnak helytadó host pl.: virtuális gép. A két eszköz között ssh kapcsolatra lesz szükség valamint a vezérlő gép esetében az ansible összes szükséges összetevőjének megléte.
At inventory fájlokat mindig a vezérleni kívánt gép elérési útjával kell ellátni.
Az ansible.cfg tartalmazza, hogy milyen invetory fájlthasználunk és és a privát kulcsunk elérési útját.


1. SQL Injection feladat.
   át kell jutni a loggin felületen sql injectionnel.
   Fut egy apache szerver a 80-as porton egy ubuntu 18.04 docker containerben amiben telepítve van apache2 php és mysql server.
   SQL fájból ki lehet nyerni a felhasználot és a jelszót:
   joe: b1zt0sn3mj0sszr4 (a jelszó az adatbázisban kódolva van MD5-vel)
   flag{s1k3r3s3nm3gf3jt3tt3d!!}

2. WEB/SQL feladat.
   az egyi elérhető oldal a emlek.php amely felhívja a figyelmet arra hogy milyen hibák vannak a felületen és hogy van egy fájl amiben szerepel hol található julia felhasználó jelszava.

   Ezek alapján kéne tudni adminer felületen keresztül megszerezni julia jelszavát amivel megtalálható root joggal rendelkező romeo user (Az adminerrrel még nem sikerült dűlőre jutni egy 5let ként találtam hogy könyebb lehet mint adatbázist kreálni )

   Userek:
   julia:Imthe1and2
   romeo: RuleThemAll
   /home/julia/flag1.txt   tartalmaz eegy flagat és romeo jelszavát base64-ben
   ezt követően be lehet jutni hozzá is és neki is van a home mappájában egy flag

   ÍGY MÉG NINCS KÉSZ


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


