let storedTheme = Cookies.get("theme");
let optional;
let googleMaps;

window.addEventListener('load', () => {
    init();
});

function init() {
    loadSettings();
    listenCookieButton();
    setSettings();
    setTheme(getTheme());
    listenThemeButton();
}

function loadSettings() {
    if (Cookies.get("firstVisit") === "false") {
        optional = Cookies.get("optionalCookies") === "true";
    } else {
        showCookieBanner();
    }
    if (optional) {
        $("#cookieBannerZweiteCheckbox").prop("checked", true);
    }
}

function showCookieBanner() {
    Cookies.set("firstVisit", "false", {expires: 365});
    $("#cookieBanner").modal("show");
}

function listenCookieButton() {
    $("#btnCookies").click(function () {
        optional = !!$("#cookieBannerZweiteCheckbox").is(':checked');
        setSettings();
    });
}

function setSettings() {
    if (optional) {
        setTheme(Cookies.get("theme"));
        Cookies.set("optionalCookies", "true", {expires: 365});
        Cookies.set("theme", getTheme(), {expires: 365});
    } else {
        Cookies.remove("theme");
        Cookies.remove("optionalCookies");
    }
}

function getTheme() {
    if (storedTheme != null) {
        return storedTheme;
    }
    storedTheme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
    return storedTheme;
}

function setTheme(theme) {
    if (theme === "light") {
        storedTheme = "light";
        $("#html").attr("data-bs-theme", "light");
        $("#svgThemeW").after("<img src=\"icons/darkMode.svg\" alt=\"Dark Mode\" id=\"svgThemeD\" onload=\"SVGInject(this)\">");
        $("#svgThemeW").remove();
    }
    if (theme === "dark") {
        storedTheme = "dark";
        $("#html").attr("data-bs-theme", "dark");
        $("#svgThemeD").after("<img src=\"icons/lightMode.svg\" alt=\"Light Mode\" id=\"svgThemeW\" onload=\"SVGInject(this)\">");
        $("#svgThemeD").remove();
    }
}

function listenThemeButton() {
    $("#btnTheme").click(function () {
        if (getTheme() === "dark") {
            setTheme("light");
            if (optional === true) {
                Cookies.set("theme", "light", {expires: 365});
            }
        } else {
            setTheme("dark");
            if (optional === true) {
                Cookies.set("theme", "dark", {expires: 365});
            }
        }
    });
}


