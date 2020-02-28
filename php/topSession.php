<?php
            if (!isset($_SESSION['user_id'])) {
                header('location: admin.html');
            } else {
                $user_id = $_SESSION['user_id'];
                $user_name = "QuiD";
                echo "<p><i class=\"far fa-user\"></i>{$user_name}";
                echo "<a href=\"/php/logout.php\" class=\"logout\"><i class=\"fas fa-sign-out-alt\"></i>logout</a></p>";
            }
