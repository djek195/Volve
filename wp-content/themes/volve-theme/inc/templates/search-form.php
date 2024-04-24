<form role="search" method="get" id="searchform" action="<?= home_url('/'); ?>">
    <input type="text" value="<?= get_search_query(); ?>" name="s" id="s" placeholder="What are you looking for?"/>
    <button type="submit" id="searchsubmit">
        <img src="<?= get_template_directory_uri(); ?>/assets/icons/search_icon.png" alt="Search">
    </button>
</form>