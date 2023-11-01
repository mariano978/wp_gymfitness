import PhotoSwipeLightbox from "./photoswipe-lightbox.esm.min.js";
const lightbox = new PhotoSwipeLightbox({
  gallery: "#gallery",
  children: "a",
  pswpModule: () => import("./photoswipe.esm.min.js"),
});
lightbox.init();

