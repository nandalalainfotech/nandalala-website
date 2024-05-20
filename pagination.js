// const galleryitemBox = document.querySelector("itemBox").children;
// const prev = document.querySelector(".prev");
// const next = document.querySelector(".next");
// const page = document.querySelector(".page-num");
// const maxItem = 8;
// let index = 1;

// const pagination = Math.ceil(galleryitemBox.length / maxItem);
// console.log(pagination);

// prev.addEventListener("click", function () {
//   index--;
//   check();
//   showItems();
// });
// next.addEventListener("click", function () {
//   index++;
//   check();
//   showItems();
// });

// function check() {
//   if (index == pagination) {
//     next.classList.add("disabled");
//   } else {
//     next.classList.remove("disabled");
//   }

//   if (index == 1) {
//     prev.classList.add("disabled");
//   } else {
//     prev.classList.remove("disabled");
//   }
// }

// function showItems() {
//   for (let i = 0; i < galleryitemBox.length; i++) {
//     galleryitemBox[i].classList.remove("show");
//     galleryitemBox[i].classList.add("hide");

//     if (i >= index * maxItem - maxItem && i < index * maxItem) {
//       // if i greater than and equal to (index*maxItem)-maxItem;
//       // means  (1*8)-8=0 if index=2 then (2*8)-8=8
//       galleryitemBox[i].classList.remove("hide");
//       galleryitemBox[i].classList.add("show");
//     }
//     page.innerHTML = index;
//   }
// }

// window.onload = function () {
//   showItems();
//   check();
// };
