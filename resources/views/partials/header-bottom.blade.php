<section id="header-bottom">
    <div class="container">
        <div class="row py-3">
            <div class="col d-flex justify-content-between align-items-center">
                <button>SIGN-UP NOW!</button>

                <div class="d-flex align-items-center">
                    <span class="me-3 text-primary">FOLLOW US</span>
                    <div class="ms-box-image">
                        <img class="rounded" src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="Facebook">
                    </div>
                    <div class="ms-box-image">
                        <img class="rounded" src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="Twitter">
                    </div>
                    <div class="ms-box-image">
                        <img class="rounded" src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="YouTube">
                    </div>
                    <div class="ms-box-image">
                        <img class="rounded" src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="Pinterest">
                    </div>
                    <div class="ms-box-image">
                        <img class="rounded" src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="Maps">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style scoped lang="scss">
    #header-bottom{
        background-color: #303030;

        button{
            border: 2px solid #0282f9;
            background-color: #303030;
            color: white;
            padding: 5px;
        }

        .ms-box-image{
            width: 30px;
            height: 30px;
            margin-right: 20px;
            
        }
    }
</style>