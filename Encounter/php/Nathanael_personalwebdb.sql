-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 21, 2014 at 03:13 PM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Nathanael_personalwebdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs_tbl`
--

CREATE TABLE IF NOT EXISTS `blogs_tbl` (
  `blog_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `details` text NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`blog_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `blogs_tbl`
--

INSERT INTO `blogs_tbl` (`blog_id`, `title`, `image`, `details`, `date`) VALUES
(1, 'Sniper Elite 3''s Hitler-Killing Mission Now Available to All', 'hitler.gif', 'Sniper Elite III''s "Hunt the Grey Wolf" DLC, which allows you to seek out and kill the infamous Nazi leader, is now available for anyone to purchase and play. The expansion was previously available only to those who preordered the game, but now anyone can buy it for $8.\r\n\r\nThe mission sees you infiltrating a Nazi camp in Tobruk as a means to put Hitler to rest for good. Sniper Elite III lets you perform gruesome "testicle shots" on your enemies, and this is no different for Hitler.\r\n\r\nA $3 Camouflage Weapons Pack for Sniper Elite III was also released today. It includes three weapons, the first of which is the Mosin Nagant rifle. The other two are the MP44 submachine gun and the High Standard HDM pistol. These guns can be used in Sniper Elite III''s single- and multiplayer modes.', '2014-07-16 20:36:04'),
(2, 'Mobile Hit Flappy Bird Now Playable in 60 FPS on an Apple PC From the ''70s', 'flapple_bird.gif', 'Flappy Bird, released in May 2013, had a meteoric rise to success. The game, in which you try to avoid pipes by tapping to increase your bird''s height, was seemingly everywhere. It''s spawned countless clones on almost every platform imaginable. It was even featured in Gears of War developer Epic''s demonstration of Unreal Engine 4 on Android phones, a few weeks after the studio''s release of its own clone called Flappy Chicken. But, until now, it had been missing from one of the first gaming platforms: The Apple II computer, released in 1977.\r\n\r\nDeveloper Dagen Brock has somehow managed to get a Flappy Bird clone running on the machine, which has only one megahertz of processing power to work with. There are some changes to the game; you''re not doing any touch-screen tapping, and the limited graphics seem to make the game much easier. The port, called Flaplle Bird, is available for use on 5.25-inch and 3.5-inch floppy disks, if you happen to still have those and an Apple II lying around. Or, you can simply run the browser-based emulator of the port.\r\n\r\nAnd, to put to rest concerns about its performance on the Apple II, Brock''s port of the game runs at a silky-smooth 60 frames per second.', '2014-07-16 20:38:42'),
(3, 'PS3 Hacker Gets a Top Security Job at Google', 'project_zero.png', 'George Hotz, a hacker who rose to fame for unlocking the iPhone and jailbreaking the PlayStation 3, has now been hired by Google to join a security initiative known as "Project Zero." Most recently, Hotz unearthed a Google Chrome exploit and was paid $150,000 for the discovery.\r\n\r\n"You should be able to use the web without fear that a criminal or state-sponsored actor is exploiting software bugs to infect your computer, steal secrets, or monitor your communications," Google''s Chris Evans writes on the company''s website. "Yet in sophisticated attacks, we see the use of ''zero-day'' vulnerabilities to target, for example, human rights activists or to conduct industrial espionage. This needs to stop. We think more can be done to tackle this problem."\r\n\r\nThat''s where Project Zero comes in. Google says the objective for this initiative is to "significantly reduce the number of people harmed by targeted attacks." Evans added that Google is "hiring the best practically minded security researchers and contributing 100 percent of their time toward improving security across the Internet."\r\n\r\nEvans writes that Project Zero''s work will be conducted transparently. "Every bug we discover will be filed in an external database," he says. "We will only report bugs to the software''s vendor--and no third parties."\r\n\r\nGoogle''s hiring of Hotz was not mentioned in Evans'' blog post about Project Zero, but tech sites Ars Technica and Wired are both reporting the move. Hotz previously worked at Facebook.\r\n\r\nAfter Hotz revealed his PS3 workaround in 2011, Sony sued the hacker, who goes by the name "GeoHot." However, Hotz and Sony would later settle their dispute, with the understanding that Hotz is henceforth forbidden from circumventing any technological protection measures on any Sony product. Hotz faces a $10,000 fine, per violation, should he defy the injunction.\r\n\r\nHotz was not involved in the 2011 attacks on Sony''s websites and the PlayStation Network that brought those services down for multiple weeks, costing Sony over $170 million.', '2014-07-16 20:40:15'),
(4, 'Sony/Hotz settlement details surface', 'geohot.jpg', 'Yesterday, the months-long legal battle between Sony Computer Entertainment America and hacker George "GeoHot" Hotz came to an end. In a joint statement, the two parties declared they had settled the matter, with Hotz agreeing to a permanent injunction against his publishing methods to hack the PlayStation 3 online.\r\n\r\n\r\nNow, the documents outlining the settlement have surfaced, detailing the injunction against Hotz. The documents, obtained by GameSpot, describe how, by the consent of both parties, the court "ordered and adjudged" that Hotz is "permanently enjoined and restrained from" a variety of activities. These include "engaging in any unauthorized access to any Sony product under the law" and violating any SCEA license agreement or terms of use agreement "whether or not Hotz has accepted such agreement or terms of use."\r\n\r\nThe latter part of that agreement covers a wide range of activities, including:\r\n\r\n--"Reverse engineering, decompiling, or disassembling any portion of [a] Sony Product." \r\n--"Using any tools to bypass, disable, or circumvent any encryption, security, or authentication mechanism in [a] Sony Product." \r\n--"Using any hardware or software to cause the Sony Product to accept or use unauthorized, illegal or pirated software or hardware." \r\n--"Exploiting any Sony Product to design, develop, update or distribute unauthorized software or hardware for use with [a] Sony Product." \r\nThe agreement goes on to say that Hotz is forbidden from circumventing any technological protection measures on any Sony product, including "any code, device, information, encryption or key" that relates to "any confidential or proprietary information" of Sony''s. He is also prohibited from "trafficking" in any technology or information that bypasses technological protection measures on any Sony device or service, with the order mentioning the PlayStation 3 3.55 Firmware Jailbreak by name.\r\n\r\nShould Hotz violate the injunction, he will have to pay $10,000 per violation, with a penalty cap of $250,000.\r\n\r\nYesterday''s joint statement quoted Hotz as saying, "It was never my intention to cause any users trouble or to make piracy easier. I''m happy to have the litigation behind me." Now, though, the hacker is singing a more aggressive tune on his blog. After calling for a boycott of all Sony products, Hotz sounded off on the class action lawsuit filed against Sony after it removed the OtherOS function from the PS3.\r\n\r\n"These class action lawsuits are the type that can bankrupt or do seriously financial harm to a company, and finally get Sony to realize that they are not above the law as they would like to believe," he wrote.', '2014-07-16 20:48:52'),
(5, 'Modder creates single-handed PS4 controller for disabled gamers', 'benheck.jpg', 'After creating a single-handed Xbox One controller, celebrity modder Ben Heck has done the same for the PlayStation 4. Just like the Xbox One controller, Heck tore down the DualShock 4 controller and reassembled all of the controller''s left buttons on the right side for a person with a disability that prevents them from using two hands.\r\n\r\nHeck will dive into the creation of the controller during this Friday''s installment of element 14''s The Ben Heck Show. You can see a teaser for the program below.\r\n\r\nThe single-handed Xbox One controller was donated to the Able Gamers Foundation, a charity aimed at making video games more accessible to those with disabilities. The single-handed PS4 controller, on the other hand, will be donated to an element14 community viewer.\r\n\r\nHeck is a veteran modder with dozens of extreme creations to his name. Some of these include Xbox 360 laptops, portable Nintendo 64s, and a NES Micro. Heck charges $125/hour for custom creations and you can read more about his products and services at his website.', '2014-07-16 20:50:48'),
(6, 'Chrome OS security holes found, patched', 'chromebook.jpg', 'Linux is very secure. Google''s Linux-based Chrome OS, with its auto-updating and security sandboxing, is even more secure. But, neither is perfect. At Google''s own Pwnium hacking contest and HP Zero Day Initiative''s (ZDI) annual Pwn2Own hacking contest, three new sets of security problems were found in Chrome OS... and then immediately patched.\r\n\r\nPwnium, which is Google''s hacking competition at the CanWestSec practical security company, was dedicated this year to finding security problems in Chrome OS. There was a "total of $2.71828 million USD in the pot (mathematical constant ''e'' for the geeks at heart)." The targets for this exercise were a base, Wi-Fi model of the ARM-based HP Chromebook 11 or a 2GB Wi-Fi equipped model of the Acer C720 Intel Chromebook. In both cases, the Chromebooks were running the latest stable version of Chrome OS.\r\n\r\nThe first exploit, and prize of $150,000, was awarded to a George Hotz, a well-known researcher hacker known as "Geohot" won $150,000 for an exploit chain six deep on the HP Chromebook 11. This hack resulted in a persistent program executing on Chrome OS. It was, by no means, a simple crack. It involved getting four different security holes lined up perfectly. These were: memory corruption in Chrome''s V8 JavaScript engine; a command injection in Crosh, Chrome OS''s limited shell; a path traversal issue in CrosDisks, the program that mounts and unmounts file systems in Chrome OS; and an issue with file persistence at boot.\r\n\r\nThe second hack, with a prize still to be determined, which will be rewarded via Google''s Vulnerability Rewards Program, went to the young hacker known only as Pinkie Pie. He''d been winning awards in security hacking competitions since 2012.\r\n\r\nThis time around Pinkie Pie was able to show off sandboxed code execution and kernel out of bounds (OOB) write. This exploit used two new holes. One, involved memory corruption in the graphics processor unit (GPU) command buffer, while the other invoked a Kernel OOB write in the GPU driver.\r\n\r\nDharani Govindan, a Google Chrome Test Engineer Lead, said of Geohot and Pinkie Pie''s exploits, "We’re delighted at the success of Pwnium and the ability to study full exploits. We anticipate landing additional changes and hardening measures for these vulnerabilities in the near future. We also believe that both Pwnium submissions are works of art and deserve wider sharing and recognition."\r\n\r\nThe last exploit was revealed during the Pwn2Own Web browser cracking competition. VUPEN, the ace French security company and cracking team, while breaking into Chrome OS, found a bug that left exploitable free memory in Blink bindings. Blink is Google''s WebKit Web browser engine fork.\r\n\r\nWhy did Google encourage hackers to break its prize operating system for real money? Chris Evans, a Google security engineer who has been on the Chrome security team since the start told CNET, "If you want high-quality security, you have to pay for it."  Evan also said "The prize is high because the amount we can learn from it is high. We can close whole classes of bugs, while devising new hardening measures."\r\n\r\nA Google spokesperson added, "These competitions allow us to patch entire classes of bugs to protect our users from real harm." She concluded, "Google already patched all bugs used for these demonstrated Chrome browser and Chrome OS exploits before the end of day Friday." Clearly, these competitions work.', '2014-07-16 20:56:01'),
(7, 'XBOX One Sales Double From May to June', '', 'Back in May, Microsoft made a move that many predicted it would: it announced that Xbox One and Kinect would be unbundled, allowing Microsoft to drop the cost of Xbox One to $399, the same price its primary competitor on the market: Sony''s PlayStation 4.\r\n\r\nIt seems the move paid off.\r\n\r\nMicrosoft has revealed that removing Kinect and cutting the price allowed Xbox One to see month-over-month sales more than double from May to June. "Since the new Xbox One offering launched on June 9th," an Xbox Wire release reads, "we''ve seen sales of Xbox One more than double in the US, compared to sales in May, and solid growth in Xbox 360 sales."\r\n\r\nMicrosoft notes that its sales claim is based on "internal data," and that the numbers are sold through to consumers.\r\n\r\nSales numbers haven''t been trickling out with any regularity from Microsoft. In mid-April, the company revealed that it had shipped 5 million units to retailers, a far cry from PlayStation 4''s announcement of selling to consumers 7 million units around the same time. Sony has since revealed that, when you combine PS4, PS3, and Vita, they''ve sold over 100 million units, indicating PlayStation 4 may be hovering around 8 or 9 million sold.\r\n\r\nBut with Microsoft''s renewed focus on games -- and with some analysts predicting it''s only a matter of time before Xbox One surpasses PS4''s sales (at least in the US) -- Microsoft may finally be turning the corner with Xbox One. Still, PS4 has outsold Xbox One in the US for five months in a row, so it''s still an uphill battle, but it''s one Microsoft is clearly willing to wage.', '2014-07-16 20:57:47');

-- --------------------------------------------------------

--
-- Table structure for table `comment_tbl`
--

CREATE TABLE IF NOT EXISTS `comment_tbl` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `blogs_id` int(11) NOT NULL,
  `sender` varchar(256) NOT NULL,
  `comment` text NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `comment_tbl`
--


-- --------------------------------------------------------

--
-- Table structure for table `member_tbl`
--

CREATE TABLE IF NOT EXISTS `member_tbl` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `member_tbl`
--

INSERT INTO `member_tbl` (`member_id`, `name`, `password`, `date`) VALUES
(1, 'nathanaelhp', '4518bda19425be276817a3b3eeee82b8', '2014-07-20 19:19:04');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_tbl`
--

