-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2018 at 05:09 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `the-eye`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `status`) VALUES
(1, 'Kerala', 'Active'),
(2, 'Finance', 'Active'),
(3, 'Technlogy', 'Active'),
(4, 'Cinema', 'Active'),
(5, 'Sports', 'Active'),
(6, 'Weather', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `category_id` int(20) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `date` datetime NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `category_id`, `title`, `description`, `date`, `image`, `status`) VALUES
(3, 1, 'Kerala Lawmaker, Made To Wait At Toll Plaza, Loses Cool.', 'THRISSUR, KERALA: An independent lawmaker from Kerala lost his cool at a toll plaza in Thrissur and broke the automatic barricade last night, police said. The CCTV footage showed PC George getting out of his luxury car and going for the barricade.\r\nHis driver and aides join him in breaking the stop barrier. In the footage, they are also seen arguing with toll employees. When the path is clear, they drive away.\r\n\r\nThe toll employees say that Mr George got angry when there was some delay in allowing his vehicle to pass. They say they were trying to confirm the details of the lawmaker and hadn\'t seen the MLA sticker on the car.\r\n\r\nThis made Mr George angry and he rushed to the barrier and broke it, they told the police.\r\n\r\n\"I was rushing to catch a train. The man at the toll plaza counter saw the MLA sticker on my car and yet he stopped us. We waited but he didn\'t even look at us. People behind us began to honk. We waited for some time and then I had no option but to do what I did. I have a right to passage,\" the Poonjar lawmaker told NDTV.\r\n\r\nAfter the incident, toll officials informed the police. Neither toll authorities nor the lawmaker have, however, filed a complaint, police said.\r\n\r\nThis isn\'t the first time when Mr George, a seven-time lawmaker, assaulted someone. He had allegedly slapped a 22-year-old staff member at the hostel canteen for delay in serving food last year. The man suffered injuries on his lips and an eye.', '2018-07-20 00:00:00', 'pc george.jpg', 'Active'),
(4, 1, 'Husband Of Kerala Nurse Who Died Battling Nipah Virus Gets Government Job', 'THIRUVANANTHAPURAM: The Kerala government has appointed Sajeesh, husband of Lini Puthussery, the nurse who died after contracting Nipah from her patients, as a clerk in the state health department.\r\nThe order issued by the Health Department said Sajeesh had been appointed as a lower division clerk in an office under the Kozhikode District Medical Officer.\r\n\r\nSajeesh, who was working in Bahrain, had rushed to Perambra in Kozhikode on hearing about Lini\'s illness, two days before her death.\r\n\r\nChief Minister Pinarayi Vijayan tweeted today that \"With this posting, the Government has kept all the promises it made to the family of Lini.\"\r\n\r\nExtending a helping hand to the family of Lini, the state government had earlier announced Rs. 10 lakh each to two of their children.\r\n\r\nLini, who was aware about the seriousness of her illness, had scribbled an emotional last letter to Sajeesh saying, \"I am almost on the way.\r\n\r\nI do not think I can meet you. You should look after our children well,\" which had gone viral in the social media.\r\n\r\nThe deadly Nipah virus had claimed 17 lives in Kerala.\r\n\r\n2 COMMENTS\r\nTwo people had recovered from the virus.', '2018-07-20 00:00:00', 'kerala nipha.jpg', 'Active'),
(5, 2, 'New 100 Rupee Note To Be Issued Shortly. Here\'s What It Looks Like', 'The Reserve Bank of India (RBI) on Thursday said it would issue new Rs. 100 banknotes \"shortly\". The new banknote of Rs. 100 denomination will be of the Mahatma Gandhi (New) Series, the central bank said. The new banknote of Rs. 100 will be in the base colour of lavender and will have a motif of Rani Ki Vav - a heritage site located in Gujarat - on the reverse side. The existing banknotes of Rs. 100, issued by the RBI in the earlier series, will continue to be legal tender.\r\nHere are five things to know about the new Rs. 100 banknote:\r\n\r\n1. The dimensions of the new Rs. 100 banknote will be 66 mm x 142 mm.\r\n\r\n2. Printing and supply of the new Rs. 100 banknote \"will gradually increase\", the RBI said.\r\n\r\n3. The note has other designs, geometric patterns aligning with the overall colour scheme, both at the obverse and reverse.\r\n4. On the front side, also known as obverse, the new Rs. 100 banknote will have features such as a see-through register with the denominational numeral 100 in the Devnagari script.', '2018-07-20 00:00:00', 'new-rs-100-note.jpg', 'Active'),
(7, 2, 'Free ATM Transactions, Monthly Limit, Charges: SBI Vs HDFC Bank Vs ICICI Bank', 'Major banks today permit their customers to make a certain number of transactions free of cost at ATMs every month. SBI or State Bank of India for example, currently allows its customers maintaining a monthly average balance above Rs. 25,000 in the previous month unlimited transactions free of cost at its group ATMs. That means if you are an SBI customer and you maintain a monthly average balance (MAB) of more than Rs. 25,000, you are eligible to avail this service. The country\'s largest bank also allows unlimited free transactions at ATMs of other banks to customers maintaining an MAB of more than Rs. 1 lakh, according to SBI\'s website - sbi.co.in. Similarly, private sector peers ICICI Bank and HDFC Bank also allow their customers to make free transactions at ATMs every month under certain conditions. \r\nThe number of permitted free transactions at ATMs in a month depends on factors such as location of ATM - metro or non-metro - and the owner of ATM - whether it is owned by the home bank or any other bank.\r\n\r\nHere\'s a look at the number of free ATM transactions allowed by SBI, ICICI Bank and HDFC Bank to their customers every month, and the charges levied for additional transactions thereafter:\r\n\r\nState Bank of India (SBI)\r\n\r\nSBI allows its customers to make unlimited transactions at State Bank group ATMs free of cost under certain conditions. The customer is required to have maintained a certain monthly average balance in the previous month to be eligible for this service. For example, if the customer maintains an MAB of more than Rs. 1 lakh in a month, he or she is allowed to make unlimited transactions at State Bank group ATMs the next month, according to the bank\'s website.', '2018-07-20 00:00:00', 'atm.jpg', 'Active'),
(8, 2, 'Can India Drive Apple Towards World\'s 1st Trillion Dollar Company? Here\'s What Experts Say', 'New Delhi: At nearly $940 billion, Apple is certainly well on the way to becoming the world\'\'s first trillion dollar company -- and the feat could be achieved as early as the end of this year with upcoming iPhone launches.\r\nThe tech giant crossed the $900 billion market capitalisation mark in November last year following the launch of its \"super premium\" iPhone X and, according to CEO Tim Cook, in India,\"we set a new first-half record\" as Apple reported record results for the first quarter of 2018.\r\n\r\nHowever, in India -- the world\'\'s third-largest smartphone market -- the Cupertino-based iPhone maker has not crossed sales of 2-3 per cent despite arriving in the country almost a decade back.\r\n\r\nTrying hard to make inroads, the company is currently going through an overhaul under Michel Coulomb, the new head of the India operations who took over from Sanjay Kaul in December last year.\r\n\r\nThe iPhone maker is also seeking tax relief and other incentives from the government to begin assembling more handsets in the country and its proposal to set up a manufacturing unit is reportedly being evaluated.\r\n\r\nIn 2017, Apple sold nearly 3.2 million iPhones in India. As the company requires to increase its market cap by nearly six per cent to become a trillion-dollar company, can India pitch in?\r\n\r\nAccording to industry experts, India is the fastest-growing among the top 20 smartphone markets globally, with a large untapped user base potential in Tier 5 and 6 cities and beyond.\r\n\r\nThe rapid growth of the smartphone market can be attributed to several factors like low smartphone penetration, inexpensive mobile data and growing aspirational middle class.\r\n\r\n\"As a result, the Indian smartphone market continues to look fertile in the coming years, helping brands grow and enhance their portfolios.\"\r\n\r\n\"Certainly, for Apple too, it\'\'s a big market to target and grow as the aspirational buyers continue to opt for this luxury brand,\" Upasana Joshi, associate research manager, client devices, IDC India, told news agency IANS.\r\n\r\nThe current smartphone user base in India is at 400 million which is set to grow by leaps and bounds.\r\n\r\n\"Apple\'\'s market share in India has grown in recent years. It is a premium range player and is performing well in that segment in the country,\" says Anshul Gupta, research director at Gartner.', '2018-07-20 00:00:00', 'apple iphone.jpg', 'Active'),
(9, 2, 'Reliance Jio \'Monsoon Hungama\' Offer: How To Get A New JioPhone For Rs. 501', 'Reliance Jio has come up with \'Monsoon Hungama\' exchange offer under which, JioPhone will be available for Rs. 501. Customers can exchange any old feature phone (of any brand) for a brand new JioPhone (existing model) at an effective entry cost of Rs. 501, Reliance Jio said in a press release. The offer can be availed instantly at the retail point, on exchanging any old 2G/3G/4G (non-VOLTE) phone. Additionally, Rs. 501 is also a 100 per cent refundable security deposit at the end of 3 years, further said the release.', '2018-07-22 00:00:00', 'jio offer.jpg', 'Active'),
(13, 3, 'Honor Note 10 to launch in China on July 31, confirms company', 'Honor Note 10 will launch in Beijing, China on July 31, confirmed the company on Weibo. The post talks about the big screen, AI flagship and it will launch on July 31. Honor Note 10â€™s global launch will take place in Berlin, at the IFA tradeshow on August 30. Honor Note 10 will be a big-display smartphone from the company.\r\nHonor Note 10 comes after the company recently launched Honor 10. Huaweiâ€™s sub-brand Honor is skipping the number 9, in favour of Note 10 for its upcoming phone. Honorâ€™s President George Zhao has earlier said a Weibo post that the company has been working on this device for nearly two years.', '2018-07-20 00:00:00', 'honor10.jpg', 'Active'),
(14, 3, 'Nokia 6.1 Plus Android One, global variant of Nokia X6, launched: Price, specifications', 'Nokia 6.1 Plus Android One or Nokia X6 global variant has been launched in Hong Kong. The smartphone has been announced under Googleâ€™s Android One program, which means Nokia 6.1 Plus will offer a stock Android experience as well as regular software updates. To recall, Nokia X6 made its official debut in China earlier this year. Except for the Android One branding, rest of the specifications and features of Nokia 6.1 Plus are the same as the original Nokia X6.\r\n\r\nNokia 6.1 Plus Android One price and availability\r\n\r\nNokia 6.1 Plus Android One will sell at a price of HKD 2,288, which is around Rs 20,100 on conversion. The smartphone will go on sale in Hong Kong starting July 24. Nokia 6.1 Plus Android One will be available in two colour options â€“ Blue and White. It is unclear when the phone will make its way into other markets globally.', '2018-07-19 00:00:00', 'nokia-x6-android-one-759.jpg', 'Active'),
(15, 4, 'If a woman gets into trouble, I feel somewhere she is responsible for it: Mamta Mohandas', 'The Women in Cinema Collective, an association comprising of Mollywoodâ€™s women artistes and technicians, have been making headlines right from its inception. From calling out sexism, patriarchy and fighting for the rights of each other, these women have planted the seed of warranted revolution in Mollywood. They have also sparked a debate about why it was necessary to have such an organisation. In a recent interview to Kochi Times, actor Mamta Mohandas has commented that a body like WCC is â€˜not requiredâ€™ to address the needs of women artistes. Responding to a question about why she wasnâ€™t in the collective, she said, â€œIt was formed when I wasnâ€™t here. If you ask me would I have been a part of it if I was here, maybe not. Itâ€™s not because I am against or for it. I just donâ€™t have an opinion,â€ she said.\r\n\r\nShe goes on to add, â€œAbout not being part of WCC, I donâ€™t think it requires a body like the WCC to voice what we stand for. I donâ€™t understand the need for a body comprising just women. I function a little differently. I think a little differently. I think any mess that someone is in is created by themselves. However, I wasnâ€™t here when these incidents were happening.â€', '2018-07-22 00:00:00', 'mamta-mohandas.jpeg', 'Active'),
(16, 4, 'After dominating Indian box office, Ranbir Kapoorâ€™s Sanju to release in China', 'After a good run at the Indian box office, Fox Star Studios is now planning to release Ranbir Kapoor starrer Sanju in other Asian markets, including China.\r\n\r\nThe biographical drama based on the controversial life of actor Sanjay Dutt released in India on June 29 across 4,100 screens and has collected over Rs 300 crore in India, according to the filmâ€™s producers.\r\n\r\nâ€œMany distributors in China have reached out to us. They have watched the film and there is a lot of interest in releasing it in the country. We are also looking at the muscle of Fox Star to plan and release the film in Japan, South Korea, etc,â€ Vijay Singh, CEO, Fox Star Studios, told PTI.\r\n\r\nâ€œIt is all about good writing. Star power helps but the golden rule is you need to have a fantastic script and get someone who can capture the imagination. The audience will not throw money just for the sake of it. They are a reminder that good films will be accepted,â€ Singh, who is on board as a distributor, added.\r\n\r\nSanju was co-produced by Vidhu Vinod Chopra and director Rajkumar Hirani.', '2018-07-24 00:00:00', 'sanju.jpg', 'Active'),
(17, 4, 'Dhadak box office collection prediction: The Janhvi Kapoor starrer to earn Rs 6.5 crore on Day 1', 'Dharma Productions latest offering Dhadak is out in the theatres. The film which marks Sridevi and Boney Kapoorâ€™s daughter Janhvi Kapoorâ€™s debut in the film industry is expected to do good business at the box office. According to trade analyst Girish Johar, there are a few factors which have raised the bar of expectations from the Shashank Khaitan directorial.\r\n\r\nPredicting the first-day box office collection of Dhadak, he says, â€œThe movie will earn around Rs 6.5 crores on its opening day. It might be a little too much for a movie with a newcomer in the lead but Dhadak has three-four factors working in its favour. One, it is the Sridevi sympathy factor, second, Janhvi is making a debut with the movie, third, the film is a remake of Sairat which is already a blockbuster and last, it is a Dharma Production project.â€ Johar has also predicted over Rs 20 crore collection for Dhadak in its opening weekend.', '2018-07-20 00:00:00', 'dhadak.jpg', 'Active'),
(18, 4, 'Inside Virat Kohli and Anushka Sharmaâ€™s England vacation', 'Indian skipper Virat Kohli and Bollywood actor Anushka Sharma are in England. And their social media handles are proof that the two stars are making the most of their time together. On Thursday, Kohli shared a selfie with wife Anushka on his Instagram handle.\r\n\r\nThe cricketer is in the United Kingdom with the Indian cricket team for the series against England. Anushka joined Virat on his work tour early this month and even celebrated Mahendra Singh Dhoniâ€™s birthday with the team. A few days ago, the Sui Dhaaga actor also posted a photo with Virat where she was all smiles as she hugged him.', '2018-07-22 00:00:00', 'anushka-virat.jpg', 'Active'),
(19, 4, 'Skyscraper movie review: Strictly for Dwayne Johnson fans', 'Skyscraper movie director: Dwayne Johnson, Neve Campbell, Chin Han\r\nSkyscraper movie cast: Rawson Marshall Thurber\r\nSkyscraper movie rating: 1.5 stars\r\n\r\nThe star of Skyscraper, the worldâ€™s tallest building, â€œtwice the size of Burj Khalifaâ€, may be all about Hong Kong bling. But make no mistake. Americaâ€™s brightest, with Marine Corps, FBI, â€œ3 tours of Afghanistanâ€ credentials behind them, are about to put their stamp all over it.\r\n\r\nAnd not even much needs to be at stake, for that hardcore American training to kick in. Just the Rock and his family, which has the former Marine Corps/FBI guy, and now a security assesser for high rises, climbing up scaffoldings, crawling up and down the said skyscraperâ€™s walls, walking through fire, and even jumping into buildings from thin air (the latter trajectory already shredded by better physics and maths experts online).\r\n\r\nNot that you should go into a summer blockbuster expecting adherence to any laws of science. But then Skyscraper clearly loves to showcase its mechanics, strewn about the 225-floor ambitious glass structure. You may follow only a bit of it, but when the owner, Zhao (played by well-known Chinese actor Chin), and the Rockâ€™s Will walk onto a portion that literally has them standing in air with buildings at their feet down below, visible through glass, you can marvel at the audacity of it all.', '2018-07-22 00:00:00', 'skyscraper-review-dwayne-johnson.jpg', 'Active'),
(20, 5, 'India can make comeback in Test series if ball doesnâ€™t swing, says Graeme Swann', 'Former off-spinner Graeme Swann foresees a strong Indian comeback in next monthâ€™s Test series against England if the ball fails to swing, the chances of which are high due to a warmer-than-usual English summer.\r\n\r\nIndia lost the ODI series 1-2, giving England the bragging rights ahead of the five-match Test rubber starting August 1 in Birmingham. But Swann said things might just change for the better for the visitors in the longest format.\r\n\r\nâ€œIf the ball doesnâ€™t swing, England will have to rely on reverse swing later on. Jimmy (James Anderson) is not the same bowler with the older ball because by the time it starts reverse swinging, Kohli will be 60-70 not out,â€ Swann told PTI.\r\n\r\nâ€œEngland did well last time because Jimmy had the new ball swinging. Itâ€™s just not Indians who donâ€™t do well against swing. Every batsman in the world doesnâ€™t like it when the ball swings around especially when Anderson is bowling,â€ he said.', '2018-07-23 00:00:00', 'india cricket.jpg', 'Active'),
(21, 5, 'Asian Cup tune-up: India to play China in international friendly', 'The All India Football Federation on Friday confirmed that its senior national team will play China in an international friendly in October, as part of preparation for the 2019 Asian Cup.\r\n\r\nThe 97th-ranked Indian team will travel to Beijing to play against the 75th ranked China national team during the October 8-16, 2018 FIFA window.\r\n\r\nThough the date for the friendly will be decided in coming days, AIFF has proposed Saturday, October 13, as the match day.', '2018-07-23 00:00:00', 'india-football.jpg', 'Active'),
(22, 5, 'Neymar quashes transfer rumours: â€˜I am staying at PSGâ€™', 'PSG star forward Neymar on Thursday quashed transfer rumours and insisted that he would be staying at the French club. Speaking to reporters at a charity auction in Sao Paolo, the 26-year old said that he is staying in Paris. â€œIâ€™m staying, Iâ€™m staying in Paris, I have a contract,â€ he said. The footballer, who broke the transfer record in 2017 after making a move to PSG from Barcelona in a 222 million euro deal, was heavily linked with Real Madrid during the summer transfer window this year.\r\n\r\nWith Madrid star forward Cristiano Ronaldo making a move to Juventus, Neymarâ€™s transfer to the Spanish club further started making the rounds, despite the club issuing a series of statements denying interest in signing Brazil forward.', '2018-07-23 00:00:00', 'neymar.jpg', 'Active'),
(23, 5, 'Liverpool agree record deal for Roma goalkeeper Alisson', 'Liverpool have agreed to a record deal for the signing of Roma goalkeeper Alisson Becker for a fee of reportedly around â‚¬75m (Â£67m), subject to passing a medical. Alisson, who flew down to England on a private jet, will undergo a medical in the coming days. The 25-year-old has plied his trade at Rome for two years wherein he played 37 Serie A games. Liverpoolâ€™s astonishing bid is all set to shatter transfer records among goalkeepers as it will eclipse the 53m euros paid by Juventus to Parma for Gianluigi Buffon in 2001. The record fee for a stopper in English Premier League is Â£34.7million which Manchester City had to shell out for Ederson in 2017.\r\n\r\nAlisson featured in the recently concluded FIFA World Cup 2018 wherein he played for Brazil and kept three clean sheets in five matches. In comparison to Liverpoolâ€™s current roster of goalkeepers- Karius and Mignolet Alisson boasts of a higher passing accuracy (79 percent) and a higher percentage of shots prevented (79 percent) than the two.', '2018-07-20 00:00:00', 'alisson_reuters-m.jpg', 'Active'),
(24, 5, 'Franceâ€™s World Cup celebrations go from euphoria to unruly', 'France won the World Cup for the second time in spectacular style on Sunday as a 4-2 victory over Croatia in one of the most entertaining and action-packed finals for decades ended the battling outsiders\' dreams of a first title. At the final whistle, the team carried coach Didier Deschamps in celebrations. (Source: Reuters)', '2018-07-20 00:00:00', 'orig.jpg', 'Active'),
(25, 6, 'Good rains to persist along the West Coast till July 25 - See more at: https://www.skymetweather.com/content/weather-news-and-analysis/good-rains-to-persist-along-the-west-coast-till-july-25/#sthash.K', 'During the past 24 hours from 08:30 am on Thursday, Agumbe recorded hefty rains to the tune of 108 mm, followed by Mahabaleshwar 93 mm, Kannur 68 mm, Mangaluru 67 mm, Ratnagiri 50 mm, Madikeri 45 mm, Honnavar 41 mm, Vengurla 30 mm, Kozhikode 29 mm, Alappuzha 22 mm, Harnai 21 mm, Panjim 21 mm, Kochi 19 mm, Thane 18 mm, Karwar 15 mm and Santa Cruz in Mumbai 6 mm.\r\n\r\nNow, the cyclonic circulation over Gujarat is expected to persist. Consequently, we can expect scattered light to moderate rains to endure over North Konkan & Goa including Mumbai.\r\n\r\nFurther, with the persistence of off shore trough running from Coastal Maharashtra to North Coastal Kerala, moderate to heavy rains would continue over South Konkan & Goa and Coastal Karnataka. But then, rainfall activity may decrease slightly over Kerala.\r\n\r\nAs per Skymet Weather, these good spells are most anticipated to continue till July 25. Afterward, significant decrease in rainfall is likely over Konkan & Goa and Kerala, however Coastal Karnataka would continue to witness light to moderate rains with one or two heavy spells.', '2018-07-22 00:00:00', 'kerala-post.jpg', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `status`) VALUES
(3, 'alan', 'alan', 'Active'),
(4, 'admin', 'admin', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
