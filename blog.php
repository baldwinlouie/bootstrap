<!DOCTYPE html>
<html lang="en">
<?php include_once "./meta.php" ?>

<body>

<?php include_once "./header.php" ?>
<div class="container">
  <ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li class="active">Blog</li>
  </ol>
  <h1>Blog</h1>
</div>
<div class="main">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <?php
        $count = 0;
        while ($count <= 6) {
        ?>
        <div class="blog-teaser">
          <div class="blog-teaser-image" data-src="Read More">
            <a href="blog-post.php">
              <img
                src="assets/img/blog_image1.jpg"
                alt="Placeholder" class="img-thumbnail"
                class="img-responsive"
                style="width:370px; height:244px;">
              <div class="overlay">
                <div class="overlay-text">
                  <h4>Read More</h4>
                </div>
              </div>
            </a>
          </div>
          <div class="blog-teaser-text">
            <h4><a href="blog-post.php">Aenean tellus metus bibendum</a></h4>
            <div class="blog-meta-data">
              Posted
              <span class="date">2.20.2015</span>
              <span class="tags"><a href="#" class="more text-capitalize">alfa</a>, <a href="#" class="more text-capitalize">bmw</a></span>
              <span class="comments">2 comments</span>
            </div>
            <p>
              Donec vitae sapien ut libero venenatis faucibus. Vestibulum
              suscipit nulla quis orci. Suspendisse enim turpis, dictum sed,
              iaculis a, condimentum nec, nisi.
            </p>
            <a href="#" class="more">Read More</a>
          </div>
          <hr>
        </div>

        <?php
          $count ++;
        }
        ?>
      </div>

    </div>
  </div>
  <div class="container">
    <!-- pager -->
    <nav>
      <ul class="pagination">
        <li>
          <a href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li>
          <a href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</div>

<?php include_once "./footer.php" ?>
</body>
</html>
