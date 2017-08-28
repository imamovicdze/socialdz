-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2017 at 06:26 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `socialdz`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `ID` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `category` enum('culture','sport','politics','economy') NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`ID`, `title`, `content`, `category`, `created`) VALUES
(14, 'Dzenanov tekst', 'asdasd', 'culture', '2017-08-28 15:07:21'),
(2, 'Michael Schumacher: Son Mick to honor 25th anniversary win at Spa', '(CNN)Michael Schumacher\'s son Mick will take to the Spa track on Sunday to honor the 25th anniversary of his father\'s first Formula One victory.\r\n\r\nMick Schumacher, 18, son of the stricken seven-time world champion, will drive his father\'s Benetton B194, his 1994 title-winning car, ahead of the 2017 Belgian Grand Prix.\r\n"No doubt, I wanted to do that," said Mick Schumacher in an Instagram post\r\nMick is a promising racer and lies 11th in the F3 European Championship this season, having graduated from the F4 circuit.', 'sport', '2017-08-27 15:16:34'),
(3, 'Floyd Mayweather Jr. defeats Conor McGregor by TKO', '(CNN)In a result that shocked few, Floyd Mayweather Jr. defeated Conor McGregor by technical knockout before a crowd of 14,623 at T-Mobile Arena in Las Vegas on Saturday.\r\n\r\nMcGregor, though, surprised many by going toe to toe with Mayweather until the 10th round.\r\n"He\'s a lot better than I thought he was," Mayweather said after the bout.\r\nMayweather\'s record is now 50-0, surpassing Rocky Marciano, who went 49-0. After Saturday\'s win, Mayweather said this was the final fight of his career, calling McGregor "a hell of a champion."\r\n"A win is a win, no matter how you get it," Mayweather said. "Rocky Marciano is a legend, and I look forward to going into the Hall of Fame one day."', 'sport', '2017-08-27 15:17:41'),
(4, 'LeBron James: Burning of Isaiah Thomas\' jersey is \'ridiculous\'', '(CNN)LeBron James has had enough of fans burning jerseys.\r\n\r\nThe NBA star took to Twitter on Thursday, voicing his displeasure with Boston Celtics fans who were burning point guard Isaiah Thomas\' No. 4 jersey. The Celtics traded Thomas, forward Jae Crowder, center Ante Zizic and the rights to the Brooklyn Nets\' 2018 first round pick to the Cleveland Cavaliers for point guard Kyrie Irving on Tuesday.\r\n"The burning of the jersey thing is getting ridiculous now!" James said at the start of a five-tweet rant. "The man was traded. What do u not understand?"\r\nJames then noted that Thomas played in a playoff game for the Celtics one day after the death of his sister, Chyna Thomas, 22, who was killed in a single-car crash in Washington State in late April.', 'sport', '2017-08-27 15:18:28'),
(5, 'Anthony Horowitz: \'People used to disagree. Now they send death threats\'', 'I was called names when I was eight,â€ says Anthony Horowitz. â€œI will not tell you them now because I would be physically sick if they passed my lips.â€ The writer pauses momentarily, his brown eyes fixing mine. â€œI just couldnâ€™t do it. These things do hurt.â€\r\n\r\nTall, slim and wearing black jeans, the 62-year-old could, until this moment, have passed for a much younger man. But as he recalls his childhood, suddenly the years seem to catch up with him. We meet in the London offices of the TV production company run by his wife, Jill Green, to chat about his latest novel, The Word Is Murder. We are a stoneâ€™s throw from their penthouse in a renovated bacon factory. It seems rather fitting â€“ because he certainly brings home the bacon. Horowitz, who has houses in Crete, Suffolk and London, is one of the highest earning writers in Britain.', 'culture', '2017-08-27 15:19:58'),
(6, 'Benjamin Clementine: â€˜I have my own way of making people believe in meâ€™', 'Benjamin Clementine looms above me, a strange but gentle presence. When he talks, he does so with dry amusement; when he listens, he furrows his brow. In a photo studio in Acton, west London, his bright khaki suit makes him look like a soldier. In fact, itâ€™s womenswear, the wide cuffs swinging high above his ankles. â€œYes, they are short,â€ he says, eyeing his trousers with a comic portentousness as we walk down the stairs, before sparking up a Marlboro Light and smoking it in the rain.\r\n\r\nHeâ€™s back in his home town, London, after a few months in America, where he appreciated the â€œcan-doâ€ attitude of his American fans. French fans he likes, too â€“ because they love a good story. The English, he says, are harder to please.', 'culture', '2017-08-27 15:21:09'),
(7, 'Why an underpass in Berlin is Hollywoodâ€™s biggest breakout star', 'The second Bourne film, the fourth Hunger Games movie, an indie flick about a teen assassin and one of the highest-grossing instalments in the Marvel cinematic universe. If that were the IMDb page of an actor, you would think they were on their way to the big time. But the CV in question belongs not to a person, but a tunnel in Berlin.\r\n\r\nSince doubling as the exterior of a Moscow airport in 2004â€™s The Bourne Supremacy, the distinctive orange-tiled walls and pillars of the Messedamm underpass have been seen in Joe Wrightâ€™s Hanna in 2011, 2015â€™s The Hunger Games: Mockingjay â€“ Part 2, last yearâ€™s Captain America: Civil War and Charlize Theron spy thriller Atomic Blonde, released earlier this month.\r\n\r\nThese are no fleeting cameos, either. The underpass is the scene of the lengthy fight between Eric Banaâ€™s Erik Heller and four CIA agents in Hanna, while it bookends Katniss and her fellow rebelsâ€™ sewer escape from Panem in Mockingjay â€“ Part 2. Black Pantherâ€™s breathless chase of Bucky, Falcon and Captain America takes place in the tunnel (although this time it was doubling for Budapest, Romania), culminating in their arrest on the exact same spot, in the tunnelâ€™s open-air section, where Charlize Theronâ€™s Lorraine is also dragged from the wreckage of a crashed car in Atomic Blonde.', 'culture', '2017-08-27 15:21:49'),
(8, 'Tillerson on Charlottesville: \'The president speaks for himself\'', 'Secretary of State Rex Tillerson seemingly distanced himself Sunday morning from President Donald Trumpâ€™s widely criticized responses to a deadly white supremacist rally earlier this month in Virginia, telling â€œFox News Sundayâ€ that there should be no doubt about the U.S. governmentâ€™s commitment to long-held values but that â€œthe president speaks for himself.â€\r\n\r\nTillerson was asked Sunday about the presidentâ€™s remarks in Phoenix last week, in which he defended his initial response to the white supremacist march in Charlottesville, Virginia, which included a condemnation of â€œhatred, bigotry and violence â€” on many sides.â€ At a press conference days later, the president said there had been â€œvery fine peopleâ€ on both sides of the violent clashes between the white supremacists and the groups gathered to protest their presence.', 'politics', '2017-08-27 15:22:33'),
(9, 'Trump tweets praise of Hurricane Harvey rescuers', 'President Donald Trump on Sunday morning tweeted his support for those doing rescue work as Hurricane Harvey continued to batter Texas.\r\n\r\n"Great coordination between agencies at all levels of government," the president tweeted. "Continuing rains and flash floods are being dealt with. Thousands rescued."\r\n\r\n\r\nThe full extent of the damage caused by the hurricane so far remains unclear, but there were reports of many people stranded amid heavy rains and flash floods.\r\n\r\nThe president continued with a series of tweets as Sunday went along:\r\n\r\n---"Many people are now saying that this is the worst storm/hurricane they have ever seen. Good news is that we have great talent on the ground."', 'politics', '2017-08-27 15:23:10'),
(10, 'Ex-Trump adviser helps Iraqis president wants to deport â€” for a price', 'A former campaign adviser to Donald Trump is offering to testify in court on behalf of Iraqi Christians in the United States who suddenly face deportation under the Republican president â€” for a hefty fee.\r\n\r\nWalid Phares, a Lebanese-American academic, advised Trump on foreign affairs during the 2016 presidential campaign. He also has appeared on the Fox News and Fox Business channels to promote Trumpâ€™s national security policies, including the travel bans that would temporarily bar Iraqi Christian refugees, among others, from U.S. soil.\r\n\r\n\r\nAt the same time, Phares charges unusually high fees â€” up to $15,000 or more, according to lawyers â€” to testify in immigration proceedings about the dangers facing people deported to Iraq, where Christians and others with U.S. ties are often killed.', 'politics', '2017-08-27 15:24:01'),
(11, 'Janet Yellen: System is safer now, though \'all-too-familiar\' risks remain', 'Janet Yellen: System is safer now, though \'all-too-familiar\' risks remain	Janet Yellen: System is safer now, though \'all-too-familiar\' risks remain  \r\n4:14 PM ET Fri, 25 Aug 2017 | 00:57\r\nFederal Reserve Chair Janet Yellen, looking back a decade after the onset of the financial crisis, said Friday the financial system is safer now than it was then though some adjustments to regulations may be needed.\r\n\r\nThe central bank chief spoke at the Fed\'s annual conference in Jackson Hole, Wyoming.\r\n\r\nThough the speech is closely watched in financial markets, Yellen offered no clues about the future of monetary policy, instead focusing on the history of the crisis and what regulators have done in response. She warned that future crises are inevitable but said the housing meltdown taught valuable lessons.\r\n\r\n"The events of the crisis demanded action, needed reforms were implemented, and these reforms have made the system safer," she said in prepared remarks.', 'economy', '2017-08-27 15:25:02'),
(12, 'Fed\'s Mester says central bank needs to be \'pre-emptive\' of rising inflation', 'Cleveland Fed President Loretta Mester said Friday the Federal Reserve should stay on its path of monetary policy tightening, despite some recent weakness in economic data.\r\n\r\n"I want to reduce accommodation," Mester said in an CNBC interview from the central bank\'s symposium at Jackson Hole, Wyoming.\r\n\r\nWithout referring to a particular Fed meeting, she said: "I don\'t think we can wait until inflation gets back up to 2 percent."\r\n\r\n"We\'ve learned over time we need to be pre-emptive, and that means we have to be forward looking," said Mester, an alternate member of the Federal Reserve Open Market Committee.\r\n\r\nMester made similar comments last week to Reuters about inflation and rate hikes.\r\n\r\nThe Fed\'s July meeting minutes showed policymakers were divided over whether to be cautious over recent weakness in inflation or to move back to a more normal state of monetary policy.', 'economy', '2017-08-27 15:26:06'),
(13, 'At Jackson Hole, the death of an economic model may concern central bankers', 'As central bankers gather at the annual Jackson Hole symposium on Friday, analysts think the death of a major economic concept could dominate discussions.\r\n\r\nKnown as Phillips curve, an economic concept developed by New Zealand economist William Phillips, it shows that inflation and unemployment have a stable and inverse relationship.\r\n\r\nHowever, in the recent months with central banks using artificial ways to pump money into the economy, this inverse relationship is seen to be dying.\r\n\r\nA number of analysts have warned that this could be risky for the global economy and discussions around the death of the Phillips curve could dominate the Jackson Hole symposium.\r\n\r\n"The inverse relationship between unemployment and inflation is dead. The proliferation of low-wage, irregular and insecure jobs means that wage pressures - and therefore spending power - are subdued even as unemployment falls," Edward Smythe, an economist at Positive Money, told CNBC via email.\r\n\r\nSmythe added that this is bad news for policymakers wishing to unwind quantitative easing, and bring interest rates back to their pre-crisis levels.', 'economy', '2017-08-27 15:27:02');

