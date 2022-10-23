# logins
Desarrollo web, mcv logins and database mysql

# method msyqli
/**METHOD MYSQLI  */
    $servername = 'localhost';//host digitaloceans, linode, aws, ip del server.
    $username = 'root';
    $password = 'password';

    //create connections
    $conn = new MySQLi($servername, $username, $password);

    //Check connection
    if($conn->connect_error){
        echo("Connection filed: " . $conn->connect_error);
    }
        echo "Coonected successfully";

# query database mysql
CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pseudo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

  ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
