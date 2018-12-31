SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `admin` (`id`, `email`, `password`, `nama`) VALUES
(1, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Administrator');

CREATE TABLE `anggota` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(16) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `anggota` (`id`, `nama`, `email`, `no_hp`, `jenis_kelamin`, `tgl_lahir`) VALUES
(1, 'Ratna Mutu Manikam', 'ratnamutman@gmail.com', '89381990818', 'Perempuan', '1995-07-20'),
(2, 'Sulistiyawati', 'sulistyaww@yahoo.com', '89392542825', 'Perempuan', '1995-10-18');

CREATE TABLE `member` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(16) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `member` (`id`, `nama`, `email`, `no_hp`, `jenis_kelamin`, `tgl_lahir`) VALUES
(1, 'Milyhya', 'milyhya@gmail.com', '81286718912', 'Laki-laki', '1995-07-12'),
(2, 'Qory Gore', 'qorygore@gmail.com', '856781929114', 'Laki-laki', '1994-05-25'),
(3, 'Reza Oktovian', 'reazaarap@gmail.com', '81598297027', 'Laki-laki', '1993-07-07'),
(4, 'Fadhiil Rachman', 'fadhiilrachman@gmail.com', '81287172969', 'Laki-laki', '1998-08-29'),
(5, 'Sinka Juliana', 'sinkaj@icloud.com', '85712198676', 'Perempuan', '1997-07-16'),
(6, 'Sonya Pandawarman', 'sonyapandaw@icloud.com', '81178919220', 'Perempuan', '1996-04-04'),
(7, 'Shania Junianatha', 'shaniaju@icloud.com', '81378190288', 'Perempuan', '1999-06-10'),
(8, 'Berliana Indriyanti', 'berliana.ana@gmail.com', '85987119020', 'Perempuan', '1997-05-09'),
(9, 'Dhimas Anggada', 'dhimasagd@icloud.com', '81387119808', 'Laki-laki', '1997-02-19'),
(10, 'Arrival Dwi Sentosa', 'arrivaldwis@icloud.com', '81178229010', 'Laki-laki', '1995-03-22'),
(11, 'Indah Syahputri Sinulingga', 'indahsyahp@gmail.com', '81378119090', 'Perempuan', '1995-06-22'),
(13, 'Anjas Dwi Pangga', 'anjasdwip@gmail.com', '895082991902', 'Laki-laki', '1996-07-29');


ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `anggota`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `member`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
