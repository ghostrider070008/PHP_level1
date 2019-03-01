
<!DOCTYPE html><!--Задание 4 -->
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Minimalistika</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
        <?

        $content = "<div id=\"content\">";
        $h1 = "<h1>minimalistica</h1>";
        $menu = "<ul id=\"menu\">";
        $li1 = "<li><a href=\"#\">home</a></li>";
        $li2 = "<li><a href=\"#\">archive</a></li>";
        $li3 = "<li><a href=\"#\">contact</a></li>";
        $post = "<div class=\"post\">";
        $details = "<div class=\"details\">";
        $h2 = "<h2><a href=\"#\">Nunc commodo euismod massa quis vestibulum</a></h2>";
        $p_info ="<p class=\"info\">posted 3 hours ago in <a href=\"#\">general</a></p>";
        $class_body = "<div class=\"body\">";
        $body_p = "<p>Nunc eget nunc libero. Nunc commodo euismod massa quis vestibulum. Proin mi nibh, dignissim a pellentesque at, ultricies sit amet sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel lorem eu libero laoreet facilisis. Aenean placerat, ligula quis placerat iaculis, mi magna luctus nibh, adipiscing pretium erat neque vitae augue. Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquetut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at ipsum.</p>";
        $col1 = "<div class=\"col\">";
        $h31 = "<h3><a href=\"#\">Ut enim risus rhoncus</a></h3>";
        $h3_p = "<p>Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at.</p>";
        $p_not = "<p>&not; <a href=\"#\">read more</a></p>";
        $col2 = $col1;
        $h32 = "<h3><a href=\"#\">Maecenas iaculis leo</a></h3>";
        $h3_p2 = "<p>Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at.</p>";
        $col_last = "<div class=\"col last\">";
        $h3_last = "<h3><a href=\"#\">Quisque consectetur odio</a></h3>";
        $h3_p_last = "<p>Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at.</p>";
        $footer = "<div id=\"footer\">";
        $footer_p = "<p>Copyright &copy; <em>minimalistica</em> &middot; Design: Luka Cvrk, <a href=\"http://www.solucija.com/\" title=\"Free CSS Templates\">Solucija</a></p>";





        
        
        $details .= $h2.$p_info."</div>"; 
        $class_body .= $body_p."</div><div class=\"x\"></div></div>" ;
        $post .= $details.$class_body;
        $col1 .= $h31.$h3_p.$p_not."</div>";
        $col2 .= $h32.$h3_p2.$p_not."</div>";
        $col_last .= $h3_last.$h3_p_last.$p_not.'</div>';
        $footer .= $footer_p.'</div>';




        $menu .= $li1.$li2.$li3;
        $menu .="</ul>";
        $content .= $h1;
        $content .= $menu;
        $content .= $post;
        $content .= $col1;
        $content .= $col2;
        $content .= $col_last;
        $content .= $footer;

        $content .= "</div>";
        echo $content;
        
        ?>
</body>
</html>


