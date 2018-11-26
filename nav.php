<!-- ######################     Start of nav  ############################## -->
<nav>
    <ol>
        <?php
        
        print '<li class="';
        if ($path_parts['filename'] == "Reviews") {
            print ' activePage ';
        }
        print '">';
        print '<a href="Reviews.php">Reviews</a>';
        print '</li>';
        
        print '<li class="';
        if ($path_parts['filename'] == "Upcomingreleases") {
            print ' activePage ';
        }
        print '">';
        print '<a href="Upcomingreleases.php">Upcoming Releases</a>';
        print '</li>';
        
        print '<li class="';
        if ($path_parts['filename'] == "index") {
            print ' activePage ';
        }
        print '">';
        print '<a href="index.php">Home</a>';
        print '</li>';
        
        print '<li class="';
        if ($path_parts['filename'] == "news") {
            print ' activePage ';
        }
        print '">';
        print '<a href="News.php">News</a>';
        print '</li>';
        
        print '<li class="';
        if ($path_parts['filename'] == "Subscribe") {
            print ' activePage ';
        }
        print '">';
        print '<a href="Subscribe.php">Subscribe</a>';
        print '</li>';
        
        print '<li class="';
        if ($path_parts['filename'] == "Topcharts") {
            print ' activePage ';
        }
        print '">';
        print '<a href="Topcharts.php">Top Charts</a>';
        print '</li>';
        ?>
    </ol>
</nav>
<!-- ######################     Start of nav   ############################## -->
