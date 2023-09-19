-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2023 at 02:10 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plantshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `slno` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `useremail` varchar(100) NOT NULL,
  `feedbacks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`slno`, `username`, `useremail`, `feedbacks`) VALUES
(1, 'hello', 'prabha@gmail.com', 'no doubt');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `uemail` varchar(100) NOT NULL,
  `pid` int(19) NOT NULL,
  `pname_ord` varchar(100) NOT NULL,
  `qty_ord` varchar(200) NOT NULL,
  `price_ord` varchar(300) NOT NULL,
  `phone_ord` varchar(300) NOT NULL,
  `address_ord` varchar(300) NOT NULL,
  `order_date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `uemail`, `pid`, `pname_ord`, `qty_ord`, `price_ord`, `phone_ord`, `address_ord`, `order_date`) VALUES
(1, '19', 'gajini@gmail.com', 0, 'Portulaca ', '4', '60', '905662224', 'No.399,mariyamman kovil street,A.r palayam..', '2023-Feb-8'),
(4, '27', 'kavi@gmail.com', 18, 'Crossandra infundibuliformis ', '4', '120', '905662223', 'No.399,mariyamman kovil street,A.r palayam,veranam,cuddalore.', '2023-Feb-8'),
(5, '20', 'prabha@gmail.com', 3, 'Bougainvillea', '3', '60', '89768766767', 'No.399,mariyamman kovil street,A.r palayam,chennai', '2023-Feb-8'),
(6, '19', 'gajini@gmail.com', 5, 'Adenium', '6', '150', '7929920902', 'No:400 Mariyamman kovil Street,A.R Palayam,Veeranam(Post),Vilupuram T.K.', '2023-Feb-9'),
(7, '19', 'gajini@gmail.com', 19, 'Banana', '3', '120', '9056622280', 'No.399,mariyamman kovil street,A.r palayam,veranam,cuddalore', '2023-Feb-9'),
(10, '20', 'prabha@gmail.com', 3, 'Bougainvillea', '11', '330', '905662224', 'No.399,mariyamman kovil street,A.r palayam,veranam,cuddalore', '2023-Feb-9'),
(11, '20', 'prabha@gmail.com', 41, 'Thespesia populnea', '5', '1500', '905662224', 'No.399,mariyamman kovil street,A.r palayam,veranam,cuddalore', '2023-Feb-9');

-- --------------------------------------------------------

--
-- Table structure for table `plant`
--

