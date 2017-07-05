<?php

$database = mysqli_connect("localhost", "root", "root", "rush");
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL, error code: " . mysqli_connect_error();
	exit();
}

$q = mysqli_query($database, "DROP TABLE IF EXISTS `users`;");
$q = mysqli_query($database, "CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `login` varchar(30) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(128) NOT NULL,
  `level` int(11) NOT NULL,
  `rang` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;");

$q = mysqli_query($database, "INSERT INTO `users` (`id`, `login`, `email`, `password`, `level`, `rang`) VALUES
(1, 'hpelat', 'hpelat@student.42.fr', '4dff4ea340f0a823f15d3f4f01ab62eae0e5da579ccb851f8db9dfe84c58b2b37b89903a740e1ee172da793a6e79d560e5f7f9bd058a12a280433ed6fa46510a', 1, 1),
(2, 'khabbar', 'khabbar@student.42.fr', '873bcc37e512b7da86476367769c932009fc1bee59c929879f10ac89df541124db5010ae7297ec71db8f71a09adccd27c002f00fcfc93ca7e157105e7505f24d', 15, 1),
(3, 'tgros', 'tgros', 'ecdb621b47894aaf2c4e6b1bfeb058d0bcda817d448e33dff0937b67d062eb31a2c3bfaa6b57576ce21c99b3b800dd6eeae5aef5d6cc8fc035186a3d4715eea5', 7, 1),
(4, 'yarypert', 'yarypert@student.42.fr', 'ecdb621b47894aaf2c4e6b1bfeb058d0bcda817d448e33dff0937b67d062eb31a2c3bfaa6b57576ce21c99b3b800dd6eeae5aef5d6cc8fc035186a3d4715eea5', 6, 1),
(5, 'adaviere', 'adaviere@student.42.fr', 'ecdb621b47894aaf2c4e6b1bfeb058d0bcda817d448e33dff0937b67d062eb31a2c3bfaa6b57576ce21c99b3b800dd6eeae5aef5d6cc8fc035186a3d4715eea5',   5, 1),
(6, 'aancel', 'aancel@student.42.fr', 'ecdb621b47894aaf2c4e6b1bfeb058d0bcda817d448e33dff0937b67d062eb31a2c3bfaa6b57576ce21c99b3b800dd6eeae5aef5d6cc8fc035186a3d4715eea5', 6, 1),
(7, 'cde-laro', 'cde-laro@student.42.fr', 'ecdb621b47894aaf2c4e6b1bfeb058d0bcda817d448e33dff0937b67d062eb31a2c3bfaa6b57576ce21c99b3b800dd6eeae5aef5d6cc8fc035186a3d4715eea5', 6, 1),
(8, 'ddufour', 'ddufour@student.42.fr', 'ecdb621b47894aaf2c4e6b1bfeb058d0bcda817d448e33dff0937b67d062eb31a2c3bfaa6b57576ce21c99b3b800dd6eeae5aef5d6cc8fc035186a3d4715eea5', 5, 1),
(9, 'ysan-seb', 'ysan-seb@student.42.fr', 'ecdb621b47894aaf2c4e6b1bfeb058d0bcda817d448e33dff0937b67d062eb31a2c3bfaa6b57576ce21c99b3b800dd6eeae5aef5d6cc8fc035186a3d4715eea5', 5  , 1),
(10, 'kmjaku', 'kmjaku@student.42.fr', 'ecdb621b47894aaf2c4e6b1bfeb058d0bcda817d448e33dff0937b67d062eb31a2c3bfaa6b57576ce21c99b3b800dd6eeae5aef5d6cc8fc035186a3d4715eea5', 5, 1),
(11, 'amichals', 'amichals@student.42.fr', 'ecdb621b47894aaf2c4e6b1bfeb058d0bcda817d448e33dff0937b67d062eb31a2c3bfaa6b57576ce21c99b3b800dd6eeae5aef5d6cc8fc035186a3d4715eea5', 5, 1),
(12, 'mtrudel', 'mtrudel@student.42.fr', 'ecdb621b47894aaf2c4e6b1bfeb058d0bcda817d448e33dff0937b67d062eb31a2c3bfaa6b57576ce21c99b3b800dd6eeae5aef5d6cc8fc035186a3d4715eea5', 2, 1),
(13, 'thbricqu', 'thbricqu@student.42.fr', 'ecdb621b47894aaf2c4e6b1bfeb058d0bcda817d448e33dff0937b67d062eb31a2c3bfaa6b57576ce21c99b3b800dd6eeae5aef5d6cc8fc035186a3d4715eea5', 3, 1),
(14, 'lbougero', 'lbougero@student.42.fr', 'ecdb621b47894aaf2c4e6b1bfeb058d0bcda817d448e33dff0937b67d062eb31a2c3bfaa6b57576ce21c99b3b800dd6eeae5aef5d6cc8fc035186a3d4715eea5', 6, 1),
(15, 'cboulonn', 'cboulonn@student.42.fr', 'ecdb621b47894aaf2c4e6b1bfeb058d0bcda817d448e33dff0937b67d062eb31a2c3bfaa6b57576ce21c99b3b800dd6eeae5aef5d6cc8fc035186a3d4715eea5', 7, 1),
(16, 'jorobin', 'jorobin@student.42.fr', 'ecdb621b47894aaf2c4e6b1bfeb058d0bcda817d448e33dff0937b67d062eb31a2c3bfaa6b57576ce21c99b3b800dd6eeae5aef5d6cc8fc035186a3d4715eea5', 3, 1),
(17, 'vsporer', 'vsporer@student.42.fr', 'ecdb621b47894aaf2c4e6b1bfeb058d0bcda817d448e33dff0937b67d062eb31a2c3bfaa6b57576ce21c99b3b800dd6eeae5aef5d6cc8fc035186a3d4715eea5', 3, 1),
(18, 'ygaude', 'ygaude@student.42.fr', 'ecdb621b47894aaf2c4e6b1bfeb058d0bcda817d448e33dff0937b67d062eb31a2c3bfaa6b57576ce21c99b3b800dd6eeae5aef5d6cc8fc035186a3d4715eea5', 2, 1),
(19, 'jlobjois', 'ygaude@student.42.fr', 'ecdb621b47894aaf2c4e6b1bfeb058d0bcda817d448e33dff0937b67d062eb31a2c3bfaa6b57576ce21c99b3b800dd6eeae5aef5d6cc8fc035186a3d4715eea5', 6, 1),
(20, 'norminet', 'norminet@student.42.fr', 'ecdb621b47894aaf2c4e6b1bfeb058d0bcda817d448e33dff0937b67d062eb31a2c3bfaa6b57576ce21c99b3b800dd6eeae5aef5d6cc8fc035186a3d4715eea5', 100, 1),
(21, 'hsabouri', 'hsabouri@student.42.fr', 'ecdb621b47894aaf2c4e6b1bfeb058d0bcda817d448e33dff0937b67d062eb31a2c3bfaa6b57576ce21c99b3b800dd6eeae5aef5d6cc8fc035186a3d4715eea5', 7, 1),
(22, 'coton', 'coton@student.42.fr', 'ecdb621b47894aaf2c4e6b1bfeb058d0bcda817d448e33dff0937b67d062eb31a2c3bfaa6b57576ce21c99b3b800dd6eeae5aef5d6cc8fc035186a3d4715eea5', 42, 1);");


$q = mysqli_query($database, "DROP TABLE IF EXISTS `category`;");
$q = mysqli_query($database, "CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `nom` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;");

$q = mysqli_query($database, "INSERT INTO `category` (`id`, `nom`) VALUES
(1, 'Web'),
(2, 'Algo'),
(3, 'Unix'),
(4, 'Graphique');");

$q = mysqli_query($database, "DROP TABLE IF EXISTS `cat_assoc`;");
$q = mysqli_query($database, "CREATE TABLE `cat_assoc` (
  `id_user` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;");

$q = mysqli_query($database, "INSERT INTO `cat_assoc` (`id_user`, `id_cat`) VALUES
(4, 1),
(4, 4),
(6, 4),
(6, 2),
(8, 1),
(8, 3),
(13, 1),
(14, 1),
(14, 4),
(15, 2),
(15, 1),
(15, 4),
(16, 4),
(17, 3),
(17, 2),
(18, 1),
(20, 1),
(20, 2),
(20, 3),
(20, 4),
(22, 3),
(22, 2);");

$q = mysqli_query($database, "ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);");
$q = mysqli_query($database, "ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);");
$q = mysqli_query($database, "ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;");
$q = mysqli_query($database, "ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;");

header('Location: index.php');
?>
