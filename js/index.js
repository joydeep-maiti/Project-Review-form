// var $star_rate = $('.star-rating .fa');

var SetRatingStar = function ($star_rating,rating_value) {
  return $star_rating.each(function() {
    if (parseInt(rating_value) >= parseInt($(this).data('rating'))) {
      return $(this).removeClass('fa-star-o').addClass('fa-star');
    } else {
      return $(this).removeClass('fa-star').addClass('fa-star-o');
    }
  });
};
var $star_rate = $('.prj1 .fa');
var rating_value = $star_rate.siblings('input.rating-value1').val();
SetRatingStar($star_rate,rating_value);

var $star_rate = $('.prj2 .fa');
var rating_value = $star_rate.siblings('input.rating-value2').val();
SetRatingStar($star_rate, rating_value);
// for (i=1;i<=2;i++) {
  
  // var i=1;
  // console.log(i);
  // var $star_rate = $('.prj'+i+'.fa');
  // var rating_value = $star_rate.siblings('input.rating-value'+i).val();
  // console.log(rating_value);
  // SetRatingStar($star_rate, rating_value);
// }

$(document).ready(function() {
});