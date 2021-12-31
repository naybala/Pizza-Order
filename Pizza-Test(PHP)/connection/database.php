<?php

$conn = mysqli_connect("localhost", "root", "", "online_shopping_db");

if (!$conn) {
    echo "Your Connection Was Not Succes";
};