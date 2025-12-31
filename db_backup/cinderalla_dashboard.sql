-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2025 at 07:51 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinderellatravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `blogname` varchar(255) DEFAULT NULL,
  `blogcategories` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`blogcategories`)),
  `blogthumbnail` varchar(255) DEFAULT NULL,
  `blogdescription` text DEFAULT NULL,
  `metakeywords` text DEFAULT NULL,
  `tags` text DEFAULT NULL,
  `metadescription` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blogname`, `blogcategories`, `blogthumbnail`, `blogdescription`, `metakeywords`, `tags`, `metadescription`, `created_at`, `updated_at`) VALUES
(16, '💳 Visa Consultation Tips — How to Get Your Travel Visa Approved Faster', '[\"Travel\",\"New Tour\"]', '1765518891_360_F_115403175_LvIe8aX3EDiXlw3Q11NVoYTCzXGkGzTS.jpg', '<h3>🛂 Visa Consultation Tips — How to Get Your Travel Visa Approved Faster</h3><h3><strong style=\"color: rgb(0, 0, 0);\">Your Guide to Stress-Free International Travel </strong></h3><p><span style=\"color: rgb(0, 0, 0);\">Planning </span><strong style=\"color: rgb(0, 0, 0);\">international travel </strong><span style=\"color: rgb(0, 0, 0);\">is exciting, but the visa process can sometimes feel </span></p><p><span style=\"color: rgb(0, 0, 0);\">overwhelming. Every country has its own rules, documents, and security checks — </span></p><p><span style=\"color: rgb(0, 0, 0);\">and a single mistake can delay your dream vacation.</span></p><p><span style=\"color: rgb(0, 0, 0);\">The good news? With the right guidance and professional </span><strong style=\"color: rgb(0, 0, 0);\">visa consultation</strong><span style=\"color: rgb(0, 0, 0);\">, getting </span></p><p><span style=\"color: rgb(0, 0, 0);\">your </span><strong style=\"color: rgb(0, 0, 0);\">travel visa </strong><span style=\"color: rgb(0, 0, 0);\">approved becomes fast, easy, and stress-free! </span></p><p><span style=\"color: rgb(0, 0, 0);\">Here are expert tips to help you secure your visa quickly and confidently:</span></p><h3><strong style=\"color: rgb(0, 0, 0);\">📌 1️⃣ Start Early — Don’t Wait Until the Last Moment </strong></h3><p><span style=\"color: rgb(0, 0, 0);\">Visa approvals can take anywhere from a few days to several weeks depending on </span></p><p><span style=\"color: rgb(0, 0, 0);\">the destination. </span></p><p><span style=\"color: rgb(0, 0, 0);\">Start your visa planning </span><strong style=\"color: rgb(0, 0, 0);\">at least 1–3 months before </strong><span style=\"color: rgb(0, 0, 0);\">your trip, especially when </span></p><p><span style=\"color: rgb(0, 0, 0);\">booking: </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔</span><span style=\"color: rgb(120, 93, 200);\"> </span><span style=\"color: rgb(0, 0, 0);\">Holiday packages </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔</span><span style=\"color: rgb(120, 93, 200);\"> </span><strong style=\"color: rgb(0, 0, 0);\">Travel vacation packages </strong></p><p><span style=\"color: rgb(0, 0, 0);\">✔</span><span style=\"color: rgb(120, 93, 200);\"> </span><span style=\"color: rgb(0, 0, 0);\">Business trips </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔</span><span style=\"color: rgb(120, 93, 200);\"> </span><span style=\"color: rgb(0, 0, 0);\">Group or </span><strong style=\"color: rgb(0, 0, 0);\">family trip </strong><span style=\"color: rgb(0, 0, 0);\">tours </span></p><p><span style=\"color: rgb(0, 0, 0);\">Early preparation = no last-minute stress.</span></p><h3><strong style=\"color: rgb(0, 0, 0);\">📝 2️⃣ Get Your Documents Correct &amp; Complete </strong></h3><p><span style=\"color: rgb(0, 0, 0);\">Most visa rejections happen due to missing or incorrect documents. </span></p><p><span style=\"color: rgb(0, 0, 0);\">Common requirements: </span></p><p><span style=\"color: rgb(120, 93, 200);\"> </span><span style=\"color: rgb(0, 0, 0);\">Valid passport (minimum 6 months validity) </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔</span><span style=\"color: rgb(120, 93, 200);\"> </span><span style=\"color: rgb(0, 0, 0);\">Financial proof (bank statements) </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔</span><span style=\"color: rgb(120, 93, 200);\"> </span><span style=\"color: rgb(0, 0, 0);\">Confirmed return flight &amp; </span><strong style=\"color: rgb(0, 0, 0);\">hotel booking </strong></p><p><span style=\"color: rgb(0, 0, 0);\">✔</span><span style=\"color: rgb(120, 93, 200);\"> </span><span style=\"color: rgb(0, 0, 0);\">Travel insurance for the full stay </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔</span><span style=\"color: rgb(120, 93, 200);\"> </span><span style=\"color: rgb(0, 0, 0);\">Passport-size photographs </span></p><p><span style=\"color: rgb(0, 0, 0);\">Professional </span><strong style=\"color: rgb(0, 0, 0);\">travel agents </strong><span style=\"color: rgb(0, 0, 0);\">ensure everything is accurate and well-organized.</span></p><h3><strong style=\"color: rgb(0, 0, 0);\">🎯 3️⃣ Choose the Right Visa Type </strong></h3><p><span style=\"color: rgb(0, 0, 0);\">Tourist, business, transit — every visa type has different conditions. </span></p><p><span style=\"color: rgb(0, 0, 0);\">If you are planning:</span></p><p><span style=\"color: rgb(0, 0, 0);\">✦ </span><strong style=\"color: rgb(0, 0, 0);\">Family vacation packages </strong><span style=\"color: rgb(0, 0, 0);\">→ Apply for tourist visa </span></p><p><span style=\"color: rgb(0, 0, 0);\">✦ Business trips → Business visa </span></p><p><span style=\"color: rgb(0, 0, 0);\">✦ </span><strong style=\"color: rgb(0, 0, 0);\">Tours and cruises </strong><span style=\"color: rgb(0, 0, 0);\">→ Multiple-entry visa when needed </span></p><p><span style=\"color: rgb(0, 0, 0);\">Wrong visa selection = easy rejection. </span></p><p><span style=\"color: rgb(0, 0, 0);\">A </span><strong style=\"color: rgb(0, 0, 0);\">travel agency </strong><span style=\"color: rgb(0, 0, 0);\">helps you choose correctly</span></p><h3><strong style=\"color: rgb(0, 0, 0);\">💳 4️⃣ Show Strong Travel Intent &amp; Ties to Home Country </strong></h3><p><span style=\"color: rgb(0, 0, 0);\">Authorities want assurance that you </span><strong style=\"color: rgb(0, 0, 0);\">will return </strong><span style=\"color: rgb(0, 0, 0);\">to your home country. </span></p><p><span style=\"color: rgb(0, 0, 0);\">Provide: </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔</span><span style=\"color: rgb(120, 93, 200);\"> </span><span style=\"color: rgb(0, 0, 0);\">Employment letter </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔</span><span style=\"color: rgb(120, 93, 200);\"> </span><span style=\"color: rgb(0, 0, 0);\">Family ties </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔</span><span style=\"color: rgb(120, 93, 200);\"> </span><span style=\"color: rgb(0, 0, 0);\">Return ticket (very important!) </span></p><p><span style=\"color: rgb(0, 0, 0);\">This improves visa success for </span><strong style=\"color: rgb(0, 0, 0);\">solo travel packages </strong><span style=\"color: rgb(0, 0, 0);\">too.</span></p><h3><span style=\"color: rgb(0, 0, 0);\">🌍 5️⃣ This improves visa success for </span><strong style=\"color: rgb(0, 0, 0);\">solo travel packages </strong><span style=\"color: rgb(0, 0, 0);\">too.</span></h3><p><strong style=\"color: rgb(0, 0, 0);\">Book Through a Trusted International Travel Agency </strong></p><p><span style=\"color: rgb(0, 0, 0);\">Experts like </span><strong style=\"color: rgb(0, 0, 0);\">Lamira Travel &amp; Tours </strong><span style=\"color: rgb(0, 0, 0);\">offer: </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔</span><span style=\"color: rgb(120, 93, 200);\"> </span><span style=\"color: rgb(0, 0, 0);\">Complete visa assistance letter </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔</span><span style=\"color: rgb(120, 93, 200);\"> </span><span style=\"color: rgb(0, 0, 0);\">Pre-check of documents </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔</span><span style=\"color: rgb(120, 93, 200);\"> </span><span style=\"color: rgb(0, 0, 0);\">Embassy appointment scheduling </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔</span><span style=\"color: rgb(120, 93, 200);\"> </span><span style=\"color: rgb(0, 0, 0);\">Quick updates on visa status </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔</span><span style=\"color: rgb(120, 93, 200);\"> </span><span style=\"color: rgb(0, 0, 0);\">Best </span><strong style=\"color: rgb(0, 0, 0);\">travel packages </strong><span style=\"color: rgb(0, 0, 0);\">after approval </span></p><p><span style=\"color: rgb(0, 0, 0);\">Trusted guidance means faster approvals — and less stress.</span></p><h3><strong style=\"color: rgb(0, 0, 0);\">🛡️ 6️⃣ Add Travel Insurance for Extra Security </strong></h3><p><span style=\"color: rgb(0, 0, 0);\">Many countries </span><strong style=\"color: rgb(0, 0, 0);\">require </strong><span style=\"color: rgb(0, 0, 0);\">travel insurance for visa approval. </span></p><p><span style=\"color: rgb(0, 0, 0);\">It protects you from: </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔</span><span style=\"color: rgb(120, 93, 200);\"> </span><span style=\"color: rgb(0, 0, 0);\">Medical emergencies </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔</span><span style=\"color: rgb(120, 93, 200);\"> </span><span style=\"color: rgb(0, 0, 0);\">Flight delays</span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Trip cancellations </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔</span><span style=\"color: rgb(120, 93, 200);\"> </span><span style=\"color: rgb(0, 0, 0);\">Lost baggage </span></p><p><span style=\"color: rgb(0, 0, 0);\">This is essential for safe </span><strong style=\"color: rgb(0, 0, 0);\">vacation trips</strong><span style=\"color: rgb(0, 0, 0);\">.</span></p><h3><strong style=\"color: rgb(0, 0, 0);\">📞 7️⃣ Follow Embassy &amp; Consulate Instructions Carefully </strong></h3><p><span style=\"color: rgb(0, 0, 0);\">Always: </span></p><p><span style=\"color: rgb(120, 93, 200);\"> </span><span style=\"color: rgb(0, 0, 0);\">Attend interviews on time </span></p><p><span style=\"color: rgb(120, 93, 200);\"> </span><span style=\"color: rgb(0, 0, 0);\">Provide truthful information </span></p><p><span style=\"color: rgb(120, 93, 200);\"> </span><span style=\"color: rgb(0, 0, 0);\">Avoid last-minute changes </span></p><p><span style=\"color: rgb(0, 0, 0);\">Your smooth cooperation helps faster processing.</span></p><h3><strong style=\"color: rgb(0, 0, 0);\">🌟 Final Words: Travel Smarter, Travel Confidently </strong></h3><p><span style=\"color: rgb(0, 0, 0);\">A visa should never stand in the way of your dream holiday or adventure travel. </span></p><p><span style=\"color: rgb(0, 0, 0);\">With the right help, your entire journey — from visa to </span><strong style=\"color: rgb(0, 0, 0);\">tour packages </strong><span style=\"color: rgb(0, 0, 0);\">— becomes </span></p><p><span style=\"color: rgb(0, 0, 0);\">effortless.</span></p><h3><strong style=\"color: rgb(0, 0, 0);\">✨ Get Visa Assistance from Lamira Travel &amp; Tours </strong></h3><p><span style=\"color: rgb(0, 0, 0);\">We offer: </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔</span><span style=\"color: rgb(120, 93, 200);\"> </span><span style=\"color: rgb(0, 0, 0);\">Fast &amp; reliable </span><strong style=\"color: rgb(0, 0, 0);\">visa consultation </strong></p><p><span style=\"color: rgb(0, 0, 0);\">✔</span><span style=\"color: rgb(120, 93, 200);\"> </span><span style=\"color: rgb(0, 0, 0);\">Expert support for all travel documents </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔</span><span style=\"color: rgb(120, 93, 200);\"> </span><span style=\"color: rgb(0, 0, 0);\">Best deals on flight tickets &amp; accommodation </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔</span><span style=\"color: rgb(120, 93, 200);\"> </span><span style=\"color: rgb(0, 0, 0);\">Customized </span><strong style=\"color: rgb(0, 0, 0);\">cheap holiday packages </strong></p><p><span style=\"color: rgb(0, 0, 0);\">✔</span><span style=\"color: rgb(120, 93, 200);\"> </span><span style=\"color: rgb(0, 0, 0);\">Trusted </span><strong style=\"color: rgb(0, 0, 0);\">international travel agency </strong><span style=\"color: rgb(0, 0, 0);\">service</span></p><p><strong style=\"color: rgb(0, 0, 0);\">📩 Contact us today </strong><span style=\"color: rgb(0, 0, 0);\">to start your visa process! </span></p><p><span style=\"color: rgb(0, 116, 186);\"> 🌍</span><em style=\"color: rgb(0, 0, 0);\">Your dream destination is just one step away. ✈️</em></p>', '[\"Stress-Free International Travel\",\"Travel Visa Approved Faster\"]', '[\"Tour\",\"Travel\",\"Holidays\"]', 'Visa Consultation Tips — How to Get Your Travel Visa Approved Faster \r\nYour Guide to Stress-Free International Travel', '2025-08-13 09:45:15', '2025-12-12 00:45:58'),
(17, '🏨 What to Look for While Booking Hotels for Solo Travel', '[\"Travel\",\"New Tour\"]', '1765518264_solo-travel-planning.jpg', '<h3>A Smart Traveler’s Guide to Safety, Comfort &amp; Convenience<strong class=\"ql-size-large\" style=\"color: rgb(0, 0, 0);\"> </strong></h3><p>Solo travel is one of the most exciting ways to explore the world! Whether you\'re planning <strong>adventure travel,</strong> a relaxing beach getaway, or a cultural city tour — choosing the right hotel booking can make <span style=\"color: rgb(0, 0, 0);\">your journey safe, comfortable, and memorable. </span></p><p><span style=\"color: rgb(0, 0, 0);\">Here’s a complete guide to help you pick the best place to stay when traveling alone.</span></p><h3><strong style=\"color: rgb(0, 0, 0);\">🔐1️⃣. Prioritize Safety Above All </strong></h3><p><span style=\"color: rgb(0, 0, 0);\">Your hotel must ofer a secure environment throughout your stay. </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ 24/7 security &amp; CCTV cameras </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Well-lit entrance and hallways </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Secure room locks and electronic key cards </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Positive reviews from solo travelers </span></p><p><strong style=\"color: rgb(0, 0, 0);\">Tip:</strong><span style=\"color: rgb(0, 0, 0);\"> Choose hotels located in safe, central neighborhoods close to major </span><strong style=\"color: rgb(0, 0, 0);\">travel destinations</strong><span style=\"color: rgb(0, 0, 0);\"> and </span></p><p><span style=\"color: rgb(0, 0, 0);\">transportation. </span></p><h3><strong style=\"color: rgb(0, 0, 0);\">🌍 2️⃣. Check the Location Wisely </strong></h3><p><span style=\"color: rgb(0, 0, 0);\">The ideal location can save time and money. </span></p><p><span style=\"color: rgb(0, 0, 0);\">Look for hotels near: </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Tourist attractions </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Public transport &amp; city centers </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Restaurants &amp; convenience stores </span></p><p><span style=\"color: rgb(0, 0, 0);\">Perfect locations also make </span><strong style=\"color: rgb(0, 0, 0);\">guided tours</strong><span style=\"color: rgb(0, 0, 0);\">, </span><strong style=\"color: rgb(0, 0, 0);\">t</strong><span style=\"color: rgb(0, 0, 0);\"> </span><strong style=\"color: rgb(0, 0, 0);\">ravel tours</strong><span style=\"color: rgb(0, 0, 0);\">, and sightseeing much easier!</span></p><h3><strong style=\"color: rgb(0, 0, 0);\">💸 3️⃣. Compare Prices &amp; Packages </strong></h3><p><span style=\"color: rgb(0, 0, 0);\">Solo travel doesn’t mean overpaying. </span></p><p><span style=\"color: rgb(0, 0, 0);\">Find </span><strong style=\"color: rgb(0, 0, 0);\">c</strong><span style=\"color: rgb(0, 0, 0);\"> </span><strong style=\"color: rgb(0, 0, 0);\">heap vacation packages</strong><span style=\"color: rgb(0, 0, 0);\"> or hotel deals that include: </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Breakfast </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Airport transfers </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Free Wi-Fi </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Activity options for travelers </span></p><p><span style=\"color: rgb(0, 0, 0);\">Budget-friendly stays allow you to spend more on your </span><strong style=\"color: rgb(0, 0, 0);\">vacation trips</strong><span style=\"color: rgb(0, 0, 0);\"> and experiences.</span></p><h3><strong style=\"color: rgb(0, 0, 0);\">🌟4️⃣. Read Authentic Reviews </strong></h3><p><span style=\"color: rgb(0, 0, 0);\">Before booking, check reviews written by real travelers.</span></p><p><span style=\"color: rgb(0, 0, 0);\">Focus on: </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Cleanliness </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Staf behavior</span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Noise level </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Safety for solo guests </span></p><p><span style=\"color: rgb(0, 0, 0);\">Reviews help you avoid surprises and select the best holiday packages and stays. </span></p><h3><strong style=\"color: rgb(0, 0, 0);\">🤝 5️⃣. Look for Solo-Friendly Amenities </strong></h3><p><span style=\"color: rgb(0, 0, 0);\">Hotels that welcome solo travelers usually ofer: </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Lounge/common spaces to socialize </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Concierge services for </span><strong style=\"color: rgb(0, 0, 0);\">tours and packages </strong></p><p><span style=\"color: rgb(0, 0, 0);\">✔ On-site dining options </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Laundry services </span></p><p><span style=\"color: rgb(0, 0, 0);\">Such facilities enhance comfort while exploring </span><strong style=\"color: rgb(0, 0, 0);\">best places to travel</strong><span style=\"color: rgb(0, 0, 0);\"> alone.</span></p><h3><strong style=\"color: rgb(0, 0, 0);\">🛬 6️⃣. Check Connectivity &amp; Transport </strong></h3><p><span style=\"color: rgb(0, 0, 0);\">Good public transport access is essential during a </span><strong style=\"color: rgb(0, 0, 0);\">solo travel package</strong><span style=\"color: rgb(0, 0, 0);\"> or </span><strong style=\"color: rgb(0, 0, 0);\">i</strong><span style=\"color: rgb(0, 0, 0);\"> </span><strong style=\"color: rgb(0, 0, 0);\">nternational travel</strong><span style=\"color: rgb(0, 0, 0);\"> tour.</span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Nearest bus/train station </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Nearby airport shuttle </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Safe taxi options </span></p><p><span style=\"color: rgb(0, 0, 0);\">Easy connectivity keeps your journey stress-free.</span></p><h3><strong style=\"color: rgb(0, 0, 0);\"> 📃 7️⃣. Understand Hotel Policies </strong></h3><p><span style=\"color: rgb(0, 0, 0);\">Every hotel has policies you must review: </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Check-in/out time </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Cancellation rules </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Guest policy </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Extra charges </span></p><p><span style=\"color: rgb(0, 0, 0);\">Knowing this in advance protects your budget and peace of mind.</span></p><h3><strong style=\"color: rgb(0, 0, 0);\">✨Final Travel Tip!</strong></h3><p><span style=\"color: rgb(0, 0, 0);\">Booking through a </span><strong style=\"color: rgb(0, 0, 0);\">trusted travel agency</strong><span style=\"color: rgb(0, 0, 0);\"> like </span><strong style=\"color: rgb(0, 0, 0);\">Lamira Travel &amp; Tours</strong><span style=\"color: rgb(0, 0, 0);\"> ensures:</span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Secure hotel reservations worldwide </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Custom </span><strong style=\"color: rgb(0, 0, 0);\">t</strong><span style=\"color: rgb(0, 0, 0);\"> </span><strong style=\"color: rgb(0, 0, 0);\">our packages</strong><span style=\"color: rgb(0, 0, 0);\"> for solo travelers </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Best deals on accommodation</span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Complete assistance for fights &amp; visas </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ 24/7 support during your trip </span></p><p><span style=\"color: rgb(0, 0, 0);\">Wherever you go — we make sure you feel confdent, safe, and excited to explore!</span></p><h3><strong style=\"color: rgb(0, 0, 0);\">Ready for Your Next Solo Adventure?</strong></h3><p><span style=\"color: rgb(0, 0, 0);\">🌐 Contact Lamira Travel &amp; Tours today for amazing hotel deals and personalized solo travel </span></p><p><span style=\"color: rgb(0, 0, 0);\">packages! ✈️ 🌍</span></p>', '[\"A Smart Traveler\\u2019s Guide to Safety\",\"Comfort & Convenience\"]', '[\"uu\",\"pp\",\"ll\"]', 'Solo travel is one of the most exciting ways to explore the world! Whether you\'re planning adventure travel, a relaxing beach getaway, or a cultural city tour — choosing the right hotel booking can make your journey safe, comfortable, and memorable.', '2025-10-14 04:03:33', '2025-12-12 06:13:37'),
(18, '👨‍👩‍👧‍👦 Family Trip Planning Guide: Stress-Free Travel with Kids', '[\"Travel\",\"New Tour\"]', '1765518452_solo-travel-planning (1).jpg', '<h3>Make Your Next Vacation Fun, Safe &amp; Memorable</h3><p><span style=\"color: rgb(0, 0, 0);\">Planning a </span><strong style=\"color: rgb(0, 0, 0);\">family trip</strong><span style=\"color: rgb(0, 0, 0);\"> is exciting — but traveling with kids requires extra preparation and smart choices. From choosing the right </span><strong style=\"color: rgb(0, 0, 0);\">vacation packages</strong><span style=\"color: rgb(0, 0, 0);\"> to booking kid-friendly hotels, every detail matters to ensure stress-free and enjoyable memories. </span></p><p><span style=\"color: rgb(0, 0, 0);\">To help you make the most of your next holiday, here is a complete guide for parents traveling with </span></p><p><span style=\"color: rgb(0, 0, 0);\">children!</span></p><h3><strong style=\"color: rgb(0, 0, 0);\">🛫 1️⃣ Choose Family-Friendly Travel Destinations </strong></h3><p><span style=\"color: rgb(0, 0, 0);\">Kids enjoy trips when the destination is fun and engaging. Look for places with: </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Theme parks, beaches, or wildlife </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Safe and clean environments </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Easy access to hospitals and supermarkets </span></p><p><span style=\"color: rgb(0, 0, 0);\">Many </span><strong style=\"color: rgb(0, 0, 0);\">travel agents</strong><span style=\"color: rgb(0, 0, 0);\"> offer special </span><strong style=\"color: rgb(0, 0, 0);\">family vacation packages</strong><span style=\"color: rgb(0, 0, 0);\"> to popular </span><strong style=\"color: rgb(0, 0, 0);\">best places for vacation</strong><span style=\"color: rgb(0, 0, 0);\"> </span></p><p><span style=\"color: rgb(0, 0, 0);\">designed around children’s interests.</span></p><h3><strong style=\"color: rgb(0, 0, 0);\">🧳 2️⃣ Pack Smart &amp; Light </strong></h3><p><span style=\"color: rgb(0, 0, 0);\">Packing with kids doesn’t mean carrying the whole house!</span></p><p><span style=\"color: rgb(0, 0, 0);\">Essentials include: </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Snacks &amp; entertainment </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ First-aid &amp; prescription medicines</span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Comfortable clothing </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Travel documents &amp; insurance </span></p><p><span style=\"color: rgb(0, 0, 0);\">Pro Tip: Keep important items in a carry-on for easy access during fights.</span></p><h3><strong style=\"color: rgb(0, 0, 0);\">🏨 3️⃣ Book the Right Hotel &amp; Room Setup </strong></h3><p><span style=\"color: rgb(0, 0, 0);\">Hotels can make or break your family holiday experience. </span></p><p><span style=\"color: rgb(0, 0, 0);\">Look for: </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Family suites or connecting rooms </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Play areas or pools for kids </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Breakfast included </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Safe surroundings </span></p><p><span style=\"color: rgb(0, 0, 0);\">Our </span><strong style=\"color: rgb(0, 0, 0);\">h</strong><span style=\"color: rgb(0, 0, 0);\"> </span><strong style=\"color: rgb(0, 0, 0);\">otel booking</strong><span style=\"color: rgb(0, 0, 0);\"> services ensure your stay is comfortable and kid-approved.</span></p><h3><strong style=\"color: rgb(0, 0, 0);\">📋 4️⃣ Follow a Flexible Itinerary </strong></h3><p><span style=\"color: rgb(0, 0, 0);\">Children can get tired easily — so avoid rushing! </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Plan breaks between activities </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Include simple attractions </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Keep nap and meal times in mind </span></p><p><span style=\"color: rgb(0, 0, 0);\">Family tours should be enjoyable, not exhausting. Guided </span><strong style=\"color: rgb(0, 0, 0);\">tour packages</strong><span style=\"color: rgb(0, 0, 0);\"> can help manage your </span></p><p><span style=\"color: rgb(0, 0, 0);\">schedule stress-free.</span></p><h3><strong style=\"color: rgb(0, 0, 0);\">🍽️ 5️⃣ Keep Kids Hydrated &amp; Well-Fed </strong></h3><p><span style=\"color: rgb(0, 0, 0);\">Healthy kids = Happy trip! </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Carry snacks for travel and tours </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Pick hotels with kid-friendly dining </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Avoid trying too many new foods at once </span></p><p><span style=\"color: rgb(0, 0, 0);\">Good nutrition keeps energy high throughout your </span><strong style=\"color: rgb(0, 0, 0);\">vacation trips</strong><span style=\"color: rgb(0, 0, 0);\">.</span></p><h3><strong style=\"color: rgb(0, 0, 0);\">🎒 6️⃣ Safety Comes First</strong></h3><p><span style=\"color: rgb(0, 0, 0);\">Wherever you go, safety must be the priority.</span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Use ID bracelets for kids </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Keep emergency contacts ready </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Choose safe transportation options</span></p><p><span style=\"color: rgb(0, 0, 0);\">Worried about unexpected issues? </span><strong style=\"color: rgb(0, 0, 0);\">Travel insurance</strong><span style=\"color: rgb(0, 0, 0);\"> protects your family fnancially during sudden emergencies.</span></p><h3><strong style=\"color: rgb(0, 0, 0);\">💡 7️⃣ Get Your Kids Involved in Planning </strong></h3><p><span style=\"color: rgb(0, 0, 0);\">Kids feel excited when they help plan! </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Let them pick an activity </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Show pictures of the destination </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Teach them travel tips </span></p><p><span style=\"color: rgb(0, 0, 0);\">This turns travel into a fun learning adventure.</span></p><h3><strong style=\"color: rgb(0, 0, 0);\">🌟 Why Choose Lamira Travel &amp; Tours for Your Family Trips? </strong></h3><p><span style=\"color: rgb(0, 0, 0);\">At Lamira Travel &amp; Tours, we bring families closer through stress-free travel planning:</span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Customized </span><strong style=\"color: rgb(0, 0, 0);\">cheap holiday packages</strong><span style=\"color: rgb(0, 0, 0);\"> for families </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Air Ticketing + Hotel Booking + Visa Assistance </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Best deals on </span><strong style=\"color: rgb(0, 0, 0);\">travel packages</strong><span style=\"color: rgb(0, 0, 0);\"> and cruises </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ 24/7 support so you can focus on making memories </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Trusted </span><strong style=\"color: rgb(0, 0, 0);\">i</strong><span style=\"color: rgb(0, 0, 0);\"> </span><strong style=\"color: rgb(0, 0, 0);\">nternational travel agency</strong><span style=\"color: rgb(0, 0, 0);\"> service worldwide</span></p><h3><strong style=\"color: rgb(0, 0, 0);\">✨Create Unforgettable Family Moments </strong></h3><p><span style=\"color: rgb(0, 0, 0);\">From beach holidays to exciting city tours — your perfect family vacation is waiting!</span></p><p><span style=\"color: rgb(0, 0, 0);\">📩 Contact Lamira Travel &amp; Tours today for the best family vacation packages!</span></p><p><span style=\"color: rgb(0, 0, 0);\">👨‍👩‍👧‍👦 Travel together. Smile together. ✈️ 🌍</span></p>', '[\"Vacation Fun\",\"Safe\",\"Memorable\"]', '[\"uu\",\"pp\",\"ll\"]', 'Planning a family trip is exciting — but traveling with kids requires extra preparation and smart choices. From choosing the right vacation packages to booking kid-friendly hotels, every detail matters to ensure stress-free and enjoyable memories.', '2025-10-14 04:03:33', '2025-12-12 00:45:25'),
(19, '🏔️ 🏖️  Mountain vs. Beach Vacations — What’s Right for You?', '[\"Travel\",\"New Tour\"]', '1765520339_tunnels-beach-and-bali-hai-point.jpg', '<h3>🏔️ Mountain vs. Beach Vacations — What’s Right for You?</h3><h3><strong style=\"color: rgb(0, 0, 0);\">Choosing Your Perfect Travel Getaway </strong></h3><p><span style=\"color: rgb(0, 0, 0);\">When planning a much-needed holiday, one of the biggest questions travelers face </span></p><p><span style=\"color: rgb(0, 0, 0);\">is: </span></p><p><strong style=\"color: rgb(0, 0, 0);\">Mountain escape or beach vacation? </strong></p><p><span style=\"color: rgb(0, 0, 0);\">Both offer stunning beauty, adventure, and relaxation — but each creates a </span></p><p><span style=\"color: rgb(0, 0, 0);\">completely different travel experience. Whether you\'re booking </span><strong style=\"color: rgb(0, 0, 0);\">family vacation </strong></p><p><strong style=\"color: rgb(0, 0, 0);\">packages</strong><span style=\"color: rgb(0, 0, 0);\">, planning </span><strong style=\"color: rgb(0, 0, 0);\">solo travel</strong><span style=\"color: rgb(0, 0, 0);\">, or searching for </span><strong style=\"color: rgb(0, 0, 0);\">cheap holiday deals</strong><span style=\"color: rgb(0, 0, 0);\">, your choice </span></p><p><span style=\"color: rgb(0, 0, 0);\">depends on your travel style. </span></p><p><span style=\"color: rgb(0, 0, 0);\">Let’s explore the benefits of both destinations so you can pick the perfect trip</span></p><h3><strong style=\"color: rgb(0, 0, 0);\">🏔️ Why Choose a Mountain Vacation? </strong></h3><p><span style=\"color: rgb(0, 0, 0);\">Mountains are perfect for travelers seeking peace, adventure, and a connection with </span></p><p><span style=\"color: rgb(0, 0, 0);\">nature. </span></p><p><strong style=\"color: rgb(0, 0, 0);\">Top Reasons to Love Mountain Holidays: </strong></p><p><span style=\"color: rgb(0, 0, 0);\">✔</span><span style=\"color: rgb(120, 93, 200);\"> </span><span style=\"color: rgb(0, 0, 0);\">Breathtaking views &amp; fresh air </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔</span><span style=\"color: rgb(120, 93, 200);\"> </span><span style=\"color: rgb(0, 0, 0);\">Cool weather — ideal for relaxing getaways </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔</span><span style=\"color: rgb(120, 93, 200);\"> </span><span style=\"color: rgb(0, 0, 0);\">Adventure sports like hiking, trekking &amp; skiing </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔</span><span style=\"color: rgb(120, 93, 200);\"> </span><span style=\"color: rgb(0, 0, 0);\">Perfect for honeymoon &amp; romantic stays </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔</span><span style=\"color: rgb(120, 93, 200);\"> </span><span style=\"color: rgb(0, 0, 0);\">Better for travelers who want calm, less-crowded places </span></p><p><span style=\"color: rgb(0, 0, 0);\">Mountain destinations like the </span><strong style=\"color: rgb(0, 0, 0);\">Swiss Alps</strong><span style=\"color: rgb(0, 0, 0);\">, </span><strong style=\"color: rgb(0, 0, 0);\">Himalayas</strong><span style=\"color: rgb(0, 0, 0);\">, or </span><strong style=\"color: rgb(0, 0, 0);\">Rockies </strong><span style=\"color: rgb(0, 0, 0);\">offer peaceful </span></p><p><span style=\"color: rgb(0, 0, 0);\">retreats and unforgettable scenery. Ideal if you love </span><strong style=\"color: rgb(0, 0, 0);\">exploration and nature-based </strong></p><p><strong style=\"color: rgb(0, 0, 0);\">travel packages</strong><span style=\"color: rgb(0, 0, 0);\">.</span></p><h3><strong style=\"color: rgb(0, 0, 0);\">🏖️ Why Choose a Beach Vacation? </strong></h3><p><span style=\"color: rgb(0, 0, 0);\">If sun, sand, and sea refresh your soul — beaches are calling you! </span></p><p><strong style=\"color: rgb(0, 0, 0);\">Why Travelers Love Beach Holidays: </strong></p><p><span style=\"color: rgb(0, 0, 0);\">✔</span><span style=\"color: rgb(120, 93, 200);\"> </span><span style=\"color: rgb(0, 0, 0);\">Crystal-clear waters &amp; sunny climate </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔</span><span style=\"color: rgb(120, 93, 200);\"> </span><span style=\"color: rgb(0, 0, 0);\">Water adventures like snorkeling, diving &amp; surfing </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔</span><span style=\"color: rgb(120, 93, 200);\"> </span><span style=\"color: rgb(0, 0, 0);\">Relaxing resorts with ocean views</span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Fun for </span><strong style=\"color: rgb(0, 0, 0);\">family trips </strong><span style=\"color: rgb(0, 0, 0);\">and group vacations </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔</span><span style=\"color: rgb(120, 93, 200);\"> </span><span style=\"color: rgb(0, 0, 0);\">Vibrant nightlife, local food &amp; island tours </span></p><p><span style=\"color: rgb(0, 0, 0);\">Popular beaches like </span><strong style=\"color: rgb(0, 0, 0);\">Maldives</strong><span style=\"color: rgb(0, 0, 0);\">, </span><strong style=\"color: rgb(0, 0, 0);\">Bali</strong><span style=\"color: rgb(0, 0, 0);\">, </span><strong style=\"color: rgb(0, 0, 0);\">Phuket</strong><span style=\"color: rgb(0, 0, 0);\">, and </span><strong style=\"color: rgb(0, 0, 0);\">Dubai </strong><span style=\"color: rgb(0, 0, 0);\">are top picks for </span><strong style=\"color: rgb(0, 0, 0);\">holiday </strong></p><p><strong style=\"color: rgb(0, 0, 0);\">packages </strong><span style=\"color: rgb(0, 0, 0);\">offering excitement and relaxation in one place. </span></p><h3><strong style=\"color: rgb(205, 196, 214);\">✈️ </strong><strong style=\"color: rgb(0, 0, 0);\">Travel Smart with a Trusted Travel Agency </strong></h3><p><span style=\"color: rgb(0, 0, 0);\">Whether you choose a snowy retreat or a sunny island, </span><strong style=\"color: rgb(0, 0, 0);\">professional travel agents </strong></p><p><span style=\"color: rgb(0, 0, 0);\">ensure: </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔</span><span style=\"color: rgb(120, 93, 200);\"> </span><span style=\"color: rgb(0, 0, 0);\">Best deals on </span><strong style=\"color: rgb(0, 0, 0);\">air ticketing </strong></p><p><span style=\"color: rgb(0, 0, 0);\">✔</span><span style=\"color: rgb(120, 93, 200);\"> </span><span style=\"color: rgb(0, 0, 0);\">Hassle-free </span><strong style=\"color: rgb(0, 0, 0);\">hotel booking </strong></p><p><span style=\"color: rgb(0, 0, 0);\">✔</span><span style=\"color: rgb(120, 93, 200);\"> </span><span style=\"color: rgb(0, 0, 0);\">Complete </span><strong style=\"color: rgb(0, 0, 0);\">travel insurance </strong></p><p><span style=\"color: rgb(0, 0, 0);\">✔</span><span style=\"color: rgb(120, 93, 200);\"> </span><span style=\"color: rgb(0, 0, 0);\">Customized </span><strong style=\"color: rgb(0, 0, 0);\">international travel packages </strong></p><p><span style=\"color: rgb(0, 0, 0);\">✔</span><span style=\"color: rgb(120, 93, 200);\"> </span><span style=\"color: rgb(0, 0, 0);\">Smooth visa support and planning </span></p><p><span style=\"color: rgb(0, 0, 0);\">At Lamira Travel &amp; Tours, we help you pick the ideal holiday based on your budget, </span></p><p><span style=\"color: rgb(0, 0, 0);\">trip duration, and interests — giving you a truly unforgettable travel experience.</span></p>', '[\"Vacations\",\"Beach\",\"Mountaina\"]', '[\"uu\",\"pp\",\"ll\"]', 'Mountain vs. Beach Vacations — What’s Right for You? \r\nChoosing Your Perfect Travel Getaway', '2025-08-13 09:45:15', '2025-12-12 00:48:59'),
(20, '🎉 Traveling for Festivals  — Best Global Events to Attend', '[\"Travel\",\"New Tour\"]', '1765518545_solo-travel-planning (2).jpg', '<h3>Unforgettable Cultural Experiences for Every Traveler</h3><p><span style=\"color: rgb(0, 0, 0);\">Traveling for festivals is one of the most exciting ways to explore the world! It allows you </span></p><p><span style=\"color: rgb(0, 0, 0);\">to celebrate traditions, enjoy music and food, and discover new cultures through </span></p><p><span style=\"color: rgb(0, 0, 0);\">unforgettable experiences. Whether you love adventure travel, city events, or family- </span></p><p><span style=\"color: rgb(0, 0, 0);\">friendly celebrations — these festivals ofer the perfect reason to book your next trip </span></p><p><span style=\"color: rgb(0, 0, 0);\">with amazing v acation packages and guided tours. </span></p><p><span style=\"color: rgb(0, 0, 0);\">Here are the best global festivals every traveler should experience at least once!&nbsp;🌍 ✨</span></p><h3><span style=\"color: rgb(0, 0, 0);\">🎭 1️⃣ Carnival — Rio de Janeiro, Brazil </span></h3><p><span style=\"color: rgb(0, 0, 0);\">Rio Carnival is one of the world’s biggest celebrations — full of colorful parades, samba </span></p><p><span style=\"color: rgb(0, 0, 0);\">dances, and street parties. </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Best for: Culture lovers &amp; party seekers </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Tour options: Travel tours, cruise tours &amp; city guided tours </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Tip: Book travel vacation packages early — hotels fll fast!</span></p><h3><span style=\"color: rgb(0, 0, 0);\">🪔 2️⃣ Diwali — India </span></h3><p><span style=\"color: rgb(0, 0, 0);\">The Festival of Lights brings a mix of tradition, freworks, sweets, and cultural </span></p><p><span style=\"color: rgb(0, 0, 0);\">performances. </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Great for: Family trip or cultural holidays </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Explore: Jaipur, Delhi, Mumbai </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Many cheap holiday packages available</span></p><h3><span style=\"color: rgb(0, 0, 0);\">🧧 3️⃣ Chinese New Year — China &amp; Southeast Asia </span></h3><p><span style=\"color: rgb(0, 0, 0);\">Dragons, lanterns, freworks — a truly magical celebration across Asia.</span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Best for: Food lovers &amp; photography travelers </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Ideal travel destinations: Beijing, Singapore, Malaysia </span></p><p><span style=\"color: rgb(0, 0, 0);\">🎶 4️⃣Pro Tip: Enjoy local guided tours for the real festive charm!</span></p><p><span style=\"color: rgb(0, 0, 0);\">Tomorrowland — Belgium </span></p><p><span style=\"color: rgb(0, 0, 0);\">One of the most popular music festivals in the world — a dream for EDM fans!</span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Great for: Friends &amp; solo travel packages </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Includes: T ours and packages with hotels + fights </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Must-book early — tickets sell out instantly!</span></p><h3><span style=\"color: rgb(0, 0, 0);\">🎃 5️⃣Halloween &amp; Day of The Dead — USA &amp; Mexico</span></h3><p><span style=\"color: rgb(0, 0, 0);\">From spooky fun to cultural traditions — October is the perfect month for unique trip </span></p><p><span style=\"color: rgb(0, 0, 0);\">vacation packages. </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ USA: New York parades, theme park events </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Mexico: Día de los Muertos cultural celebrations</span></p><h3><span style=\"color: rgb(0, 0, 0);\">🌸 6️⃣ Cherry Blossom Festival — Japan </span></h3><p><span style=\"color: rgb(0, 0, 0);\">When spring arrives, Japan blooms in beauty — perfect for peaceful and scenic h oliday </span></p><p><span style=\"color: rgb(0, 0, 0);\">packages. </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Best for: Luxury travel and romantic trips </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Icons: Tokyo, Kyoto, Mount Fuji</span></p><h3><span style=\"color: rgb(0, 0, 0);\">☀️ 7️⃣ Coachella — California, USA </span></h3><p><span style=\"color: rgb(0, 0, 0);\">A world-famous modern music festival combining fashion, concerts, and celebrities.</span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Perfect for: Young travelers &amp; infuencers </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Includes: Travel tours and hotel booking assistance</span></p><h3><span style=\"color: rgb(0, 0, 0);\"> ✨Why Travel for Festivals? </span></h3><p><span style=\"color: rgb(0, 0, 0);\">✔ Experience authentic culture </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Discover new travel destinations </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Enjoy curated tour packages </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Meet new friends from around the world </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Create unforgettable memories </span></p><p><span style=\"color: rgb(0, 0, 0);\">Festival travel adds an extra spark of joy to every vacation — whether you\'re exploring </span></p><p><span style=\"color: rgb(0, 0, 0);\">with a group or enjoying solo travel around the world!</span></p><p><span style=\"color: rgb(0, 0, 0);\">💼 Plan Your Festival Trip with Lamira Travel &amp; Tours </span></p><p><span style=\"color: rgb(0, 0, 0);\">We make festival travel easier with:</span></p><p><span style=\"color: rgb(0, 0, 0);\">⭐ Customized vacation packages</span></p><p><span style=\"color: rgb(0, 0, 0);\">⭐ Expert t ravel agents for support</span></p><p><span style=\"color: rgb(0, 0, 0);\">⭐Best deals on fights &amp; hotel booking</span></p><p><span style=\"color: rgb(0, 0, 0);\">⭐Visa assistance for international travel</span></p><p><span style=\"color: rgb(0, 0, 0);\">⭐Travel insurance for safe journeys</span></p><p><span style=\"color: rgb(0, 0, 0);\">Wherever the celebration is — we’ll take you there!&nbsp;🎊 ✈️ 🌍</span></p><p><span style=\"color: rgb(0, 0, 0);\">🎟️ Ready for Your Next Festival Adventure?</span></p><p><span style=\"color: rgb(0, 0, 0);\">📩 Contact Lamira Travel &amp; Tours today.</span></p><p><span style=\"color: rgb(0, 0, 0);\">✨ Explore the world’s best events with stress-free travel planning!</span></p>', '[\"Cultural Experiences for Every Traveler\"]', '[\"uu\",\"pp\",\"ll\"]', 'Traveling for festivals is one of the most exciting ways to explore the world! It allows you \r\nto celebrate traditions, enjoy music and food, and discover new cultures through \r\nunforgettable experiences. Whether you love adventure travel, city events, or family- \r\nfriendly celebrations — these festivals ofer the perfect reason to book your next trip \r\nwith amazing v acation packages and guided tours.', '2025-10-14 04:03:33', '2025-12-12 00:45:35'),
(22, '🧳 Why Working with Professional Travel Agents Makes a Diference', '[\"Travel\",\"New Tour\"]', '1765518714_solo-travel-planning (3).jpg', '<h3>The Smart Way to Plan Your Vacations &amp; International Travel</h3><p><span style=\"color: rgb(0, 0, 0);\">In today’s digital world, planning a trip may seem as simple as clicking a button. But </span></p><p><span style=\"color: rgb(0, 0, 0);\">when it comes to important vacation packages, international travel, and stress-free </span></p><p><span style=\"color: rgb(0, 0, 0);\">holiday planning, there’s nothing like having an expert by your side. </span></p><p><span style=\"color: rgb(0, 0, 0);\">This is where professional travel agents play a major role — making every family trip, </span></p><p><span style=\"color: rgb(0, 0, 0);\">business tour, or solo travel package smooth, easy, and perfectly managed. </span></p><p><span style=\"color: rgb(0, 0, 0);\">Here’s why choosing a travel agency like Lamira Travel &amp; Tours can transform the way </span></p><p><span style=\"color: rgb(0, 0, 0);\">you travel:</span></p><h3><span style=\"color: rgb(0, 0, 0);\">✈️ 1️⃣ Expert Travel Guidance &amp; Knowledge </span></h3><p><span style=\"color: rgb(0, 0, 0);\">Travel agents have frsthand experience with: </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ The best places to travel </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Seasonal deals &amp; cheap destination options </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Safety recommendations for travel tours </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Local tips to make your vacation memorable </span></p><p><span style=\"color: rgb(0, 0, 0);\">From luxury safaris to cheap holiday packages, they help you choose what’s best for </span></p><p><span style=\"color: rgb(0, 0, 0);\">your budget and interests.</span></p><h3><span style=\"color: rgb(0, 0, 0);\">🔎 2️⃣ Finding the Best Deals on Flights &amp; Hotels</span></h3><p><span style=\"color: rgb(0, 0, 0);\">Travel agents have professional access to: </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Exclusive air ticketing deals </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Discounted hotel booking options </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Special group &amp; family pricing </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Flexible tour packages and upgrades </span></p><p><span style=\"color: rgb(0, 0, 0);\">You save both money and time while getting better experiences.</span></p><h3><span style=\"color: rgb(0, 0, 0);\">📄3️⃣ Smooth Visa &amp; Travel Documentation Support </span></h3><p><span style=\"color: rgb(0, 0, 0);\">Traveling abroad means paperwork — but you don’t have to handle it alone!</span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Travel visa consultation </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Accurate documents guidance </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Faster process approval </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Support for multiple destinations </span></p><p><span style=\"color: rgb(0, 0, 0);\">Perfect for frst-time international travelers or those who want zero stress!</span></p><h3><span style=\"color: rgb(0, 0, 0);\">🛡️ 4️⃣ Protection Through Travel Insurance </span></h3><p><span style=\"color: rgb(0, 0, 0);\">Professional agents ensure you are prepared for unexpected events:</span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Trip cancellations </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Lost baggage </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Medical emergencies </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Delays &amp; accidents </span></p><p><span style=\"color: rgb(0, 0, 0);\">You enjoy your v acation trips with full peace of mind.</span></p><h3><span style=\"color: rgb(0, 0, 0);\">🌐 5️⃣ Tailor-Made Tour Packages for All Travelers </span></h3><p><span style=\"color: rgb(0, 0, 0);\">Whether you want adventure or relaxation, travel agents help you plan the perfect trip:</span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Family vacation packages </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Solo travel packages </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Luxury travel &amp; premium safaris </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Cruise tours and guided sightseeing </span></p><p><span style=\"color: rgb(0, 0, 0);\">Every detail is personalized just for you!</span></p><h3><span style=\"color: rgb(0, 0, 0);\">🕒 6️⃣ 24/7 Assistance &amp; On-Trip Support </span></h3><p><span style=\"color: rgb(0, 0, 0);\">Plans can change — travel agents ensure: </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Real-time help during emergencies </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Sudden ticket changes handled easily </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Alternative arrangements when needed </span></p><p><span style=\"color: rgb(0, 0, 0);\">You’re never alone when you travel with professionals.</span></p><h3><span style=\"color: rgb(0, 0, 0);\">🌟 Why Choose Lamira Travel &amp; Tours? </span></h3><p><span style=\"color: rgb(0, 0, 0);\">At Lamira Travel &amp; Tours, we bring trust, reliability, and expert service to every trip:</span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Best vacation packages for all budgets </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Global support with international travel agency operations </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Top travel destinations &amp; guided tours </span></p><p><span style=\"color: rgb(0, 0, 0);\">✔ Quick response &amp; customer-frst approach </span></p><p><span style=\"color: rgb(0, 0, 0);\">We are your partner from the moment you plan to the moment you return home!</span></p><p><span style=\"color: rgb(0, 0, 0);\">✨Plan Smart. Travel Better. </span></p><p><span style=\"color: rgb(0, 0, 0);\">Let our experts help you explore the world — stress-free and full of joy.</span></p><p><span style=\"color: rgb(0, 0, 0);\">📩 Contact Lamira Travel &amp; Tours today!</span></p><p><span style=\"color: rgb(0, 0, 0);\">🌍Your trusted partner for tours, travel, and unforgettable holidays. ✈️</span></p>', '[\"Professional Travel Agents\"]', '[\"uu\",\"pp\",\"ll\"]', 'The Smart Way to Plan Your Vacations & International Travel \r\nIn today’s digital world, planning a trip may seem as simple as clicking a button. But \r\nwhen it comes to important  vacation packages,  international travel, and stress-free \r\nholiday planning, there’s nothing like having an expert by your side.', '2025-10-14 04:03:33', '2025-12-12 00:45:48');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('cinderellatravel-cache-d8c7a5e34f51b270f97387f53d3aeca2', 'i:1;', 1760591702),
('cinderellatravel-cache-d8c7a5e34f51b270f97387f53d3aeca2:timer', 'i:1760591702;', 1760591702),
('lamira-travel-tour-cache-f185e29cd465a77c7bd9cc6078a718f2', 'i:1;', 1765515187),
('lamira-travel-tour-cache-f185e29cd465a77c7bd9cc6078a718f2:timer', 'i:1765515187;', 1765515187);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `masters`
--

CREATE TABLE `masters` (
  `id` int(11) NOT NULL,
  `label` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'Master',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `masters`
--

INSERT INTO `masters` (`id`, `label`, `type`, `created_at`, `updated_at`) VALUES
(53, 'Blog', 'Master', '2025-08-13 06:40:44', '2025-08-13 06:40:44'),
(54, 'Travel', 'Blog', '2025-08-13 06:40:53', '2025-08-13 06:40:53'),
(55, 'New Tour', 'Blog', '2025-08-13 06:41:11', '2025-08-13 06:41:11');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_08_13_055121_add_two_factor_columns_to_users_table', 1),
(5, '2025_08_13_055155_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('nitzz@gmail.com', '$2y$12$8KjOvBqZkyCR13QIcyx2a.HOcwfeZDj6t.5pivgTHT0m82TCtOgB6', '2024-09-12 00:26:04');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register_companies`
--

