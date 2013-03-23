$(function() {
    var galleries = $('.ad-gallery').adGallery();
    for(var i=0;i<galleries.length;i++){
        galleries[i].settings.effect = 'fade';
        galleries[i].slideshow.toggle();
    }
  });