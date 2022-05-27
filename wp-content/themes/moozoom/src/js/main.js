/*
 * Main JS: file with all the micro-interactions of the website.
 * Author: Jenny Martinez
 * 
 */

// Text swap
const real = document.getElementById('real');
if (!!real) {
    let counter = 1;
    let mztxt = real.getAttribute('data-skills');
    mztxt = mztxt.replace(/\s+/g, '');
    mztxt = mztxt.split(',');

    window.intervalID = setInterval(function() {
        real.innerHTML = mztxt[counter];
        if (counter == 2) counter = 0;
        else counter++;
    }, 3500);
}

// load lottie animation
const elements = document.querySelectorAll('.videoPlayIcon');
if (elements.length > 0) {
    for (let i = 0; i <= elements.length - 1; i = i + 1) {
        lottie.loadAnimation({
            container: elements[i],
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: site.theme_path + '/video_play_icon.json',
        });
    }
}


//////////////////////////////////////////////////////////////////////////////////////////////
// switcher for pricing between usd and cad

const switch_usd = document.getElementById('switch_usd');
const switch_cad = document.getElementById('switch_cad');

const elementsUSD = document.getElementsByClassName('usd');
const elementsCAD = document.getElementsByClassName('cad');

if (switch_usd && switch_cad) {
    switch_usd.addEventListener('click', () => {
        //console.log('switch_usd'); 

        switch_usd.classList.remove('text-white');
        switch_usd.classList.add('text-purple-700');

        switch_cad.classList.remove('text-purple-700');
        switch_cad.classList.add('text-white');

        for (var i = 0; i < elementsUSD.length; i++) {
            elementsUSD[i].classList.remove('hidden');
            elementsUSD[i].classList.add('block');

            elementsCAD[i].classList.add('hidden');
            elementsCAD[i].classList.remove('block');
        }
    });

    switch_cad.addEventListener('click', () => {
        //console.log('switch_cad');

        switch_usd.classList.remove('text-purple-700');
        switch_usd.classList.add('text-white');

        switch_cad.classList.remove('text-white');
        switch_cad.classList.add('text-purple-700');

        for (var i = 0; i < elementsCAD.length; i++) {
            elementsCAD[i].classList.remove('hidden');
            elementsCAD[i].classList.add('block');

            elementsUSD[i].classList.add('hidden');
            elementsUSD[i].classList.remove('block');
        }
    });
}


//////////////////////////////////////////////////////////////////////////////////////////////
// resolved
if (document.querySelector('.resolved')) {
    const siemaresolved = new Siema({
        selector: '.resolved',
        onChange: printSlideIndexRes
    });

    const resolvedPrev = document.querySelector('.resolved-prev');
    const resolvedNext = document.querySelector('.resolved-next');

    resolvedPrev.addEventListener('click', () => siemaresolved.prev());
    resolvedNext.addEventListener('click', () => siemaresolved.next());

    var resolvedStep = [];
    resolvedStep[0] = document.querySelector('.resolved-step-0');
    resolvedStep[1] = document.querySelector('.resolved-step-1');
    resolvedStep[2] = document.querySelector('.resolved-step-2');
    resolvedStep[3] = document.querySelector('.resolved-step-3');
    resolvedStep[4] = document.querySelector('.resolved-step-4');

    function printSlideIndexRes(id) {
        toggleStateRes(this.currentSlide, true);
    }

    function toggleStateRes(id, status = false) {
        if (status === true) {
            for (let i = 0; i < 5; i++) {
                if (id == i) {
                    resolvedStep[i].classList.add('bg-purple-700');
                    resolvedStep[i].classList.remove('bg-slate-300');
                } else {
                    resolvedStep[i].classList.add('bg-slate-300');
                    resolvedStep[i].classList.remove('bg-purple-700');
                }
            }
        }
    }
}