CREATE TABLE `register_companies` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) DEFAULT NULL,
  `companyname` varchar(255) DEFAULT NULL,
  `companylogo` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `contactnumber` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `officeaddress` text DEFAULT NULL,
  `registrationimage` varchar(255) DEFAULT NULL,
  `pancardimage` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register_companies`
--

INSERT INTO `register_companies` (`id`, `userid`, `companyname`, `companylogo`, `city`, `state`, `country`, `pincode`, `contactnumber`, `email`, `officeaddress`, `registrationimage`, `pancardimage`, `created_at`, `updated_at`) VALUES
(1, '44', 'SIGNIX CHEMICAL', '1747656770_pexels-anton-8100-46924.jpg', 'Ajmer', 'Rajasthan', 'India', '305001', '7078600005', 'signix@gmail.com', 'Near Vaishali', '1732706876_1732605240_3-invoice-generator-example.png', '1732706876_1732605404_3-invoice-generator-example.png', '2024-11-27 11:27:56', '2025-05-19 12:12:50');

-- --------------------------------------------------------

--
-- Table structure for table `register_users`
--

CREATE TABLE `register_users` (
  `id` int(11) NOT NULL,
  `mobilenumber` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `verifystatus` varchar(255) DEFAULT '0',
  `activationstatus` varchar(255) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `otp` varchar(22) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `activationRequest` varchar(255) DEFAULT NULL,
  `myroles` varchar(255) DEFAULT NULL,
  `profile` varchar(255) DEFAULT NULL,
  `registrationstatus` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register_users`
