<div class="container">
    <div class="row flex-wrap">
        @foreach ($film as $single_film)
        <div class="col-2 mt-5">
            <div class="card">
                <img src="{{$single_film['thumb']}}" class="card-img-top" alt="{{$single_film['title']}}">
                <div class="card-body text-center">
                    <h5 class="card-title">{{$single_film['title']}}</h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<style scoped lang="scss">

    .card{
        border: 1px solid transparent !important;

        img{
            height: 250px;
            width: 100%;
        }
    }
</style>