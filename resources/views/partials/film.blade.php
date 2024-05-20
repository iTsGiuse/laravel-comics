<section id="film">
    <div class="container">
        <div class="row flex-wrap pb-5">
            @foreach ($film as $single_film)
            <div class="col-2 mt-5">
                <div class="card">
                    <img src="{{$single_film['thumb']}}" class="card-img-top" alt="{{$single_film['title']}}">
                    <div class="card-body text-center text-white">
                        <h5 class="card-title">{{$single_film['title']}}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<style scoped lang="scss">
    #film{
        background-color: #1c1c1c;
    }
    .card{
        border: 1px solid transparent !important;
        background-color: transparent !important;

        img{
            height: 250px;
            width: 100%;
        }
    }
</style>