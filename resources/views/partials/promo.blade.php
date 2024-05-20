<section id="promo">
    <div class="container">
        <div class="row py-3">
            <div class="col">
                <div class="d-flex justfy-content-between align-items-center">
                    <div class="ms-box-image">
                        <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                    </div>
                    <span>DIGITAL COMICS</span>
                </div>
            </div>
            <div class="col">
                <div class="d-flex align-items-center">
                    <div class="ms-box-image">
                        <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                    </div>
                    <span>DC MERCHANDISE</span>
                </div>
            </div>
            <div class="col">
                <div class="d-flex align-items-center">
                    <div class="ms-box-image">
                        <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                    </div>
                    <span>SUBSCRIPTIONS</span>
                </div>
            </div>
            <div class="col">
                <div class="d-flex align-items-center">
                    <div class="ms-box-image">
                        <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                    </div>
                    <span>COMIC SHOP LOCATOR</span>
                </div>
            </div>
            <div class="col">
                <div class="d-flex align-items-center">
                    <div class="ms-box-image">
                        <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                    </div>
                    <span>DC POWER VISA</span>
                </div>
            </div>
        </div>
    </div>
</section>

<style scoped lang="scss">
    #promo{
        background-color: blue
    }
    span{
        color: white;
        margin-left: 5px;
    }
    .ms-box-image{
        width: 50px;
        height: 50px;

        img{
            width: 100% !important;
            height: 100% !important;
            object-fit: contain;
        }
    }
</style>