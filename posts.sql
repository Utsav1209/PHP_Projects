-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 19, 2024 at 01:25 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `summary` text NOT NULL,
  `content` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `date`, `title`, `category`, `summary`, `content`) VALUES
(5, '19/03/2024', 'de Finibus Bonorum et Malorum', 'Sports', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta', ' Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?'),
(16, '19/03/2024', 'To Fill the Whole Universe', 'Science', 'He who descended is the very one who ascended higher than all the heavens, in order to fill the whole universe. So Christ himself gave the apostles, the prophets, the evangelists, the pastors and teachers to equip the body of Christ for the work of the ministry.', 'He who descended is the very one who ascended higher than all the heavens, in order to fill the whole universe. So Christ himself gave the apostles, the prophets, the evangelists, the pastors and teachers to equip the body of Christ for the work of the ministry.”\r\n\r\n \r\n\r\nPaul lets us in on the secret that Christ is going to fill all things through the church fulfilling the five aspects of his ministry that he started on earth; the apostolic, prophetic, evangelistic, shepherding, and teaching functions. What Jesus started before his ascension, the church has been left behind to finish until his second coming.\r\n\r\n \r\n\r\nDon’t you think that those five aspects therefore, the apostolic, prophetic, evangelistic, shepherding, and teaching aspects should therefore be evident in the church’s gatherings?\r\n\r\n \r\n\r\nIf the church truly is the vehicle through which Jesus will fill all things, then these five functions of Christ’s earthly ministry should be visible, functioning and felt.'),
(17, '19/03/2024', 'The verdict on Electoral Bonds by Supreme Court', 'Politics', 'The Supreme Court (SC) ruling on Electoral Bonds (EB) has been welcomed by one and all. The court has stressed the need for transparency and quashed further issues of such bonds. ', 'n the decades before 2017-18 when EBs came into existence, most political donations were in cash and those below Rs 20,000 were exempt from reporting. So, the route adopted by most donors was multiple small donations to avoid scrutiny. This necessitated generating black money and unaccountable cash. That was obviously a crime in itself and led to tax evasion and falsifying of accounting records. And transparency was totally missing.\r\n\r\nElectoral bonds, a form of bearer bonds, were instituted by parliamentary legislation in 2017-18 to overcome such issues. The donors could buy these interest-free and tax-free bonds from SBI for political donations. The purchaser record was captured since KYC norms were mandatory. However, the need to register the ultimate beneficiary of these bonds was not mandated.'),
(19, '19/03/2024', 'Wood spikes from Roman fort conserved', 'History', 'The deadly sharped wooden spikes from Roman forts unearthed near Bad Ems, Germany, have been unveiled in all their threatening glory after conservation at the Leibniz Center for Archaeology (LEIZA) in Mainz. The 23 wooden skewers have been undergoing conservation for almost three years and posed a multi-layered problem. ', 'Dubbed pila fossata (ditch spears) by the archaeologists (there are no specific names for them in the ancient sources), they were made of oak and were an average of 65 cm (26 inches) long and 4.5-6cm (1.7-2.3 inches) in diameter. They were sharped on both ends and had two notches, one cut out of the bottom and the other at the top on the opposite side of the stake, giving it mean barb to look extra threatening and making it harder for anyone who had the misfortune to fall onto it to extricate themselves than a plain sharpened spike would be. The bottom notch appears to have been used to hammer it into the dense clay soil, as the wood fibers in the notch were squashed down from the impact. The top notch was cut into the opposite side of the stake. They were installed angled outwards, upwards and inwards, bristling in all directions at once much like the barbs on barbed wire. Between the pila were thin rods or branches of brushwood extending lengthwise along the trench. They may have been tossed into the ditch when the camp was dismantled and their defenses buried to prevent the enemy from using them.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
