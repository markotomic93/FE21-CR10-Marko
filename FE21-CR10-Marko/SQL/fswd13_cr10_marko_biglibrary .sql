-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2021 at 01:02 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fswd13_cr10_marko_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `fswd13_cr10_marko_biglibrary` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `fswd13_cr10_marko_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `mediaType` enum('Book','DVD','Cd') NOT NULL,
  `shortDescr` varchar(255) NOT NULL,
  `authorLastName` varchar(255) NOT NULL,
  `authorFirstName` varchar(255) NOT NULL,
  `publisherName` varchar(255) NOT NULL,
  `publisherAddress` varchar(255) NOT NULL,
  `publishDate` date NOT NULL,
  `mediaStatus` enum('Available','Reserved') NOT NULL,
  `ISBN` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `img`, `title`, `mediaType`, `shortDescr`, `authorLastName`, `authorFirstName`, `publisherName`, `publisherAddress`, `publishDate`, `mediaStatus`, `ISBN`) VALUES
(1, 'https://d1w7fb2mkkr3kw.cloudfront.net/assets/images/book/lrg/9780/0083/9780008312831.jpg', 'The 5 AM Club', 'Book', 'Twenty years ago, legendary leadership and elite performance expert Robin Sharma introduced the Awake at Five concept (and yours is the whole world), based on a revolutionary morning routine that helped his clients increase productivity, improve health.', 'Sharma', 'Robin S', 'Volcano Publishing', 'Gospodara Vučića 24511000 Belgrade, Serbia', '2018-11-13', '', '9788610023824'),
(2, 'https://www.robinsharma.com/files/img/book/103e624323abfdc49b54ba310103b1ea.png', 'The Leader Who Had No Title', 'Book', 'For more than fifteen years, the most successful companies and the richest people in the world have been applying the formula of Robin Sharma - one of the most sought-after gurus in the world. This formula is now available to you too.', 'Sharma', 'Robin S.', 'Volcano Publishing', 'Gospodara Vučića 24511000 Belgrade, Serbia', '2010-05-01', '', '9788678042591'),
(3, 'https://images-na.ssl-images-amazon.com/images/I/51aTnsl0MPL._SX303_BO1,204,203,200_.jpg', 'A Game of Thrones', 'Book', 'Winter is coming. Such is the stern motto of House Stark, the northernmost of the fiefdoms that owe allegiance to King Robert Baratheon in far-off Kings Landing. There Eddard Stark of Winterfell rules in Roberts name. There his family dwells in peace.', 'Martin', 'J. R. R', 'Harper Voyager', '195 Broadway, New York, NY USA', '2003-09-01', '', '978-0-00-647988-8'),
(4, 'https://images-na.ssl-images-amazon.com/images/I/51nkEprwL5L._SX302_BO1,204,203,200_.jpg', 'A Clash of Kings', 'Book', 'A comet the color of blood and flame cuts across the sky. And from the ancient citadel of Dragonstone to the forbidding shores of Winterfell, chaos reigns. Six factions struggle for control of a divided land and the Iron Throne of the Seven Kingdoms, prep', 'Martin', 'George R. R.', 'Penguin Random House Audio', '195 Broadway, New York, NY USA', '2013-02-27', 'Available', '978-0-449-01110-2'),
(5, 'https://assets.thalia.media/img/artikel/95807f3d3388cc50e21f16d67b6853d1737c529f-00-00.jpeg', 'Angels & Demons ', 'Book', 'An ancient secret brotherhood. A devastating new weapon of destruction. An unthinkable target.When world-renowned Harvard symbologist Robert Langdon is summoned to a Swiss research facility to analyze a mysterious symbol, he discovers evidence of the ', 'Brown', 'Dan', 'Simon & Schuster ', 'New York, New York, United States', '2003-09-01', '', '9780743539760'),
(6, 'https://images-production.bookshop.org/spree/images/attachments/5226014/original/9780767926034.jpg?1588685729', 'The Da Vinci Code', 'Book', 'Victory Hangs in the Balance. It is 1944 and weeks before D-Day. The Allies are disguising their invasion plans with elaborate decoys of ships and planes. If they can land a force on mainland Europe, they will gain the upper hand in a war that has ravaged', 'Brown', 'Dan', 'Simon & Schuster ', 'New York, New York, United States', '2004-11-03', '', '978-0-307-47427-8'),
(7, 'https://assets.thalia.media/img/artikel/4050496c6eba0999b34991b48993b17f0257154c-00-00.jpeg', 'The Silmarillion', 'Book', 'The Silmarillion is actually Tolkiens first book and also his last. In origin it precedes even The Hobbit, and is the story of the First Age of Tolkiens Middle Earth. It shows us the ancient history to which characters in The Lord of the Rings look back', 'Tolkien', 'J. R. R.', 'HarperCollins', '195 Broadway New York, NY 10007 USA', '1999-04-06', '', '978-0-261-10273-6'),
(8, 'https://www.foliosociety.com/media/catalog/product/cache/62c02659d61289399aa40cd1696133d2/l/t/ltr_book.png', 'The Lord of the RingsThe Fellowship of the Ring; The Two Towers; The Return of the King', 'Book', 'The Lord of the Rings is the saga of a group of sometimes reluctant heroes who set forth to save their world from consummate evil. Its many worlds and creatures were drawn from Tolkiens extensive knowledge of philology and folklore.', 'Tolkien', 'J. R. R', 'HarperCollins', '195 Broadway New York, NY 10007 USA', '2008-04-01', '', '978-0-261-10238-5'),
(9, 'https://assets.thalia.media/img/artikel/b70d5a9463966b20f5d393ac3e32584fdcc0a08c-00-00.jpeg', 'The Hobbit or There And Back Again', 'Book', 'Bilbo Baggins enjoys a quiet and contented life, with no desire to travel far from the comforts of home; then one day the wizard Gandalf and a band of dwarves arrive unexpectedly and enlist his services.', 'Tolkien', 'J. R. R.', 'HarperCollins', '195 Broadway New York, NY 10007 USA', '1937-07-01', '', '978-0-261-10221-7'),
(10, 'https://assets.thalia.media/img/artikel/afbb568351aaa990694ce8540970e774c3a6b049-00-00.jpeg', 'Harry Potter: The Complete Collection ', 'Book', 'Series of seven fantasy novels written by British author J. K. Rowling. The novels chronicle the lives of a young wizard, Harry Potter, and his friends Hermione Granger and Ron Weasley, all of whom are students at Hogwarts School of Witchcraft and Wizardy', 'Rowling', 'J. K.', 'Warner Bros (Universal Pictures)', '3400 Warner Blvd., Burbank, CA 91505', '2013-08-01', '', '5051890326966'),
(11, 'https://assets.thalia.media/img/artikel/42bdf2dddf4ba19151fd4a6261a5d4dd5791e017-00-00.jpeg', 'A Dance with Dragons / A song of ice and fire vol. 10', 'Book', 'Replaces a semester of ethics, a semester of social studies, two splatter films, about seven liters of rum and ten grams of marijuana.', 'Martin', 'George R. R.', 'Harper Voyager', '195 Broadway, New York, NY USA', '2012-07-23', '', '978-3-7645-3102-7'),
(12, 'https://assets.thalia.media/img/artikel/05a3301e33838fd3e4a5d95e38f79bdd34ace2dd-00-00.jpeg', 'Harry Potter and the Cursed Child', 'Book', 'While Harry grapples with a past that refuses to stay where it belongs, his youngest son Albus must struggle with the weight of a family legacy he never wanted. As past and present fuse ominously, both father and son learn the uncomfortable truth.', 'Rowling', 'J. K.', 'Carlsen', 'CARLSEN Verlag GmbHVoelckersstraße 14 - 2022765 Hamburg', '2019-08-01', '', '978-0-7515-6535-5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
