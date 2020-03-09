---komentaras

--kursime nauja db hospital2
CREATE DATABASE hospital2;

use hospital2;

CREATE TABLE doctors (
  id int       AUTO_INCREMENT    PRIMARY KEY NOT NULL,
  name varchar(60)     NOT NULL,
  lastname varchar(60)    NOT NULL,
  area varchar(15)    NOT NULL
);
show tables;


INSERT INTO doctors
VALUES(NULL, "TIM", "Logan","A1");
INSERT INTO doctors
VALUES(NULL, "Paul","LEO","A3");
INSERT INTO doctors
VALUES(NULL,"Ona", "Onute", "B1");
INSERT INTO doctors
VALUES(NULL, "Lite", "Rene", "Z1");
INSERT INTO doctors
VALUES(NULL,"Koris","Pitas", "A1");

SELECT * FROM doctors;

CREATE TABLE patients (
ID int     AUTO_INCREMENT   PRIMARY KEY NOT NULL,
name varchar(60)     NOT NULL,
lastname varchar(60)    NOT NULL,
doctor_id int    NOT NULL
);

INSERT INTO patients
VALUES (NULL, "Mark", "JOhn", 2);
INSERT INTO patients
VALUES (NULL, "Tom","Karlos", 2);
INSERT INTO patients
VALUES (NULL, "Aris", "Tiedo", 1);
INSERT INTO patients
VALUES (NULL,"Tom","Kori", 3 );
INSERT INTO patients
VALUES (NULL,"Co","Jo", 1);
INSERT INTO patients
VALUES (NULL,"Tom","Marco", 5 );
INSERT INTO patients
VALUES (NULL,"Phil","Joli", 4);

SELECT * FROM patients;


--redagavimas:
UPDATE patients SET name ="Toom", lastname = "Karlos"
                            WHERE id = 2
                            LIMIT 1;

-- CREATE TABLE img (
-- ID int  AUTO_INCREMENT   PRIMARY KEY NOT NULL,
-- name varchar(255)     NOT NULL,
-- patient_id int    NOT NULL
-- );

-- INSERT INTO img
-- VALUES (NULL, "1", "foto1.jpg" , 3);
-- INSERT INTO img
-- VALUES (NULL, "2", "222.png" , 4);
-- INSERT INTO patients
-- VALUES (NULL, "3", "foto22.gif", 3);
-- INSERT INTO patients
-- VALUES (NULL, "4", "1.jpg" , 1 );
--
-- SELECT * FROM img;


SELECT * FROM patients
WHERE lastname LIKE "%o" OR lastname LIKE "%i";

SELECT doctors FROM doctors
WHERE lastname = "pitas";
SELECT doctors.name, patients.name FROM doctors, patients

-- uzduotis:
-- 0. istrinti paskutine nuotrauka
DELETE FROM patients WHERE name = "Phil";
-- 0. Pakeisti Litos pavarde i Litaitė
UPDATE doctors SET name = "Lite" , lastname = "Litaite"
WHERE id = 2
LIMIT 1;
-- 1. ISVESTI SURIKIUOTUS GYTYTOJUS PAGAL pavarde
SELECT lastname
FROM doctors
ORDER BY lastname;
-- 2. ISVESTI GYTYTOJUS kuriu id mazesnis uz 3
-- < > = ==    <> != AND OR NOT
SELECT * FROM doctors WHERE id < 3;
-- 3. ISVESTI paciantus kuriu vardas is raides "A"
SELECT * FROM patients WHERE name LIKE "a%";
-- UZDUOTIS  1.1  (SELECT) : ISVESTI 4 IR 5 gydytoja
SELECT * FROM doctors WHERE id BETWEEN 4 AND 5;
-- UZDUOTIS  1.2  (SELECT) : ISVESTI visus gydytojus, kuriu vardas: 'Tim' ARBA pavarde 'Leo'
SELECT * FROM doctors WHERE name = "Tim" OR lastname = "Leo";
-- UZDUOTIS  1.3  (SELECT): isvesti visus gydytojus, kuriu 'id' mazesnis uz 4
SELECT * FROM doctors WHERE id <4;
-- UZDUOTIS  1.4  (SELECT): isvesti visus gydytojus, bet ne 'Ona'
SELECT * FROM doctors WHERE name != "Ona";
-- UZDUOTIS  1.5  (SELECT): isvesti visus paciantus, surikiuotus pagal varda
SELECT * FROM patients ORDER BY name;
-- // UZDUOTIS 2: pervadinti gydytoja 'Lita' i 'Litas'
UPDATE doctors SET name = "Litas"
WHERE lastname = "Litaite"
LIMIT 1;



-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Makalas (suradus pagal id)
UPDATE doctors SET lastname = "Makalas"
WHERE id = 10
LIMIT 1;
-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Paulaitis (suradus pagal id ir pavarde)
UPDATE doctors SET lastname = "Paulaitis"
WHERE id = 10
LIMIT 1;
-- UZDUOTIS (select LIKE)- paimti visus gydytojus, kuriu pavarde parsideda is "L" raides
SELECT * FROM doctors
WHERE lastname LIKE "l%"
-- uzduotis 1: istrinti gydytoja "Koris";
DELETE FROM doctors WHERE name = "Koris";
--uzduotis 3.1: visu pacientu, kuriu vardas yra "Tom" -  varda pakeisti i "Tomas"
UPDATE patients SET name = "Tomas" WHERE name = "Tom";
