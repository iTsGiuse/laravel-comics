<section id="footer-top">
    <div class="container d-flex">
        <div class="row my-3">
            <div class="col">
                <ul>
                    <li class="fs-4 text-white">DC COMICS</li>
                    <li>prova</li>
                    <li>prova</li>
                    <li>prova</li>
                    <li>prova</li>
                    <li>prova</li>
                    <li>prova</li>
                </ul>
                <ul>
                    <li class="fs-4 text-white">SHOP</li>
                    <li>prova</li>
                    <li>prova</li>
                </ul>
            </div>
            <div class="col">
                <ul>
                    <li class="fs-4 text-white">DC</li>
                    <li>prova</li>
                    <li>prova</li>
                    <li>prova</li>
                </ul>
            </div>
            <div class="col">
                <ul>
                    <li class="fs-4 text-white">SITES</li>
                    <li>prova</li>
                    <li>prova</li>
                    <li>prova</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col ms-5">
                <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="logo">
            </div>
        </div>
    </div>
</section>

<style scoped lang="scss">
    #footer-top{
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        overflow-y: hidden;
        background-image: url({{ Vite::asset('resources/img/footer-bg.jpg') }});
        
        .row{
            width: 50%;
            position: relative;
            z-index: 0;
            
            li{
                color: grey
            }

            ul:hover, li:hover{
                color: white
            }

            img{
                position: absolute;
                z-index: 1;
                width: 75%;
                top: -55px;
                left: 150px;
            }
        
        }

     
    }
</style>