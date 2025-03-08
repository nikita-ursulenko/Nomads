document.addEventListener('DOMContentLoaded', () => {
    const languageSwitcher = document.querySelector('.language-switcher');
    const langBtn = languageSwitcher.querySelector('.lang-btn');
    const langMenu = languageSwitcher.querySelector('.lang-menu');

    // Языки и их данные
    const languages = {
        ro: {
            code: 'ro',
            name: 'RO',
            flag: '/wp-content/themes/nomads/assets/images/ro.svg'
        },
        en: {
            code: 'en',
            name: 'EN',
            flag: '/wp-content/themes/nomads/assets/images/us.svg'
        }
    };

    let currentLang = 'ro';

    // Обработчик клика на кнопку
    langBtn.addEventListener('click', () => {
        languageSwitcher.classList.toggle('active');
    });

    // Обработчик выбора языка
    langMenu.addEventListener('click', (event) => {
        const selectedLang = event.target.closest('li');
        if (selectedLang) {
            const langCode = selectedLang.dataset.lang;
            if (langCode && langCode !== currentLang) {
                currentLang = langCode;
                updateLangUI(languages[langCode]);
                console.log(`Выбран язык: ${languages[langCode].name}`);
                languageSwitcher.classList.remove('active');
            }
        }
    });

    // Функция для обновления UI
    function updateLangUI(lang) {
        langBtn.querySelector('.lang-icon').src = lang.flag;
        langBtn.querySelector('.lang-text').textContent = lang.name;

        // Обновляем список языков (убираем текущий)
        langMenu.innerHTML = '';
        Object.values(languages).forEach((language) => {
            if (language.code !== currentLang) {
                langMenu.innerHTML += `
                    <li data-lang="${language.code}">
                        <img src="${language.flag}" alt="${language.name}"> ${language.name}
                    </li>
                `;
            }
        });
    }

    // Инициализация
    updateLangUI(languages[currentLang]);



    const menuToggle = document.querySelector('.menu-toggle');
    const menuItems = document.querySelector('.menu-items');

    // Открытие/закрытие меню по клику на кнопку
    menuToggle.addEventListener('click', () => {
        if (!menuItems.classList.contains('active')) {
            menuItems.classList.add('active');  // Открыть меню
            menuItems.classList.remove('hide'); // Удалить класс скрытия
        } else {
            menuItems.classList.add('hide'); // Запускаем анимацию скрытия
            setTimeout(() => {
                menuItems.classList.remove('active'); // Убираем активный класс после анимации
            }, 500); // Время должно совпадать с `transition` в CSS
        }
    });

    // Закрытие меню при клике на ссылку
    menuItems.addEventListener('click', (event) => {
        if (event.target.tagName === 'A') {
            menuItems.classList.add('hide');
            setTimeout(() => {
                menuItems.classList.remove('active');
            }, 500);
        }
    });

    // Закрытие при клике вне меню
    document.addEventListener('click', (event) => {
        if (!menuItems.contains(event.target) && !menuToggle.contains(event.target)) {
            if (menuItems.classList.contains('active')) {
                menuItems.classList.add('hide');
                setTimeout(() => {
                    menuItems.classList.remove('active');
                }, 500);
            }
        }
    });
});

document.querySelectorAll('.menu-items a').forEach(link => {
    link.addEventListener('click', function (e) {
        e.preventDefault(); // Отключаем стандартное поведение ссылки

        const targetId = this.getAttribute('href'); // Получаем ID секции
        const targetSection = document.querySelector(targetId);

        // Если секция найдена, прокручиваем к ней
        if (targetSection) {
            targetSection.scrollIntoView({
                behavior: 'smooth',  // Плавная прокрутка
                block: 'start'       // Прокрутка к началу секции
            });
        }

        // Закрываем меню (если нужно)
        document.querySelector('.menu-items').classList.remove('active');
    });
});

const backToTopBtn = document.querySelector('.back-to-top-button');
// Прокрутка вверх при нажатии на кнопку
backToTopBtn.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'  // Плавная прокрутка
    });
});