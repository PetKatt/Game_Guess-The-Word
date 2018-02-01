-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2017 at 04:15 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisielce`
--

-- --------------------------------------------------------

--
-- Table structure for table `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id` int(11) NOT NULL,
  `login` text COLLATE utf8_polish_ci NOT NULL,
  `pass` text COLLATE utf8_polish_ci NOT NULL,
  `email` text COLLATE utf8_polish_ci NOT NULL,
  `name` varchar(60) COLLATE utf8_polish_ci NOT NULL,
  `presentation` text COLLATE utf8_polish_ci NOT NULL,
  `gender` varchar(30) COLLATE utf8_polish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `login`, `pass`, `email`, `name`, `presentation`, `gender`) VALUES
(1, 'adam', 'qwerty', 'adam@gmail.com', 'Adam Maksymiuk', 'Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula. Ut molestie a, ultricies porta urna. Vestibulum commodo volutpat a, convallis ac, laoreet enim. Phasellus fermentum in, dolor. Pellentesque facilisis. Nulla imperdiet sit amet magna. Vestibulum dapibus, mauris nec malesuada fames ac turpis velit, rhoncus eu, luctus et interdum adipiscing wisi. Aliquam erat ac ipsum. ', ''),
(2, 'marek', 'asdfg', 'marek@gmail.com', 'Marek Konrad Paczuga', 'Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula. Ut molestie a, ultricies porta urna. Vestibulum commodo volutpat a, convallis ac, laoreet enim. Phasellus fermentum in, dolor. Pellentesque facilisis. Nulla imperdiet sit amet magna. Vestibulum dapibus, mauris nec malesuada fames ac turpis velit, rhoncus eu, luctus et interdum adipiscing wisi. Aliquam erat ac ipsum.  id, eleifend justo vel bibendum sapien massa ac turpis faucibus orci luctus non, consectetuer lobortis quis, varius in, purus. Integer ultrices posuere cubilia Curae, Nulla ipsum dolor lacus, suscipit adipiscing. Cum sociis natoque penatibus et ultrices volutpat. Nullam wisi ultricies a, gravida vitae, dapibus risus ante sodales lectus blandit eu, tempor diam pede cursus vitae, ultricies eu, faucibus q', ''),
(3, 'anna', 'zxcvb', 'anna@gmail.com', 'Anna Jastrzębska-Quinn', 'Curae, Nulla ipsum dolor lacus, suscipit adipiscing. Cum sociis natoque penatibus et ultrices volutpat. Nullam wisi ultricies a, gravida vitae, dapibus risus ante sodales lectus blandit eu, tempor diam pede cursus vitae, ultricies eu, faucibus quis, porttitor eros cursus lectus, pellentesque eget, bibendum a, gravida ullamcorper quam. Nullam viverra consectetuer. Quisque cursus et, porttitor risus. Aliquam sem. In hendrerit nulla quam nunc, accumsan congue. Lorem ipsum prim', ''),
(4, 'andrzej', 'asdfg', 'andrzej@gmail.com', 'Andrzej Wierciński', 'is faucibus orci luctus non, consectetuer lobortis quis, varius in, purus. Integer ultrices posuere cubilia Curae, Nulla ipsum dolor lacus, suscipit adipiscing. Cum sociis natoque penatibus et ultrices volutpat. Nullam wisi ultricies a, gravida vitae, dapibus risus ante sodales lectus blandit eu, tempor diam pede cursus vitae, ultricies eu, faucibus quis, porttitor eros cursus lectus, pellentesque eget, bibendum a, gravida ullamcorper quam. Nulla', ''),
(5, 'justyna', 'yuiop', 'justyna@gmail.com', 'Justyna Prokopiuk', 'Volutpat. Nullam wisi ultricies a, gravida vitae, dapibus risus ante sodales lectus blandit eu, tempor diam pede cursus vitae, ultricies eu, faucibus quis, porttitor eros cursus lectus, pellentesque eget, bibendum a, gravida ullamcorper quam. Nulla', ''),
(6, 'kasia', 'hjkkl', 'kasia@gmail.com', 'Katarzyna Sekulska-Miczuk', 'Phasellus vitae orci. Proin aliquam cursus sed, nunc. Donec molestie aliquam. In turpis egestas. Aenean ac nunc eu auctor mi. Fusce tellus. Cras ut ante id nunc. Donec mauris et ultrices posuere eget, nisl. Vestibulum nibh lacus, congue ut, diam. Nullam rutrum ac, varius eu, tristique senectus et risus metus nisl, commodo est. Suspendisse ultricies lobortis velit. Mauris lobortis volutpat. Vivamus ut felis. Nam dictum accumsan. Fusce aliquet eu, nisl. ', ''),
(7, 'beata', 'fgthj', 'beata@gmail.com', 'Beata Nicze', 'Tristique senectus et risus metus nisl, commodo est. Suspendisse ultricies lobortis velit. Mauris lobortis volutpat. Vivamus ut felis. Nam dictum accumsan. Fusce aliquet eu, nisl.', ''),
(8, 'jakub', 'ertyu', 'jakub@gmail.com', 'Jakub Grzybek', 'Aliquam ut nisl. Cras aliquet. Morbi tellus. Donec faucibus et, vehicula faucibus, quam. Ut aliquet, dui dui, accumsan fringilla mollis. Nunc ut ante ipsum dolor nulla, auctor euismod. Integer posuere in, ornare vitae, pede. Morbi placerat nisl nulla dictum wist magna. Curabitur consectetuer elit.', ''),
(9, 'janusz', 'cvbnm', 'janusz@gmail.com', 'Janusz Łodyga', 'Nunc tempor interdum consectetuer tellus non nibh wisi, ullamcorper pellentesque. Nullam fermentum sapien mauris sit amet sapien sed adipiscing elit. Aliquam ut nisl. Cras aliquet. Morbi tellus. Donec faucibus et, vehicula faucibus, quam. Ut aliquet, dui dui, accumsan fringilla mollis. Nunc ut ante ipsum dolor nulla, auctor euismod. Integer pos', ''),
(10, 'roman', 'dfghj', 'roman@gmail.com', 'Roman Leciuk', 'Morbi tellus. Donec faucibus et, vehicula faucibus, quam. Ut aliquet, dui dui, accumsan fringilla mollis. Nunc ut ante ipsum dolor nulla, auctor euismod. Integer pos', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
