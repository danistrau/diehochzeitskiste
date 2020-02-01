@section('title', '404')
<main>
    <section class="main-head">
        <div class="main">
            <div class="errorpage">
                <div class="main-text errortext">
                    <h1 class="subheader errorheader">404</h1>
                    <h2>Es tut uns Leid!</h2>
                    <p>Diese Seite existiert nicht.</p>
                    <a href="{{ url('/') }}" class="button"
                        >Zurück zur Startseite</a
                    >
                </div>
            </div>
        </div>
    </section>
    <style>
        @font-face {
            font-family: "myfont";
            src: url("../font/always\ forever.ttf") format("truetype");
        }

        body {
            font-family: "Open Sans", sans-serif;
            font-size: 1.3rem;
            max-width: 1900px;
            margin: 0 auto;
            background-color: white;
        }

        h1 {
            font-size: 80px;
        }


        .errorpage {
            background: url(../assets/404.jpg);
            background-size: cover;
            background-position: center;
            background-blend-mode: soft-light;
            max-width: inherit;
            height: 100vh;
        }

        .errortext {
            font-size: larger;
            padding-top: 400px;
        }
       

        button {
            z-index: 10;
            border: 2px solid #3a3a3a;
            background-color: #3a3a3a;
            color: #f1e5e6;
            text-align: center;
            align-self: center;
            cursor: pointer;
            transition: 0.3s ease-in-out;
            font-size: 1.3rem;
            padding: 1rem 2rem;
            margin: 1rem;
        }
        .button {
            z-index: 10;
            border: 2px solid #3a3a3a;
            background-color: #3a3a3a;
            color: #f1e5e6;
            text-align: center;
            align-self: center;
            cursor: pointer;
            transition: 0.3s ease-in-out;
            font-size: 1.3rem;
            padding: 1rem 2rem;
            margin: 1rem;
        }

        button:hover {
            color: #3a3a3a;
            background-color: #f1e5e6;
            border: 2px solid #f1e5e6;
            transform: scale(1.1);
        }

        button:focus {
            transform: scale(1.1);
        }

        .main-text {
            text-align: center;
        }

        a {
            text-decoration: none;
        }
    </style>
</main>
