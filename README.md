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
