CREATE DATABASE tugas;

CREATE TABLE "databuku"(
    "id" INT(11) NOT NULL,
    "tanggal" DATE NOT NULL,
    "nama" VARCHAR(250) NOT NULL,
    "email" VARCHAR(250) NOT NULL,
    "alamat" VARCHAR(250) NOT NULL,
    "pesan" VARCHAR(250) NOT NULL,
    PRIMARY KEY("id")
)