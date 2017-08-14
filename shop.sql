-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 14 Sie 2017, 13:00
-- Wersja serwera: 10.1.25-MariaDB
-- Wersja PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `shop`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(2, 'IBM'),
(3, 'SAMSUNG'),
(4, 'IBM'),
(5, 'LG'),
(6, 'SONY'),
(8, 'TOSHIBA'),
(10, 'SONY'),
(11, 'APPLE'),
(12, 'TOSHIBA');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `p_id` varchar(10) NOT NULL,
  `id_add` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_title` varchar(11) NOT NULL,
  `product_image` varchar(199) NOT NULL,
  `qty` int(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `total_amounts` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `id_add`, `user_id`, `product_title`, `product_image`, `qty`, `price`, `total_amounts`) VALUES
(86, '4', 0, 4, 'APARAT FOT', 'img/imag1.jpg', 1, '34.00', 34),
(87, '19', 0, 19, 'LAPTOP', 'img/aparat3.jpg', 1, '465.00', 465),
(88, '21', 0, 21, 'RTV-AGD', 'img/telefon3.jpg', 1, '4532.99', 4533),
(89, '4', 0, 4, 'APARAT FOT', 'img/imag1.jpg', 1, '33.99', 34),
(90, '19', 0, 19, 'LAPTOP', 'img/aparat3.jpg', 1, '464.99', 465),
(91, '19', 0, 19, 'LAPTOP', 'img/aparat3.jpg', 1, '464.99', 465),
(92, '8', 0, 8, 'RTV-AGD', 'img/aparat5.jpg', 1, '4434.99', 4435),
(93, '3', 0, 3, 'RTV-AGD', 'img/imag1.jpg', 1, '24.00', 24),
(94, '3', 0, 3, 'RTV-AGD', 'img/imag1.jpg', 1, '24.00', 24),
(95, '3', 0, 3, 'RTV-AGD', 'img/imag1.jpg', 1, '24.00', 24),
(96, '3', 0, 3, 'RTV-AGD', 'img/imag1.jpg', 1, '24.00', 24),
(97, '3', 0, 3, 'RTV-AGD', 'img/imag1.jpg', 1, '24.00', 24),
(98, '14', 0, 14, 'APARAT FOT', 'img/imag9.jpg', 1, '123.99', 124),
(99, '3', 0, 3, 'RTV-AGD', 'img/imag1.jpg', 1, '24.00', 24),
(100, '4', 0, 4, 'APARAT FOT', 'img/imag1.jpg', 1, '33.99', 34);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'ELETRONICS'),
(2, 'ODZIEZ DAMSKA'),
(3, 'ODZIEZ MESKA'),
(4, 'MEBLE'),
(5, 'ELETRONICS'),
(6, 'ODZIEZ DAMSKA'),
(7, 'ODZIEZ MESKA'),
(8, 'MEBLE'),
(9, 'SPRZET AUDIO'),
(10, 'GADZETY'),
(11, 'SPRZET RTV'),
(12, 'SPRZET AGD'),
(13, 'SPRZET AUDIO'),
(14, 'GADZETY'),
(15, 'SPRZET RTV'),
(16, 'SPRZET AGD');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_cat`, `product_brand`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(1, 'NIKON DX', 9, 2, '35.00', 'NAJNOWSZY NIKON Z SERII DX', 'img/imag3.jpg', 'NIKON'),
(2, 'MONITOR', 2, 1, '55.00', 'MONITOR WYSOKIEJ ROZDZIELCZOSCI', 'img/imag1.jpg', 'MONITOR'),
(3, 'RTV-AGD', 3, 4, '24.00', '', 'img/imag1.jpg', 'dress'),
(4, 'APARAT FOT', 6, 11, '33.99', '', 'img/imag1.jpg', 'pc'),
(5, 'RTV-AGD', 3, 4, '57.00', '', 'img/imag1.jpg', 'pc'),
(6, 'APARAT FOT', 8, 11, '46.00', '', 'img/imag1.jpg', 'monitor'),
(7, 'APARAT FOT', 6, 9, '75.99', '', 'img/imag2.jpg', 'odziez'),
(8, 'RTV-AGD', 10, 12, '4434.99', '', 'img/aparat5.jpg', 'aparat'),
(9, 'LAPTOP', 11, 9, '343.99', '', 'img/telefon4.jpg', 'telefon'),
(10, 'APARAT FOT', 16, 12, '34.99', '', 'img/imag5.jpg', ''),
(11, 'RTV-AGD', 1, 1, '5656.99', '', 'img/imag6.jpg', ''),
(12, 'APARAT FOT', 1, 2, '34.99', '', 'img/imag7.jpg', ''),
(13, 'APARAT FOT', 2, 2, '6543.99', '', 'img/imag8.jpg', ''),
(14, 'APARAT FOT', 2, 3, '123.99', '', 'img/imag9.jpg', ''),
(15, 'RTV-AGD', 13, 1, '76.99', '', 'img/aparat2.jpg', 'aparat'),
(16, 'LAPTOP', 14, 4, '65.99', '', 'img/imag11.jpg', 'dress'),
(17, 'TELEFON', 15, 1, '23.99', '', 'img/telefon2.jpg', 'telefon'),
(18, 'APARAT FOT', 16, 4, '11.99', '', 'img/telefon10.jpg', 'telefon'),
(19, 'LAPTOP', 17, 3, '464.99', '', 'img/aparat3.jpg', 'aparat'),
(20, 'TELEFON', 1, 4, '3455.99', '', 'img/imag15.jpg', 'pc'),
(21, 'RTV-AGD', 2, 1, '4532.99', '', 'img/telefon3.jpg', 'telefon'),
(22, 'LAPTOP', 3, 2, '45.99', '', 'img/aparat.jpg', 'aparat'),
(23, 'LAPTOP', 4, 2, '5643.99', '', 'img/imag18.jpg', 'pc'),
(24, 'TELEFON', 5, 3, '212.99', '', 'img/imag19.jpg', 'odziez'),
(25, 'RTV-AGD', 7, 1, '21.99', '', 'img/telefon5.jpg', 'telefon'),
(26, 'TELEFON', 8, 4, '3.99', '', 'img/telefon3.jpg', 'telefon'),
(27, '', 9, 1, '64.99', '', 'img/imag1.jpg', 'pc'),
(28, '', 10, 4, '13.00', '', 'img/telefon1.jpg', 'telefon'),
(29, '', 11, 3, '0.00', '', 'img/aparat1.jpg', 'aparat'),
(30, '', 12, 4, '44.99', '', 'img/imag1.jpg', 'pc');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(300) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(1, 'andrzej', 'bajuk', 'ptasiek3003@yahoo.com', 'szpitalna240', '5355555551', '1 maja 46 d/3', 'w?odawa'),
(2, 'andrzej', 'bajuk', 'ptasiek3003@gmail.com', 'szpitalna240', '5355555551', '1 maja 46 d/3', 'w?odawa'),
(3, 'piotrek', 'kowalski', 'ptasiek@gmail.com', '12345', '123456', 'sasa3', 'assa'),
(4, 'Aaa', 'Aaaa', 'ptasiek3003@yahoo.comp', '1234', '81dc9bdb52', '123456', 'assa4'),
(5, 'Aaa', 'Aaaa', 'ptasiek1@yahoo.com', '1234', '81dc9bdb52', '123456', 'assa4'),
(6, 'Aaa', 'Aaaa', 'ptasiek2@yahoo.com', '1234', '81dc9bdb52', '123456', 'assa4'),
(7, 'Asss', 'Bee', 'ptasiek30083@yahoo.com', '123', '202cb962ac', '1223', '332'),
(8, 'Asss', 'Bee', 'ptasiek300t83@yahoo.com', '1234', '81dc9bdb52', '1', '332'),
(9, 'Asss', 'Bee', 'ptasiek30s083@yahoo.com', '1234', '81dc9bdb52', '1223', '332'),
(10, 'Asss', 'Bee', 'ptasiek30sd083@yahoo.com', '1234', '81dc9bdb52', '12', '332'),
(11, 'Asss', 'Bee', 'ptasicek30sd083@yahoo.com', '1234', '81dc9bdb52', '1', '332'),
(12, 'Asss', 'Bee', 'ptasiceks30sd083@yahoo.com', '123', '202cb962ac', '1', '332'),
(13, 'AAaa', 'Ass', 'ptasiek3003@yahoao.com', '1234', '81dc9bdb52', '6', 'wsa');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT dla tabeli `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT dla tabeli `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT dla tabeli `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT dla tabeli `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
