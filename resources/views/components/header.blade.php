<h1>Componente Header</h1>

<div id="external">
    <div class="container py-3 d-flex justify-content-between">
        <figure>
            <img src="../assets/img/dc-logo.png" alt="Header Logo" width="70">
        </figure>
        <nav class="d-flex align-items-center">
            <ul class="d-flex gap-3 text-uppercase">
                <li v-for= "(elements, index) in navElements" :key="index">
                    <a :href="elements.link"> {{ elements.name }} </a>
                </li>
            </ul>
        </nav>
    </div>

</div>
<nav>
    <ul>
        <li><a href="{{ route('homePage') }}">Home</a></li>
        <li><a href="{{ route('aboutPage') }}">About</a></li>
    </ul>
</nav>