CREATE TABLE `plant` (
  `pid` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pdesc` varchar(500) NOT NULL,
  `imgpath` varchar(200) NOT NULL,
  `price` varchar(100) NOT NULL,
  `qty` varchar(300) NOT NULL,
  `ptype` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plant`
--

INSERT INTO `plant` (`pid`, `pname`, `pdesc`, `imgpath`, `price`, `qty`, `ptype`) VALUES
(1, 'Rose', 'Roses are erect, climbing, or trailing shrubs, the stems of which are usually copiously armed with prickles of various shapes and sizes, commonly called thorns. ', 'uploads/rose.jpg   ', '30', '1', 0),
(2, 'Oleander', 'Nerium oleander, commonly called oleander, is an upright, rounded evergreen sub-tropical to tropical shrub that is valued for its abundant, fragrant, summer to fall flowers.', 'uploads/oleandar.jpg', '20', '1', 0),
(3, 'Bougainvillea', ' Bougainvillea spectabilis grows as a woody vine or shrub, reaching 15 to 40 feet (4.6 to 12.2 m) with heart-shaped leaves and thorny, pubescent stems. ', 'uploads/bougainvillea.jpg', '30', '1', 0),
(4, 'Hibiscus rosa-sinensis', 'Hibiscus rosa-sinensis is a bushy, evergreen shrub or small tree growing 2.5–5 m (8–16 ft) tall and 1.5–3 m (5–10 ft) wide. The plant has a branched taproot. Its stem is aerial, erect, green, cylindrical, and branched', 'uploads/Hibiscus_Brilliant.jpg', '30', '1', 0),
(5, 'Adenium', 'Adenium obesum, commonly called desert rose, is a thick-stemmed sparsely-leaved perennial succulent that is native to semi- arid, sub-Saharan regions of eastern and southwestern Africa plus the Arabian peninsula.', 'uploads/adenium.jpg', '25', '1', 0),
(6, 'Portulaca ', 'Portulaca grandiflora is a succulent flowering plant in the family Portulacaceae, native to southern Brazil, Argentina, and Uruguay and often cultivated in gardens. It has many common names, including rose moss, eleven o clock, Mexican rose, moss rose, sun rose, rock rose, and moss-rose purslane.', 'uploads/portulaca.jpg', '15', '1', 0),
(7, 'Azalea', 'Azalea flowers are funnel-shaped, somewhat two-lipped, and often fragrant. Flowers of rhododendrons, on the other hand, are more often bell-shaped. Azalea flowers typically have only 5 projecting stamens, as compared with 10 (or more) in rhododendrons.', 'uploads/Azalea_FlorAmore_Hot_Pink_.jpg', '25', '1', 0),
(8, 'Jasmine', 'The white, yellow, or rarely pink flowers are tubular with a flaring, lobed, pinwheel-like form; some double-flowered varieties have been developed. The leaves can be evergreen or deciduous and usually are composed of two or more leaflets, although some species have simple leaves.', 'uploads/jasmine.jpg', '20', '1', 0),
(9, 'Marigold', 'Members of the genus Tagetes have attractive yellow, orange, or red composite flowers that are solitary on the stems or clustered. The leaves are arranged opposite each other on the stem and are usually finely cut.', 'uploads/growing-mexican-marigolds.jpg', '25', '1', 0),
(10, 'Plumeria ', 'Plumeria alba, commonly called white frangipani or nosegay, is a small rounded deciduous tree of the dogbane family that grows in a vase-shape to 15-25  tall. It features fragrant white flowers with yellow centers.', 'uploads/Plumeria3.jpg', '35', '1', 0),
(11, 'Arabian Jasmine', 'Jasminum sambac is a highly fragrant, evergreen shrub which produces clusters of white flowers that fade to pink. It blooms mainly in the summer - occasionally at other times too - and has a twining, scrambling habit', 'uploads/Arabian-Jasmine.jpg', '15', '1', 0),
(12, 'Sunflower', 'The common sunflower (H. annuus) is an annual herb with a rough hairy stem 1–4.5 metres (3–15 feet) high and broad, coarsely toothed, rough leaves 7.5–30 cm (3–12 inches) long arranged in spirals. ', 'uploads/Sunflower.jpg', '30', '1', 0),
(13, 'Chrysanthemum', 'Chrysanthemum, (genus Chrysanthemum), genus of about 40 species of flowering plants in the aster family (Asteraceae), native primarily to subtropical and temperate areas of the Old World. ', 'uploads/Chrysanthemum.jpg', '10', '1', 0),
(14, 'Ixora', 'Ixora is large genus of tropical shrubs or small trees (family Rubiaceae) that have leathery evergreen leaves and terminal corymbs of showy salver-shaped flowers and are often cultivated as ornamentals in the warm greenhouse. ', 'uploads/Ixora.jpg', '30', '1', 0),
(15, 'Periwinkle', ' Periwinkle (Vinca minor) is an excellent evergreen groundcover with dark green foliage. Oblong to ovate leaves are opposite, simple, ½ to 2 inches long, glossy, with a short petiole.', 'uploads/Periwinkle.JPG', '20', '1', 0),
(16, 'Jasminum Fluminense', 'River Jasmine is an evergreen, climbing, woody vine, with young stems densely hairy and mature stems hairless', 'uploads/JasminumFluminense.jpg', '30', '1', 0),
(17, 'Pinkish Red Rose', 'Roses are erect, climbing, or trailing shrubs, the stems of which are usually copiously armed with prickles of various shapes and sizes, commonly called thorns', 'uploads/Pinkish-Red-Rose-1-1.jpg', '40', '1', 0),
(18, 'Crossandra infundibuliformis ', ' It is an erect, evergreen subshrub growing to 1 m with glossy, wavy-margined leaves and fan-shaped flowers, which may appear at any time throughout the year.', 'uploads/kanagampuram.jpg', '20', '1', 0),
(19, 'Banana', 'The fruit is variable in size, color, and firmness, but is usually elongated and curved, with soft flesh rich in starch covered with a rind, which may be green, yellow, red, purple, or brown when ripe. The fruits grow upward in clusters near the top of the plant.', 'uploads/Banana.jpg', '40', '2', 1),
(22, 'Mango', 'The tree is evergreen, often reaching 15–18 metres (50–60 feet) in height and attaining great age. The simple leaves are lanceolate, up to 30 cm (12 inches) long. ', 'uploads/mango.jpg', '20', '1', 1),
(23, 'Lemon', 'The fruit color is green to bright yellow at maturity and is with or without a collar at the neck. Thickness and smoothness of rind vary among varieties and lemons are either seedless or seedy.', 'uploads/Lemon.jpg', '20', '1', 1),
(24, 'Guava ', 'The fruits are round to pear-shaped and measure up to 7.6 cm in diameter; their pulp contains many small hard seeds (more abundant in wild forms than in cultivated varieties). ', 'uploads/fruits1.jpg', '15', '1', 1),
(25, 'Amla', 'Indian gooseberry (Emblica officinalis) popularly known as amla, is a deciduous tree of the Phyllanthaceae family.Amla fruits are fleshy, round, attractive, deeply ribbed and yellowish green in color.', 'uploads/Amla.jpg', '25', '1', 1),
(26, 'Sapota', 'sapota (plural sapotas) The tropical fruit from the sapodilla tree, Manilkara zapota. The fruit is 4–8 cm in diameter, has a fuzzy brown skin with very sweet earthy-brown flesh.', 'uploads/Sapota.jpg', '30', '1', 1),
(27, 'Jack fruit', 'Jackfruit is the largest tree-borne fruit in the world, reaching up to 60 cm (about 2 feet) long and weighing up to 18 kg (about 40 pounds)', 'uploads/Jackfruit.jpg', '20', '1', 1),
(28, 'Cashew', 'The cashew tree is a multibranched, evergreen, and medium size tree which can grow up to height of 6–12 m. The crown of the cashew tree is 6–15 m in diameter and has a deep taproot.', 'uploads/Cashew.jpg', '20', '1', 1),
(29, 'Cherimoya ', 'Cherimoya trees have long, elliptically shaped, light green, velvety leaves. The large, globose, pale green fruits are smooth or have round protrusions, and the flesh is white and pulpy with a sweet acid flavour. ', 'uploads/Cherimoya.jpeg', '15', '1', 1),
(30, 'Papaya  ', 'The papaya plant is considered a tree, though its palmlike trunk, up to 8 metres (26 feet) tall, is not as woody as the designation generally implies. ', 'uploads/papaya.jfif', '10', '1', 1),
(31, 'Pomegranate', 'The pomegranate plant is a large shrub or small tree that has smooth, evergreen leaves and showy orange to red flowers. ', 'uploads/Pomegranate.jpg', '30', '1', 1),
(32, 'Pineapple', 'It is considered an herbaceous, tropical, and monocot perennial plant. The size of the plant ranges from approximately 1–2 m tall and wide.', 'uploads/v.jpg', '30', '1', 1),
(33, 'Coconut', 'Coconut palm is a tree with a slim and smooth trunk, a crown of leaves, and rounded, green or yellow fruit. ', 'uploads/Coconut.jpg', '20', '1', 1),
(34, 'Apple', 'The apple is a small tree that can reach 25 feet in height with a crown spread of 25 feet . The leaves are simple, oval in shape, have small serrations along the margin, and are arranged alternately along the branches.', 'uploads/apple.png', '200', '1', 1),
(35, 'Orange', 'The tree of the sweet orange often reaches 6 metres (20 feet) in height. The broad, glossy, evergreen leaves are medium-sized and ovate; the petioles (leafstalks) have narrow wings. Its white five-petaled flowers are very fragrant.', 'uploads/orange.jpg', '100', '1', 1),
(36, 'Teak', 'Teak is a large deciduous tree up to 40 m (131 ft) tall with grey to greyish-brown branches, known for its high quality wood.', 'uploads/otherplant.jpg', '40', '1', 2),
(37, 'Tamarind ', 'The tamarind (Tamarindus indica L.) is a usually evergreen legume tree. It grows slowly, up to 25-30 m high, and can live as long as 200 years.', 'uploads/Tamarind.jpg', '40', '1', 2),
(38, 'Henna', 'Henna tree, (Lawsonia inermis), also called Egyptian privet, tropical shrub or small tree of the loosestrife family (Lythraceae), native to northern Africa, Asia, and Australia.', 'uploads/henna.jpg', '50', '1', 2),
(39, 'Curry Leaves', 'Curry leaves are small in size and long, slender, and oval in shape narrowing to a point, averaging 2-4 centimeters in length and 1-2 centimeters in width.', 'uploads/curry.jpg', '20', '1', 2),
(40, 'Neem', 'Neem trees are attractive broad-leaved evergreens that can grow up to 30 m tall and 2.5 m in girth. Their spreading branches form rounded crowns as much as 20 m across. ', 'uploads/neem.jpg', '10', '1', 2),
(41, 'Thespesia populnea', 'Thespesia populnea is a shrub or medium-sized evergreen tree, up to 20 m tall with a dense crown. Bark greyish. Twigs densely covered with brown to silvery scales, glabrescent.', 'uploads/thespesia.jpg', '300', '1', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `uemail` varchar(100) NOT NULL,
  `upass` varchar(100) NOT NULL,
  `uphone` varchar(20) NOT NULL,
  `uaddress` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `uname`, `uemail`, `upass`, `uphone`, `uaddress`) VALUES
(19, 'gajini', 'gajini@gmail.com', 'gajini', '990200222', 'no.399 mariyamman kovil strreet,a.r palayam,veeranaam.villupuram'),
(20, 'prabhakaran', 'prabha@gmail.com', 'prabha', '89000299922', 'no.399 mariyamman kovil strreet,a.r palayam,veeranaam.'),
(26, 'susila', 'susila11@gmail.com', 'susila', '89000299922', 'no.399 mariyamman kovil strreet,a.r palayam'),
(27, 'kavi', 'kavi@gmail.com', 'kavu', '9099890786', 'no.399 mariyamman kovil strreet,a.r palayam,veeranaam,Villupuram');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `plant`
--
ALTER TABLE `plant`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `slno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `plant`
--
ALTER TABLE `plant`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