CREATE TABLE IF NOT EXISTS `portfolio_tbl` (
  `portfolio_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `details` text NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`portfolio_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `portfolio_tbl`
--

INSERT INTO `portfolio_tbl` (`portfolio_id`, `title`, `image`, `details`, `date`) VALUES
(1, 'Portfolio 1', 'big-portfolio-img.jpg', 'This is just a dummy portfolio.', '2014-07-21 20:45:45'),
(2, 'Portfolio 2', 'big-portfolio-img.jpg', 'This is just a dummy portfolio.', '2014-07-21 20:45:45'),
(3, 'Portfolio 3', 'big-portfolio-img.jpg', 'This is just a dummy portfolio.', '2014-07-21 20:45:45'),
(4, 'Portfolio 4', 'big-portfolio-img.jpg', 'This is just a dummy portfolio.', '2014-07-21 20:45:45'),
(5, 'Portfolio 5', 'big-portfolio-img.jpg', 'This is just a dummy portfolio.', '2014-07-21 20:45:45'),
(6, 'Portfolio 6', 'big-portfolio-img.jpg', 'This is just a dummy portfolio.', '2014-07-21 20:45:45'),
(7, 'Portfolio 7', 'big-portfolio-img.jpg', 'This is just a dummy portfolio.', '2014-07-21 20:45:45'),
(8, 'Portfolio 8', 'big-portfolio-img.jpg', 'This is just a dummy portfolio.', '2014-07-21 20:45:45'),
(9, 'Portfolio 9', 'big-portfolio-img.jpg', 'This is just a dummy portfolio.', '2014-07-21 20:45:45'),
(10, 'Portfolio 10', 'big-portfolio-img.jpg', 'This is just a dummy portfolio.', '2014-07-21 20:45:45'),
(11, 'Portfolio 11', 'big-portfolio-img.jpg', 'This is just a dummy portfolio.', '2014-07-21 20:45:45'),
(12, 'Portfolio 12', 'big-portfolio-img.jpg', 'This is just a dummy portfolio.', '2014-07-21 20:45:45'),
(13, 'Portfolio 13', 'big-portfolio-img.jpg', 'This is just a dummy portfolio.', '2014-07-21 20:45:45'),
(14, 'Portfolio 14', 'big-portfolio-img.jpg', 'This is just a dummy portfolio.', '2014-07-21 20:45:45'),
(15, 'Portfolio 15', 'big-portfolio-img.jpg', 'This is just a dummy portfolio.', '2014-07-21 20:45:45');
