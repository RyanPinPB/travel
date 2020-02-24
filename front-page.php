<?php get_header() ?>
<?php 

// Declare variables for advanced custom fields

if (get_field('person')) {
    $person = get_field('person');
}

if (get_field('place')) {
    $place = get_field('place');
}

if (get_field('gallery_images')) {
    $gallery_images = get_field('gallery_images');
}

if (get_field('gallery_videos')) {
    $gallery_videos = get_field('gallery_videos');
}

?>

<section class="bio-overlay">
    <div class="bio-container">
        <?php foreach($person as $per) { echo
            '<div class="bio ' . $per['person_class'] . '">
                <div class="bio-image"></div>
                <div class="bio-info">
                    <h2 class="bio-name">' . $per['person_name'] . '</h2>
                    <p class="bio-description">' . $per['person_info'] . '</p>
                    <button class="close-bio">CLOSE BIO</button>
                </div>
            </div>';}
        ?>
    </div>
</section>

<main class="main">
    <section class="hero">
        <div class="background">
            <h2 class="hero-text section-title">Adventure</h2>
            <div class="dude"></div>
            <div class="fade-to-black"></div>
        </div>
    </section>
    <div class="wrap">
        <section id="people" class="people">
            <h2 class="section-title">People</h2>
            <div class="carousel-container">
                <div class="customNavigation">
                    <span class="nav-title">TRAVELERS</span>
                    <button type="button" role="presentation" class="people-prev"> <span class="btn prev" aria-label="Previous">‹</span></button>
                    <button type="button" role="presentation" class="people-next"> <span class="btn next" aria-label="Next">›</span></button>
                </div>

                <div id="owl-people" class="owl-carousel owl-theme">
                    <?php foreach($person as $person) { echo
                    
                        '<div class="item person">
                            <div class="person-image ' . $person['person_class'] . '"></div>
                            <div class="person-info">
                                <div class="person-name">' . $person['person_name'] . '</div>
                                <button id="open-' . $person['person_class'] . '" class="view-bio">VIEW BIO</button>
                            </div>
                        </div>';}
                    ?>
                </div>
            </div>
        </section>

        <section id="places" class="places">
            <h2 class="section-title">Places</h2>
            <?php foreach($place as $place) { echo 
                '<div class="location">
                    <img class="location-picture ' . $place['place_class'] . ' slide-up" src="' . $place['place_image'] . '" alt="Antelope Canyon"/>
                    <h2 class="location-name ' . $place['place_class'] . ' slide-up">' . $place['place_name'] . '</h2>
                    <p class="location-description ' . $place['place_class'] . ' slide-up">' . $place['place_description'] .  '</p>
                </div>';}
            ?>
        </section>

        <section id="gallery" class="gallery">
            <h2 class="section-title">Gallery</h2>
            <div class="customNavigation">
                <button type="button" role="presentation" class="gallery-prev"> <span class="btn prev" aria-label="Previous">‹</span></button>
                <button type="button" role="presentation" class="gallery-next"> <span class="btn next" aria-label="Next">›</span></button>
            </div>
            <div id="owl-gallery" class="owl-carousel owl-theme">
                <?php foreach($gallery_videos as $videos) { echo 
                    '<div class="item-video gallery">
                        <iframe class="video-iframe" width="100%" height="auto" src="' . $videos['video_link'] . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>';}
                ?>
                <?php foreach($gallery_images as $images) { echo 
                    '<div class="item gallery">
                        <img class="" src="' . $images['gallery_image'] . '" alt="' . $images['image_alt'] . '" />
                    </div>';}
                ?>
            </div>
        </section>
    </div>
</main>

<aside>
    <div class="social-container">
        <span class="share">SHARE</span>
        <a class="social-icon facebook" href="https://www.facebook.com/PowerDigitalMarketing/" target="blank" aria-label="visit Power Digital's facebook page">
            <svg class="facebook" alt="Facebook icon" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9.321 20"><title>Facebook</title>
                <path id="Path_26" data-name="Path 26" class="cls-1" d="M131.821,6.553V4.83a3.8,3.8,0,0,1,.036-.6,1.167,1.167,0,0,1,.164-.419.669.669,0,0,1,.413-.285,2.938,2.938,0,0,1,.759-.079h1.723V0h-2.755a4.484,4.484,0,0,0-3.435,1.135,4.78,4.78,0,0,0-1.044,3.344V6.553h-2.063V10h2.063V20h4.139V10h2.755l.364-3.447Z" transform="translate(-125.619)"/>
            </svg>
        </a>
        <a class="social-icon twitter" href="https://twitter.com/pwrdigmarketing?lang=en" target="blank" aria-label="visit Power Digital twitter page">
            <svg class="twitter" alt="Twitter icon" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.1 14"><title>Twitter</title>
                <g id="twitter" transform="translate(0.002 -28.097)">
                    <path id="XMLID_827_" class="cls-1" d="M16.71,29.713a6.482,6.482,0,0,1-.827.3,3.656,3.656,0,0,0,.744-1.309.276.276,0,0,0-.4-.321,6.509,6.509,0,0,1-1.924.76,3.672,3.672,0,0,0-6.24,2.624,3.744,3.744,0,0,0,.03.474,9.4,9.4,0,0,1-6.45-3.422.276.276,0,0,0-.452.035,3.676,3.676,0,0,0,.376,4.225,3.109,3.109,0,0,1-.491-.219.276.276,0,0,0-.41.235c0,.016,0,.033,0,.049a3.684,3.684,0,0,0,1.8,3.157c-.093-.009-.187-.023-.279-.041a.276.276,0,0,0-.314.355,3.67,3.67,0,0,0,2.689,2.46,6.494,6.494,0,0,1-3.471.991,6.64,6.64,0,0,1-.777-.046.276.276,0,0,0-.181.506A9.9,9.9,0,0,0,5.478,42.1a9.523,9.523,0,0,0,7.378-3.241,10.272,10.272,0,0,0,2.557-6.695c0-.1,0-.2,0-.3a7.136,7.136,0,0,0,1.642-1.74.276.276,0,0,0-.341-.405Z" transform="translate(0 0)"/>
                </g>
            </svg>
        </a>
        <a class="social-icon pinterest" href="https://pinterest.com" target="blank" aria-label="visit pinterest">
            <svg class="pinterest" alt="Pinterest icon" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.147 18"><title>Pinterest</title>
                <g id="pinterest" transform="translate(-33.181)">
                    <path id="XMLID_799_" class="cls-1" d="M45.494,1.845A6.9,6.9,0,0,0,40.665,0a7.589,7.589,0,0,0-5.6,2.158,6.377,6.377,0,0,0-1.887,4.42c0,2,.838,3.542,2.242,4.114a.742.742,0,0,0,.282.058.627.627,0,0,0,.612-.5c.047-.178.157-.618.2-.809a.759.759,0,0,0-.2-.821,2.616,2.616,0,0,1-.595-1.787A4.5,4.5,0,0,1,40.388,2.3c2.4,0,3.9,1.366,3.9,3.566a7.41,7.41,0,0,1-.842,3.62,2.49,2.49,0,0,1-2.06,1.441,1.365,1.365,0,0,1-1.086-.5,1.249,1.249,0,0,1-.219-1.085c.107-.454.253-.927.395-1.384a8.566,8.566,0,0,0,.5-2.254,1.637,1.637,0,0,0-1.647-1.8c-1.252,0-2.233,1.272-2.233,2.9a4.305,4.305,0,0,0,.307,1.62c-.158.668-1.1,4.642-1.273,5.391-.1.437-.722,3.892.3,4.167,1.152.309,2.181-3.055,2.286-3.435.085-.309.382-1.478.564-2.2a3.482,3.482,0,0,0,2.323.9,5.18,5.18,0,0,0,4.159-2.081,8.353,8.353,0,0,0,1.564-5.108A5.89,5.89,0,0,0,45.494,1.845Z" transform="translate(0 0)"/>
                </g>
            </svg>
        </a>
    </div>
</aside>

<?php get_footer() ?>