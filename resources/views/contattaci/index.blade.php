<x-layout>

    <header class="bg-contact container-fluid d-flex justify-content-center align-items-center bg-warning">
        <div class="">
            <h1 class="title ">CONTATTACI</h1>
            <h3 class="pb-4">Il nostro team è a tua disposizione per aiutarti ogni giorno!</h3>
            <div class="d-flex justify-content-center">
    </header>

    <section class="pb-5">
        <div class="container p-4">
            <div class="row">
                <div class="col-12 col-md-12 d-flex justify-content-center pb-4">
                    <h2 class="display-6 pb-5">Contatti</h2>
                </div>
                <div class="col-12 col-md-3">
                    <ul>
                        <p class="fs-5 pb-2">SEDE LEGALE</p>
                        <hr class="w-50">
                        <li class="d-flex fw-light py-3"><i class="bi bi-house-door-fill pe-4"></i>
                            Verona
                        </li>
                        <li class="d-flex fw-light py-2"><i class="bi bi-telephone pe-4"></i>
                            045 610 66 81
                        </li>
                        <li class="d-flex fw-light py-2"><i class="bi bi-telephone pe-4"></i>
                            045 610 15 67
                        </li>
                        <a href="">
                            <li class="d-flex fw-bold py-2"><i class="bi bi-envelope pe-4"></i>
                                impresa@edilesnc.it
                            </li>
                        </a>
                        <a href="">
                            <li class="d-flex fw-bold py-2"><i class="bi bi-facebook pe-4"></i>
                                Seguici su Facebook
                            </li>
                        </a>
                        <li class="d-flex fw-light py-2"><i class="bi bi-person-vcard pe-4"></i>
                            P.IVA: 04637198250
                        </li>
                    </ul>
                </div>

                <div class="col-12 col-md-9 d-flex flex-column justify-content-center align-items-center">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <h4 class="text-center fw-bold">Mandaci un messaggio</h4>
                        <hr class="w-25">
                        <p class="col-12 col-md-10 text-center fw-light ">Hai delle domande? Hai un progetto? Sei interessato a ricevere un preventivo o semplicemente desideri ricevere maggiori informazioni sui nostri servizi? Compila il modulo contatti presente qui di seguito ed inviaci un messaggio. Ti risponderemo al più presto possibile! Saremo lieti di fornirti tutte le risposte che desideri!</p>
                    </div>
                    <form class="col-12 col-md-8 p-5">
                        <div class="d-flex justify-content-between">
                            <div class="">
                                <label for="inputName" class="form-label">Nome*</label>
                                <input type="text" class="form-control" id="inputName" aria-describedby="nameHelp">
                            </div>
                            <div class="">
                                <label for="inputSurname" class="form-label">Cognome*</label>
                                <input type="text" class="form-control" id="inputSurname"
                                    aria-describedby="surnameHelp">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="InputEmail" class="form-label">Email address*</label>
                            <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="inputTitle" class="form-label">Oggetto</label>
                            <input type="text" class="form-control" id="inputTitle">
                        </div>
                        <div class="mb-3">
                            <label for="inputDescription" class="form-label">Descrizione</label>
                            <input type="text" class="form-control" id="inputDescription">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="inputCheck">
                            <label class="form-check-label fw-light" for="inputCheck">Ho preso visione dell'informativa
                                sulla
                                Privacy ed autorizzo il trattamento dei dati personali (D.Lgs 193/03) *</label>
                        </div>
                        <button type="submit" class="button-84">Invia</button>
                    </form>
                </div>

            </div>
        </div>


    </section>

</x-layout>
