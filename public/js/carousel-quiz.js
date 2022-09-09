(function () {
    var carouselTransition, carouselContent, carouselIndex, carouselLength, firstClone, firstItem, isAnimating, itemWidth, lastClone, lastItem;
    carouselTransition = 250;
    carouselContent = $('.carousel__content');
    carouselIndex = 0;
    carouselMax = 0;
    carouselLength = carouselContent.children().length;
    isAnimating = false;
    itemWidth = 100 / carouselLength;
    firstItem = $(carouselContent.children()[0]);
    lastItem = $(carouselContent.children()[carouselLength - 1]);
    firstClone = null;
    lastClone = null;
    carouselContent.css('width', carouselLength * 100 + '%');
    carouselContent.transition({ x: carouselIndex * -itemWidth + '%' }, 0);
    $.each(carouselContent.children(), function () {
        return $(this).css('width', itemWidth + '%');
    });
    $('.nav--buttons--left').on('click', function (event) {
        event.preventDefault();
        if (isAnimating || carouselIndex === 0) {
            return;
        }
        isAnimating = true;
        carouselIndex--;
        update_progress_bar(carouselIndex);
        $(".nav--buttons--right").css("display", "block");
        if (carouselIndex === 0 || carouselIndex === 1) {
            $(".nav--buttons--left").css("display", "none");
        }
        return carouselContent.transition({ x: carouselIndex * -itemWidth + '%' }, carouselTransition, 'ease', function () {
            return isAnimating = false;
        });
    });
    $('.nav--buttons--right').on('click', function (event) {
        event.preventDefault();
        if (isAnimating || carouselIndex === carouselLength - 1) {
            return;
        }
        isAnimating = true;
        carouselIndex++;
        update_progress_bar(carouselIndex);
        if (carouselIndex > carouselMax) {
            carouselMax = carouselIndex;
        }
        $(".nav--buttons--left").css("display", "block");
        if (carouselIndex === carouselLength - 1 || carouselIndex === carouselMax) {
            $(".nav--buttons--right").css("display", "none");
        }
        if (carouselIndex === 1) {
            $(".nav--buttons--left").css("display", "none");
        }
        return carouselContent.transition({ x: carouselIndex * -itemWidth + '%' }, carouselTransition, 'ease', function () {
            return isAnimating = false;
        });
    });
}.call(this));

function calc_results() {
    var count;
    $(".questions").each(function () {
        if (this.is(":checked")) {
            count++;
        }
    });
}

var results = [
    ["13.33", "5.45", "2.68"],    // 0
    ["8.89", "4.55", "9.82"],     // 1
    ["5.56", "4.55", "14.29"],    // 2
    ["8.89", "4.55", "0.00"],     // 3
    ["1.11", "6.36", "6.25"],     // 4
    ["11.11", "3.64", "4.46"],    // 5
    ["8.89", "4.55", "4.46"],     // 6
    ["5.56", "4.55", "6.25"],     // 7
    ["5.56", "4.55", "2.68"],     // 8
    ["6.67", "8.18", "8.93"],     // 9
    ["10.00", "10.00", "6.25"],   // 10
    ["3.33", "5.45", "4.46"],     // 11
    ["3.33", "5.45", "8.04"],     // 12
    ["4.44", "11.82", "4.46"],    // 13
    ["2.22", "10.00", "2.68"],    // 14
    ["1.11", "6.36", "14.29"]     // 15
]

function sumArray(from, to, size) {
    var sum = parseFloat("0.00");
    for (var i = from; i <= to; i++) {
        sum += parseFloat(results[i][size]);
    }
    return sum.toFixed(1).toString();
}

function calc_results(button_elem) {
    var count = 0;
    var checked = 0;
    var size = $("input[name=size]:checked").val();
    $(":checked").each(function () {
        checked++;
    });
    if (checked != 16) {
        alert("Please check all of the questions.");
        return;
    }
    $(".questions").each(function () {
        if ($(this).is(":checked")) {
            count++;
        }
    });
    var less = sumArray(0, count - 1, size);
    var same = sumArray(count, count, size);
    var more = sumArray(count + 1, 15, size);

    var resultsText = "";
    resultsText += '<div class="container">';
    resultsText += '<h2 style="margin-top: 0.5em; color: #00a5b5;">So, Where Do You Stand Today?</h2>';
    resultsText = resultsText + '<h3>You are currently automating <strong>' + (count) + '</strong> controls of the 15 sub-controls used to assess Critical Security Controls 1 - 5 in your organization of <strong>' + $("input[name=size]:checked").attr('data-value') + '</strong> people.</h3>';
    resultsText += '<div style="margin-top: 2.5em;" class="score-slider-track">';
    resultsText += '<div class="score-slider">0%</div>';
    resultsText += '<div class="score-slider-less">0%</div>';
    resultsText += '<div class="score-slider-more">0%</div>';
    resultsText += '</div>';
    resultsText += '<div class="flex-grid mb">';
    resultsText += '<div class="flex-two flex-fewer">';
    resultsText = resultsText + '<p style="margin: 0; font-size: 4em;">' + less + "%" + '</p>';
    resultsText += '<p style="margin: 0;">of similar sized organizations have automated <strong>fewer</strong> controls</p>';
    resultsText += '</div>';
    resultsText += '<div class="flex-two flex-same">';
    resultsText = resultsText + '<p style="margin: 0; font-size: 5em;">' + same + "%" + '</p>';
    resultsText += '<p style="margin: 0;">of similar sized organizations have automated the <strong>same</strong> number of controls</p>';
    resultsText += '</div>';
    resultsText += '<div class="flex-two flex-more">';
    resultsText = resultsText + '<p style="margin: 0; font-size: 4em;">' + more + "%" + '</p>';
    resultsText += '<p style="margin: 0;">of similar sized organizations have automated <strong>more</strong> controls</p>';
    resultsText += '</div>';
    resultsText += '</div>';
    resultsText += '</div>';

    $("#auto-con-calc").html(resultsText);
    sliderControl(less, same, more);
    $("#auto-con-calc").slideDown("fast", function () {
        $('html, body').animate({
            scrollTop: $('#auto-con-calc').offset().top
        }, 'slow');
    });
}

function update_progress_bar(index) {
    var checked = index;
    if (checked === 0) {
        $(".progress-bar-insider").css("width", "4%");
    }
    else {
        checked = checked - 1;
        $(".progress-bar-insider").css("width", ((checked / 15) * 96 + 4) + "%");
    }
    if (checked < 16) {
        $(".progress-bar-insider").attr("data-progress", (checked + 1) + "/16");
    }
    else {
        $(".progress-bar-insider").attr("data-progress", "");
    }
}

$(".carousel--item input[type=radio]").click(function () {
    $("#auto-con-calc").slideUp();
    $('.nav--buttons--right').trigger('click');
});

function sliderControl(less, same, more) {
    var less_slider = $(".score-slider-less");
    var same_slider = $(".score-slider");
    var more_slider = $(".score-slider-more");

    if (same < 5.00) {
        same_slider.css("width", "5%");
    }
    else {
        less_slider.css("width", same + "%");
    }
    same_slider.css("left", less + "%").html(same + "%");
    less_slider.css("width", (parseFloat(less) + (parseFloat(same) / 2)) + "%").html(less + "%");
    more_slider.css("width", (parseFloat(more) + (parseFloat(same) / 2)) + "%").html(more + "%");
}

