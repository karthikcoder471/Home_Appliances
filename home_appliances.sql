-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2018 at 12:27 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `home_appliances`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `address_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(500) NOT NULL,
  `province` varchar(500) NOT NULL,
  `country` varchar(200) NOT NULL,
  `postal_code` varchar(500) DEFAULT NULL,
  `phone` int(100) DEFAULT NULL,
  `payment_details_payment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(200) DEFAULT NULL,
  `dob` varchar(200) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `dob`, `email`, `password`) VALUES
(1, 'admin', '25-10-1990', 'genesisofficial76@gmail.com', 'genesisadmin');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `ads_id` int(11) NOT NULL,
  `ads_name` varchar(500) NOT NULL,
  `ads_images` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `product_id`, `quantity`, `created_date`) VALUES
(4, 'bpatel', 15, 1, '2018-11-29'),
(5, 'bpatel', 11, 1, '2018-11-29'),
(6, 'bpatel', 15, 1, '2018-11-30'),
(7, 'bpatel', 11, 1, '2018-11-30');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news01` varchar(1000) NOT NULL,
  `news02` varchar(1000) NOT NULL,
  `news03` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `newsletter_id` int(11) NOT NULL,
  `email` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders_history`
--

CREATE TABLE `orders_history` (
  `order_history_id` int(11) NOT NULL,
  `product_name` varchar(500) DEFAULT NULL,
  `product_price` varchar(500) DEFAULT NULL,
  `quantity` varchar(500) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `user_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders_history_has_products`
--

CREATE TABLE `orders_history_has_products` (
  `orders_history_order_history_id` int(11) NOT NULL,
  `products_product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `payment_id` int(11) NOT NULL,
  `card_number` int(200) DEFAULT NULL,
  `date_of_expiry` varchar(200) DEFAULT NULL,
  `cvv` int(100) DEFAULT NULL,
  `customer_name` varchar(200) NOT NULL,
  `user_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_price` varchar(500) NOT NULL,
  `capacity` varchar(10) NOT NULL,
  `color` varchar(20) NOT NULL,
  `product_height` varchar(500) NOT NULL,
  `product_width` varchar(500) NOT NULL,
  `product_weight` varchar(500) NOT NULL,
  `specification` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `reviews` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `image1` varchar(500) NOT NULL,
  `image2` varchar(500) NOT NULL,
  `warranty` varchar(10) NOT NULL,
  `quantity` varchar(500) NOT NULL,
  `product_type_id` int(11) NOT NULL,
  `user_id_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `capacity`, `color`, `product_height`, `product_width`, `product_weight`, `specification`, `description`, `reviews`, `image`, `image1`, `image2`, `warranty`, `quantity`, `product_type_id`, `user_id_fk`) VALUES
(1, 'Bosch B20CS30SNS', '2799.00', '20.7', 'Stainless Steel', '1,770 mm', '910 mm', '251.3 lb', 'Bosch 300 Series B20CS30SNS Side by Side Refrigerator, 36\" Width, Thru Door Ice Dispenser, 20.7 cubic ft, Counter Depth, Exterior Water Dispenser, Fingerprint Resistant (Stainless Steel)', 'Anti-Fingerprint Stainless Steel\r\nCounter Depth\r\nExternal Ice Water Dispenser\r\nTrue flat doors with hidden hinges\r\nTransparent storage throughout for best visibility\r\nSleek, premium bar handles\r\n4 adjustable tempered glass shelves\r\nMultiAirFlow Cooling System\r\nEnergy Efficient(R) Qualified\r\nEnergy-efficient LED lighting\r\nUnique rippled drawer bases for better air circulation\r\nEasy to clean maintain anti-fingerprint stainless steel\r\nMultiBox easy-access drawers\r\nGallon door storage bins\r\nChilled,', '', 'images\\bosch\\refrigerator\\side by side4\\1.jpg', 'images\\bosch\\refrigerator\\side by side4\\2.jpg', 'images\\bosch\\refrigerator\\side by side4\\3.jpg', '1 year', '10', 1, 0),
(2, 'Bosch B21CL80SNS', '3899.00', '20.7', 'Stainless steel', '1,775 mm', '911 mm', '133.4 kg', 'Bosch 800 Series B21CL80SNS French Door Refrigerator, 36\" Width, Freezer Located Ice Dispenser, 20.7 cubic ft, Counter Depth, LED Lighting (Stainless Steel)', '2-drawer freezer provides better organization and access to food.\r\nA full-width Chiller Drawer with an adjustable divider provides extra-cold storage ideal for meat and fish.\r\nA retractable shelf allows you to easily store tall bottles and large items.\r\nThe Dual AirCool system provides even temperatures and minimizes odor transfer between the refridgerator and freezer cavities.\r\nTwo humidity controlled CrisperDrawers help keep food fresher longer.', '', 'images\\bosch\\refrigerator\\french door\\pic1\\1.jpg', 'images\\bosch\\refrigerator\\french door\\pic1\\2.jpg', 'images\\bosch\\refrigerator\\french door\\pic1\\3.jpg', '1 year', '10', 2, 0),
(3, 'Bosch B21CL81SNS', '3899.00', '21', 'Stainless steel', '1,775 mm', '911 mm', '133.4 kg', 'Bosch 800 Series B21CL81SNS French Door Refrigerator, 36\" Width, Freezer Located Ice Dispenser, Energy Efficient, 21 cubic ft, Counter Depth, Interior Light (Refrigerator) (Stainless Steel)', '2-drawer freezer provides better organization and access to food.\r\nA full-width Chiller Drawer with an adjustable divider provides extra-cold storage ideal for meat and fish.\r\nA retractable shelf allows you to easily store tall bottles and large items.\r\nThe Dual AirCool system provides even temperatures and minimizes odor transfer between the refridgerator and freezer cavities.\r\nTwo humidity controlled CrisperDrawers help keep food fresher longer.', '', 'images\\bosch\\refrigerator\\french door\\pic2\\1.jpg', 'images\\bosch\\refrigerator\\french door\\pic2\\2.jpg', 'images\\bosch\\refrigerator\\french door\\pic2\\3.jpg', '1 year', '10', 2, 0),
(4, 'Bosch B26FT50SNS', '3499.00', '25', 'Stainless steel', '1,780 mm', '905 mm', '147.5 kg', 'Bosch 500 Series B26FT50SNS French Door Refrigerator, 36\" Width, Thru Door Ice Dispenser, Energy Efficient, 25 cubic ft, Exterior Water Dispenser, LED Lighting, Fingerprint Resistant (Stainless Steel)', 'Anti-fingerprint stainless steel resists smudges and cleans easily.\r\nMultiAirFlow™ cooling system boosts air circulation for even temperature.\r\nEnergy Star® Qualified for Energy Efficiency.\r\nLED lighting and transparent storage provide ideal visibility throughout.\r\nQuick Ice speeds up the ice making process when more ice is needed.', '', 'images\\bosch\\refrigerator\\french door\\pic3\\1.jpg', 'images\\bosch\\refrigerator\\french door\\pic3\\2.jpg', 'images\\bosch\\refrigerator\\french door\\pic3\\3.jpg', '1 year', '10', 2, 0),
(5, 'Bosch B36BT830NS', '10299', '20.0', 'Stainless steel', '2,125 mm', '908 mm', '150.5 kg', 'Bosch Benchmark Series B36BT830NS French Door Refrigerator, 36\" Width, Freezer Located Ice Dispenser, Energy Efficient, 20.0 cubic ft, Counter Depth, LED Lighting (Stainless Steel)', 'Dual compressor and dual evaporator\r\nElectronic Controls for precise temperature management\r\nFull width meat drawer\r\nCarbon air filter reduces odors and keeps air clean and fresh\r\nHumidity controlled crisper\r\nFiltered ice-maker\r\nSuperCool\r\nSuperFreeze\r\nSabbath Mode\r\nEconomy Mode\r\nVacation Mode', '', 'images\\bosch\\refrigerator\\french door\\pic5\\1.jpg', 'images\\bosch\\refrigerator\\french door\\pic5\\2.jpg', 'images\\bosch\\refrigerator\\french door\\pic5\\3.jpg', '1 year', '10', 2, 0),
(6, 'Bosch B21CT80SNB', '3999.00', '20.7', 'Black stainless stee', '1,775 mm', '911 mm', '133.4 kg', 'Bosch 800 Series B21CT80SNB French Door Refrigerator, 36\" Width, Freezer Located Ice Dispenser, 20.7 cubic ft, Counter Depth, LED Lighting, Fingerprint Resistant (Black Stainless Steel)', 'The Black Stainless Steel 3-Door Counter-Depth Refrigerator features extra-cold storage & humidity-controlled drawers to keep food fresh.\r\nHigh quality black stainless steel helps guard against fingerprints and scratches.\r\nA full-width Chiller Drawer provides extra-cold storage.\r\nA retractable shelf allows you to easily store tall bottles and items.\r\nDual AirCool system provides even temperatures & minimal odor transfer.\r\nHumidity controlled crisper drawers help keep food fresher longer.', '', 'images\\bosch\\refrigerator\\french door\\pic4\\1.jpg', 'images\\bosch\\refrigerator\\french door\\pic4\\2.jpg', 'images\\bosch\\refrigerator\\french door\\pic4\\3.jpg', '1 year', '10', 2, 0),
(7, 'Electrolux EI23CS35KS', '2209.00', '22.6', 'Stainless steel', '70\"', '36\"', '147 kg', 'Electrolux Icon EI23CS35KS Side by Side Refrigerator, 36\" Width, Thru Door Ice Dispenser, Energy Efficient, 22.6 cubic ft, Counter Depth, Exterior Water Dispenser, LED Lighting (Stainless Steel)', 'Platinum Star Limited Warranty\r\nLuxury-Glide Chill Zone(TM) Drawer\r\nLuxury-Glide Dual Humidity-Controlled Crisper Drawer\r\nLuxury-Design Lighting\r\nSliding SpillSafe Glass Shelves\r\nMore Counter-Depth Storage\r\nIQ-Touch(TM) Controls\r\nEnhanced Lighting\r\n9\"-Tall Water/Ice Dispenser\r\nFast Freeze(TM)\r\nFast Ice(TM)\r\nFrost-Free Design\r\nAutomatic Ice Maker\r\nStylish Exterior\r\nEnergy-Saving Vacation Mode\r\nPureAdvantage Air Filter\r\nPureAdvantage Water Filter\r\nDigital Exterior Control Center\r\nPerfect Set Tempe', '', 'images\\electrolux\\refrigerator\\side by side\\1.jpg', 'images\\electrolux\\refrigerator\\side by side\\2.jpg', 'images\\electrolux\\refrigerator\\side by side\\3.jpg', '2 year', '10', 3, 0),
(8, 'Electrolux EI23BC82SS', '2754.00', '22.3', 'Stainless steel', '78\"', '36\"', '347 lb', 'Electrolux EI23BC82SS French Door Refrigerator, 36\" Width, Freezer Located Ice Dispenser, 22.3 cubic ft, Counter Depth, Interior Light (Refrigerator) (Stainless Steel)', 'Perfect Temp Drawer keeps favorites at their ideal temperature.\r\nCrisper Drawers keep fruits and veggies at their most delicious.\r\nCounter Depth Design\r\nSelf-closing Doors Give You Piece of Mind\r\nIQ-Touch(TM) Controls Display All Your Options\r\nLuxury-Design Glass Shelves\r\nLuxury-Design Lighting\r\nLuxury-Glide Freezer Drawers for effortless access to items.\r\nPureAdvantage Filtration Systems\r\nStay informed with the Refrigeration Alarm System\r\nFull-Extension Freezer Baskets\r\nPlatinum Star Limited Wa', '', 'images\\electrolux\\refrigerator\\french door\\pic1\\1.jpg', 'images\\electrolux\\refrigerator\\french door\\pic1\\2.jpg', 'images\\electrolux\\refrigerator\\french door\\pic1\\3.jpg', '1 year', '10', 4, 0),
(9, 'Electrolux EW23BC87SS', '2999.00', '21.5', 'Stainless steel', '69\"', '36\"', '347 lb', 'Electrolux EW23BC87SS French Door Refrigerator, 36\" Width, Thru Door Ice Dispenser, 21.5 cubic ft, Counter Depth, Exterior Water Dispenser, LED Lighting (Stainless Steel)', 'Perfect Temp Drawer keeps favorites at their ideal temperature.\r\nCrisper Drawers keep fruits and veggies at their most delicious.\r\nCounter Depth Design\r\nSelf-closing Doors Give You Piece of Mind\r\nWave-Touch Controls offer understated elegance in the kitchen.\r\nLuxury-Design Glass Shelves\r\nLuxury-Design Lighting\r\nLuxury-Glide Freezer Drawers for effortless access to items.\r\nPureAdvantage Filtration Systems\r\nStay informed with the Refrigeration Alarm System\r\nFull-Extension Freezer Baskets\r\nPlatinum', '', 'images\\electrolux\\refrigerator\\french door\\pic2\\1.jpg', 'images\\electrolux\\refrigerator\\french door\\pic2\\2.jpg', 'images\\electrolux\\refrigerator\\french door\\pic2\\3.jpg', '2 year', '10', 4, 0),
(10, 'Electrolux E23BC69SPS', '3398.00', '22.3', 'Stainless steel', '70\"', '68\"', '348 lb', 'Electrolux Icon E23BC69SPS French Door Refrigerator, 36\" Width, Freezer Located Ice Dispenser, Energy Efficient, 22.3 cubic ft, Counter Depth, Interior Light (Refrigerator) (Stainless Steel)', 'Custom Temp Drawer(TM)\r\nTheatre Lighting\r\nPureAdvantage Filtration Systems\r\nCustom Temp Drawer(TM)\r\nEnjoy the ultimate in versatility with 9 preset selections including White/Sparkling Wine, Fish/Shellfish, Cheese plus three customizable settings that ensure foods stay at the ideal temperature for serving and maintaining freshness.\r\nTheatre Lighting\r\nTransition LED lighting gradually illuminates the interior with soft but ample light as you open the door.\r\nPureAdvantage Filtration Systems\r\nOur f', '', 'images\\electrolux\\refrigerator\\french door\\pic4\\1.jpg', 'images\\electrolux\\refrigerator\\french door\\pic4\\2.jpg', 'images\\electrolux\\refrigerator\\french door\\pic4\\3.jpg', '1 year', '10', 4, 0),
(11, 'GE GSS23HSHSS', '1474.81', '22.5', 'Stainless Appearance', '69.5', '32.75', '314.0', 'GE GSS23HSHSS Side by Side Refrigerator, 33\" Width, Thru Door Ice Dispenser, 22.5 cubic ft, Exterior Water Dispenser, LED Lighting (Stainless Steel) ', '32-3/4\" wide\r\nIntegrated shelf support system\r\nProvides strong, flexible support\r\nAdjustable slide-out, spillproof glass shelves\r\nRaised edges help contain spills and make clean up quick and easy\r\nFresh food multi-level drawers\r\nProvide the ideal environment for storing your fruits and vegetables\r\nAdjustable large door bins\r\nOffers ideal space for storing large containers in the door for more valuable shelf space\r\nArctica icemaker\r\nA special access door puts ice within reach\r\nAdvanced water filt', '', 'images\\GE\\refrigerators\\side by side\\pic1\\1.jpg', 'images\\GE\\refrigerators\\side by side\\pic1\\2.jpg', 'images\\GE\\refrigerators\\side by side\\pic1\\3.jpg', '1 year', '10', 5, 0),
(12, 'GE PSE25KSHSS', '1598.00', '25.4', 'Stainless Appearance', '69.25', '35.75', '360.0', 'GE Profile PSE25KSHSS Side by Side Refrigerator, 36\" Width, Thru Door Ice Dispenser, 25.4 cubic ft, Exterior Water Dispenser, LED Lighting (Stainless Steel)', 'Angled ALL LED lighting in fresh food and freezer\r\nFresh food multi-level drawers\r\nAdjustable Clear Look door bins\r\nGlass freezer shelves\r\nAdjustable slide-out, spillproof glass shelves\r\nArctica icemaker\r\nAdvanced water filtration uses MWF replacement filter\r\nMulti-level freezer baskets\r\nQuick Ice setting', '', 'images\\GE\\refrigerators\\side by side\\pic2\\1.jpg', 'images\\GE\\refrigerators\\side by side\\pic2\\2.jpg', 'images\\GE\\refrigerators\\side by side\\pic2\\3.jpg', '1 year', '10', 5, 0),
(13, 'GE GSS25GMHES', '1689.00', '25.4', 'Stainless steel', '69.5', '35.75', '320.0', 'GE GSS25GMHES Side by Side Refrigerator, 36\" Width, Thru Door Ice Dispenser, 25.4 cubic ft, Exterior Water Dispenser, LED Lighting (Slate)', 'LED lighting\r\nFind all your favorite foods under natural-looking light\r\nIntegrated shelf support system\r\nProvides strong, flexible support\r\nAdjustable slide-out, spillproof glass shelves\r\nRaised edges help contain spills and make clean up quick and easy\r\nFresh food multi-level drawers\r\nProvide the ideal environment for storing your fruits and vegetables\r\nAdjustable door bins\r\nCreates additional storage space for milk and other gallon-size containers\r\nArctica icemaker\r\nA special access door puts ', '', 'images\\GE\\refrigerators\\side by side\\pic3\\1.jpg', 'images\\GE\\refrigerators\\side by side\\pic3\\2.jpg', 'images\\GE\\refrigerators\\side by side\\pic3\\3.jpg', '2 year', '10', 5, 0),
(14, 'GE GZS22DSJSS', '1769.00', '21.9', 'Graphite Gray', '69.25', '35.75', '340.0', 'GE GZS22DSJSS Side by Side Refrigerator, 36\" Width, Thru Door Ice Dispenser, 21.9 cubic ft, Counter Depth, Exterior Water Dispenser, LED Lighting (Stainless Steel)', 'Counter-depth design\r\nOffers a built-in look by fitting nearly flush with surrounding cabinetry\r\nLED lighting\r\nFind all your favorite foods under natural-looking light\r\nIntegrated shelf support system\r\nProvides strong, flexible support\r\nAdjustable slide-out, spillproof glass shelves\r\nRaised edges help contain spills and make clean up quick and easy\r\nAdjustable clear door bins\r\nOffer ideal space for large containers in the door and frees up valuable shelf space\r\nFresh food multi-level drawers\r\nPr', '', 'images\\GE\\refrigerators\\side by side\\pic4\\1.jpg', 'images\\GE\\refrigerators\\side by side\\pic4\\2.jpg', 'images\\GE\\refrigerators\\side by side\\pic4\\3.jpg', '1 year', '10', 5, 0),
(15, 'GE GSS23HGHWW', '1386.78', '22.5', 'High-Gloss White', '69.5', '32.75', '314.0', 'GE GSS23HGHWW Side by Side Refrigerator, 33\" Width, Thru Door Ice Dispenser, 22.5 cubic ft, Exterior Water Dispenser, LED Lighting (White)', '32-3/4\" wide\r\nIntegrated shelf support system\r\nProvides strong, flexible support\r\nAdjustable slide-out, spillproof glass shelves\r\nRaised edges help contain spills and make clean up quick and easy\r\nFresh food multi-level drawers\r\nProvide the ideal environment for storing your fruits and vegetables\r\nAdjustable large door bins\r\nOffers ideal space for storing large containers in the door for more valuable shelf space\r\nArctica icemaker\r\nA special access door puts ice within reach\r\nAdvanced water filt', '', 'images\\GE\\refrigerators\\side by side\\pic5\\1.jpg', 'images\\GE\\refrigerators\\side by side\\pic5\\2.jpg', 'images\\GE\\refrigerators\\side by side\\pic5\\3.jpg', '1 year', '5', 5, 0),
(16, 'GE PYE18HSLKSS', '1889.00', '17.5', 'Stainless steel', '69\"', '32\"', '300 lb', 'GE Profile PYE18HSLKSS French Door Refrigerator, 33\" Width, Thru Door Ice Dispenser, 17.5 cubic ft, Counter Depth, Exterior Water Dispenser, LED Lighting (Stainless Steel)', 'Digital Temperature Control\r\nEnergy Efficient Qualified\r\nMeets or exceeds federal guidelines for energy efficiency for year-round energy and money savings\r\nHumidity-Controlled Drawers\r\nHelp preserve fruits, cheeses and vegetables\r\nUpfront Temperature Control\r\nFrostGuard(TM) technology\r\nIn the freezer compartment, defrosting occurs only as needed therefore reducing freezer burn\r\nIntegrated Ice and Water Dispenser with Actual Temperature Display\r\nProvides chilled, filtered water and crushed or cub', '', 'images\\GE\\refrigerators\\french door\\pic1\\1.jpg', 'images\\GE\\refrigerators\\french door\\pic1\\2.jpg', 'images\\GE\\refrigerators\\french door\\pic1\\3.jpg', '1 year', '5', 6, 0),
(17, 'GE GNE25DSKSS', '1649.00', '24.8', 'Stainless steel', '69\"', '32\"', '210 kg', 'GE GNE25DSKSS French Door Refrigerator, 33\" Width, Energy Efficient, 24.8 cubic ft, LED Lighting (Stainless Steel)', 'Humidity-Controlled Drawers\r\nHelp preserve fruits, cheeses and vegetables\r\nIntegrated Controls\r\nwith controls built into the frame the interior of this fridge has open and smooth appearance in comparison to bulkhead control panels\r\nRamp Up Theatre LED Lighting\r\nPositioned throughout the interior of the refrigerator Ramp Up Theatre LED Lighting slowly illuminates the fresh food compartment, to fully reveal traditionally dark spots.\r\nTemperature Controlled Full Width Pantry Drawer\r\nDeliver the opt', '', 'images\\GE\\refrigerators\\french door\\pic2\\1.jpg', 'images\\GE\\refrigerators\\french door\\pic2\\2.jpg', 'images\\GE\\refrigerators\\french door\\pic2\\3.jpg', '1 year Ent', '7', 6, 0),
(18, 'GE PNE25JMKES', '2125.83', '24.8', 'Gray', '69\"', '32\"', '310 lb', 'GE Profile PNE25JMKES French Door Refrigerator, 33\" Width, Freezer Located Ice Dispenser, Energy Efficient, 24.8 cubic ft, LED Lighting (Slate)', 'Cabinet Integrated Controls with Temperature Display\r\nRefrigerator and freezer controls are recessed into the cabinet liner to maximize interior space.\r\nHumidity-Controlled Drawers\r\nHelp preserve fruits, cheeses and vegetables\r\nAPF Factory Installed Icemaker\r\nThe ONLY pharmaceutical grade filter in the industry that filters a minimum of 94% of the top 5 trace pharmaceuticals for cleaner and tastier water and ice.\r\nAPF Internal Water Dispenser\r\nThe ONLY pharmaceutical grade filter in the industry', '', 'images\\GE\\refrigerators\\french door\\pic3\\1.jpg', 'images\\GE\\refrigerators\\french door\\pic3\\2.jpg', 'images\\GE\\refrigerators\\french door\\pic3\\3.jpg', '1 year Ent', '5', 6, 0),
(19, 'GE GNE25DGKWW', '1559.00', '24.8', 'High-Gloss White', '69\"', '32\"', '320 lb', 'GE GNE25DGKWW French Door Refrigerator, 33\" Width, Energy Efficient, 24.8 cubic ft, LED Lighting (White)', 'Humidity-Controlled Drawers\r\nHelp preserve fruits, cheeses and vegetables\r\nRamp Up Theatre LED Lighting\r\nPositioned throughout the interior of the refrigerator Ramp Up Theatre LED Lighting slowly illuminates the fresh food compartment, to fully reveal traditionally dark spots.\r\nTemperature Controlled Full Width Pantry Drawer\r\nDeliver the optimal temperature for your favorite foods by adjusting the temperature on the slide-out full-width pantry drawer', '', 'images\\GE\\refrigerators\\french door\\pic4\\1.jpg', 'images\\GE\\refrigerators\\french door\\pic4\\2.jpg', 'images\\GE\\refrigerators\\french door\\pic4\\3.jpg', '1 year Ent', '6', 6, 0),
(20, 'Haier HRQ16N3BGS', '1198.00', '16.4', 'Stainless steel', '70.5\"', '33.75\"', '232.0 lb', 'Haier HRQ16N3BGS French Door Refrigerator, 33\" Width, Energy Efficient, 16.4 cubic ft, Counter Depth (Stainless Steel)', 'LED Lighting - Provides long-lasting, clear, bright light while using less energy than incandescent lighting\r\nCounter Depth - Blends in with surrounding cabinetry, providing an affordable built-in look\r\nSabbath Mode Functionality - Designed to disable functions in accordance with Sabbath-observing practices\r\nQuick Cool and Quick Freeze Function - Accelerates the cooling and freezing of newly stored foods and protects those already refrigerated or frozen\r\nCapacitive Touch Display\r\n2 Full-Width, T', '', 'images\\haier\\refrigerator\\side by side\\pic1\\1.jpg', 'images\\haier\\refrigerator\\side by side\\pic1\\2.jpg', 'images\\haier\\refrigerator\\side by side\\pic1\\3.jpg', '1 year, 5-', '6', 7, 0),
(21, 'Haier HRF15N3AGS', '1259.00', '14.9', 'Stainless steel', '71\"', '30.5\"', '201.0 lb', 'Haier HRF15N3AGS French Door Refrigerator, 28\" Width, Energy Efficient, 14.9 cubic ft, LED Lighting (Stainless Steel)', 'LED Lighting - Provides long-lasting, clear, bright light while using less energy than incandescent lighting\r\nSabbath Mode Functionality - Designed to disable functions in accordance with Sabbath-observing practices\r\nQuick Cool and Quick Freeze Function - Accelerates the cooling and freezing of newly stored foods and protects those already refrigerated or frozen\r\nAdjustable Tempered-Glass Shelves - Allows flexible storage solutions. Glass has blue accented trim to match blue LED back light\r\nTop ', '', 'images\\haier\\refrigerator\\side by side\\pic2\\1.jpg', 'images\\haier\\refrigerator\\side by side\\pic2\\2.jpg', 'images\\haier\\refrigerator\\side by side\\pic2\\3.jpg', '1 year, 5-', '5', 7, 0),
(22, 'LG LSXC22396S', '3599.00', '21.7', 'Stainless steel', '69\"', '35\"', '283.8 lbs', 'LG Studio LSXC22396S French Door Refrigerator, 36\" Width, Thru Door Ice Dispenser, Energy Efficient, 21.7 cubic ft, Counter Depth, Exterior Water Dispenser, LED Lighting (Stainless Steel)', '22 cu. ft. Capacity\r\nCounter-Depth\r\nInstaView Door-in-Door(R)\r\nSlim SpacePlus(R) Ice System', '', 'images\\lg\\refrigerator\\pic1\\1.jpg', 'images\\lg\\refrigerator\\pic1\\2.jpg', 'images\\lg\\refrigerator\\pic1\\3.jpg', '1 Year Par', '10', 8, 0),
(23, 'LG LSSB2692ST', '8494.99', '25.6', 'Stainless steel', '83\"', '42\"', '538 lbs', 'LG Studio LSSB2692ST Built In Refrigerator, 42\" Width, Thru Door Ice Dispenser, Energy Efficient, 25.6 cubic ft, Counter Depth, Exterior Water Dispenser, LED Lighting (Stainless Steel)', 'Pro-Style Design\r\nUltra Large Capacity (25.6 cubic feet)\r\nTall Ice & Water Dispenser(R) (9\'2\") with SmoothTouch Controls\r\nEasy Moving Door Bin\r\nSpacePlus(R) Ice System\r\nEnergy Efficient(R) Qualified', '', 'images\\lg\\refrigerator\\pic2\\1.jpg', 'images\\lg\\refrigerator\\pic2\\2.jpg', 'images\\lg\\refrigerator\\pic2\\3.jpg', '2 Year Par', '5', 8, 0),
(24, 'LG LMNS14420V', '2894.00', '14.3', 'Platinum Silver', '70\"', '29\"', '271 lbs', 'LG LMNS14420V French Door Refrigerator, 24\" Width, Energy Efficient, 14.3 cubic ft, Interior Light (Refrigerator) (Platinum Silver)', 'Individual Temperature Control\r\nCooling Care\r\nSmart ThinQ(R)\r\n14 Customized Airtight Containers\r\nEnergy Efficient(R)\r\nInverter Linear Compressor with 10-Year Warranty', '', 'images\\lg\\refrigerator\\pic3\\1.jpg', 'images\\lg\\refrigerator\\pic3\\2.jpg', 'images\\lg\\refrigerator\\pic3\\3.jpg', '1 year', '5', 8, 0),
(25, 'Samsung RF23J9011SG', '3499.00', '22.5', 'Fingerprint Resistan', '70.3\"', '35.3\"', '352.7 lbs', 'Samsung RF23J9011SG French Door Refrigerator, 36\" Width, Thru Door Ice Dispenser, Energy Efficient, 22.5 cubic ft, Counter Depth, Exterior Water Dispenser, LED Lighting (Black Stainless Steel)', 'Counter Depth Design\r\nGet more workspace while enhancing your kitchen\'s look with our counter-depth refrigerator design. Its sleek, built-in style blends in with the cabinetry, adding function and style to your kitchen.\r\n23 cu. ft. Large Capacity\r\nOur 23 cu. ft.* large capacity 4-Door Flex refrigerator has enough room to fit up to 23 bags of groceries**.\r\nFlexZone\r\nA versatile, bottom-right door can be a fridge or freezer, maximizing fresh food storage space. The most fresh food storage availabl', '', 'images\\Samsung\\refrigerator\\french door\\pic2\\1.jpg', 'images\\Samsung\\refrigerator\\french door\\pic2\\2.jpg', 'images\\Samsung\\refrigerator\\french door\\pic2\\3.jpg', '1 year', '10', 9, 0),
(26, 'Samsung RH22H9010SR', '2594.00', '21.5', 'Stainless steel', '69\"', '35\"', '354.60 lbs', 'Samsung RH22H9010SR Side by Side Refrigerator, 36\" Width, Thru Door Ice Dispenser, Energy Efficient, 21.5 cubic ft, Counter Depth, Exterior Water Dispenser, LED Lighting (Stainless Steel)', 'Food ShowCase\r\nThe Samsung Food ShowCase refrigerator provides easy access to on-the-go items. The exterior showcase gives you instant access to drinks and condiments, while the InnerCase lets you store large, fresh food items. Perfect for frequently used items, this refrigerator lets you easily organize your food by type or family member.\r\nMetal Cooling\r\nMetal Cooling locks in cold and seals in freshness. The stainless steel paneling helps maintain consistent temperature throughout the refriger', '', 'images\\Samsung\\refrigerator\\side by side\\pic1\\1.jpg', 'images\\Samsung\\refrigerator\\side by side\\pic1\\2.jpg', 'images\\Samsung\\refrigerator\\side by side\\pic1\\3.jpg', 'One (1) Ye', '5', 10, 0),
(27, 'Samsung RF220NCTASR', '1293.00', '21.6', 'Stainless steel', '65\"', '29\"', '275.3 lbs', 'Samsung RF220NCTASR French Door Refrigerator, 30\" Width, Freezer Located Ice Dispenser, Energy Efficient, 21.6 cubic ft, LED Lighting (Stainless Steel)', '22 cu. Ft. Total Capacity in a 30\" Wide French Door\r\nHigh-Efficiency LED Lighting Illuminates Virtually Every Corner\r\nSleek and Roomy\r\nOur beautiful, sleek design fit any kitchen decor and has enough room to fit up to 22 bags of groceries*. Available in 30\" (22 cu. ft.), our refrigerator provides more space inside, not outside.', '', 'images\\Samsung\\refrigerator\\french door\\pic3\\1.jpg', 'images\\Samsung\\refrigerator\\french door\\pic3\\2.jpg', 'images\\Samsung\\refrigerator\\french door\\pic3\\3.jpg', 'One (1) Ye', '6', 9, 0),
(28, 'Samsung RF220NCTAWW', '1299.00', '21.6', 'White', '66.3\"', '29.3\"', '251.3 lbs', 'Samsung RF220NCTAWW French Door Refrigerator, 30\" Width, Freezer Located Ice Dispenser, Energy Efficient, 21.6 cubic ft, LED Lighting (White)', '22 cu. Ft. Total Capacity in a 30\" Wide French Door\r\nHigh-Efficiency LED Lighting Illuminates Virtually Every Corner\r\nSleek and Roomy\r\nOur beautiful, sleek design fit any kitchen decor and has enough room to fit up to 22 bags of groceries*. Available in 30\" (22 cu. ft.), our refrigerator provides more space inside, not outside.', '', 'images\\Samsung\\refrigerator\\french door\\pic1\\1.jpg', 'images\\Samsung\\refrigerator\\french door\\pic1\\2.jpg', 'images\\Samsung\\refrigerator\\french door\\pic1\\3.jpg', 'One (1) Ye', '5', 10, 0),
(29, 'Samsung RF265BEAESR', '3294.00', '24.2', 'Stainless steel', '70\"', '35\"', '334 lbs', 'Samsung RF265BEAESR French Door Refrigerator, 36\" Width, Thru Door Ice Dispenser, Energy Efficient, 24.2 Cu. Ft., Interior Light (Refrigerator) (Stainless Steel)', 'CoolSelect Pantry\r\nChoose the optimal temperature, while separately storing fruit and cheese trays.\r\nAdjustable shelves\r\nAdjustable shelves go from standard to slide-in or flip-up to store bottles and other tall items with ease.\r\nTwin Cooling Plus\r\nDual cooling prevents spoiling and freezer burn for fresher, better-tasting food.\r\nExternal water and ice dispenser\r\nAn external dispenser offers fresh, filtered water and ice.\r\nIce Master\r\nA space-saving design keeps drinks cold with lots of ice.\r\nEn', '', 'images\\Samsung\\refrigerator\\french door\\pic4\\1.jpg', 'images\\Samsung\\refrigerator\\french door\\pic4\\2.jpg', 'images\\Samsung\\refrigerator\\french door\\pic4\\3.jpg', '1 year', '5', 10, 0),
(30, 'Samsung RF28K9070SR', '3994.00', '28.8', 'Stainless steel', '71\"', '35\"', '337 lbs', 'Samsung RF28K9070SR French Door Refrigerator, 36\" Width, Thru Door Ice Dispenser, Energy Efficient, 28.8 cubic ft, Exterior Water Dispenser, LED Lighting (Stainless Steel)', 'FlexZone\r\nConvert from freezer to refrigerator for flexibility that fits your needs.\r\nAdjustable shelves\r\nAdjustable shelves go from standard to slide-in or flip-up to store bottles and other tall items with ease.\r\nTriple Cooling\r\nThree cooling systems keep food fresher, longer.\r\nExternal water and ice dispenser\r\nAn external dispenser offers fresh, filtered water and ice.\r\nFingerprint resistant finish\r\nHelps reduce smudges for an everyday great appearance\r\nIce Master', '', 'images\\Samsung\\refrigerator\\side by side\\pic2\\1.jpg', '\r\nimages\\Samsung\\refrigerator\\side by side\\pic2\\2.jpg', 'images\\Samsung\\refrigerator\\side by side\\pic2\\3.jpg', '1 year', '3', 10, 0),
(31, 'Whirlpool WRS321SDHZ', '1298.00', '21.4', 'Fingerprint Resistan', '66\"', '32\"', '322 lbs', 'Whirlpool WRS321SDHZ Side by Side Refrigerator, 33\" Width, Thru Door Ice Dispenser, 21.4 cubic ft, Exterior Water Dispenser, LED Lighting, Fingerprint Resistant (Fingerprint Resistant Stainless Steel)', 'Adjustable Gallon Door Bins\r\nLED Interior Lighting\r\nExterior Ice and Water Dispenser with EveryDrop Water Filtration\r\nTap Touch Controls\r\nHidden Hinges\r\nElectronic Temperature Controls\r\nFingerprint Resistant\r\nFactory-Installed Icemaker\r\nAdaptive Defrost\r\nLED Dispenser Night-Light\r\nHumidity-Controlled Crispers\r\n#1 Selling Appliance Brand In The U.S.A. 1', '', 'images\\Whirlpool\\Refrigerator\\side by side\\pic1\\1.jpg', 'images\\Whirlpool\\Refrigerator\\side by side\\pic1\\2.jpg', 'images\\Whirlpool\\Refrigerator\\side by side\\pic1\\3.jpg', '1 year', '5', 11, 0),
(32, 'Whirlpool WRS588FIHZ', '1869.00', '28', 'Fingerprint Resistan', '68\"', '36.0\"', '210 lbs', 'Whirlpool WRS588FIHZ Side by Side Refrigerator, 36\" Width, Thru Door Ice Dispenser, 28 Cu. Ft., Exterior Water Dispenser, LED Lighting, Fingerprint Resistant (Fingerprint Resistant Stainless Steel)', 'Exterior Ice and Water Dispenser with EveryDrop Filtration\r\nIn-Door-Ice(R) Storage\r\nAccu-Chill Temperature Management System\r\nAdjustable Gallon Door Bins\r\n28 cu. ft. Capacity\r\nFreshFlow Air Filter\r\nAdaptive Defrost\r\nHumidity-Controlled Crispers\r\nLED Interior Lighting\r\nLED Dispenser Night-Light\r\nHidden Hinges', '', 'images\\Whirlpool\\Refrigerator\\side by side\\pic2\\1.jpg', 'images\\Whirlpool\\Refrigerator\\side by side\\pic2\\1.jpg', 'images\\Whirlpool\\Refrigerator\\side by side\\pic2\\1.jpg', '1 year', '5', 11, 0),
(33, 'Whirlpool WRS331SDHM', '1569.00', '21.4', 'Stainless steel', '66\"', '32\"', '310 lbs', 'Whirlpool WRS331SDHM Side by Side Refrigerator, 33\" Width, Thru Door Ice Dispenser, 21.4 cubic ft, Exterior Water Dispenser, LED Lighting (Stainless Steel)', 'Adjustable Gallon Door Bins\r\nEnergy Efficient(R) Certified\r\nExterior Ice and Water Dispenser with EveryDrop Water Filtration\r\nTap Touch Controls\r\nHidden Hinges\r\nElectronic Temperature Controls\r\nFactory-Installed Icemaker\r\nAdaptive Defrost\r\nLED Dispenser Night-Light\r\nHumidity-Controlled Crispers\r\n#1 Selling Appliance Brand In The U.S.A. 1', '', 'images\\Whirlpool\\Refrigerator\\side by side\\pic3\\1.jpg', 'images\\Whirlpool\\Refrigerator\\side by side\\pic3\\2.jpg', 'images\\Whirlpool\\Refrigerator\\side by side\\pic3\\3.jpg', '1 year', '10', 11, 0),
(34, 'Whirlpool WRS321SDHV', '1398.00', '21', 'Black stainless stee', '66\"', '32\"', '295 lbs', 'Whirlpool WRS321SDHV Side by Side Refrigerator, 33\" Width, Thru Door Ice Dispenser, 21 cubic ft, Exterior Water Dispenser, LED Lighting, Fingerprint Resistant (Black Stainless Steel)', 'Adjustable Gallon Door Bins\r\nLED Interior Lighting\r\nExterior Ice and Water Dispenser with EveryDrop Water Filtration\r\nTap Touch Controls\r\nHidden Hinges\r\nElectronic Temperature Controls\r\nFingerprint Resistant\r\nFactory-Installed Icemaker\r\nAdaptive Defrost\r\nLED Dispenser Night-Light\r\nHumidity-Controlled Crispers\r\n#1 Selling Appliance Brand In The U.S.A. 1', '', 'images\\Whirlpool\\Refrigerator\\side by side\\pic4\\1.jpg', 'images\\Whirlpool\\Refrigerator\\side by side\\pic4\\2.jpg', 'images\\Whirlpool\\Refrigerator\\side by side\\pic4\\3.jpg', '1 year', '4', 11, 0),
(35, 'Whirlpool WRF532SNHZ', '1598.00', '22', 'Fingerprint Resistan', '178.12 cm', '82.87 cm', '156 lbs', 'Whirlpool WRF532SNHZ French Door Refrigerator, 33\" Width, Optional Ice Maker (Special Order), Energy Efficient, 22 Cu. Ft., LED Lighting, Fingerprint Resistant (Fingerprint Resistant Stainless Steel)', 'Humidity-Controlled Crispers\r\nAccu-Chill Temperature Management System\r\nAdaptive Defrost adjusts to your usage to save more energy\r\nFreshFlow Produce Preserver\r\nFrameless Glass Shelves\r\nGallon Door Bins\r\nStore wide items like party platters and sheet cakes, and manage the temperature with manual controls', '', 'images\\Whirlpool\\Refrigerator\\french door\\pic1\\1.jpg', 'images\\Whirlpool\\Refrigerator\\french door\\pic1\\2.jpg', 'images\\Whirlpool\\Refrigerator\\french door\\pic1\\3.jpg', '1 year', '10', 12, 0),
(36, 'Whirlpool WRF550CDHZ', '1898.00', '20', 'Fingerprint Resistan', '70\"', '35.3\"', '310 lbs', 'Whirlpool WRF550CDHZ French Door Refrigerator, 36\" Width, Thru Door Ice Dispenser, 20 Cu. Ft., Counter Depth, Exterior Water Dispenser, LED Lighting, Fingerprint Resistant (Fingerprint Resistant Stainless Steel)', 'Humidity-Controlled Crispers\r\nFingerprint Resistant\r\nTwo-Tier Freezer Storage\r\nSpillproof Glass Shelves\r\nFactory-Installed Icemaker\r\nExterior Ice and Water Dispenser with EveryDrop Filtration\r\nLED Interior Lighting\r\nFast Cool Option\r\nAdaptive Defrost\r\n#1 Selling Appliance Brand in the U.S.A.', '', 'images\\Whirlpool\\Refrigerator\\french door\\pic2\\1.jpg', 'images\\Whirlpool\\Refrigerator\\french door\\pic2\\2.jpg', 'images\\Whirlpool\\Refrigerator\\french door\\pic2\\3.jpg', '1 year', '6', 12, 0),
(37, 'Whirlpool WRF535SWHV', '2201.00', '25', 'Black stainless stee', '70\"', '35\"', '290 lbs', 'Whirlpool WRF535SWHV French Door Refrigerator, 36\" Width, Freezer Located Ice Dispenser, Energy Efficient, 25 cubic ft, Interior Water Dispenser (Black Stainless Stee)', 'Humidity-Controlled Crispers\r\nInterior Water Dispenser with EveryDrop Water Filtration\r\nFull-Width, Temperature-Controlled Drawer\r\nFrameless Glass Shelves\r\nGallon Door Bins\r\nAccu-Chill Temperature Management System\r\nAdaptive Defrost\r\nFreshFlow Produce Preserver\r\nLED Interior Lighting\r\nDesigned, Engineered and Assembled in the U.S.A.\r\nEnergy Efficient(R) Certified\r\n#1 Selling Appliance Brand in the U.S.A.', '', 'images\\Whirlpool\\Refrigerator\\french door\\pic3\\1.jpg', 'images\\Whirlpool\\Refrigerator\\french door\\pic3\\2.jpg', 'images\\Whirlpool\\Refrigerator\\french door\\pic3\\3.jpg', '1 year', '5', 12, 0),
(38, 'Bosch WAT28400UC', '1099.00', '2.2', 'White', '', '23.2\"', '71.4 kg', 'Bosch 300 Series WAT28400UC Compact Washer, 23 1/2\" Width, 2.2 Cu. Ft. Capacity, 15 Wash Cycles, Stackable, Water Heater, 1400 Washer Spin Speeds (RPM) Apartment Size (White) ', 'The 300 Series Washer is a Perfect Companion Piece to the 300 Series Dryer, Matching in Quality, Performance and Design\r\nThe 300 Series Bosch Washer is Energy Efficient(R) Qualified\r\nSpeedPerfect Provides Up to 40% Faster Washing Time*\r\nEcoSilence Motor Delivers Quiet, Efficienct & Long Lasting Performance.\r\nExceeds the March 2015 Energy Efficient Water Consumption Standards\r\n2.2 Cubic Foot Drum - Large Capacity for Compact Washers', '', 'images\\bosch\\washer\\front load washers\\pic1\\1.jpg', 'images\\bosch\\washer\\front load washers\\pic1\\2.jpg', 'images\\bosch\\washer\\front load washers\\pic1\\3.jpg', '', '5', 14, 0),
(39, 'Bosch WAT28402UC', '1849.00', '2.2', 'White', '', '23.1\"', '75 kg', 'Bosch 800 Series WAT28402UC Compact Washer, 23 1/2\" Width, 2.2 Cu. Ft. Capacity, 15 Wash Cycles, Stackable, Water Heater, 1400 Washer Spin Speeds (RPM) Apartment Size, Front Load (White)', 'The 800 Series Washer & Dryer are One of the Few Energy Efficient(R) Qualified 24\" Pairs Offering Quality, Water Protection & Design\r\nWash 5 men\'s dress shirts in just 15 minutes.\r\nAquaStop(R) Plus provides extra protection against water damage.\r\nSpeedPerfect Provides Up to 40% Faster Washing Time*\r\nEcoSilence Motor Delivers Quiet, Efficienct & Long Lasting Performance.\r\nExceeds the March 2015 Energy Efficient Water Consumption Standards', '', 'images\\bosch\\washer\\front load washers\\pic2\\1.jpg', 'images\\bosch\\washer\\front load washers\\pic2\\2.jpg', 'images\\bosch\\washer\\front load washers\\pic2\\3.jpg', '', '5', 14, 0),
(40, 'Bosch WAT28401UC', '1499.00', '2.2', 'White', '', '23\"', '74.5 kg', 'Bosch 500 Series WAT28401UC Compact Washer, 23 1/2\" Width, 2.2 Cu. Ft. Capacity, 15 Wash Cycles, Stackable, Water Heater, 1400 Washer Spin Speeds (RPM) Apartment Size, Front Load (White)', 'The 500 Series Washer & Dryer are One of the Few Energy Efficient(R) Qualified 24\" Pairs Offering Quality, Water Protection & Design\r\nAquaShield(R) Provides Protection Against Water Damage\r\nThe 500 Series Bosch Washer is Energy Efficient Qualified\r\nSpeedPerfect Provides Up to 40% Faster Washing Time*\r\nEcoSilence Motor Delivers Quiet, Efficienct & Long Lasting Performance.\r\nExceeds the March 2015 Energy Efficient Water Consumption Standards', '', 'images\\bosch\\washer\\front load washers\\pic3\\1.jpg', 'images\\bosch\\washer\\front load washers\\pic3\\2.jpg', 'images\\bosch\\washer\\front load washers\\pic3\\3.jpg', '', '6', 14, 0),
(41, 'Electrolux EFLS627UTT', '1144.00', '4.4', 'Titanium', '34\"', '27\"', '74.00 kg', 'Electrolux EFLS627UTT Front Load Washer, 27\" Width, Energy Efficient, 5.1 Cu. Ft. Capacity, 9 Wash Cycles, 5 Temperature Settings, Stackable, Water Heater, 1300 Washer Spin Speeds (RPM), Steam Clean (Titanium) ', 'The most effective stain-removing washer with SmartBoost\r\nWorld\'s First Adaptive Dispenser(TM) designed to accept PODS\r\nPerfect Steam(TM) removes tough stains\r\nThorough cleaning with the LuxCare Wash System\r\n15-Minute Fast Wash\r\nSolid soil level cleans caked on stains\r\nSanitize option\r\nStainSoak(TM) option eliminates pre-treat\r\nEnergy Efficient Certified\r\nActivewear Cycle\r\n10-Year Motor & Lifetime Tub Warranty\r\nPerfect Balance System/Second Floor Guarantee\r\nFits more rooms with 27\" platform\r\nFit', '', 'images\\electrolux\\washer\\front door\\pic1\\1.jpg', 'images\\electrolux\\washer\\front door\\pic1\\2.jpg', 'images\\electrolux\\washer\\front door\\pic1\\3.jpg', '', '5', 16, 0),
(42, 'Electrolux EFLS527UTT', '1048.00', '4.0', 'Titanium', '32\"', '27\"', '70.5 kg', 'Electrolux EFLS527UTT Front Load Washer, 27\" Width, Energy Efficient, 5.0 Cu. Ft. Capacity, 9 Wash Cycles, 5 Temperature Settings, Stackable, Steam Clean (Titanium)', 'World\'s First Adaptive Dispenser(TM) designed to accept PODS\r\nPerfect Steam(TM) removes tough stains\r\nThorough cleaning with the LuxCare Wash System\r\n18-Minute Fast Wash\r\nSanitize option\r\nStainTreat(TM) II option removes set-in stains\r\nEnergy Efficient Certified\r\nActivewear Cycle\r\n10-Year Motor & Lifetime Tub Warranty\r\nPerfect Balance System/Second Floor Guarantee\r\nFits more rooms with 27\" platform\r\nFits more rooms with reversible washer door\r\nSpacious Capacity\r\nExtended Refresh\r\n9 cycles to car', '', 'images\\electrolux\\washer\\front door\\pic2\\1.jpg', 'images\\electrolux\\washer\\front door\\pic2\\2.jpg', 'images\\electrolux\\washer\\front door\\pic2\\3.jpg', '', '10', 16, 0),
(43, 'Electrolux EFLW317TIW', '1069.00', '5.1', 'White', '', '28\"', '75 kg', 'Electrolux EFLW317TIW Front Load Washer, 27\" Width, Energy Efficient, 4.3 Cu. Ft. Capacity, 5 Wash Cycles, Stackable (White)', 'Thorough cleaning with the LuxCare(TM) Wash System\r\nOur LuxCare(TM) Wash System offers a thorough clean with improved wash actions, temperature control, and smart load sensing.\r\nEnergy Efficient Certified\r\nElectrolux washers meet strict criteria to guarantee high-quality energy efficient performance--without sacrificing clean.\r\n10-Year Motor & Lifetime Tub Warranty\r\nRest easy knowing your washer is backed by a 10-year motor and lifetime tub warranty.\r\nPerfect Balance System & Second Floor Guaran', '', 'images\\electrolux\\washer\\front door\\pic3\\1.jpg', 'images\\electrolux\\washer\\front door\\pic3\\2.jpg', 'images\\electrolux\\washer\\front door\\pic3\\3.jpg', '', '6', 16, 0),
(44, 'Electrolux EFLS627UIW', '1148.00', '5.1', 'Island White', '32\"', '27\"', '74.4 kg', 'Electrolux EFLS627UIW Front Load Washer, 27\" Width, Energy Efficient, 5.1 Cu. Ft. Capacity, 9 Wash Cycles, 5 Temperature Settings, Stackable, Water Heater, 1300 Washer Spin Speeds (RPM), Steam Clean (Island White)', 'The most effective stain-removing washer with SmartBoost\r\nWorld\'s First Adaptive Dispenser(TM) designed to accept PODS\r\nPerfect Steam(TM) removes tough stains\r\nThorough cleaning with the LuxCare Wash System\r\n15-Minute Fast Wash\r\nSolid soil level cleans caked on stains\r\nSanitize option\r\nStainSoak(TM) option eliminates pre-treat\r\nEnergy Efficient Certified\r\nActivewear Cycle\r\n10-Year Motor & Lifetime Tub Warranty\r\nPerfect Balance System/Second Floor Guarantee\r\nFits more rooms with 27\" platform\r\nFit', '', 'images\\electrolux\\washer\\front door\\pic4\\1.jpg', 'images\\electrolux\\washer\\front door\\pic4\\2.jpg', 'images\\electrolux\\washer\\front door\\pic4\\3.jpg', '', '10', 16, 0),
(45, 'Haier WT7200CW', '944.44', '5.8', 'White', '32\"', '27\"', '78 kg', 'Haier WT7200CW Top Load Washer, 27\" Width, Energy Efficient, 5.8 Cu. Ft. Capacity, 8 Wash Cycles, 5 Temperature Settings, 950 Washer Spin Speeds (RPM) (White)', '6Motion Technology\r\nColdWash Technology\r\nWi-Fi\r\nSmart Diagnosis', '', 'images\\haier\\washer\\front load washer\\pic1\\1.jpg', 'images\\haier\\washer\\front load washer\\pic1\\2.jpg', 'images\\haier\\washer\\front load washer\\pic1\\3.jpg', '1 year', '8', 18, 0),
(46, 'Haier WT7600HVA', '1094.00', '6', 'Black', '34\"', '29\"', '78 kg', 'Haier WT7600HVA Top Load Washer, 27\" Width, Energy Efficient, 6 Cu. Ft. Capacity, 14 Wash Cycles, 5 Temperature Settings, 950 Washer Spin Speeds (RPM), Steam Clean (Graphite Steel)', 'TurboWash 2.0 Technology\r\nSteam Technology\r\n6Motion Technology\r\nNFC Tag On', '', 'images\\haier\\washer\\front load washer\\pic2\\1.jpg', 'images\\haier\\washer\\front load washer\\pic2\\2.jpg', 'images\\haier\\washer\\front load washer\\pic2\\3.jpg', '1 year', '20', 18, 0),
(47, 'Samsung WA50M7450AP\r\n', '849.00', '5.8', 'Platinum', '32\"', '27\"', '74.5 kg', 'Samsung WA50M7450AP Top Load Washer, 27\" Width, Energy Efficient, 5.8 Cu. Ft. Capacity, 11 Wash Cycles, 5 Temperature Settings, 800 Washer Spin Speeds (RPM) (Platinum)', '5.0 cu. ft. Capacity - Fewer washes\r\nVRT Plus Technology - Reduces vibration for quiet washing\r\n5.0 cu. ft. Capacity\r\nDo more laundry in less time. Large capacity size means fewer loads, and fewer loads means more time doing other things you love. With a washer capacity of 5.0 cu. ft., you can quickly wash more laundry in a single load, saving you time and effort.\r\nVRT Plus Technology\r\nReduces vibration 40% more than standard VRT for quiet washing. An innovative tub design and special sensors ke', '', 'images\\Samsung\\washer\\top load\\pic1\\1.jpg', 'images\\Samsung\\washer\\top load\\pic1\\2.jpg', 'images\\Samsung\\washer\\top load\\pic1\\3.jpg', '', '15', 19, 0),
(48, 'Samsung WA45N7150AW', '749.00', '5.2', 'White', '31\"', '26\"', '73.5 kg', 'Samsung WA45N7150AW Top Load Washer, Energy Efficient, 5.2 Cu. Ft. Capacity, 11 Wash Cycles (White)', 'Samsung WA45N7150AW Top Load Washer, Energy Efficient, 5.2 Cu. Ft. Capacity, 11 Wash Cycles', '', 'images\\Samsung\\washer\\top load\\pic2\\1.jpg', 'images\\Samsung\\washer\\top load\\pic2\\2.jpg', 'images\\Samsung\\washer\\top load\\pic2\\3.jpg', '', '5', 19, 0),
(49, 'Samsung WF45M5100AW', '799.00', '5.2', 'White', '27\"', '25\"', '72.5 kg', 'Samsung WF45M5100AW Front Load Washer, 27\" Width, Energy Efficient, 5.2 Cu. Ft. Capacity, 8 Wash Cycles, 8 Temperature Settings, Stackable, 1300 Washer Spin Speeds (RPM) (White) ', 'Samsung WF45M5100AW Front Load Washer, 27\" Width, Energy Efficient, 5.2 Cu. Ft. Capacity, 8 Wash Cycles, 8 Temperature Settings, Stackable, 1300 Washer Spin Speeds (RPM) (White) ', '', 'images\\Samsung\\washer\\front load\\pic1\\1.jpg', 'images\\Samsung\\washer\\front load\\pic1\\2.jpg', 'images\\Samsung\\washer\\front load\\pic1\\3.jpg', '', '15', 20, 0),
(50, 'Samsung WF45K6500AV', '1044.00', '5.1', 'Black Stainless', '35\"', '24\"', '71.5 kg', 'Samsung WF45K6500AV Front Load Washer, 27\" Width, Energy Efficient, 5.2 Cu. Ft. Capacity, 12 Wash Cycles, 5 Temperature Settings, Stackable, 1300 Washer Spin Speeds (RPM), Steam Clean (Black Stainless)', 'AddWash\r\nThe AddWash door eliminates the need to do an extra load of laundry just because you forgot an item. Now you can conveniently add in forgotten laundry after the cycle has begun, without starting all over again.\r\nSuper Speed\r\nGet up to a 40% faster wash cycle* - without sacrificing cleaning performance. With Super Speed, you can quickly wash a full load in as little as 36 minutes.\r\n4.5 cu. ft. Capacity\r\nWasher capacity has a direct impact on how much time you spend doing laundry. Larger ', '', 'images\\Samsung\\washer\\front load\\pic2\\1.jpg', 'images\\Samsung\\washer\\front load\\pic2\\2.jpg', 'images\\Samsung\\washer\\front load\\pic2\\3.jpg', '1 year', '20', 20, 0),
(51, 'Whirlpool WTW4855HW', '639.00', '4.4', 'White', '34\"', '26\"', '78 kg', 'Whirlpool WTW4855HW Top Load Washer, 27.5\" Width, 4.4 Cu. Ft. Capacity, 12 Wash Cycles, 5 Temperature Settings, 700 Washer Spin Speeds (RPM) (White)', 'Two-Way Wash Action Agitator\r\n3.8 cu. ft. Capacity\r\nLate Lid Lock\r\nQuick Wash Cycle\r\nWhites Cycle\r\nColors Cycle\r\nBulky/Sheets Cycle\r\nDelicates Cycle\r\nExtra Rinse Option\r\nClean Washer with Affresh(R) Cycle\r\nDesigned, Engineered and Assembled in the U.S.A.', '', 'images\\Whirlpool\\washer\\Top load\\1.jpg', 'images\\Whirlpool\\washer\\Top load\\2.jpg', 'images\\Whirlpool\\washer\\Top load\\3.jpg', '1 year', '20', 21, 0),
(52, 'Whirlpool WFW85HEFC', '1148.00', '4.8', 'Chrome Shadow', '34\"', '28\"', '76.5 kg', 'Whirlpool WFW85HEFC Front Load Washer, 27\" Width, Energy Efficient, 5.2 Cu. Ft. Capacity, 11 Wash Cycles, 5 Temperature Settings, Stackable, Water Heater, 1200 Washer Spin Speeds (RPM), Steam Clean (Chrome Shadow)', 'umbleFresh Option\r\nPresoak Option\r\nEcoBoost Option\r\nPrecision Dispense\r\nSteam Clean Option\r\nSmooth Wave Stainless Steel Wash Basket\r\n5.2 cu. ft. I.E.C. Capacity\r\nUndercounter Installation\r\nAdd-A-Garment\r\nEnergy Efficient(R) Certified\r\nTier 3\r\nSanitize Cycle with Heater\r\nQuick Wash Cycle\r\nVisible Ball Balancer', '', 'images\\Whirlpool\\washer\\Front load\\1.jpg', 'images\\Whirlpool\\washer\\Front load\\2.jpg', 'images\\Whirlpool\\washer\\Front load\\3.jpg', '1 year', '20', 22, 0),
(53, 'Bosch WTG86400UC', '1099.00', '4.0', 'White', '34\"', '27\"', '78 kg', 'Bosch 300 Series WTG86400UC Dryer, 23 1/2\" Width, Electric Dryer, 4.0 Cu. Ft. Capacity, 15 Dry Cycles, 4 Temperature Settings, Stackable, Steel Drum (White) ', 'Condensation Drying Doesn\'t Require Ducting\r\nPerfect Design Match to Bosch 300 Series Washer\r\nAnti-vibration Circular Side Walls Reduce Vibration\r\nGalvalume Drum\r\nNeat White - European Design\r\nSee-thru White Door\r\nLarge LED Display with Remaining Time\r\nElectronic Control\r\nStackable - Space Saving\r\nThe Sensitive Drying System Uses Warm, Mild Air to Gently Dry Laundry\r\nSensor-controlled Automatic Drying Programs\r\nLower Temperatures Gently Dry Delicate Laundry Items\r\nUnique Drum Pattern Creates Air', '', 'images\\bosch\\dryer\\electric dryer\\pic1\\1.jpg', 'images\\bosch\\dryer\\electric dryer\\pic1\\2.jpg', 'images\\bosch\\dryer\\electric dryer\\pic1\\3.jpg', '', '20', 23, 0),
(54, 'Bosch WTG865H2UC', '1949.00', '4.0', 'White', '38\"', '29\"', '78 kg', 'Bosch 800 Series WTG865H2UC Dryer, 24\" Width, Electric Dryer, 4.0 Cu. Ft. Capacity, 14 Dry Cycles, 6 Temperature Settings, Stackable, Steel Drum (White)', 'Quietest Dryer in the Market\r\nOne of the Few Energy Efficient(R) Qualified Dryer in 24\" Compact Laundry Market\r\nWrinkle Block Program Reduces Creasing or Wrinkle Build Up\r\nDry 5 Men\'s Dress Shirts in Just 15 Minutes.\r\nDry Up to 18 Towels in One Load', '', 'images\\bosch\\dryer\\electric dryer\\pic2\\1.jpg', 'images\\bosch\\dryer\\electric dryer\\pic2\\2.jpg', 'images\\bosch\\dryer\\electric dryer\\pic2\\3.jpg', '', '15', 23, 0),
(55, 'Electrolux EFMC617STT', '1032.00', '8.0', 'Titanium', '34\"', '27\"', '72.5 kg', 'Electrolux EFMC617STT Dryer, 27\" Width, Electric Dryer, 8.0 Cu. Ft. Capacity, 9 Dry Cycles, 5 Temperature Settings, Stackable, Steel Drum (Titanium)', 'Instant Refresh Cycle revives fabrics\r\nKeeps clothes looking their best\r\n15-Minute Fast Dry\r\nAllergen Cycle\r\nEnergy Efficient Certified\r\nPerfect Steam(TM) wrinkle release option\r\nExtended Tumble Option keeps clothes tangle free\r\nLargest Capacity Dryer\r\n9 cycles to care for every fabric\r\nFits more rooms with reversible door\r\nOptional pedestals and stacking kit for more installation options\r\nPlatinum Star Limited Warranty', '', 'images\\electrolux\\dryer\\electric dryer\\pic1\\1.jpg', 'images\\electrolux\\dryer\\electric dryer\\pic1\\2.jpg', 'images\\electrolux\\dryer\\electric dryer\\pic1\\3.jpg', '', '20', 24, 0),
(56, 'Electrolux EFDC210TIW', '898.00', '4.5', 'White', '34\"', '24\"', '74.6 kg', 'Electrolux EFDC210TIW Dryer, 24\" Width, Electric Dryer, 4 Cu. Ft. Capacity, 7 Dry Cycles, 4 Temperature Settings, Stackable, Steel Drum', 'Ventless Model\r\nReverse Tumble\r\nIQ-Touch(TM) Controls\r\n7 Dry Cycles\r\n4 Temperature Settings\r\nGentle Dry\r\nDelay Start\r\nReversible Door\r\nStainless Steel Tub', '', 'images\\electrolux\\dryer\\electric dryer\\pic2\\1.jpg', 'images\\electrolux\\dryer\\electric dryer\\pic2\\2.jpg', 'images\\electrolux\\dryer\\electric dryer\\pic2\\3.jpg', '', '20', 24, 0),
(57, 'Electrolux EFMG627UTT', '1148.00', '4.5', 'Titanium', '34\"', '24\"', '76 kg', 'Electrolux EFMG627UTT Dryer, 27\" Width, Gas Dryer, 8.0 Cu. Ft. Capacity, 9 Dry Cycles, 5 Temperature Settings, Stackable, Steel Drum, Steam Clean (Titanium)', 'Predictive Dry(TM) more accurately predicts dry times\r\nHelp prevent over or under drying with LuxCare Dry System\r\nInstant Refresh Cycle revives fabrics\r\n15-Minute Fast Dry\r\nEnergy Efficient Certified\r\nPerfect Steam(TM) wrinkle release option\r\nExtended Tumble Option keeps clothes tangle-free\r\nLuxCare Lint Shield\r\nActivewear Cycle\r\nExtra Large Capacity Dryer\r\nPlatinum Star Limited Warranty\r\n9 cycles to care for every fabric\r\nFits more rooms with reversible door\r\nOptional pedestals and stacking kit', '', 'images\\electrolux\\dryer\\gas dryer\\1.jpg', 'images\\electrolux\\dryer\\gas dryer\\2.jpg', 'images\\electrolux\\dryer\\gas dryer\\3.jpg', '', '25', 25, 0);
INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `capacity`, `color`, `product_height`, `product_width`, `product_weight`, `specification`, `description`, `reviews`, `image`, `image1`, `image2`, `warranty`, `quantity`, `product_type_id`, `user_id_fk`) VALUES
(58, 'GE PCVH480EKWW', '898.00', '4.0', 'White', '31\"', '24\"', '71.5 kg', 'GE PCVH480EKWW Dryer, 23 1/2\" Width, Electric Dryer, 4.0 Cu. Ft. Capacity, 6 Dry Cycles, 5 Temperature Settings, Stackable, Steel Drum (White)', 'Sensor Dry\r\nActive Wear\r\nSensor Dry\r\nThe electronic sensor dry system dries clothes more evenly than ever before! The system\'s sensors touch the clothes and stop the heating cycles as soon as the clothes have reached the selected dryness.\r\nActive Wear\r\nSpecific settings to take special care of clothing worn for active sports exercise.', '', 'images\\GE\\dryer\\electric dryer\\pic1\\1.jpg', 'images\\GE\\dryer\\electric dryer\\pic1\\2.jpg', 'images\\GE\\dryer\\electric dryer\\pic1\\3.jpg', '', '10', 26, 0),
(59, 'GE GFD45ESMMDG', '799.00', '4.8', 'Diamond Grey', '31\"', '26\"', '76.5 kg', 'GE GFD45ESMMDG Dryer, 27\" Width, Electric Dryer, 7.5 Cu. Ft. Capacity, 10 Dry Cycles, 4 Temperature Settings, Stackable, Steam Clean (Diamond Grey)', 'GE GFD45ESMMDG Dryer, 27\" Width, Electric Dryer, 7.5 Cu. Ft. Capacity, 10 Dry Cycles, 4 Temperature Settings, Stackable, Steam Clean', '', 'images\\GE\\dryer\\electric dryer\\pic2\\1.jpg', 'images\\GE\\dryer\\electric dryer\\pic2\\2.jpg', 'images\\GE\\dryer\\electric dryer\\pic2\\3.jpg', '', '8', 26, 0),
(60, 'Haier HLP141E', '499.00', '', 'White', '34\"', '26\"', '71.5 kg', 'Haier HLP141E Dryer, 24 7/8\" Width, Electric Dryer, 2.5 Cu. Ft. Capacity, 3 Dry Cycles, Stackable, Steel Drum (White)', 'Electronic Control - Precise control provides optimal performance\r\nWall Mountable - Saves floor space\r\nTemperature Dryness Sensor - Automatically determines when clothes are dry, saving energy and protecting fabrics\r\n3 Auto and Timed Dry Cycles\r\nEnd-of-Cycle Signal\r\nCycle Progress LEDs (Red)\r\nCheck Filter Indicator\r\nRequires 120V, 60Hz - Provides a reliable electrical supply', '', 'images\\haier\\dryer\\1.jpg', 'images\\haier\\dryer\\2.jpg', 'images\\haier\\dryer\\3.jpg', '', '9', 27, 0),
(61, 'LG DLEX3570V', '1044.00', '5.1', 'Grey', '35\"', '24\"', '72.5 kg', 'LG DLEX3570V Dryer, 27\" Width, Electric Dryer, 7.4 Cu. Ft. Capacity, 12 Dry Cycles, 5 Temperature Settings, Stackable, Steel Drum, Steam Clean', 'HARNESS THE POWER OF STEAM\r\nLG\'s TrueSteam Technology uses a steam generator to produce real steam right into in the dryer giving you unique cycle options that remove wrinkles, odours, static and allergens.\r\nTHE QUICK FIX\r\nLate for the party and no time to iron your favourite outfit? The SteamFresh Cycle refreshes and reduces wrinkles in up to five garments at a time with one 20-minute dryer cycle.\r\nRefresh and Sanitize\r\nSteamSanitary Cycle refreshes and sanitizes dry items in the steam dryer. T', '', 'images\\lg\\dryer\\electric dryer\\pic1\\1.jpg', 'images\\lg\\dryer\\electric dryer\\pic1\\2.jpg', 'images\\lg\\dryer\\electric dryer\\pic1\\3.jpg', '1 year', '20', 29, 0),
(62, 'LG DLE3500W', '844.99', '4.9', 'White', '34\"', '25\"', '76.5 kg', 'LG DLE3500W Dryer, 27\" Width, Electric Dryer, 7.4 Cu. Ft. Capacity, 10 Dry Cycles, 3 Temperature Settings, Stackable, Steel Drum, Wifi Enabled (White)', '7.4 cu. ft. Ultra Large Capacity\r\nSmartThinQ(R) Technology (Wi-Fi Enabled)\r\nSensor Dry system\r\nWrinkle Care\r\nSpeed Dry Cycle\r\nSmartDiagnosis', '', 'images\\lg\\dryer\\electric dryer\\pic2\\1.jpg', 'images\\lg\\dryer\\electric dryer\\pic2\\2.jpg', 'images\\lg\\dryer\\electric dryer\\pic2\\3.jpg', '1 year', '20', 29, 0),
(63, 'Samsung DV42H5000EW', '699.00', '4.8', 'White', '34\"', '24\"', '76 kg', 'Samsung DV42H5000EW Dryer, 27\" Width, Electric Dryer, 7.5 Cu. Ft. Capacity, 11 Dry Cycles, 4 Temperature Settings, Stackable, Porcelain Drum (White)', '7.5 cu ft. Capacity\r\nOur 7.5 cu. ft. capacity dryer has 9 cycles and lets you dry 2.8 laundry baskets in a single load.*\r\nSensor Dry\r\nSensor Dry combines the latest Samsunginnovations to provide a drying cycle that\'s timed to perfection. Plus, moisture sensors protect your laundry from heat damage by automatically shutting off the dryer when your clothes are dry.\r\nSmart Care\r\nSkip customer service and troubleshoot issues straight from your smartphone. Smart Care interacts with your washer and dr', '', 'images\\Samsung\\dryer\\electric\\pic1\\1.jpg', 'images\\Samsung\\dryer\\electric\\pic1\\2.jpg', 'images\\Samsung\\dryer\\electric\\pic1\\3.jpg', '', '25', 31, 0),
(64, 'Samsung DVE45M5500P', '794.00', '5.1', 'Platinum', '34\"', '26\"', '76.5 kg', 'Samsung DVE45M5500P Dryer, 27\" Width, Electric Dryer, 7.5 Cu. Ft. Capacity, 10 Dry Cycles, 4 Temperature Settings, Stackable, Steam Clean (Platinum) ', 'Energy Efficient (R) Certified\r\nEco-friendly and energy-efficient, Meets the strict 2017 energy efficiency specifications and standards.*\r\nMulti-Steam Technology\r\nWith powerful and flexible steam options, you can reduce and remove wrinkles, odors, bacteria and static. Unlike other steam dryers which require users to manually refill a water reservoir, Samsung\'s Multi-Steam Technology requires no refills. Now you can confidently steam away wrinkles and spend less time ironing.\r\nVent Sensor\r\nDetect', '', 'images\\Samsung\\dryer\\electric\\pic2\\1.jpg', 'images\\Samsung\\dryer\\electric\\pic2\\2.jpg', 'images\\Samsung\\dryer\\electric\\pic2\\3.jpg', '', '25', 31, 0),
(65, 'Whirlpool YWHD5090GW', '849.99', '4.2', 'White', '35\"', '22\"', '76.5 kg', 'Whirlpool YWHD5090GW Dryer, 24\" Width, Electric Dryer, 4.3 Cu. Ft. Capacity, 10 Dry Cycles, 3 Temperature Settings, Stackable, Steel Drum Heat Pump Ventless (White)', 'Our Most Space-Saving Design Available\r\nOur Most Efficient Compact Dryer Technology\r\nWrinkle Shield Option\r\nRefresh Cycle\r\nBaffles\r\nWool Cycle\r\nBulky Bedding Cycle\r\nAir Dry Cycle\r\n4.3 Cu. Ft. Capacity\r\nGentle Dry\r\nX-Dry', '', 'images\\Whirlpool\\dryer\\electric\\pic1\\1.jpg', 'images\\Whirlpool\\dryer\\electric\\pic1\\2.jpg', 'images\\Whirlpool\\dryer\\electric\\pic1\\3.jpg', '', '20', 32, 0),
(66, 'Whirlpool YWED87HEDC', '1089.00', '7.4', 'Stainless Steel', '36\"', '26\"', '76.5 kg', 'Whirlpool YWED87HEDC Dryer, 27\" Width, Electric Dryer, 7.4 Cu. Ft. Capacity, 9 Dry Cycles, 5 Temperature Settings, Stackable, Porcelain Drum, Steam Clean (Stainless Steel)', '7.3 Cu. Ft. Capacity\r\nEcoBoost option\r\nSteam Refresh Cycle\r\nWrinkle Shield Plus Option With Steam\r\nSanitize Cycle\r\nQuick Dry Cycle\r\nEstimated Time Remaining LED Display\r\nDesigned, Engineered and Assembled in the U.S.A.', '', 'images\\Whirlpool\\dryer\\electric\\pic2\\1.jpg', 'images\\Whirlpool\\dryer\\electric\\pic2\\2.jpg', 'images\\Whirlpool\\dryer\\electric\\pic2\\3.jpg', '', '20', 32, 0),
(67, 'Whirlpool YWED8500DC', '998.00', '8.8', 'Chrome Shadow', '34\"', '23\"', '71.5 kg', 'Whirlpool YWED8500DC Dryer, 29\" Width, Gas Dryer, 8.8 Cu. Ft. Capacity, 25 Dry Cycles, 5 Temperature Settings, Steel Drum, Steam Clean (Chrome Shadow )', '8.8 cu. Ft. Capacity\r\nSteam Refresh Cycle\r\n8.8 cu. Ft. Capacity\r\nThe 8.8 cu. ft. capacity dryer dries more than four baskets of laundry in one load.\r\nSteam Refresh Cycle\r\nClothes are ready to wear, thanks to the Steam Refresh cycle. It releases wrinkles and reduces odors without rewashing.', '', 'images\\Whirlpool\\dryer\\Gas dryer\\1.jpg', 'images\\Whirlpool\\dryer\\Gas dryer\\2.jpg', 'images\\Whirlpool\\dryer\\Gas dryer\\3.jpg', '', '25', 33, 0),
(68, 'LG DV45H7000EW', '644.00', '7.4', 'White', '35\"', '23.3\"', '71.5 kg', 'LG DV45H7000EW Dryer, 27\" Width, Gas Dryer, 7.4 Cu. Ft. Capacity, 9 Dry Cycles, 5 Temperature Settings, Porcelain Drum (White)', 'Sensor Dry\r\nOptimizes the time and temperature to dry clothes thoroughly. Moisture sensors detect when laundry has reached the optimal degree of dryness. They help protect your laundry from heat damage by automatically shutting off the dryer when your clothes are dry.\r\n7.4 cu. ft. Capacity\r\nGets more laundry done in less time.\r\n9 Preset Dry Cycles\r\nCovers almost any drying need for your active family.\r\n7 Options\r\nAdd the best option to your Dry Cycle to get more out of each load', '', 'images\\lg\\dryer\\gas dryer\\1.jpg', 'images\\lg\\dryer\\gas dryer\\2.jpg', 'images\\lg\\dryer\\gas dryer\\3.jpg', '', '15', 30, 0),
(69, 'Bosch HMD8451UC', '2,094.00', '1.2', 'Stainless Steel', '414 mm', '606 mm', '36.2 kg', 'Bosch 800 Series HMD8451UC Microwave Drawer, 24\" Exterior Width, 950 Watts, 1.2 cubic ft (Stainless Steel)', 'Installs Under Countertops, in an Island or Below a Wall Oven\r\nSleek, Low Profile Design Can Be Installed Flush to Cabinets\r\n11 Preset Power Levels For Multiple Power Options\r\nAutomatic Defrost Determines Power Level and Cooking Time\r\nConvenient Automatic Sensor Programs Simplify for Great Results\r\nChild Safety Lock Prevents Unwanted Use\r\nInterior Oven Light\r\nTimer with Cook Function and Automatic Shut Off\r\nGlass Touch Controls With LCD White Display\r\n1.2 Cu. Ft. Oven Capacity\r\nAble to Fit a 20 ', '', 'images\\bosch\\Microwave\\built in microwave\\pic1\\1.jpg', 'images\\bosch\\Microwave\\built in microwave\\pic1\\2.jpg', 'images\\bosch\\Microwave\\built in microwave\\pic1\\3.jpg', '', '20', 34, 0),
(70, 'Bosch HMB50162UC', '1199.00', '2.5', 'Black', '411 mm', '623 mm', '38.3 kg', 'Bosch 500 Series HMB50162UC Built In Microwave, 30\" Exterior Width, 950 Watts, 1.6 cubic ft (Black)', '1.6 cu. ft. Large cooking interior adds the flexibility for a variety of meal options.\r\nBuilt For Speed and Convenience With 950 Watts of Microwave Cooking Power\r\nConvenient Automatic Sensor Programs Simplify Cooking for Great Results Every Time\r\nWhite Colored LCD Matches Bosch Wall Ovens', '', 'images\\bosch\\Microwave\\built in microwave\\pic2\\1.jpg', 'images\\bosch\\Microwave\\built in microwave\\pic2\\2.jpg', '', '', '25', 34, 0),
(71, 'Electrolux EI24MO45IB', '598.00', '2.0', 'Black', '415 mm', '640 mm', '35.5 kg', 'Electrolux EI24MO45IB Built In Microwave, 24\" Exterior Width, 1100 Watts, 2.0 cubic ft (Black)', 'Electrolux EI24MO45IB Built In Microwave, 24\" Exterior Width, 1100 Watts, 2.0 cubic ft ', '', 'images\\electrolux\\microwave\\built in microwave\\pic1\\1.jpg', 'images\\electrolux\\microwave\\built in microwave\\pic1\\2.jpg', 'images\\electrolux\\microwave\\built in microwave\\pic1\\3.jpg', '', '10', 36, 0),
(72, 'Electrolux EW30SO60QS', '1998.00', '1.5', 'Stainless Steel', '411 mm', '620 mm', '36 kg', 'Electrolux EW30SO60QS Built In Microwave, 30\" Exterior Width, Convection, 900 Watts, 1.5 cubic ft, Stainless Steel Interior (Stainless Steel)', 'Wave-Touch Controls\r\nOne simple touch on your microwave and the control panel activates, showing the virtually endless cooking options. After you make your choices, all but the option selected will fade away, returning to an elegant display.\r\nConvection cooking\r\nBake and brown your favorite foods with the convenience of a microwave and the performance on an oven - perfect for cooking everything for your family or gatherings.\r\nMulti-stage Cooking\r\nConveniently program your recipes that require mu', '', 'images\\electrolux\\microwave\\built in microwave\\pic2\\1.jpg', 'images\\electrolux\\microwave\\built in microwave\\pic2\\2.jpg', 'images\\electrolux\\microwave\\built in microwave\\pic2\\3.jpg', '', '25', 36, 0),
(73, 'GE PEM10SLFC', '248.00', '1.1', 'Slate', '400 mm', '615 mm', '30.1 kg', 'GE PEM10SLFC counter-top Microwave, 800 Watts, 1.1 cubic ft (Slate)', '3 in 1 (Countertop, Built-in, Undercounter)\r\nSPACEMAKER: 3 in 1 installation Options (Built-In, Under Cabinet, Countertop)', '', 'images\\GE\\microwave\\countertop\\pic1\\1.jpg', 'images\\GE\\microwave\\countertop\\pic1\\2.jpg', 'images\\GE\\microwave\\countertop\\pic1\\3.jpg', '', '10', 38, 0),
(74, 'GE PEM10BFC', '244.00', '1.1', 'Black', '410 mm', '633 mm', '32.2 kg', 'GE Profile PEM10BFC Countertop Microwave, 800 Watts, 1.1 cubic ft (Black)', '3 in 1 (Countertop, Built-in, Undercounter)\r\nSPACEMAKER: 3 in 1 installation Options (Built-In, Under Cabinet, Countertop)', '', 'images\\GE\\microwave\\countertop\\pic2\\1.jpg', 'images\\GE\\microwave\\countertop\\pic2\\2.jpg', 'images\\GE\\microwave\\countertop\\pic2\\3.jpg', '', '5', 38, 0),
(77, 'LG LMC1575ST', '164.99', '1.5', 'Stainless Steel', '410 mm', '625 mm', '32.65 kg', 'LG LMC1575ST Countertop Microwave, 1250 Watts, 1.5 cubic ft (Stainless Steel)', '1.5 cu.ft. Capacity\r\nSmart Inverter\r\nEasyClean(R) Interior\r\nSmoothTouch Glass Touch + Keypad\r\nSensor Cook', '', 'images\\lg\\microwave\\counter top\\pic1\\1.jpg', 'images\\lg\\microwave\\counter top\\pic1\\2.jpg', 'images\\lg\\microwave\\counter top\\pic1\\3.jpg', '', '10', 41, 0),
(78, 'LG LMC0975ST', '159.00', '0.9', 'Stainless Steel', '610 mm', '410 mm', '31.25 kg', 'LG LMC0975ST Countertop Microwave, 1000 Watts, 0.9 cubic ft (Stainless Steel)', '0.9 cu.ft. Capacity\r\nSmart Inverter\r\nEasyClean(R) Interior\r\nSmoothTouch Glass Touch + Keypad\r\nHexagonal Stable Ring\r\n10 Year Warranty on Magnetron', '', 'images\\lg\\microwave\\counter top\\pic2\\1.jpg', 'images\\lg\\microwave\\counter top\\pic2\\2.jpg', 'images\\lg\\microwave\\counter top\\pic2\\3.jpg', '', '8', 41, 0),
(79, 'Samsung MG14J3020CM', '199.00', '1.4', 'Stainless Steel', '433 mm', '652 mm', '36.6 kg', 'Samsung MG14J3020CM Countertop Microwave, 1.4 cubic ft (Stainless Steel)', 'Samsung MG14J3020CM Countertop Microwave, 1.4 cubic ft ', '', 'images\\Samsung\\Microwave\\counter top\\pic1\\1.jpg', 'images\\Samsung\\Microwave\\counter top\\pic1\\2.jpg', 'images\\Samsung\\Microwave\\counter top\\pic1\\3.jpg', '', '10', 46, 0),
(80, 'Samsung MS11J5023AS', '174.00', '1.1', 'Black', '399 mm', '612 mm', '33.5 kg', 'Samsung MS11J5023AS Countertop Microwave, 900 Watts, 1.1 cubic ft (Stainless Steel)', 'Samsung MS11J5023AS Countertop Microwave, 900 Watts, 1.1 cubic ft', '', 'images\\Samsung\\Microwave\\counter top\\pic2\\1.jpg', 'images\\Samsung\\Microwave\\counter top\\pic2\\2.jpg', 'images\\Samsung\\Microwave\\counter top\\pic2\\3.jpg', '', '15', 46, 0),
(81, 'Bosch SHE3AR72UC', '649.00', '14', 'White', '860 mm', '600 mm', '34.7 kg', 'Bosch 100 Series SHE3AR72UC Built-In Undercounter Dishwasher, 24\" Exterior Width, 6 Wash Cycles, Stainless Steel (Interior), 2 Loading Racks, Full Console, 14 Capacity (Place Settings), 50 Decibel Level (White)', 'Key Features\r\n50 dBA- Quietest Dishwasher Brand.\r\nSaves up to 280 gallons of water each year\r\nSelf-Latching Door Stays Put and Latches\r\nRed Remaining Time Display\r\nDelicate Wash for Fine China\r\nDesign\r\nStainless Steel TallTub w/ *PP\r\nSilver Colored Fascia in Stainless Steel\r\nRed Remaining Time Display\r\nPerformance\r\n50 dBA- Quietest Dishwasher Brand.\r\n4 Wash Cycles and 2 Options\r\nSanitize Option eliminates bacteria and enhances drying results\r\nVariable Spray Pressure', '', 'images\\bosch\\dishwasher\\Built in undercounter dishwasher\\pic1\\1.jpg', 'images\\bosch\\dishwasher\\Built in undercounter dishwasher\\pic1\\2.jpg', 'images\\bosch\\dishwasher\\Built in undercounter dishwasher\\pic1\\3.jpg', '', '25', 48, 0),
(82, 'Bosch SHE3AR76UC', '649.99', '14', 'Black', '899 mm', '456 mm', '35.5 kg', 'Bosch Ascenta Series SHE3AR76UC Built-In Undercounter Dishwasher, 24\" Exterior Width, 6 Wash Cycles, Stainless Steel (Interior), 2 Loading Racks, Full Console, 14 Capacity (Place Settings), 50 Decibel Level (Black) ', '50 dBA- Quietest Dishwasher Brand.\r\nSaves up to 280 gallons of water each year\r\nSelf-Latching Door Stays Put and Latches\r\nDelicate Wash for Fine China\r\nStainless Steel TallTub w/ *PP\r\nRed Remaining Time Display\r\n6 Wash Cycles and 2 Options\r\nSanitize Option eliminates bacteria and enhances drying results\r\nVariable Spray Pressure\r\n269 kwh/yr - Energy Efficient(R)\r\nExceeds Energy Efficient Requirements for Water by 69%\r\nEcoSense Reduces Energy Usage by up to 20%\r\nBosch Exclusive 24/7 Overflow Leak ', '', 'images\\bosch\\dishwasher\\Built in undercounter dishwasher\\pic2\\1.jpg', 'images\\bosch\\dishwasher\\Built in undercounter dishwasher\\pic2\\2.jpg', 'images\\bosch\\dishwasher\\Built in undercounter dishwasher\\pic2\\3.jpg', '', '20', 48, 0),
(83, 'Electrolux EI24CD35RS', '639.00', '12', 'Stainless Steel', '988 mm', '455 mm', '36.65 kg', 'Electrolux EI24CD35RS Built-In Undercounter Dishwasher, 24\" Exterior Width, 5 Wash Cycles, Stainless Steel (Interior), 3 Loading Racks, Full Console, 49 Decibel Level (Stainless Steel) ', 'ProClean(TM) System\r\n4x More Water Coverage\r\n30-Minute Fast Wash Cycle\r\nTarget Wash Zones\r\nLuxury-Dry(TM) System\r\n3rd Rack with Removable Tray\r\nEasy-Lift Adjustable Racks\r\nFront Control Clean Light Indicator\r\nStreamlined Inset Handle\r\nSure-2-Fit Racking System\r\nLuxury Soft Grip Racks\r\nPerfect Stemware Grips\r\nLuxury-Glide Racks\r\nPlatinum Star Limited Warranty\r\nPerfect Stemware(TM) Cycle\r\nSmart Soil Sensor\r\nIQ-Touch(TM) Controls\r\nDeluxe Racking System\r\nEco-friendly\r\nLuxury-Hold(TM) Door\r\nEnergy Ef', '', 'images\\electrolux\\dishwasher\\built in undercounter\\pic1\\1.jpg', 'images\\electrolux\\dishwasher\\built in undercounter\\pic1\\2.jpg', 'images\\electrolux\\dishwasher\\built in undercounter\\pic1\\3.jpg', '', '25', 50, 0),
(84, 'Electrolux EIDW1805KS', '998.00', '14', 'Stainless Steel', '969 mm', '556 mm', '36.5 kg', 'Electrolux EIDW1805KS Built-In Undercounter Dishwasher, 18\" Exterior Width, 5 Wash Cycles, 2 Loading Racks, Fully Integrated, 12 Capacity (Place Settings), 56 Decibel Level (Stainless Steel)', 'Luxury-Glide Racks\r\nPlatinum Star Limited Warranty\r\nIQ-Touch(TM) Controls\r\nLuxury-Hold(TM) Door\r\nDeluxe Racking System\r\nEnergy Efficient\r\nADA Compliant', '', 'images\\electrolux\\dishwasher\\built in undercounter\\pic2\\1.jpg', 'images\\electrolux\\dishwasher\\built in undercounter\\pic2\\2.jpg', 'images\\electrolux\\dishwasher\\built in undercounter\\pic2\\3.jpg', '', '15', 50, 0),
(85, 'GE GDT696SSFSS', '515.55', '12', 'White', '966 mm', '522 mm', '35.65 kg', 'GE GDT696SSFSS Built-In Undercounter Dishwasher, 24\" Exterior Width, 6 Wash Cycles, Stainless Steel (Interior), 2 Loading Racks, Fully Integrated, 12 Capacity (Place Settings), 55 Decibel Level (Stainless Steel)', '1-24 hr. Delay Start\r\nFive-Level Wash System\r\nProvides effective, yet quiet cleaning power\r\nAudible End-of-Cycle Signal\r\nThe dishwasher makes a sound to tell you when the load is complete and dishe are ready to unload.\r\nNylon Racks\r\nDurable racks are designed to resist rust and secure dishes.\r\nStemSafe(TM) Shelf\r\nAllows for odd-shaped items and delicate stemware\r\nTub & Door Liner Stainless Steel\r\nStainless steel tub retains its attractive shine cycle after cycle, year after year\r\nLow Profile Ins', '', 'images\\GE\\dishwasher\\built in undercounter\\pic1\\1.jpg', 'images\\GE\\dishwasher\\built in undercounter\\pic1\\2.jpg', 'images\\GE\\dishwasher\\built in undercounter\\pic1\\3.jpg', '1 year', '25', 52, 0),
(86, 'GE GDT650SMJES', '1063.00', '14', 'Slate', '959 mm', '514 mm', '36.63 kg', 'GE GDT650SMJES Built-In Undercounter Dishwasher, 24\" Exterior Width, 7 Wash Cycles, Stainless Steel (Interior), 2 Loading Racks, Fully Integrated, 16 Capacity (Place Settings), Hard Food Disposal, 48 Decibel Level (Slate)', 'Cyclone Jet\r\nDedicated extra powerful cleaning centre for baked on foods\r\nPiranha(TM) Hard Food Disposer with Removable Filter\r\nTo ensure consistently clean items, this stainless steel blade rotates at 3,600 RPM to pulverize food particles and helps to prevent large particles from clogging the wash arms\r\nDual Turbo Fan Drying\r\nDrier glasses, even drier plastics with up to 35% better drying performance* (*Against market leading comparable product, per GE testing)\r\nEnergy Efficient Certified\r\nEner', '', 'images\\GE\\dishwasher\\built in undercounter\\pic2\\1.jpg', 'images\\GE\\dishwasher\\built in undercounter\\pic2\\2.jpg', 'images\\GE\\dishwasher\\built in undercounter\\pic2\\3.jpg', '1 year', '25', 52, 0),
(87, 'Electrolux GSC3500DWW', '723.53', '10', 'White', '850 mm', '469 mm', '35.23 kg', 'Electrolux GSC3500DWW Portable Dishwasher, 24\" Exterior Width, 5 Wash Cycles, 2 Loading Racks, Full Console, 12 Capacity (Place Settings), 64 Decibel Level (White)', 'Deluxe Silverware Basket\r\nBasket holds multiple pieces of silverware for thorough cleaning\r\nPots and Pans Cycle\r\nTough food stains are scrubbed and scoured with ease\r\nCandlelight Woodgrain Laminate Top\r\nCreates a durable, attractive top surface that doubles as an extra work area\r\nFood Disposer Piranha Hard Food Disposer\r\nGrinds leftover food into small particles that are easily washed away\r\nTouchTap Controls\r\nModern controls are easy to use and easy to clean\r\n100% Water Filtration.\r\nWater stays ', '', 'images\\electrolux\\dishwasher\\portable\\1.jpg', 'images\\electrolux\\dishwasher\\portable\\2.jpg', 'images\\electrolux\\dishwasher\\portable\\3.jpg', '', '10', 51, 0),
(88, 'Bosch DDW1801MWP', '538.00', '11', 'White', '859 mm', '459 mm', '36.5 kg', 'Bosch DDW1801MWP Portable Dishwasher, 18\" Exterior Width, 6 Wash Cycles, Stainless Steel (Interior), Full Console, 8 Capacity (Place Settings) (White) ', 'Crisp white portable dishwasher with quick connect feature compatible with most kitchen faucets.\r\nAt only 18\" wide it\'s perfect for small kitchens with limited space and easy roll castors make storing it a breeze\r\n8 place setting capacity with silverware basket\r\nEnergy Efficient compliant and low water consumption up to 3.5 gallons of water (13.2L) per wash to help save you money\r\nSimple intuitive electronic controls with display light\r\n6 wash cycles ranging from Intensive, Normal, Economy, Rapi', '', 'images\\bosch\\dishwasher\\portable dishwasher\\pic1\\1.jpg', 'images\\bosch\\dishwasher\\portable dishwasher\\pic1\\2.jpg', 'images\\bosch\\dishwasher\\portable dishwasher\\pic1\\3.jpg', '1 year', '25', 49, 0),
(89, 'LG LDP6797ST', '994.00', '14', 'Black', '866 mm', '456 mm', '36.56 kg', 'LG LDP6797ST Built-In Undercounter Dishwasher, 24\" Exterior Width, 9 Wash Cycles, Stainless Steel (Interior), 3 Loading Racks, Fully Integrated, 15 Capacity (Place Settings), 44 Decibel Level (Stainless Steel)', 'QuadWash\r\nInverter DirectDrive Motor\r\nHeight Adjustable 3rd Rack\r\nDual Zone Wash\r\nGlide Rail\r\nSmartThinQ', '', 'images\\lg\\dishwasher\\built in undercounter\\pic1\\1.jpg', 'images\\lg\\dishwasher\\built in undercounter\\pic1\\2.jpg', 'images\\lg\\dishwasher\\built in undercounter\\pic1\\3.jpg', '1 year', '25', 54, 0),
(90, 'LG LDT5665ST', '894.36', '15', 'White', '812 mm', '423 mm', '32.56 kg', 'LG LDT5665ST Built-In Undercounter Dishwasher, 24\" Exterior Width, 9 Wash Cycles, Stainless Steel (Interior), 2 Loading Racks, Fully Integrated, 15 Capacity (Place Settings), 46 Decibel Level (Stainless Steel)', 'QuadWash\r\nInverter DirectDrive Motor\r\nEasyRack Plus\r\nDual Zone Wash\r\nSmartThinQ', '', 'images\\lg\\dishwasher\\built in undercounter\\pic3\\1.jpg', 'images\\lg\\dishwasher\\built in undercounter\\pic3\\2.jpg', 'images\\lg\\dishwasher\\built in undercounter\\pic3\\3.jpg', '1 year', '15', 54, 0),
(91, 'LG LSDF9969BD', '1694.00', '14', 'Black', '865 mm', '436 mm', '36.2 kg', 'LG Studio LSDF9969BD Built-In Undercounter Dishwasher, 24\" Exterior Width, 7 Wash Cycles, Stainless Steel (Interior), 3 Loading Racks, Fully Integrated, 14 Capacity (Place Settings), 42 Decibel Level (Black Stainless Steel)', 'Fingerprint-Resistant Finish\r\nHidden SmoothTouch Controls with LCD Display', '', 'images\\lg\\dishwasher\\built in undercounter\\pic2\\1.jpg', 'images\\lg\\dishwasher\\built in undercounter\\pic2\\2.jpg', 'images\\lg\\dishwasher\\built in undercounter\\pic2\\3.jpg', '1 year', '30', 54, 0),
(92, 'Samsung DW80J3020US', '598.00', '11', 'Stainless Steel', '859 mm', '459 mm', '32.56 kg', 'Samsung DW80J3020US Built-In Undercounter Dishwasher, 24\" Exterior Width, 4 Wash Cycles, Stainless Steel (Interior), 2 Loading Racks, Full Console, 15 Capacity (Place Settings), Hard Food Disposal, 50 Decibel Level (Stainless Steel) ', 'Sleek Pocket Handle Design\r\nModern stainless steel pocket handle design delivers a sleek, built-in look and makes it easy to clean the front of the dishwasher. The front control panel with ICE Blue progress LED light indicates wash status.\r\nQuiet Operation\r\nThis Samsung dishwasher delivers powerful and efficient performance in peace with a special insulation system that significantly reduces noise to 50dBA.\r\nDigital Water Leakage Sensor\r\nEnjoy worry-free dishwashing and protect your floor from a', '', 'images\\Samsung\\dishwasher\\built in undercounter\\pic1\\1.jpg', 'images\\Samsung\\dishwasher\\built in undercounter\\pic1\\2.jpg', 'images\\Samsung\\dishwasher\\built in undercounter\\pic1\\3.jpg', '1 year', '20', 56, 0),
(93, 'LG LDP6797BD', '1094.00', '13', 'Black', '865 mm', '462 mm', '36.5 kg', 'LG LDP6797BD portable Dishwasher, 24\" Exterior Width, 9 Wash Cycles, Stainless Steel (Interior), 3 Loading Racks, Fully Integrated, 15 Capacity (Place Settings), 44 Decibel Level (Black Stainless Steel)', 'QuadWash\r\nInverter DirectDrive Motor\r\nHeight Adjustable 3rd Rack\r\nDual Zone Wash\r\nGlide Rail\r\nSmartThinQ', '', 'images\\lg\\dishwasher\\portable\\1.jpg', 'images\\lg\\dishwasher\\portable\\2.jpg', 'images\\lg\\dishwasher\\portable\\3.jpg', '1 year', '20', 55, 0),
(94, 'Samsung DW80K7050UG', '899.00', '11', 'Black', '845 mm', '477 mm', '34.56 kg', 'Samsung DW80K7050UG Built-In Undercounter Dishwasher, 24\" Exterior Width, 6 Wash Cycles, Stainless Steel (Interior), 3 Loading Racks, Fully Integrated, 44 Decibel Level (Black Stainless Steel) ', 'StormWash\r\nGreasy or baked-on pots and pans are cleaned without pre-washing.\r\nAutoRelease Dry\r\nThe door automatically opens to circulate air so dishes can dry faster.\r\nQuiet operation\r\nCleaning dishes is virtually silent with this 44 dBa dishwasher. One of the quietest it it\'s class.\r\n3rd rack\r\nWash cutlery and large utensils with a third rack that saves plenty of space for other items.\r\nFingerprint resistant finish\r\nHelps reduce smudges for an everyday great appearance.\r\nTouch control\r\nAn integ', '', 'images\\Samsung\\dishwasher\\built in undercounter\\pic2\\1.jpg', 'images\\Samsung\\dishwasher\\built in undercounter\\pic2\\2.jpg', 'images\\Samsung\\dishwasher\\built in undercounter\\pic2\\3.jpg', '1 year', '15', 56, 0),
(95, 'Samsung DW80M9960US', '1199.00', '13', 'Stainless Steel', '852 mm', '459 mm', '36.2 kg', 'Samsung DW80M9960US Built-In Undercounter Dishwasher, 24\" Exterior Width, 7 Wash Cycles, Stainless Steel (Interior), 3 Loading Racks, Fully Integrated, 38 Decibel Level, Wifi Enabled (Stainless Steel)', 'WaterWall\r\nA powerful, streaming wall of water delivers remarkable cleaning results.\r\nAutoRelease door\r\nAt the end of the cycle the door automatically opens to allow steam to escape, while a fan creates a curtain of air to protect your worktop. The AutoRelease feature improves drying results up to 35%.*\r\nZone Booster\r\nZone Booster removes stubborn leftover food effectively. It is the industry\'s widest targeted cleaning zone with 5 nozzles on the left half of the dishwasher, cleaning even the dir', '', 'images\\Samsung\\dishwasher\\built in undercounter\\pic3\\1.jpg', 'images\\Samsung\\dishwasher\\built in undercounter\\pic3\\2.jpg', 'images\\Samsung\\dishwasher\\built in undercounter\\pic3\\3.jpg', '1 year', '25', 56, 0),
(96, 'Whirlpool WDF560SAFM', '639.00', '12', 'Stainless Steel', '844 mm', '548 mm', '35.20 kg', 'Whirlpool WDF560SAFM Built-In Undercounter Dishwasher, 24\" Exterior Width, 5 Wash Cycles, Stainless Steel (Interior), 2 Loading Racks, Full Console, 12 Capacity (Place Settings), 50 Decibel Level (Stainless Steel)', 'Cycle Memory\r\nSoil Sensor\r\nSani Rinse Option\r\nStainless Steel Tub\r\nNormal Cycle\r\nHeavy Cycle\r\nHigh Temperature Wash Option\r\nHeated Dry Option\r\nCycle Status Indicator\r\nEnergy Efficient(R) Certified\r\nDesigned, Engineered and Assembled in the U.S.A. with American Pride', '', 'images\\Whirlpool\\dishwasher\\built in undercounter\\pic4\\1.jpg', 'images\\Whirlpool\\dishwasher\\built in undercounter\\pic4\\2.jpg', 'images\\Whirlpool\\dishwasher\\built in undercounter\\pic4\\3.jpg', '1 year', '25', 58, 0),
(97, 'Whirlpool WDF330PAHS', '599.00', '13', 'Stainless Steel', '852 mm', '536 mm', '35.23 kg', 'Whirlpool WDF330PAHS Built-In Undercounter Dishwasher, 24\" Exterior Width, 3 Wash Cycles, 2 Loading Racks, Full Console, 13 Capacity (Place Settings), 55 Decibel Level (Stainless Steel)', 'No One Has Fewer Repairs 20 Years in a Row\r\nFor over 20 years in a row, no other brand has had fewer dishwasher repairs, so you can rest assured it will continue to function the way your family needs it to.\r\nHeavy Cycle\r\nTake care of heavily-soiled messes and other hard-to-clean dishes without the extra elbow grease by adding extra time to the cycle.\r\nHigh Temperature Wash Option\r\nGives items like baby bottles, glassware or dishes a more thorough clean.\r\nHeated Dry Option\r\nUse a clean, dry dish ', '', 'images\\Whirlpool\\dishwasher\\built in undercounter\\pic2\\1.jpg', 'images\\Whirlpool\\dishwasher\\built in undercounter\\pic2\\2.jpg', 'images\\Whirlpool\\dishwasher\\built in undercounter\\pic2\\3.jpg', '1 year', '30', 58, 0),
(98, 'Whirlpool WDF540PADW', '499.00', '12', 'White', '856 mm', '520 mm', '35.6 kg', 'Whirlpool WDF540PADW Built-In Undercounter Dishwasher, 24\" Exterior Width, 5 Wash Cycles, 2 Loading Racks, Full Console, 15 Capacity (Place Settings), 53 Decibel Level (White)', 'Cycle Memory\r\nSoil Sensor\r\nIn-Door Silverware Basket\r\nSani Rinse Option\r\nNormal Cycle\r\nHeavy Cycle\r\nHigh Temperature Wash Option\r\nHeated Dry Option\r\nEnergy Efficient(R) Certified\r\nDesigned, Engineered and Assembled in the U.S.A. with American Pride', '', 'images\\Whirlpool\\dishwasher\\built in undercounter\\pic3\\1.jpg', 'images\\Whirlpool\\dishwasher\\built in undercounter\\pic3\\2.jpg', 'images\\Whirlpool\\dishwasher\\built in undercounter\\pic3\\3.jpg', '1 year', '20', 58, 0),
(99, 'Whirlpool WDT750SAHV', '889.00', '14', 'Black', '878 mm', '548 mm', '36.25 kg', 'Whirlpool WDT750SAHV Built-In Undercounter Dishwasher, 24\" Exterior Width, 5 Wash Cycles, Stainless Steel (Interior), 2 Loading Racks, Fully Integrated, 15 Capacity (Place Settings), 47 Decibel Level (Black Stainless Steel) ', 'Tap Touch Controls\r\nNo One Has Fewer Repairs 20 Years in a Row\r\nSoil Sensor\r\nIn-door Silverware Basket\r\nAdjustable Upper Rack\r\nSani Rinse Option\r\nStainless Steel Tub\r\nFingerprint-Resistant\r\nNormal Cycle\r\nHeavy Cycle\r\nHigh Temperature Wash Option\r\nHeated Dry Option\r\nExtended Dry Option\r\nCycle Status Indicator\r\nEnergy Efficient(R) Certified\r\nIndustry\'s Best Selling Dishwasher Brand 1\r\nDesigned, Engineered and Assembled in the U.S.A. with American Pride', '', 'images\\Whirlpool\\dishwasher\\built in undercounter\\pic1\\1.jpg', 'images\\Whirlpool\\dishwasher\\built in undercounter\\pic1\\2.jpg', 'images\\Whirlpool\\dishwasher\\built in undercounter\\pic1\\3.jpg', '1 year', '30', 58, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_brand`
--

CREATE TABLE `product_brand` (
  `productbrand_id` int(11) NOT NULL,
  `brand_name` varchar(500) DEFAULT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_brand`
--

INSERT INTO `product_brand` (`productbrand_id`, `brand_name`, `image`) VALUES
(1, 'Bosch', 'BrandLogos\\Bosch.png'),
(2, 'Electrolux', 'BrandLogos\\Electrolux.png'),
(3, 'GE', 'BrandLogos\\ge.png'),
(4, 'Haier', 'BrandLogos\\haier.png'),
(5, 'LG', 'BrandLogos\\lg.png'),
(6, 'Samsung', 'BrandLogos\\samsung.png'),
(7, 'Whirlpool', 'BrandLogos\\wp.png');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `product_category_id` int(11) NOT NULL,
  `category_type` varchar(500) DEFAULT NULL,
  `category_name` varchar(500) NOT NULL,
  `productbrand_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`product_category_id`, `category_type`, `category_name`, `productbrand_id`) VALUES
(1, 'Refrigerators', 'Refrigerator', 1),
(2, 'Washers', 'Washer', 1),
(3, 'Dryers', 'Dryer', 1),
(4, 'Microwaves', 'Microwave', 1),
(5, 'Dishwashers', 'Dishwasher', 1),
(6, 'Refrigerators', 'Refrigerator', 2),
(7, 'Washers', 'Washer', 2),
(8, 'Dryers', 'Dryer', 2),
(9, 'Microwaves', 'Microwave', 2),
(10, 'Dishwashers', 'Dishwasher', 2),
(11, 'Refrigerators', 'Refrigerator', 3),
(12, 'Washers', 'Washer', 3),
(13, 'Dryers', 'Dryer', 3),
(14, 'Microwaves', 'Microwave', 3),
(15, 'Dishwashers', 'Dishwasher', 3),
(16, 'Refrigerators', 'Refrigerator', 4),
(17, 'Washers', 'Washer', 4),
(18, 'Dryers', 'Dryer', 4),
(20, 'Dishwashers', 'Dishwasher', 4),
(21, 'Refrigerators', 'Refrigerator', 5),
(22, 'Washers', 'Washer', 5),
(23, 'Dryers', 'Dryer', 5),
(24, 'Microwaves', 'Microwave', 5),
(25, 'Dishwashers', 'Dishwasher', 5),
(26, 'Refregerators', 'Refregerator', 6),
(27, 'Washers', 'Washer', 6),
(28, 'Dryers', 'Dryer', 6),
(29, 'Microwaves', 'Microwave', 6),
(30, 'Dishwashers', 'Dishwasher', 6),
(31, 'Refregerators', 'Refregerator', 7),
(32, 'Washers', 'Washer', 7),
(33, 'Dryers', 'Dryer', 7),
(34, 'Microwaves', 'Microwave', 7),
(35, 'Dishwashers', 'Dishwasher', 7);

-- --------------------------------------------------------

--
-- Table structure for table `product_types`
--

CREATE TABLE `product_types` (
  `product_type_id` int(11) NOT NULL,
  `product_type_name` varchar(500) NOT NULL,
  `model_name` varchar(500) NOT NULL,
  `product_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_types`
--

INSERT INTO `product_types` (`product_type_id`, `product_type_name`, `model_name`, `product_category_id`) VALUES
(1, 'Side by Side Refrigerator', 'SSR', 1),
(2, 'French Door Refrigerator', 'FDR', 1),
(3, 'Side by Side Refrigerator', 'SSR', 6),
(4, 'French Door Refrigerator', 'FDR', 6),
(5, 'Side by Side Refrigerator', 'SSR', 11),
(6, 'French Door Refrigerator', 'FDR', 11),
(7, 'Side by Side Refrigerator', 'SSR', 16),
(8, 'Side by Side Refrigerator', 'FDR', 21),
(9, 'Side by Side Refrigerator', 'SSR', 26),
(10, 'French Door Refrigerator', 'FDR', 26),
(11, 'Side by Side Refrigerator', 'SSR', 31),
(12, 'French Door Refrigerator', 'FDR', 31),
(13, 'Top Load Washer', 'TLW', 2),
(14, 'Front Load Washer', 'FLW', 2),
(15, 'Top Load Washer', 'TLW', 7),
(16, 'Front Load Washer', 'FLW', 7),
(17, 'Top Load Washer', 'TLW', 12),
(18, 'Front Load Washer', 'FLW', 17),
(19, 'Top Load Washer', 'TLW', 27),
(20, 'Front Load Washer', 'FLW', 27),
(21, 'Top Load Washer', 'TLW', 32),
(22, 'Front Load Washer', 'FLW', 32),
(23, 'Electric Dryer', 'ED', 3),
(24, 'Electric Dryer', 'ED', 8),
(25, 'Gas Dryer', 'GD', 8),
(26, 'Electric Dryer', 'ED', 13),
(27, 'Electric Dryer', 'ED', 18),
(28, 'Gas Dryer', 'GD', 18),
(29, 'Electric Dryer', 'ED', 23),
(30, 'Gas Dryer', 'GD', 23),
(31, 'Electric Dryer', 'ED', 28),
(32, 'Electric Dryer', 'ED', 33),
(33, 'Gas Dryer', 'GD', 33),
(34, 'Built In Microwave', 'BM', 4),
(35, 'Counter-top Microwave', 'CM', 4),
(36, 'Built In Microwave', 'BM', 9),
(37, 'Counter-top Microwave', 'CM', 9),
(38, 'Counter-top Microwave', 'CM', 14),
(40, 'Built In Microwave', 'BM', 24),
(41, 'Counter-top Microwave', 'CM', 24),
(45, 'Built In Microwave', 'BM', 29),
(46, 'Counter-top Microwave', 'CM', 29),
(48, 'Built-In Undercounter Dishwashers', 'BDW', 5),
(49, 'Portable Dishwasher', 'PDW', 5),
(50, 'Built-In Undercounter Dishwasher', 'BDW', 10),
(51, 'Portable Dishwasher', 'PDW', 10),
(52, 'Built-In Undercounter Dishwasher', 'BDW', 15),
(53, 'Built-In Undercounter Dishwasher', 'BDW', 20),
(54, 'Built-In Undercounter Dishwasher', 'BDW', 25),
(55, 'Portable Dishwasher', 'PDW', 25),
(56, 'Built-In Undercounter Dishwasher', 'BDW', 30),
(57, 'Portable Dishwasher', 'PDW', 30),
(58, 'Built-In Undercounter Dishwasher', 'BDW', 35);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `phone` int(200) NOT NULL,
  `email` varchar(500) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `city` varchar(500) NOT NULL,
  `province` varchar(500) NOT NULL,
  `country` varchar(200) NOT NULL,
  `postal_code` varchar(500) NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `firstname`, `lastname`, `dob`, `phone`, `email`, `address`, `city`, `province`, `country`, `postal_code`, `username`, `password`) VALUES
(1, 'biren', 'patel', '', 1123214568, 'loganpatel96@gmail.com', '', '', '', '', '', 'bpatel', '202cb962ac59075b964b07152d234b70'),
(2, 'sid', 'c', '', 1234567896, 'siddhant.chhabra24@gmail.com', '', '', '', '', '', 'sid', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`address_id`),
  ADD KEY `fk_address_payment_details1_idx` (`payment_details_payment_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`ads_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`newsletter_id`);

--
-- Indexes for table `orders_history`
--
ALTER TABLE `orders_history`
  ADD PRIMARY KEY (`order_history_id`),
  ADD KEY `fk_orders_history_user1_idx` (`user_user_id`);

--
-- Indexes for table `orders_history_has_products`
--
ALTER TABLE `orders_history_has_products`
  ADD PRIMARY KEY (`orders_history_order_history_id`,`products_product_id`),
  ADD KEY `fk_orders_history_has_products_products1_idx` (`products_product_id`),
  ADD KEY `fk_orders_history_has_products_orders_history1_idx` (`orders_history_order_history_id`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `fk_payment_details_user1_idx` (`user_user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `fk_products_product_types1_idx` (`product_type_id`);

--
-- Indexes for table `product_brand`
--
ALTER TABLE `product_brand`
  ADD PRIMARY KEY (`productbrand_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`product_category_id`),
  ADD KEY `fk_product_category_product_brand_idx` (`productbrand_id`);

--
-- Indexes for table `product_types`
--
ALTER TABLE `product_types`
  ADD PRIMARY KEY (`product_type_id`),
  ADD KEY `fk_product_types_product_category1_idx` (`product_category_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `ads_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `newsletter_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `product_brand`
--
ALTER TABLE `product_brand`
  MODIFY `productbrand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `product_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `product_types`
--
ALTER TABLE `product_types`
  MODIFY `product_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `fk_address_payment_details1` FOREIGN KEY (`payment_details_payment_id`) REFERENCES `payment_details` (`payment_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `orders_history`
--
ALTER TABLE `orders_history`
  ADD CONSTRAINT `fk_orders_history_user1` FOREIGN KEY (`user_user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `orders_history_has_products`
--
ALTER TABLE `orders_history_has_products`
  ADD CONSTRAINT `fk_orders_history_has_products_orders_history1` FOREIGN KEY (`orders_history_order_history_id`) REFERENCES `orders_history` (`order_history_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_orders_history_has_products_products1` FOREIGN KEY (`products_product_id`) REFERENCES `products` (`product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD CONSTRAINT `fk_payment_details_user1` FOREIGN KEY (`user_user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product_category`
--
ALTER TABLE `product_category`
  ADD CONSTRAINT `fk_product_category_product_brand` FOREIGN KEY (`productbrand_id`) REFERENCES `product_brand` (`productbrand_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product_types`
--
ALTER TABLE `product_types`
  ADD CONSTRAINT `fk_product_types_product_category1` FOREIGN KEY (`product_category_id`) REFERENCES `product_category` (`product_category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
