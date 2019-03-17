<?php
class isset_session
{

   public function issession()
    {
        session_start();

        if (!isset($_SESSION['username'])) {
            header('Location: index.php');
            die;
        }
        return 0;
    }
}
?>

