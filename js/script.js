const tp_obj = {
  phone_menu: function () {
    const mainMenu = document.querySelectorAll(".tp-main-menu");

    mainMenu.forEach((menu) => {
      // Toggle mobile menu on phone icon click
      menu.addEventListener("click", function (e) {
        if (e.target.closest(".phone_menu")) {
          e.stopPropagation();
          const phoneIcon = e.target.closest(".phone_menu");
          phoneIcon.classList.toggle("ltm_icon_active");

          const tpMenu = menu.querySelector(".tp-menu");
          if (phoneIcon.classList.contains("ltm_icon_active")) {
            tpMenu.classList.add("tp-mainmenu-mobile");
          } else {
            tpMenu.classList.remove("tp-mainmenu-mobile");
          }
        }

        // Toggle phone dropdown
        if (e.target.closest(".tp_phone_dropdown")) {
          const dropdown = e.target.closest(".tp_phone_dropdown");
          const hasSub = dropdown.closest("li.has-sub");
          const subMenu = hasSub.querySelector("ul");

          if (dropdown.classList.contains("active")) {
            dropdown.classList.remove("active", "fa-chevron-up");
            dropdown.classList.add("fa-chevron-down");
            subMenu.style.display = "none";
          } else {
            dropdown.classList.add("active", "fa-chevron-up");
            dropdown.classList.remove("fa-chevron-down");
            subMenu.style.display = "block";
          }
        }
      });
    });

    // Click outside to close menu
    document.addEventListener("click", function (e) {
      const isInsideMenu =
        e.target.closest(".tp-main-menu") ||
        e.target.closest(".tp-menu") ||
        e.target.closest(".tagpoint-wrap-logo");

      if (!isInsideMenu) {
        document.querySelectorAll(".tp-menu").forEach((menu) => {
          menu.classList.remove("tp-mainmenu-mobile");
        });

        document.querySelectorAll(".phone_menu").forEach((icon) => {
          icon.classList.remove("ltm_icon_active");
        });
      }
    });
  },
};

// Call the function
tp_obj.phone_menu();
