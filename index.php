<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Swiper Article</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
</head>

<body>
  <div class="container">

    <!-- Example 1 -->
    <!-- <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide slide_1">Slide 1</div>
        <div class="swiper-slide slide_2">Slide 2</div>
        <div class="swiper-slide slide_3">Slide 3</div>
        <div class="swiper-slide slide_4">Slide 4</div>
        <div class="swiper-slide slide_5">Slide 5</div>
      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-scrollbar"></div>
    </div> -->


    <div class="swiper mySwiper swiper-h">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="photos/cave001.JPG" alt="Girl in a jacket"></div>
        <div class="swiper-slide"><img src="photos/cave002.JPG" alt="Girl in a jacket"></div>
        <div class="swiper-slide"><img src="photos/cave003.JPG" alt="Girl in a jacket"></div>
        <div class="swiper-slide slide_1"><img src="photos/cave004.JPG" alt="Girl in a jacket"></div>
        <div class="swiper-slide"><img src="photos/cave005.JPG" alt="Girl in a jacket"></div>
        <div class="swiper-slide"><img src="photos/cave006.JPG" alt="Girl in a jacket"></div>
        <div class="swiper-slide slide_2"><img src="photos/cave002.JPG" alt="Girl in a jacket"></div>
        <div class="swiper-slide">
          <div class="swiper mySwiper2 swiper-v">
            <div class="swiper-wrapper">
              <div class="swiper-slide slide_3">Horizontal Slide 3 & Vertical Slide 1</div>
              <div class="swiper-slide v_slide_2">Vertical Slide 2</div>
              <div class="swiper-slide v_slide_3">Vertical Slide 3</div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
        <div class="swiper-slide slide_4"><img src="photos/cave002.JPG" alt="Girl in a jacket"></div>
      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-scrollbar"></div>
    </div>

  </div>


  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>