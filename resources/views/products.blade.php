@include('layouts.header', ['title' => 'Products'])

<div class="container text-center mt-3 p-4 bg-white">
    <h1>List Menu</h1>
</div>
<div class="container" id="burger">
    <div class="row" style="margin-top: 30px;">
        <div class="col-md-3 py-3 py-md-0">
            <div class="card">
                <img src="/images/brown-sugar-milk-tea.png" alt="">
                <div class="card-body">
                    <h3>Brown Sugar Milk Tea</h3>
                    <h5>Rp 24.000 <span><i class="fa-solid fa-basket-shopping"></i></span></h5>
                </div>
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
            <div class="card">
                <img src="/images/chatime-roasted-tea.png" alt="">
                <div class="card-body">
                    <h3>Chatime Roasted Tea</h3>
                    <h5>Rp 19.000 <span><i class="fa-solid fa-basket-shopping"></i></span></h5>
                </div>
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
            <div class="card">
                <img src="/images/ct-roasted-milk-tea-gb-f.png" alt="">
                <div class="card-body">
                    <h3>Roasted Milk Tea Gede Banget 1L</h3>
                    <h5>Rp 65.000 <span><i class="fa-solid fa-basket-shopping"></i></span></h5>
                </div>
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
            <div class="card">
                <img src="/images/mango-smoothie.png" alt="">
                <div class="card-body">
                    <h3>Mango Smoothie</h3>
                    <h5>Rp 25.000 <span><i class="fa-solid fa-basket-shopping"></i></span></h5>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 30px;">
        <div class="col-md-3 py-3 py-md-0">
            <div class="card">
                <img src="/images/matcha-mousse.png" alt="">
                <div class="card-body">
                    <h3>Matcha Mousse</h3>
                    <h5>Rp 26.000 <span><i class="fa-solid fa-basket-shopping"></i></span></h5>
                </div>
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
            <div class="card">
                <img src="/images/popcan-black-tea-with-lemon.png" alt="">
                <div class="card-body">
                    <h3>Popcan Black Tea with Lemon</h3>
                    <h5>Rp 28.000 <span><i class="fa-solid fa-basket-shopping"></i></span></h5>
                </div>
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
            <div class="card">
                <img src="/images/popcan-choco-mousse.png" alt="">
                <div class="card-body">
                    <h3>Popcan Choco Mousse</h3>
                    <h5>Rp 33.000 <span><i class="fa-solid fa-basket-shopping"></i></span></h5>
                </div>
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
            <div class="card">
                <img src="/images/grass-jelly-with-fresh-milk.png" alt="">
                <div class="card-body">
                    <h3>Grass Jelly with Fresh Milk</h3>
                    <h5>Rp 26.000 <span><i class="fa-solid fa-basket-shopping"></i></span></h5>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')
