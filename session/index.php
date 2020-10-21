<?php
    session_start();
    $_SESSION["USER"] = "MARY";

    echo $_SESSION["USER"];