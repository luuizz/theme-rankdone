// Botão Mobile

const btnMobile = document.getElementById("js-btn-mobile");

btnMobile.addEventListener("click", () => {
  btnMobile.classList.toggle("is-active");
  document.documentElement.classList.toggle("menu-opened");
});

// Swiper Seção de posts relacionados

var slidePostRel = new Swiper(".swiper-posts-rel", {
  slidesPerView: 2,
  spaceBetween: 32,
  pagination: {
    el: ".swiper-posts-rel .navigation .swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-posts-rel .navigation .btn-next",
    prevEl: ".swiper-posts-rel .navigation .btn-prev",
  },
  speed: 600,
  breakpoints: {
    320: {
      slidesPerView: 1.1,
      spaceBetween: 15,
    },
    500: {
      slidesPerView: 1.5,
    },
    768: {
      slidesPerView: 2.5,
    },
    1100: {
      slidesPerView: 2,
      spaceBetween: 32,
    },
  },
});

// Seção de categorias

var slidesCategories = new Swiper(".swiper-filter", {
  slidesPerView: "auto",
  speed: 500,
  navigation: {
    nextEl: ".s-categories .top-area .arrows .next-filter",
    prevEl: ".s-categories .top-area .arrows .prev-filter",
  },
});

// Tópicos por navegação

const listTopics = document.querySelector(".js-topics");
const topics = document.querySelectorAll(
  ".s-content-post .container .right-content .content h2"
);
const parentDiv = document.querySelector(
  ".s-content-post .container .left-content"
);

if (listTopics && parentDiv) {
  const filteredTopics = Array.from(topics).filter(
    (topic) => topic.textContent.trim() !== ""
  );
  topics.forEach((topic) => {
    if (topic.textContent.trim() === "") {
      topic.parentNode.removeChild(topic);
    }
  });
  filteredTopics.forEach((topic) => {
    let listElement = document.createElement("li");
    listTopics.appendChild(listElement);

    let ancorTopic = document.createElement("a");
    ancorTopic.setAttribute("href", "#");
    listElement.appendChild(ancorTopic);

    let textAncor = document.createElement("span");
    textAncor.textContent = topic.textContent;
    ancorTopic.appendChild(textAncor);
  });

  const allTopics = document.querySelectorAll(".js-topics li a");
  if (allTopics.length > 0) {
    allTopics[0].classList.add("active");
  }

  // Função que retorna a posição do elemento
  function offset(el) {
    if (document) {
      const rect = el.getBoundingClientRect();
      const scrollLeft =
        window.pageXOffset || document.documentElement.scrollLeft;
      const scrollTop =
        window.pageYOffset || document.documentElement.scrollTop;
      return { top: rect.top + scrollTop, left: rect.left + scrollLeft };
    }
  }

  function handleScrollTop(position) {
    if (document) {
      const topics = document.querySelectorAll(
        ".s-content-post .container .right-content .content h2"
      )[position];
      window.scrollTo({
        behavior: "smooth",
        left: 0,
        top: offset(topics).top - 90,
      });
    }
  }

  allTopics.forEach((item, index) => {
    item.addEventListener("click", (event) => {
      event.preventDefault();
      allTopics.forEach((all) => all.classList.remove("active"));
      item.classList.add("active");
      handleScrollTop(index);
    });
  });

  // Verifica a altura do elemento pai e adiciona a classe ao ul se necessário
  function checkParentHeight() {
    if (parentDiv.offsetHeight > 692) {
      listTopics.classList.add("scroll-active");
    } else {
      listTopics.classList.remove("scroll-active");
    }
  }

  // Verifica a altura inicial
  checkParentHeight();

  // Adiciona um listener para redimensionamento da janela
  window.addEventListener("resize", checkParentHeight);
}

// Dropdown de filtro

const btnDropDown = document.querySelector(".js-dropdown-filter");

if (btnDropDown) {
  function toggleDropdown(event) {
    if (event.target.closest(".js-dropdown-filter")) {
      btnDropDown.classList.toggle("active");
    } else {
      btnDropDown.classList.remove("active");
    }
  }

  document.addEventListener("click", toggleDropdown);
}
