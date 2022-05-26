const real=document.getElementById("real");if(real){let e=1,t=real.getAttribute("data-skills");t=t.replace(/\s+/g,""),t=t.split(","),window.intervalID=setInterval(function(){real.innerHTML=t[e],2==e?e=0:e++},3500)}const elements=document.querySelectorAll(".videoPlayIcon");if(0<elements.length)for(let e=0;e<=elements.length-1;e+=1)lottie.loadAnimation({container:elements[e],renderer:"svg",loop:!0,autoplay:!0,path:site.theme_path+"/video_play_icon.json"});const switch_usd=document.getElementById("switch_usd"),switch_cad=document.getElementById("switch_cad"),elementsUSD=document.getElementsByClassName("usd"),elementsCAD=document.getElementsByClassName("cad");if(switch_usd&&switch_cad&&(switch_usd.addEventListener("click",()=>{switch_usd.classList.remove("text-white"),switch_usd.classList.add("text-purple-700"),switch_cad.classList.remove("text-purple-700"),switch_cad.classList.add("text-white");for(var e=0;e<elementsUSD.length;e++)elementsUSD[e].classList.remove("hidden"),elementsUSD[e].classList.add("block"),elementsCAD[e].classList.add("hidden"),elementsCAD[e].classList.remove("block")}),switch_cad.addEventListener("click",()=>{switch_usd.classList.remove("text-purple-700"),switch_usd.classList.add("text-white"),switch_cad.classList.remove("text-white"),switch_cad.classList.add("text-purple-700");for(var e=0;e<elementsCAD.length;e++)elementsCAD[e].classList.remove("hidden"),elementsCAD[e].classList.add("block"),elementsUSD[e].classList.add("hidden"),elementsUSD[e].classList.remove("block")})),document.querySelector(".resolved")){const f=new Siema({selector:".resolved",onChange:printSlideIndexRes}),g=document.querySelector(".resolved-prev"),h=document.querySelector(".resolved-next");g.addEventListener("click",()=>f.prev()),h.addEventListener("click",()=>f.next());var resolvedStep=[];function printSlideIndexRes(e){toggleStateRes(this.currentSlide,!0)}function toggleStateRes(t,e=!1){if(!0===e)for(let e=0;e<5;e++)t==e?(resolvedStep[e].classList.add("bg-purple-700"),resolvedStep[e].classList.remove("bg-slate-300")):(resolvedStep[e].classList.add("bg-slate-300"),resolvedStep[e].classList.remove("bg-purple-700"))}resolvedStep[0]=document.querySelector(".resolved-step-0"),resolvedStep[1]=document.querySelector(".resolved-step-1"),resolvedStep[2]=document.querySelector(".resolved-step-2"),resolvedStep[3]=document.querySelector(".resolved-step-3"),resolvedStep[4]=document.querySelector(".resolved-step-4")}if(document.querySelector(".testimonials")){const m=new Siema({selector:".testimonials",onChange:printSlideIndexTes}),n=document.querySelector(".testimonials-prev"),o=document.querySelector(".testimonials-next");n.addEventListener("click",()=>m.prev()),o.addEventListener("click",()=>m.next());var testimonialsStep=[];function printSlideIndexTes(e){toggleStateTes(this.currentSlide,!0)}function toggleStateTes(t,e=!1){if(!0===e)for(let e=0;e<4;e++)t==e?(testimonialsStep[e].classList.add("bg-purple-700"),testimonialsStep[e].classList.remove("bg-slate-300")):(testimonialsStep[e].classList.add("bg-slate-300"),testimonialsStep[e].classList.remove("bg-purple-700"))}testimonialsStep[0]=document.querySelector(".testimonials-step-0"),testimonialsStep[1]=document.querySelector(".testimonials-step-1"),testimonialsStep[2]=document.querySelector(".testimonials-step-2"),testimonialsStep[3]=document.querySelector(".testimonials-step-3"),testimonialsStep[4]=document.querySelector(".testimonials-step-4")}if(document.querySelector(".moozoomapp")){const t=new Siema({selector:".moozoomapp",onChange:printSlideIndex});var challenges=[];function printSlideIndex(e){toggleState(this.currentSlide,!0)}function toggleState(t,e=!1){if(!0===e)for(let e=0;e<4;e++)t==e?(challenges[e].classList.add("text-black"),challenges[e].classList.remove("text-slate-400")):(challenges[e].classList.add("text-slate-400"),challenges[e].classList.remove("text-black"))}challenges[0]=document.querySelector(".btn0-moozoomapp"),challenges[1]=document.querySelector(".btn1-moozoomapp"),challenges[2]=document.querySelector(".btn2-moozoomapp"),challenges[3]=document.querySelector(".btn3-moozoomapp"),challenges[0].addEventListener("click",()=>t.goTo(0,toggleState(0,!0))),challenges[1].addEventListener("click",()=>t.goTo(1,toggleState(1,!0))),challenges[2].addEventListener("click",()=>t.goTo(2,toggleState(2,!0))),challenges[3].addEventListener("click",()=>t.goTo(3,toggleState(3,!0)))}if(document.querySelector(".activities")){const y=new Siema({selector:".activities",onChange:printSlideIndexAct}),z=document.querySelector(".activity-prev"),A=document.querySelector(".activity-next"),B=document.querySelector(".activity-prev-one"),C=document.querySelector(".activity-next-one");z.addEventListener("click",()=>y.prev()),A.addEventListener("click",()=>y.next()),B.addEventListener("click",()=>y.prev()),C.addEventListener("click",()=>y.next());var activities=[],activitiesMob=(activities[0]=document.querySelector(".activity-1"),activities[1]=document.querySelector(".activity-2"),activities[2]=document.querySelector(".activity-3"),activities[3]=document.querySelector(".activity-4"),activities[4]=document.querySelector(".activity-5"),activities[5]=document.querySelector(".activity-6"),activities[0].addEventListener("click",()=>y.goTo(0,toggleStateAct(0,!0))),activities[1].addEventListener("click",()=>y.goTo(1,toggleStateAct(1,!0))),activities[2].addEventListener("click",()=>y.goTo(2,toggleStateAct(2,!0))),activities[3].addEventListener("click",()=>y.goTo(3,toggleStateAct(3,!0))),activities[4].addEventListener("click",()=>y.goTo(4,toggleStateAct(4,!0))),activities[5].addEventListener("click",()=>y.goTo(5,toggleStateAct(5,!0))),[]);function printSlideIndexAct(e){toggleStateAct(this.currentSlide,!0)}function toggleStateAct(t,e=!1){if(!0===e)for(let e=0;e<6;e++)if(t==e){activities[e].classList.add("active-exercise"),activities[e].classList.add("styles_exercise__2F4q0"),activitiesMob[e].classList.add("bg-purple-700"),activitiesMob[e].classList.remove("bg-slate-300");var s="activity-img-"+(e+1);console.log({imageId:s});const i=document.getElementById(s);console.log(site.main_home+"/wp-content/uploads/2022/02/vector-activities-0"+(e+1)+"-on.svg"),i.src=site.main_home+"/wp-content/uploads/2022/02/vector-activities-0"+(e+1)+"-on.svg"}else{activities[e].classList.remove("active-exercise"),activities[e].classList.remove("styles_exercise__2F4q0"),activitiesMob[e].classList.add("bg-slate-300"),activitiesMob[e].classList.remove("bg-purple-700");s="activity-img-"+(e+1);console.log({imageId:s});const c=document.getElementById(s);console.log(site.main_home+"/wp-content/uploads/2022/02/vector-activities-0"+(e+1)+"-off.svg"),c.src=site.main_home+"/wp-content/uploads/2022/02/vector-activities-0"+(e+1)+"-off.svg"}}activitiesMob[0]=document.querySelector(".rounded-activity-1"),activitiesMob[1]=document.querySelector(".rounded-activity-2"),activitiesMob[2]=document.querySelector(".rounded-activity-3"),activitiesMob[3]=document.querySelector(".rounded-activity-4"),activitiesMob[4]=document.querySelector(".rounded-activity-5"),activitiesMob[5]=document.querySelector(".rounded-activity-6")}function handleSelectChange(e){e=e.target.value;window.location.href=site.home_url+"/"+e}function selectorPricing(e,t){selectorPricingClassSwitcher(e.target.value,t=t)}function selectorPricingClassSwitcher(e,t){for(var s=1;s<=t;s++){var i=document.getElementById("pricing-"+s),c=document.getElementById("pricing-header-"+s);s==e?(i.classList.remove("hidden"),i.classList.add("block"),c.classList.add("text-purple-700"),c.classList.add("bg-white"),c.classList.add("font-bold")):(i.classList.remove("block"),i.classList.add("hidden"),c.classList.remove("text-purple-700"),c.classList.remove("bg-white"),c.classList.remove("font-bold"))}}function selectFeeling(e){for(var t=[],s=1;s<=5;s++)t[s]=document.getElementById("how-do-you-feel-"+s),s==e?(t[s].classList.add("shadow"),t[s].classList.add("border"),t[s].classList.add("border-purple-light")):(t[s].classList.remove("shadow"),t[s].classList.remove("border"),t[s].classList.remove("border-purple-light"))}function contactFormSubmit(){$("#contactForm").validate(),$.ajax({type:"POST",url:"https://my.moozoomapp.com/api/contact-us",data:{firstName:$(".firstname").val(),lastName:$(".lastname").val(),email:$(".email").val(),phone:$(".phone").val(),contactMethod:"email",message:$(".message").val(),type:"sales",emotion:"sad"},success:function(e){$(".success_msg").empty().append("<h3>Thank you for getting in touch! </h3>"),$(".error_msg").css("display","none")},error:function(e){$(".error_msg").empty().append("<h3>Something Went  </h3>"),$(".error_msg").css("display","block")}})}