//////////////////////////////////////////////////////////////////////////////////////////////
// testimonials
if (document.querySelector('.testimonials')) {

    const siematestimonials = new Siema({
        selector: '.testimonials',
        onChange: printSlideIndexTes
    });

    const testimonialsPrev = document.querySelector('.testimonials-prev');
    const testimonialsNext = document.querySelector('.testimonials-next');

    testimonialsPrev.addEventListener('click', () => siematestimonials.prev());
    testimonialsNext.addEventListener('click', () => siematestimonials.next());

    var testimonialsStep = [];
    testimonialsStep[0] = document.querySelector('.testimonials-step-0');
    testimonialsStep[1] = document.querySelector('.testimonials-step-1');
    testimonialsStep[2] = document.querySelector('.testimonials-step-2');
    testimonialsStep[3] = document.querySelector('.testimonials-step-3');
    testimonialsStep[4] = document.querySelector('.testimonials-step-4');

    function printSlideIndexTes(id) {
        toggleStateTes(this.currentSlide, true);
    }

    function toggleStateTes(id, status = false) {
        if (status === true) {
            for (let i = 0; i < 4; i++) {
                if (id == i) {
                    testimonialsStep[i].classList.add('bg-purple-700');
                    testimonialsStep[i].classList.remove('bg-slate-300');
                } else {
                    testimonialsStep[i].classList.add('bg-slate-300');
                    testimonialsStep[i].classList.remove('bg-purple-700');
                }
            }
        }
    }
}


//////////////////////////////////////////////////////////////////////////////////////////////
// Challenges
if (document.querySelector('.moozoomapp')) {

    const siemaChallenges = new Siema({
        selector: '.moozoomapp',
        onChange: printSlideIndex
    });
    var challenges = [];
    challenges[0] = document.querySelector('.btn0-moozoomapp');
    challenges[1] = document.querySelector('.btn1-moozoomapp');
    challenges[2] = document.querySelector('.btn2-moozoomapp');
    challenges[3] = document.querySelector('.btn3-moozoomapp');

    challenges[0].addEventListener('click', () => siemaChallenges.goTo(0, toggleState(0, true)));
    challenges[1].addEventListener('click', () => siemaChallenges.goTo(1, toggleState(1, true)));
    challenges[2].addEventListener('click', () => siemaChallenges.goTo(2, toggleState(2, true)));
    challenges[3].addEventListener('click', () => siemaChallenges.goTo(3, toggleState(3, true)));

    function printSlideIndex(id) {
        toggleState(this.currentSlide, true);
    }

    function toggleState(id, status = false) {
        if (status === true) {
            for (let i = 0; i < 4; i++) {
                if (id == i) {
                    challenges[i].classList.add('text-black');
                    challenges[i].classList.remove('text-slate-400');
                } else {
                    challenges[i].classList.add('text-slate-400');
                    challenges[i].classList.remove('text-black');
                }
            }
        }
    }
}

//////////////////////////////////////////////////////////////////////////////////////////////
// Activities

