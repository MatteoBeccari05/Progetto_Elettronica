create database negozio;

create table negozio.prodotti(
codice int primary key auto_increment,
descrizione varchar(500),
costo double,
quantita int,
data_produzione datetime
);

create table negozio.login(
id int primary key auto_increment,
nome varchar(50),
cognome varchar(50),
email varchar(50),
password varchar(50)
);


insert into negozio.login (nome, cognome, email, password)
values ('Admin', "Amministrazione", "amministrazione@merola.it", '123123')

ALTER TABLE negozio.login ADD COLUMN ruolo VARCHAR(20) DEFAULT 'utente';

UPDATE negozio.login 
SET ruolo = 'admin' 
WHERE email = 'amministrazione@merola.it';



INSERT INTO negozio.prodotti (descrizione, costo, quantita, data_produzione)
VALUES
('Smartphone Samsung Galaxy S23', 899.99, 25, '2024-02-15 10:30:00'),
('Cuffie Sony WH-1000XM5', 349.99, 40, '2024-01-10 09:00:00'),
('Laptop Apple MacBook Air M2', 1199.99, 15, '2023-11-22 13:00:00'),
('Tablet Samsung Galaxy Tab S8', 749.99, 30, '2024-03-01 11:45:00'),
('Smartwatch Garmin Fenix 7', 649.99, 50, '2023-12-25 14:15:00'),
('Televisore LG OLED 55"', 1699.99, 10, '2023-10-05 17:00:00'),
('Fresatrice Bosch POF 1400 ACE', 129.99, 20, '2024-02-18 16:30:00'),
('Macchina da caffè Nespresso Lattissima', 249.99, 45, '2023-08-20 10:00:00'),
('Frigorifero Samsung Side by Side', 1599.99, 12, '2023-09-10 08:30:00'),
('Aspirapolvere Dyson V11', 599.99, 35, '2024-01-02 12:00:00'),
('Cuffie Bose QuietComfort 45', 329.99, 28, '2023-12-15 14:00:00'),
('Canon EOS 90D DSLR', 1399.99, 22, '2023-11-10 09:30:00'),
('Sony PlayStation 5', 499.99, 60, '2023-12-30 18:00:00'),
('Xbox Series X', 499.99, 50, '2023-12-12 13:30:00'),
('Macbook Pro 16" M1 Pro', 2499.99, 18, '2023-09-25 16:45:00'),
('Monitor Dell U2723QE 27"', 589.99, 42, '2023-11-05 11:00:00'),
('Tastiera meccanica Corsair K95', 179.99, 30, '2024-02-10 12:45:00'),
('Mouse Logitech MX Master 3', 99.99, 50, '2023-10-15 10:00:00'),
('Videocamera GoPro Hero 11 Black', 399.99, 20, '2024-03-10 15:30:00'),
('Smartphone iPhone 14 Pro', 1099.99, 18, '2023-11-20 10:15:00'),
('Smartphone Google Pixel 7', 599.99, 24, '2024-01-05 14:30:00'),
('Frullatore Vitamix 5200', 499.99, 15, '2023-09-12 17:30:00'),
('Stampante 3D Creality Ender 3', 299.99, 12, '2024-02-28 13:00:00'),
('Macchina fotografica Fujifilm X-T4', 1799.99, 10, '2023-10-22 11:15:00'),
('Router Wi-Fi 6 TP-Link Archer AX6000', 179.99, 28, '2023-11-08 09:45:00'),
('Frigorifero Liebherr CN 4013', 849.99, 8, '2024-02-22 10:30:00'),
('Lavatrice Samsung EcoBubble', 499.99, 33, '2023-12-18 12:45:00'),
('Asciugatrice Bosch Serie 6', 649.99, 17, '2024-03-01 08:30:00'),
('Forno elettrico Electrolux', 349.99, 20, '2023-09-30 14:30:00'),
('Lavastoviglie Whirlpool', 499.99, 25, '2023-08-05 11:00:00'),
('Rasoio elettrico Philips Series 9000', 149.99, 40, '2023-12-01 10:30:00'),
('Scaldabagno Ariston 50L', 249.99, 15, '2023-10-10 16:00:00'),
('Macchina per il pane Kenwood BM450', 149.99, 18, '2024-01-12 11:30:00'),
('Robot da cucina KitchenAid Artisan', 799.99, 22, '2023-08-18 14:45:00'),
('Macchina per sottovuoto FoodSaver', 129.99, 30, '2024-02-12 10:00:00'),
('Aspirapolvere robot iRobot Roomba i7', 799.99, 25, '2023-11-30 09:00:00'),
('Frigorifero Whirlpool WBC 3000', 699.99, 17, '2024-02-20 12:30:00'),
('Set di pentole Tefal Ingenio', 199.99, 35, '2023-07-28 10:45:00'),
('Frullatore Braun Multiquick', 99.99, 50, '2024-03-05 13:15:00'),
('Caffettiera Bialetti Moka Express', 29.99, 45, '2023-12-14 08:00:00'),
('Tostapane Philips Viva', 59.99, 48, '2023-09-01 12:00:00'),
('Macchina per il gelato Cuisinart ICE-100', 299.99, 16, '2023-11-13 11:00:00'),
('Lettore Blu-ray Sony UBP-X800M2', 299.99, 12, '2023-10-18 15:30:00'),
('Mixer a immersione Bosch MSM67170', 59.99, 50, '2024-01-25 10:30:00'),
('Pompa per piscine Bestway Flowclear', 149.99, 18, '2023-08-12 13:00:00'),
('Parioli Pallet Letto Matrimoniale', 499.99, 15, '2024-02-09 10:00:00'),
('Cappa aspirante Faber Elica', 249.99, 25, '2023-07-25 14:00:00'),
('Cameretta bimbo Ikea Kura', 249.99, 20, '2023-10-29 09:30:00');
