(()=>{window.addEventListener("load",function(){let l=document.querySelector("#primary-menu");document.querySelector("#primary-menu-toggle").addEventListener("click",function(e){e.preventDefault(),l.classList.toggle("hidden")});var m=new Swiper(".mySwiper",{slidesPerView:1,spaceBetween:16,loop:!0,autoplay:{delay:3e3},breakpoints:{750:{slidesPerView:2.5}}});let o=document.querySelector("#menu-header-navigation"),r=document.querySelectorAll("section"),d=document.querySelector("#menu-header-navigation-1");function a(e){e.innerHTML="",r.forEach(i=>{let c=i.dataset.id,u=i.id,s=c.replace(/-/g," "),t=document.createElement("li"),n=document.createElement("a");n.href=`#${u}`,n.innerText=s,t.appendChild(n),t.classList.add("lg:mx-4"),e.appendChild(t)})}a(o),a(d)});})();