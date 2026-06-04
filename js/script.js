document.addEventListener("DOMContentLoaded", () => {
	const desktopMedia = window.matchMedia("(min-width: 861px)");

	document.querySelectorAll(".site-nav").forEach((nav) => {
		const toggleBtn = nav.querySelector(".nav-toggle");
		const collapsible = nav.querySelector(".nav-collapsible");

		if (!toggleBtn || !collapsible) {
			return;
		}

		const closeMenu = () => {
			nav.classList.remove("is-open");
			toggleBtn.setAttribute("aria-expanded", "false");
			toggleBtn.setAttribute("aria-label", "Ouvrir le menu");
		};

		const overideToggleBtn = () => {
			toggleBtn.setAttribute("aria-expanded", "false");
			toggleBtn.setAttribute("aria-label", "Ouvrir le menu");
		}

		const openMenu = () => {
			nav.classList.add("is-open");
			toggleBtn.setAttribute("aria-expanded", "true");
			toggleBtn.setAttribute("aria-label", "Fermer le menu");
		};

		toggleBtn.addEventListener("click", () => {
			if (nav.classList.contains("is-open")) {
				closeMenu();
			} else {
				openMenu();
			}
		});

		collapsible.querySelectorAll("a").forEach((link) => {
			link.addEventListener("click", () => {
				if (!desktopMedia.matches) {
					closeMenu();
				}
			});
		});

		document.addEventListener("click", (event) => {
			if (!desktopMedia.matches && !nav.contains(event.target)) {
				closeMenu();
			}
		});

		document.addEventListener("keydown", (event) => {
			if (event.key === "Escape") {
				closeMenu();
			}
		});

		desktopMedia.addEventListener("change", (event) => {
			if (event.matches) {
				closeMenu();
			}
		});

	});
});
