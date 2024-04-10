


session_start();

if(!isset($_SESSION['id'])){
    $_SESSION['id'] = 0;
}
else{
    $_SESSION['id']++;
}

echo "Total number of time accessd : ". $_SESSION['id'];