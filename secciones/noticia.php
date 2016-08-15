<!-- WELCOME BANNER -->
<div class="welcome-banner">
    <div class="welcome-banner-black">
        <h1 class="wn-h1">World News</h1>
        <span class="wn-subheading">Business Around the Globe</span>
    </div>
</div>

<!-- SECTION 1 -->
<div class="outer-container">
    <section class="wn-section-1">
        <h2 class="wn-section-topic">
            Weekly Trending Topic
        </h2>
        <hr class="wn-hr">
        <div class="wn-section-1-topic-container" style="background:url('<?= $imgWTT; ?>')">
            <h3 class="wn-section-1-topic-heading">
                <?= $titWTT; ?>
            </h3>
            <div class="wn-section-1-topic-description">
                <?= $excWTT; ?>
            </div>
        </div>
    </section>

    <!-- SECTION 2 -->
    <section class="wn-section-2">
        <h2 class="wn-section-topic">
            EFM CAPITAL'S PERSPECTIVE
        </h2>
        <hr class="wn-hr">
        <div class="wn-section-2-perspective-container">
            <ul id="listHomeArt" class="wn-section-2-post-contain-1">
            </ul>
            <!-- MORE ARTICLES BUTTON -->
            <div class="wn-section-2-more-post">
                <div class="wn-section-2-more-post-icon-box">
                    <img src="" alt="" class="wn-section-2-more-post-icon">
                </div>
                <div class="wn-section-2-more-post-text">
                    <a href="javascript:loadArt()">More articles</a>
                    <hr class="wn-hr-industry-1">
                </div>
            </div>
        </div>
    </section>


    <!-- SECTION 3 -->
    <section class="wn-section-3">
        <h2 class="wn-section-topic">
            MONTHLY INDUSTRY ANALYISIS
        </h2>
        <hr class="wn-hr">
        <div class="wn-section-3-container" style="background:url('<?= $imgMIA; ?>');">
        <span class="wn-section-3-heading">
            <?= $titMIA; ?>
        </span>
            <span class="wn-section-3-date">August 2016 </span>
            <div class="wn-section-3-download">
                <img src="img/icons/icons-08.svg" alt="" class="wn-section-3-download-icon">
                <span class="wn-section-3-download-text">Download</span>
                <hr class="wn-hr-download">
            </div>
        </div>

        <!-- MORE ARTICLES BUTTON -->
        <div class="wn-section-3-more-post">
            <div class="wn-section-3-more-post-icon-box">
                <img src="" alt="" class="wn-section-3-more-post-icon">
            </div>
            <span class="wn-section-3-more-post-text"> More Industry Analysis </span>
            <hr class="wn-hr-industry">
        </div>
    </section>

    <!-- SECTION 4 -->
    <section class="wn-section-4">
        <h2 class="wn-section-topic">
            Events
        </h2>
        <hr class="wn-hr">
        <div class="wn-section-4-topic-container" style="background:url('<?= $imgEvent; ?>');">
            <h3 class="wn-section-4-topic-heading">
                <?= $titEvent; ?>
            </h3>
            <div class="wn-section-4-topic-description">
                <?= $excEvent; ?>
            </div>
        </div>
    </section>
</div>