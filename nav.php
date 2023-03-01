<nav>
	<a class="<?php
	if (PATH_PARTS['filename'] == "index"){
		print'activePage';
	}
	?>" href=index.php>Home</a>

	<a class="<?php
        if (PATH_PARTS['filename'] == "dd"){
                print'activePage';
        }
        ?>" href=dd.php>Database</a>
        <a class="<?php
        if (PATH_PARTS['filename'] == "index"){
                print'activePage';
        }
        ?>" href=protected/index.php>Group</a>

</nav>