--

INSERT INTO `register_users` (`id`, `mobilenumber`, `email`, `verifystatus`, `activationstatus`, `created_at`, `updated_at`, `otp`, `username`, `activationRequest`, `myroles`, `profile`, `registrationstatus`) VALUES
(44, '1234567899', 'anshulyuvmedia@gmail.com', '1', 'activate', '2024-11-08 04:34:44', '2025-08-04 05:34:48', '329232', 'Anshul Kumar', 'Complete', '[\"Create\",\"Edit\",\"Delete\"]', '1747986808_1737716083_agent-6.jpg', 'verify'),
(47, '2234343454', 'nitesh.yuvmedia@gmail.com', '1', 'activate', '2025-01-18 04:34:44', '2025-08-01 13:22:18', '692254', 'Nitesh Sharma', 'Complete', '[\"Delete\"]', NULL, 'verify');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('dnDKROd9r1k8l5O8BlZ8uJEurdmgTpCLvihW2zC2', 1, '192.168.1.79', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiRDkyeUg5TkNtZlFsNDI3b21pTXRQR3QyVXFyU3RBODlBY1ZKSk5ZMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHA6Ly8xOTIuMTY4LjEuNzk6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTIkLmFQcVE1NnBWVng5LnVnU1VsUG92LnJLSnNLUXVyWUh1NkVLR3ZLNWU2U0NwN1hSbkZxckciO30=', 1765521818);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Lamaira Travels', 'cinderella@gmail.com', NULL, '$2y$12$.aPqQ56pVVx9.ugSUlPov.rKJsKQurYHu6EKGvK5e6SCp7XRnFqrG', NULL, NULL, NULL, '4HYCHsYpzdtBWR6w2chuj2m87zP5bsFFAZpyAeEOcN8lfYXvRxo0uMLlfZxR', NULL, NULL, '2024-09-04 04:20:07', '2025-08-05 12:56:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masters`
--
ALTER TABLE `masters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`),
  ADD KEY `personal_access_tokens_expires_at_index` (`expires_at`);

--
-- Indexes for table `register_companies`
--
ALTER TABLE `register_companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_users`
--
ALTER TABLE `register_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `masters`
--
ALTER TABLE `masters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register_companies`
--
ALTER TABLE `register_companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
