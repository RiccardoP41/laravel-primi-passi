
        <header>
            <img src="https://cdn.shortpixel.ai/client/q_lossy,ret_img,w_250,h_145/https://www.lamolisana.it/wp-content/uploads/2020/05/marchio-sito-test.png" alt="">
            <nav>
                <ul>
                    <li><a href="{{ route("home") }}" class="link {{ (url()->current() == route("home")) ? " active" : "" }}">Home</a> </li>
                    <li><a href="{{ route("prodotti") }}" class="link {{ (url()->current() == route("prodotti")) ? " active" : "" }}">Prodotti</a> </li>
                    <li><a href="{{ route("contatti") }}" class="link {{ (url()->current() == route("contatti")) ? " active" : "" }}">Contatti</a> </li>
                </ul>
            </nav>
        </header>
