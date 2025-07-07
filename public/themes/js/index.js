document.addEventListener("DOMContentLoaded", function () {
  new Swiper(".categories-swiper", {
    slidesPerView: "auto",
    spaceBetween: 8,
    freeMode: true,
  });
});

document.addEventListener("DOMContentLoaded", function () {
  new Swiper(".whatsnew-swiper", {
    slidesPerView: "auto",
    spaceBetween: 8,
    freeMode: true,
  });
});

document.addEventListener("DOMContentLoaded", function () {
  new Swiper(".product-swiper", {
    slidesPerView: "auto",
    spaceBetween: 8,
    freeMode: true,
  });
});

document.addEventListener("DOMContentLoaded", function () {
    // COLOR BUTTONS
    const colorButtons = document.querySelectorAll(".color-btn");
    if (colorButtons.length > 0) {
        // Set default active
        const firstColor = colorButtons[0];
        firstColor.classList.remove("ring-[0.3px]");
        firstColor.classList.add("ring-1");

        colorButtons.forEach((btn) => {
            btn.addEventListener("click", () => {
                colorButtons.forEach((b) => b.classList.remove("ring-1"));
                colorButtons.forEach((b) => b.classList.add("ring-[0.3px]"));
                btn.classList.remove("ring-[0.3px]");
                btn.classList.add("ring-1");
            });
        });
    }

    // SIZE BUTTONS
    const sizeButtons = document.querySelectorAll(".size-btn");
    if (sizeButtons.length > 0) {
        // Set default active
        const firstSize = sizeButtons[0];
        firstSize.classList.remove("text-[#08182F]", "border-[0.3px]", "border-[#08182F]");
        firstSize.classList.add("bg-[#08182F]", "text-white");

        sizeButtons.forEach((btn) => {
            btn.addEventListener("click", () => {
                sizeButtons.forEach((b) => {
                    b.classList.remove("bg-[#08182F]", "text-white");
                    b.classList.add("text-[#08182F]", "border-[0.3px]", "border-[#08182F]");
                });

                btn.classList.remove("text-[#08182F]", "border-[0.3px]", "border-[#08182F]");
                btn.classList.add("bg-[#08182F]", "text-white");
            });
        });
    }
});

