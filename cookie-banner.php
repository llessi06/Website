<div class="modal fade" id="cookieBanner" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Cookies</h1>
                <img src="icons/cookies.svg" alt="Cookies" id="cookieBannerSymbol" height="48px"
                     onload="SVGInject(this)">
            </div>
            <div class="modal-body">
                Wir verwenden Cookies um Ihre Erfahrung auf dieser Website zu verbessern. <br> <br>
                <ul class="list-group">
                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="" id="cookieBannerErsteCheckbox"
                               disabled checked>
                        <label class="form-check-label stretched-link" for="cookieBannerErsteCheckbox">Erforderliche
                            Cookies</label>
                        <p>
                            Erforderliche Cookies sind nicht deaktivierbar und stellen die Sicherheit der Website
                            sicher.
                        </p>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value=""
                               id="cookieBannerZweiteCheckbox">
                        <label class="form-check-label stretched-link" for="cookieBannerZweiteCheckbox">Optionale
                            Cookies</label>
                        <p>
                            Mit Ihrer Zustimmung werden Funktionen wie die Speicherung des gewählten Farbmodus
                            aktiviert.
                        </p>
                    </li>
                </ul>
            </div>
            <div class="modal-footer">
                <button id="btnCookies" type="button" class="btn btn-primary" data-bs-dismiss="modal">Auswahl
                    speichern
                </button>
            </div>
        </div>
    </div>
</div>