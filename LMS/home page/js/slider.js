const slide = document.getElementById('glide');

new Glide(slide, {
    type: "carousel",
    startAt: 0,
    preView: 1,
    animationDuration: 800,
    animationTimingFuc: "linear",
}).mount();