if (document.querySelector('.activities')) {
    const siemaActivities = new Siema({
        selector: '.activities',
        onChange: printSlideIndexAct
    });


    const activityPrev = document.querySelector('.activity-prev');
    const activityNext = document.querySelector('.activity-next');



    const activityPrevOne = document.querySelector('.activity-prev-one');
    const activityNextOne = document.querySelector('.activity-next-one');


    activityPrev.addEventListener('click', () => siemaActivities.prev());
    activityNext.addEventListener('click', () => siemaActivities.next());


    activityPrevOne.addEventListener('click', () => siemaActivities.prev());
    activityNextOne.addEventListener('click', () => siemaActivities.next());


    var activities = [];
    activities[0] = document.querySelector('.activity-1');
    activities[1] = document.querySelector('.activity-2');
    activities[2] = document.querySelector('.activity-3');
    activities[3] = document.querySelector('.activity-4');
    activities[4] = document.querySelector('.activity-5');
    activities[5] = document.querySelector('.activity-6');

    // var activitiesScroll = [];
    //     activitiesScroll[0] = document.querySelector('.activity-1');
    //     activitiesScroll[1] = document.querySelector('.activity-2');
    //     activitiesScroll[2] = document.querySelector('.activity-3');
    //     activitiesScroll[3] = document.querySelector('.activity-4');
    //     activitiesScroll[4] = document.querySelector('.activity-5');
    //     activitiesScroll[5] = document.querySelector('.activity-6');


    activities[0].addEventListener('click', () => siemaActivities.goTo(0, toggleStateAct(0, true)));
    activities[1].addEventListener('click', () => siemaActivities.goTo(1, toggleStateAct(1, true)));
    activities[2].addEventListener('click', () => siemaActivities.goTo(2, toggleStateAct(2, true)));
    activities[3].addEventListener('click', () => siemaActivities.goTo(3, toggleStateAct(3, true)));
    activities[4].addEventListener('click', () => siemaActivities.goTo(4, toggleStateAct(4, true)));
    activities[5].addEventListener('click', () => siemaActivities.goTo(5, toggleStateAct(5, true)));


    var activitiesMob = [];
    activitiesMob[0] = document.querySelector('.rounded-activity-1');
    activitiesMob[1] = document.querySelector('.rounded-activity-2');
    activitiesMob[2] = document.querySelector('.rounded-activity-3');
    activitiesMob[3] = document.querySelector('.rounded-activity-4');
    activitiesMob[4] = document.querySelector('.rounded-activity-5');
    activitiesMob[5] = document.querySelector('.rounded-activity-6');


    function printSlideIndexAct(id) {
        toggleStateAct(this.currentSlide, true);
    }

    function toggleStateAct(id, status = false) {
        if (status === true) {
            for (let i = 0; i < 6; i++) {
                if (id == i) {

                    // console.log( activities[i-2].classList + 'sdsd');
                    activities[i].classList.add('active-exercise');
                    activities[i].classList.add('styles_exercise__2F4q0');
                    // activitiesScroll[i].classList.add('hidden');

                    activitiesMob[i].classList.add('bg-purple-700');
                    activitiesMob[i].classList.remove('bg-slate-300');


                    let imageId = 'activity-img-' + (i + 1);
                    console.log({ imageId });
                    const image = document.getElementById(imageId);

                    console.log(site.main_home + "/wp-content/uploads/2022/02/vector-activities-0" + (i + 1) + "-on.svg");
                    image.src = site.main_home + "/wp-content/uploads/2022/02/vector-activities-0" + (i + 1) + "-on.svg";


                } else {
                    activities[i].classList.remove('active-exercise');
                    activities[i].classList.remove('styles_exercise__2F4q0');
                    // activitiesScroll[i].classList.remove('hidden');

                    activitiesMob[i].classList.add('bg-slate-300');
                    activitiesMob[i].classList.remove('bg-purple-700');

                    let imageId = 'activity-img-' + (i + 1);
                    console.log({ imageId });
                    const image = document.getElementById(imageId);

                    console.log(site.main_home + "/wp-content/uploads/2022/02/vector-activities-0" + (i + 1) + "-off.svg");
                    image.src = site.main_home + "/wp-content/uploads/2022/02/vector-activities-0" + (i + 1) + "-off.svg";

                }
            }

            // for ( let i=2; i<5; i++ ) {
            //     if ( id == i ) {
            //         console.log(activitiesScroll[i].classList)
            //         activitiesScroll[i-1].classList.add('hidden');
            //         activitiesScroll[i-2].classList.add('hidden');
            //         activitiesScroll[i-3].classList.add('hidden');

            //     }
            //     else {
            //         activitiesScroll[i-1].classList.remove('hidden');
            //         activitiesScroll[i-2].classList.remove('hidden');
            //     }
            // }
            // for (let i = 5; i < 6; i++) {
            //     if (id == i) {
            //         console.log(activitiesScroll[i - 5].classList + 'ddd')
            //         activitiesScroll[i - 5].classList.add('hidden');
            //         activitiesScroll[i - 4].classList.add('hidden');
            //         activitiesScroll[i - 3].classList.add('hidden');

            //     } else {
            //         // activitiesScroll[i-1].classList.remove('hidden');
            //         // activitiesScroll[i-2].classList.remove('hidden');
            //     }
            // }
        }
    }
}

