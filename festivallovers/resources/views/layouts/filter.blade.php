<div id="filter__btn-result-container" class="d-none">
    <button id="result-show" class="action__box--black mt-3 mb-0 mx-0 width-fill-sm"><a href="/events"></a> ERGEBNIS ANZEIGEN</button>
    <button id="result-reset" class="action__box--white mt-3 mb-0 mx-0 width-fill-sm">FILTER ZURÜCKSETZEN</button>
</div>

<div id="filter" class="filter">
    <button id="jazz" class="filter__box">
        <img id="filter" class="filter__svgmusic" src={{asset('icons/music_jazz.svg')}} />
        <span class="filter__genres">JAZZ</span> <span class="filter__number">20</span>
    </button>

    <button id="hiphop" class="filter__box">
        <img id="filter" class="filter__svgmusic" src={{asset('icons/music_hiphop.svg')}} />
        <span class="filter__genres">HIPHOP</span> <span class="filter__number">9</span>
    </button>

    <button id="indie" class="filter__box">
        <img id="filter" class="filter__svgmusic" src={{asset('icons/music_indie.svg')}} />
        <span class="filter__genres">INDIE</span> <span class="filter__number">11</span>
    </button>

    <button id="poprock" class="filter__box">
        <img id="filter" class="filter__svgmusic" src={{asset('icons/music_poprock.svg')}} />
        <span class="filter__genres">POP & ROCK</span> <span class="filter__number">35</span>
    </button>

    <button id="electronic" class="filter__box">
        <img id="filter" class="filter__svgmusic" src={{asset('icons/music_electronic.svg')}} />
        <span class="filter__genres">ELECTRONICS</span> <span class="filter__number">28</span>
    </button>

    <button>
        <span id="mehr-genres" class="filter__mehrgenres">Mehr Genres</span>
    </button>
</div>


<script type="text/javascript" src="js/filter.js"></script>
