<form action="<?php echo home_url( '/' ); ?>" method="get" class="form-search form-inline my-0">
    <input class="form-search__input form-control" type="search" name="s" id="search" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="Поиск" aria-label="Search">
    <button id="searchsubmit" class="form-search__btn btn btn-outline-primary" type="submit">
        <span class="dashicons dashicons-search"></span>
        <span class="sr-only">Поиск</span>
    </button>
</form>