//////////////////////////////////////////////////////////////////////////////////////////////
// explore changer
function handleSelectChange(event) {
    var selectElement = event.target;
    var value = selectElement.value;
    //console.log( site.home_url + value );
    window.location.href = site.home_url + '/' + value;
}


//////////////////////////////////////////////////////////////////////////////////////////////
// contact changer 
function selectorPricing(event, long) {
    var selectElement = event.target;
    var value = selectElement.value;
    var long = long;

    selectorPricingClassSwitcher(value, long);
}

function selectorPricingClassSwitcher(value, long) {
    var value = value;
    var long = long;

    // Iterate to switch classes
    for (var i = 1; i <= long; i++) {
        var element = document.getElementById('pricing-' + i);
        var header = document.getElementById('pricing-header-' + i);

        if (i == value) {
            element.classList.remove('hidden');
            element.classList.add('block');
            header.classList.add('text-purple-700');
            header.classList.add('bg-white');
            header.classList.add('font-bold');
            // console.log('pricing-' + i + ' is visible');
        } else {
            element.classList.remove('block');
            element.classList.add('hidden');
            header.classList.remove('text-purple-700');
            header.classList.remove('bg-white');
            header.classList.remove('font-bold');
            // console.log('pricing-' + i + ' is invisible');
        }
    }
}

function selectFeeling(id) {
    var id = id;
    var element = [];

    for (var i = 1; i <= 5; i++) {
        element[i] = document.getElementById('how-do-you-feel-' + i);

        if (i == id) {
            element[i].classList.add('shadow');
            element[i].classList.add('border');
            element[i].classList.add('border-purple-light');
            //console.log('how-do-you-feel-' + id + ' is visible');
        } else {
            element[i].classList.remove('shadow');
            element[i].classList.remove('border');
            element[i].classList.remove('border-purple-light');
            //console.log('how-do-you-feel-' + id + ' is invisible');
        }
    }

}

var pricing_heding = "sales";
    var how_do_you_feel = "";
    $('.pricing_head').click(function() {

        pricing_heding = $(this).html();
        if (pricing_heding == "Pricing") {
            pricing_heding = "Sales";
        }
        if (pricing_heding == "Improvements") {
            pricing_heding = "Suggestion";
        }

    });
    $('.how-do-you-feel').click(function() {

        how_do_you_feel = $(this).attr('data-value');
		$(".how-do-you-feel").removeClass("shadow");
        $(this).addClass("shadow");    });
    $('select').on('change', function() {
        pricing_heding = this.value;
		//console.log(pricing_heding);
    });

    function contactFormSubmit() {
        $("#contactForm").validate({
            submitHandler: function(form) {
                $.ajax({
                    type: "POST",
                    url: 'https://my.moozoomapp.com/api/contact-us',
                    data: {
                        firstName: $(".firstname").val(),
                        lastName: $(".lastname").val(),
                        email: $(".email").val(),
                        phone: $(".phone").val(),
                        contactMethod: $('input[name=email_type]:checked', '#contactForm').val(),
                        message: $(".message").val(),
                        type: pricing_heding.toLowerCase(),
                        emotion: how_do_you_feel
                    },
                    success: function(data) {
                        $(".success_msg").empty().append("<h3>Thank you for getting in touch! </h3>");
                        $(".error_msg").css('display', 'none');
                        // Ajax call completed successfully

                    },
                    error: function(data) {
                        $(".error_msg").empty().append("<h3>Something Went Wrong! </h3>");
                        $(".error_msg").css('display', 'block');
                        // // Some error in ajax call
                    }
                });
            }
        });
    }