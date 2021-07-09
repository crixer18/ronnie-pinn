
/*function paginationArrows1(previous, next){

    var left_nav = '<div class="navarrow left-nav"><a href = "' + previous + '"><i class="fas fa-chevron-left"></i></a ></div >';
    var right_nav = '<div class="navarrow right-nav"><a href="' + next + '"><i class="fas fa-chevron-right"></i></a></div>';

    var navarrows = document.getElementById('arrows');
    navarrows.innerHTML = left_nav + right_nav;

};*/


function paginationArrowsStd(pId) {

    var previous = pId - 1;
    var next = pId + 1;
    var navarrows = document.getElementById('arrows');

    switch (true) {

        case (pId == 0):
            var right_nav = '<div class="navarrow right-nav"><a href="pages/p1.html"><i class="fas fa-chevron-right"></i></a></div>';
            navarrows.innerHTML = right_nav;
            break;

        case (pId == 1):
            var left_nav = '<div class="navarrow left-nav"><a href = "../index.html"><i class="fas fa-chevron-left"></i></a ></div >';
            var right_nav = '<div class="navarrow right-nav"><a href="p' + next + '.html"><i class="fas fa-chevron-right"></i></a></div>';
            navarrows.innerHTML = left_nav + right_nav;
            break;

        case (pId > 1 && pId < 28):
            var left_nav = '<div class="navarrow left-nav"><a href = "p' + previous + '.html"><i class="fas fa-chevron-left"></i></a></div>';
            var right_nav = '<div class="navarrow right-nav"><a href = "p' + next + '.html"><i class="fas fa-chevron-right"></i></a></div>';
            navarrows.innerHTML = left_nav + right_nav;
            break;

        case (pId == 28):
            var left_nav = '<div class="navarrow left-nav"><a href = "p' + previous + '.html"><i class="fas fa-chevron-left"></i></a></div>';
            var right_nav = '<div class="navarrow right-nav"><a href = "../bibliografia-e-credits.html"><i class="fas fa-chevron-right"></i></a></div>';
            navarrows.innerHTML = left_nav + right_nav;
            break;   
            
        case (pId == 100):
            var left_nav = '<div class="navarrow left-nav"><a href="pages/28.html"><i class="fas fa-chevron-left"></i></a></div>';
            navarrows.innerHTML = left_nav;
            break;
    }
 

};

/*function indexArrow(){

    var right_nav = '<div class="navarrow right-nav"><a href="pages/p1.html"><i class="fas fa-chevron-right"></i></a></div>';

    var navarrows = document.getElementById('arrows');
    navarrows.innerHTML = right_nav;

}*/