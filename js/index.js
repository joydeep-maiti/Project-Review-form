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
var reviews = {
  reviews: [{
    stars: 3,
    name: 'bob',
    city: 'Noosk',
    review: '1 Thompson Greenspon is so grateful to have worked with CPA'
  }]
};

function ReviewStarContainer(stars) {
  var div = document.createElement('div');
  div.className = "stars-container";
  for (var i = 0; i < 5; i++) {
    var svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
    svg.setAttribute('viewBox', "0 12.705 512 486.59");
    svg.setAttribute('x', "0px");
    svg.setAttribute('y', "0px");
    svg.setAttribute('xml:space', "preserve");
    svg.setAttribute('class', "star");
    var svgNS = svg.namespaceURI;
    var star = document.createElementNS(svgNS, 'polygon');
    star.setAttribute('points', '256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566');
    star.setAttribute('fill', i < stars ? '#f39c12' : '#808080');
    svg.appendChild(star);
    div.appendChild(svg);
  }
  return div;
}

function ReviewContentContainer(name, city, review) {

  var reviewee = document.createElement('div');
  reviewee.className = "reviewee footer";
  reviewee.innerHTML = '- ' + name + ', ' + city;

  var comment = document.createElement('p');
  comment.innerHTML = review;

  var div = document.createElement('div');
  div.className = "review-content";
  div.appendChild(comment);
  div.appendChild(reviewee);

  return div;
}

function ReviewsContainer(review) {
  var div = document.createElement('blockquote');
  div.className = "review";
  div.appendChild(ReviewStarContainer(review.stars));
  div.appendChild(ReviewContentContainer(review.name, review.city, review.review));
  return div;
}

for (var i = 0; i < reviews.reviews.length; i++) {
  document.getElementById('review-container').appendChild(ReviewsContainer(reviews.reviews[i]));
}
for (var i = 0; i < reviews.reviews.length; i++) {
  document.getElementById('review-container2').appendChild(ReviewsContainer(reviews.reviews[i]));
}
$(document).ready(function() {
});