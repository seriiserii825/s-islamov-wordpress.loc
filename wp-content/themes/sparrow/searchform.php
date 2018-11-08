<form role="search" method="get" id="searchform" action="<?php echo home_url('/') ?>">
    <input class="text-search" type="text" value="<?php echo get_search_query() ?>" name="s" id="s"/>
    <input type="submit" class="submit-search" value="" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/search-icon.png' ?>)"/>
</form>