-- --------------------------------------------------------

--
-- Table structure for table `news_comments`
--

CREATE TABLE `news_comments` (
  `ID` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `news_id` int(11) DEFAULT NULL,
  `text` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_comments`
--

INSERT INTO `news_comments` (`ID`, `user_id`, `news_id`, `text`, `created`) VALUES
(1, 1, 14, 'Dzenanov komentar', '2017-08-28 16:08:57'),
(2, 1, 2, 'Michael comment', '2017-08-28 16:10:37'),
(3, 1, 2, 'drugi majk komentar', '2017-08-28 16:25:43'),
(4, 1, 1, 'treci komentar', '2017-08-28 16:35:32'),
(5, 1, 2, 'treci kom komn', '2017-08-28 16:41:26'),
(6, 1, 2, 'cetvrti koment', '2017-08-28 16:41:34'),
(7, 1, 14, 'dzenanov drugi komenat', '2017-08-28 16:41:43'),
(8, 1, 14, 'dzenanov treci komentar', '2017-08-28 16:41:48'),
(9, 9, 14, 'userov prvi komena', '2017-08-28 16:42:07'),
(10, 9, 14, 'userov drugi', '2017-08-28 16:42:12'),
(12, 9, 2, 'prvi userov koment', '2017-08-28 16:43:03'),
(13, 9, 2, 'drugi userov kome', '2017-08-28 16:43:08'),
(14, 9, 2, 'treci userov koment', '2017-08-28 16:43:13'),
(15, 9, 2, 'novi commentar', '2017-08-28 17:04:58'),
(16, 9, 13, 'novi komentar', '2017-08-28 17:15:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `name`, `surname`, `email`, `password`, `is_admin`) VALUES
(1, 'Dzenan', 'Imamovic', 'dze@dze.com', '$2y$10$rtUG0NeIBKqSRw.DLRE6xuMS.7KzuCcVEMcncuXN7CAmO64scC1lW', 1),
(9, 'user', 'userino', 'user@user.user', '$2y$10$1tS5lLJPxXzOpDL1Ing1WOYZLSsmYLeIwgFgNJpEvQPEM1lFEYk3O', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `news_comments`
--
ALTER TABLE `news_comments`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `news_id` (`news_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `news_comments`
--
ALTER TABLE `news_comments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
