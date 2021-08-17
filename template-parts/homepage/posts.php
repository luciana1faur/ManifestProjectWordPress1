<section class="container">
    <div class="row">
        <h2 class="section-title">Latest posts</h2>
        <a style="float: left;" href="/">View all<img src="<?= get_stylesheet_directory_uri() . "/images/Arrow 2.png" ?>" /></a>
    </div>
    <div class="container">
        <div class="posts-list">
            <div class="row">
                <div class="col-md-4">
                    <img src="<?= get_stylesheet_directory_uri() . '/images/Img 01.png' ?>" />
                    <label>Interface Design</label>
                    <label>12 Oct 2020</label>
                    <div>
                        <h2>UX traffic light colours</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at ligula a neque cursus suscipit at quis nisl. Proin luctus vehicula tempus. Vivamus consequat,</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="<?= get_stylesheet_directory_uri() . '/images/Img 02.png' ?>" />
                    <label>Interface Design</label>
                    <label>12 Oct 2020</label>
                    <div>
                        <h2>UX traffic light colours</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at ligula a neque cursus suscipit at quis nisl. Proin luctus vehicula tempus. Vivamus consequat,</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="<?= get_stylesheet_directory_uri() . '/images/Img 03.png' ?>" />
                    <label>Interface Design</label>
                    <label>12 Oct 2020</label>
                    <div>
                        <h2>UX traffic light colours</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at ligula a neque cursus suscipit at quis nisl. Proin luctus vehicula tempus. Vivamus consequat,</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <script>
    (function($) {
        $('.posts-list').slick({
            infinite: false,
            dots: true,
            prevArrow: '<div class="slick-arrow left"><svg width="29" height="19" viewBox="0 0 29 19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M26.691 7.763H5.645l4.624-4.624c.638-.638.638-1.594 0-2.232-.638-.638-1.594-.638-2.232 0L.703 8.24c-.638.638-.638 1.594 0 2.232l7.334 7.334c.638.638 1.594.638 2.232 0 .638-.637.638-1.594 0-2.232l-4.624-4.624h21.046c.797 0 1.595-.637 1.595-1.594 0-.957-.798-1.594-1.595-1.594z" fill="#458FF6"/></svg></div>',
            nextArrow: '<div class="slick-arrow right"><svg width="29" height="19" viewBox="0 0 29 19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.737 11.237h21.046l-4.623 4.624c-.638.638-.638 1.595 0 2.232.637.638 1.594.638 2.232 0l7.334-7.334c.638-.638.638-1.594 0-2.232l-7.334-7.334c-.638-.638-1.595-.638-2.232 0-.638.637-.638 1.594 0 2.232l4.623 4.624H1.737c-.797 0-1.594.637-1.594 1.594 0 .957.797 1.594 1.594 1.594z" fill="#458FF6"/></svg></div>'
        });
    })(jQuery);
    </script>
</section>